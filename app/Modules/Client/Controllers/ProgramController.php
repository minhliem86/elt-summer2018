<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProgramRepository;
use Session;

class ProgramController extends Controller
{
    protected $program;

    public function __construct(ProgramRepository $program, Request $request)
    {
        $this->program = $program;
        if($request->query('utm_campaign')){
            Session::put('tracking', parent::getCampaign($request));
        }else{
            if(!session('tracking')){
                Session::put('tracking', parent::getCampaign($request));
            }
        }
    }

    public function index()
    {
        return view('Client::pages.program.index');
    }

//    public function detail(Request $request, $slug)
//    {
//        $detail = $this->program->findByField('slug',$slug,['name','slug','content'])->first();
//        if(count($detail)){
//            return view('Client::pages.program.detail', compact('detail'));
//        }
//        abort(404);
//    }

    public function jumpstart(Request $request)
    {
        return view('Client::pages.program.jumpstart');
    }

    public function superjunior(Request $request)
    {
        return view('Client::pages.program.superjunior');
    }

    public function smartteen(Request $request)
    {
        return view('Client::pages.program.smartteen');
    }
}
