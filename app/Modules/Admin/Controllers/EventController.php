<?php

namespace App\Modules\Admin\Controllers;

use App\Events\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;
use App\Repositories\Eloquent\CommonRepository;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use DB;

class EventController extends Controller
{
    protected $event;
    protected $common;

    public function __construct(EventRepository $event, CommonRepository $common)
    {
        $this->event = $event;
        $this->common = $common;
    }

    public function index()
    {
        return view('Admin::pages.event.index');
    }

    public function getData(Request $request)
    {
        $event = $this->event->query(['id', 'title','start', 'end']);
        return Datatables::of($event)
            ->addColumn('action', function($event){
                return '<a href="'.route('admin.event.edit', $event->id).'" class="btn btn-success d-inline-block btn-sm" title="Edit"><i class="fa fa-edit"></i> </a>
                <form method="POST" action=" '.route('admin.event.destroy', $event->id).' " accept-charset="UTF-8" class="d-inline-block form">
                    <input name="_method" type="hidden" value="DELETE">
                    <input name="_token" type="hidden" value="'.csrf_token().'">
                               <button class="btn  btn-danger btn-sm" type="button" attrid=" '.route('admin.event.destroy', $event->id).' " onclick="confirm_remove(this);" title="Remove" > <i class="fa fa-trash"></i></button>
               </form>' ;
            })
            ->editColumn('start', function($event){
                return Carbon::parse($event->start)->format('d/m/Y H:i');
            })
            ->editColumn('end', function($event){
                return Carbon::parse($event->end)->format('d/m/Y H:i');
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
        $center = DB::connection('mysql2')->table('center')->lists('name_vi','id');
        return view('Admin::pages.event.create', compact('center'));
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
            'start' => Carbon::createFromFormat('d/m/Y H:i', $request->input('start_date')),
            'end' => Carbon::createFromFormat('d/m/Y H:i', $request->input('end_date')),
            'description' => $request->input('description'),
            'img_url' => $img_url,
            'center_id' => $request->input('center_id'),
        ];

        $this->event->create($data);

        return redirect()->route('admin.event.index')->with('success','Created !');
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
        $inst = $this->event->find($id);
        $center = DB::connection('mysql2')->table('center')->lists('name_vi','id');
        return view('Admin::pages.event.edit', compact('inst', 'center'));
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
        $this->event->update($data, $id);
        return redirect()->route('admin.event.index')->with('success', 'Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->event->delete($id);
        return redirect()->route('admin.event.index')->with('success','Deleted !');
    }

    /*DELETE ALL*/
    public function deleteAll(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $data = $request->arr;
            $response = $this->event->deleteAll($data);
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
                $obj = $this->event->find($k);
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
            $event = $this->event->find($id);
            $event->status = $value;
            $event->save();
            return response()->json([
                'mes' => 'Updated',
                'error'=> false,
            ], 200);
        }
    }

}
