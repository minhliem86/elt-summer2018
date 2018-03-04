<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PromotionRepository;
use App\Repositories\Eloquent\CommonRepository;
use Yajra\Datatables\Datatables;

class PromotionController extends Controller
{
    protected $promotion;
    protected $common;

    public function __construct(PromotionRepository $promotion, CommonRepository $common)
    {
        $this->promotion = $promotion;
        $this->common = $common;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin::pages.promotion.index');
    }

    public function getData(Request $request)
    {
        $promo = $this->promotion->query(['id', 'name', 'status', 'order']);
        return Datatables::of($promo)
            ->addColumn('action', function($promo){
                return '<a href="'.route('admin.promotion.edit', $promo->id).'" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> </a>
                <form method="POST" action=" '.route('admin.promotion.destroy', $promo->id).' " accept-charset="UTF-8" class="inline-block-span">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="'.csrf_token().'">
                               <button class="btn  btn-danger btn-xs" type="button" attrid=" '.route('admin.promotion.destroy', $promo->id).' " onclick="confirm_remove(this);" > <i class="fa fa-trash"></i></button>
               </form>' ;
            })->addColumn('order', function($promo){
                return "<input type='text' name='order' class='form-control' data-id= '".$promo->id."' value= '".$promo->order."' />";
            })->addColumn('status', function($promo){
                $status = $promo->status ? 'checked' : '';
                $promo_id =$promo->id;
                return '
                  <label class="switch switch-icon switch-success-outline">
                    <input type="checkbox" class="switch-input" '.$status.' data-id="'.$promo_id.'">
                    <span class="switch-label" data-on="" data-off=""></span>
                    <span class="switch-handle"></span>
                </label>
              ';
            })->filter(function($query) use ($request){
                if (request()->has('name')) {
                    $query->where('name', 'like', "%{$request->input('name')}%");
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
        return view('Admin::pages.promotion.create');
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
        $order = $this->promotion->getOrder();

        $data = [
            'name' => $request->input('name'),
            'slug' => \LP_lib::unicode($request->input('name')),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'img_avatar' => $img_url,
            'order' => $order,
        ];
        $this->promotion->create($data);
        
        return redirect()->route('admin.promotion.index')->with('success','Created !');
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
        $inst = $this->promotion->find($id);
        return view('Admin::pages.promotion.edit', compact('inst'));
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
            'slug' => \LP_lib::unicode($request->input('title')),
            'avatar_img' => $img_url,
            'order' => $request->input('order'),
            'status' => $request->input('status'),
        ];
        $this->promotion->update($data, $id);
        return redirect()->route('admin.promotion.index')->with('success', 'Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->promotion->delete($id);
        return redirect()->route('admin.promotion.index')->with('success','Deleted !');
    }

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $data = $request->arr;
            $response = $this->promotion->deleteAll($data);
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
                $obj = $this->promotion->find($k);
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
            $promo = $this->promotion->find($id);
            $promo->status = $value;
            $promo->save();
            return response()->json([
                'mes' => 'Updated',
                'error'=> false,
            ], 200);
        }
    }
}
