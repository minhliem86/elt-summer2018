<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TestimonialRepository;
use App\Repositories\Eloquent\CommonRepository;
use Yajra\Datatables\Datatables;

class TestimonialController extends Controller
{
    protected $testimonial;
    protected $common;

    public function __construct(TestimonialRepository $testimonial, CommonRepository $common)
    {
        $this->testimonial = $testimonial;
        $this->common = $common;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin::pages.testimonial.index');
    }

    public function getData(Request $request)
    {
        $testi = $this->testimonial->query(['id', 'title','author', 'status', 'order']);
        return Datatables::of($testi)
            ->addColumn('action', function($testi){
                return '<a href="'.route('admin.testimonial.edit', $testi->id).'" class="btn btn-success d-inline-block btn-sm" title="Edit"><i class="fa fa-edit"></i> </a>
                <form method="POST" action=" '.route('admin.testimonial.destroy', $testi->id).' " accept-charset="UTF-8" class="d-inline-block form">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="'.csrf_token().'">
                               <button class="btn  btn-danger btn-sm" type="button" attrid=" '.route('admin.testimonial.destroy', $testi->id).' " onclick="confirm_remove(this);" title="Remove" > <i class="fa fa-trash"></i></button>
               </form>' ;
            })->addColumn('order', function($testi){
                return "<input type='text' name='order' class='form-control' data-id= '".$testi->id."' value= '".$testi->order."' />";
            })->addColumn('status', function($testi){
                $status = $testi->status ? 'checked' : '';
                $testi_id =$testi->id;
                return '
                  <label class="switch switch-icon switch-success-outline">
                    <input type="checkbox" class="switch-input" name="status" '.$status.' data-id="'.$testi_id.'">
                    <span class="switch-label" data-on="" data-off=""></span>
                    <span class="switch-handle"></span>
                </label>
              ';
            })
            ->filter(function($query) use ($request){
                if (request()->has('name')) {
                    $query->where('author', 'like', "%{$request->input('name')}%");
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
        return view('Admin::pages.testimonial.create');
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
        }
        $order = $this->testimonial->getOrder();

        $data = [
            'title' => $request->input('title'),
            'slug' => \LP_lib::unicode($request->input('title')),
            'author' => $request->input('author'),
            'content' => $request->input('content'),
            'img_avatar' => $img_url,
            'order' => $order,
        ];
        $this->testimonial->create($data);

        return redirect()->route('admin.testimonial.index')->with('success','Created !');
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
        $inst = $this->testimonial->find($id);
        return view('Admin::pages.testimonial.edit', compact('inst'));
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
        $img_url = $this->common->getPath($request->input('img_avatar'));
        $data = [
            'title' => $request->input('title'),
            'slug' => \LP_lib::unicode($request->input('title')),
            'author' => $request->input('author'),
            'content' => $request->input('content'),
            'img_avatar' => $img_url,
            'order' => $request->input('order'),
            'status' => $request->input('status'),
        ];
        $this->testimonial->update($data, $id);
        return redirect()->route('admin.testimonial.index')->with('success', 'Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->testimonial->delete($id);
        return redirect()->route('admin.testimonial.index')->with('success','Deleted !');
    }

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $data = $request->arr;
            $response = $this->testimonial->deleteAll($data);
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
                $obj = $this->testimonial->find($k);
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
            $testi = $this->testimonial->find($id);
            $testi->status = $value;
            $testi->save();
            return response()->json([
                'mes' => 'Updated',
                'error'=> false,
            ], 200);
        }
    }
}
