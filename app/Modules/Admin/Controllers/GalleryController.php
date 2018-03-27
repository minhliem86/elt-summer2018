<?php

namespace App\Modules\Admin\Controllers;

use App\Events\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryRepository;
use App\Repositories\PhotoRepository;
use App\Repositories\Eloquent\CommonRepository;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;

class GalleryController extends Controller
{
    protected $gallery;
    protected $photo;
    protected $common;
    protected $_original_path;
    protected $_resize_path;
    protected $_removePath;

    public function __construct(GalleryRepository $gallery, CommonRepository $common, PhotoRepository $photo)
    {
        $this->gallery = $gallery;
        $this->photo = $photo;
        $this->common = $common;
        $this->_original_path = env('ORIGINAL_PATH');
        $this->_resize_path = env('RESIZE_PATH');
        $this->_removePath = asset('public/upload/');

    }

    public function index()
    {
        return view('Admin::pages.gallery.index');
    }

    public function getData(Request $request)
    {
        $gal = $this->gallery->query(['id', 'title','img_url', 'order', 'status']);
        return Datatables::of($gal)
            ->addColumn('action', function($gal){
                return '<a href="'.route('admin.gallery.edit', $gal->id).'" class="btn btn-success d-inline-block btn-sm" title="Edit"><i class="fa fa-edit"></i> </a>
                <form method="POST" action=" '.route('admin.gallery.destroy', $gal->id).' " accept-charset="UTF-8" class="d-inline-block form">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="'.csrf_token().'">
                               <button class="btn  btn-danger btn-sm" type="button" attrid=" '.route('admin.gallery.destroy', $gal->id).' " onclick="confirm_remove(this);" title="Remove" > <i class="fa fa-trash"></i></button>
               </form>' ;
            })->editColumn('order', function($gal){
                return "<input type='text' name='order' class='form-control' data-id= '".$gal->id."' value= '".$gal->order."' />";
            })->editColumn('status', function($gal){
                $status = $gal->status ? 'checked' : '';
                $gal_id =$gal->id;
                return '
                  <label class="switch switch-icon switch-success-outline">
                    <input type="checkbox" name="status" class="switch-input" '.$status.' data-id="'.$gal_id.'">
                    <span class="switch-label" data-on="" data-off=""></span>
                    <span class="switch-handle"></span>
                </label>
              ';
            })
            ->editColumn('img_url', function($gal){
                return '<img class="img-fluid" style="max-width:120px;" src=" '.asset('public/upload/'.$gal->img_url). ' " />';
            })
            ->filter(function($query) use ($request){
                if (request()->has('name')) {
                    $query->where('title', 'like', "%{$request->input('name')}%");
                }
            })->setRowId('id')->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin::pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('img_url')){
            $img_url = $this->common->getPath($request->input('img_url'));
        }else{
            $img_url = '';
        }

        $data = [
            'title' => $request->input('title'),
            'img_url' => $img_url,
        ];

        $gallery = $this->gallery->create($data);

        if($request->has('photo_gallery')){
            $data_photo = [];
            foreach($request->file('thumb-input') as $k=>$thumb){
                $originalSize = $this->common->uploadImage($request, $thumb, $this->_original_path,$resize = false);
                $smallsize = $this->common->createThumbnail($originalSize,$this->_resize_path,100, 100);
                $order = $this->gallery->getOrder();
                $data = new \App\Models\Photo(
                    [
                        'img_url' => $this->common->getPath($originalSize, $this->_original_path, base_path($this->_original_path)),
                        'thumb_url' => $this->common->getPath($smallsize, $this->_resize_path, base_path($this->_resize_path)),
                        'order'=>$order,
                    ]
                );
                array_push($data_photo, $data);
            }

            $gallery->photos()->saveMany($data_photo);
        }

        return redirect()->route('admin.gallery.index')->with('success','Created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inst = $this->gallery->find($id);
        return view('Admin::pages.gallery.edit', compact('inst', 'center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img_url = $this->common->getPath($request->input('img_url'));
        $data = [
            'title' => $request->input('title'),
            'start' => Carbon::createFromFormat('d/m/Y H:i', $request->input('start_date')),
            'end' => Carbon::createFromFormat('d/m/Y H:i', $request->input('end_date')),
            'description' => $request->input('description'),
            'img_url' => $img_url,
            'center_id' => $request->input('center_id'),
        ];
        $this->gallery->update($data, $id);
        return redirect()->route('admin.gallery.index')->with('success', 'Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->gallery->delete($id);
        return redirect()->route('admin.gallery.index')->with('success','Deleted !');
    }

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $data = $request->arr;
            $response = $this->gallery->deleteAll($data);
            return response()->json(['msg' => 'ok']);
        }
    }

    /*UPDATE ORDER*/
    public function postAjaxUpdateOrder(Request $request)
    {
        if(!$request->ajax())
        {
            abort('404', 'Not Access');
        }else{
            $data = $request->input('data');
            foreach($data as $k => $v){
                $upt  =  [
                    'order' => $v,
                ];
                $obj = $this->gallery->find($k);
                $obj->update($upt);
            }
            return response()->json(['msg' =>'ok', 'code'=>200], 200);
        }
    }

    /*CHANGE STATUS*/
    public function updateStatus(Request $request)
    {
        if(!$request->ajax()){
            abort('404', 'Not Access');
        }else{
            $value = $request->input('value');
            $id = $request->input('id');
            $gallery = $this->gallery->find($id);
            $gallery->status = $value;
            $gallery->save();
            return response()->json([
                'mes' => 'Updated',
                'error'=> false,
            ], 200);
        }
    }

    /* REMOVE CHILD PHOTO */
    public function AjaxRemovePhoto(Request $request)
    {
        if(!$request->ajax()){
            abort('404', 'Not Access');
        }else{
            $id = $request->input('key');
            $this->photo->delete($id);
            return response()->json([
                'mes' => 'Deleted',
                'error'=> false,
            ], 200);
        }
    }

    /* UPDATE CHILD PHOTO */
    public function AjaxUpdatePhoto(Request $request)
    {
        if(!$request->ajax()){
            abort('404', 'Not Access');
        }else{
            $id = $request->input('id_photo');
            $order = $request->input('value');
            $photo = $this->gallery->update(['order'=>$order], $id);

            return response()->json([
                'mes' => 'Update Order',
                'error'=> false,
            ], 200);
        }
    }

}
