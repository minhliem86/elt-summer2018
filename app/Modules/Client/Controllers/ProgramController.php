<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{

    public function index()
    {
        return view('Client::pages.program.index');
    }

    public function detail()
    {
        return view('Client::pages.program.detail');
    }
}
