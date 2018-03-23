<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Repositories\Eloquent\CommonRepository;


use App\Repositories\Eloquent\UploadRepository;
use App\Repositories\GalleryRepository;
use Yajra\Datatables;

class MultiPhotoController extends Controller
{
    protected $up_photos;
    protected $gallery;
    protected $common;
    protected $_removePath = 'public/upload/';

    public function __construct(CommonRepository $common, UploadRepository $up_photos, GalleryRepository $gallery)
    {
        $this->up_photos = $up_photos;
        $this->gallery = $gallery;
        $this->common = $common;
    }

    public function getIndex()
    {
        return view('Admin::pages.multi-photo.index');
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

    public function getCreate()
    {
        return view('Admin::pages.multi-photo.create');
    }

    public function postCreate(Request $request)
    {
         $input = $request->all();
         $response = $this->up_photos->upload($input);
         return $response;
    }

    public function getEdit($id)
    {
      $inst = $this->photo->find($id);
      return view('Admin::pages.multi-photo.edit', compact('inst'));
    }

    public function postEdit(Request $request, $id)
    {
      $img_url = $request->hasFile('img_url') ?  $this->common->getPath($this->common->uploadImage($request, $request->file('img_url'),env('DROPZONER_UPLOAD_PATH'),false), asset($this->_removePath).'/')  : $this->photo->find($id)->img_url;
      $data = [
          'title' => $request->input('title'),
          'img_url' => $img_url,
          'order' => $request->input('order'),
      ];
      if($this->photo->update($data, $id)){
          return redirect()->route('admin.photo.index')->with('success', 'Update Successful.');
      }
          return redirect()->route('admin.photo.index')->with('error', 'Update Fail.');
    }

    public function destroy($id)
    {
        $response = $this->up_photos->delete($id);
        if(!$response->getData()->error){
            return redirect()->route('admin.photo.index')->with('success','Item Deleted.');
        }
    }

    public function deleteAll(Request $request)
    {
      if(!$request->ajax()){
        abort(404, 'No Permission');
      }else{
        $data = $request->input('arr');
        $this->up_photos->deleteAll($data);
      }
    }
}
