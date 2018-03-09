<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;
use DB;

class EventController extends Controller
{
    protected $event;

    public function __construct(EventRepository $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        $list_event = $this->event->all(['id', 'title', 'start', 'end', 'img_url', 'center_id']);
        return view('Client::pages.event.index', compact('list_event'));
    }

    public function loadAjax(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
//            $data = $this->event->find($request->input('id'));
            $event = DB::connection('mysql')->table('events')->where('events.id',$request->input('id'))->leftjoin('corporat_ref.center as center', 'center.id','=','events.center_id' )->select('events.id','events.title','events.start','events.end', 'events.center_id', 'center.name_vi', 'center.phone', 'center.address_vi')->get();
            $view = view('Client::pages.event.ajaxModal')->with(['event'=>$event[0]])->render();
            return response()->json(['data'=>$view], 200);
        }

    }
}
