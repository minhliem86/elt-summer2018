<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\EventRepository;

class EventController extends Controller
{
    protected $event;

    public function __construct(EventRepository $event)
    {
        $this->event = $event;
    }

    public function index()
    {
        return view('Client::pages.event.index');
    }

    public function loadAjax(Request $request)
    {
        $view = view('Client::pages.event.ajaxModal')->render();
        return response()->json(['data'=>$view], 200);
    }
}
