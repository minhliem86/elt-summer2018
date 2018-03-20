<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FacebookController extends Controller
{
    public function index()
    {
        return view('Client::pages.facebook.index');
    }
}
