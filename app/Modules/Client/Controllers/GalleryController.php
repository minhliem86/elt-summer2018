<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryRepository;

use Session;

class GalleryController extends Controller
{
    protected $gallery;
    public function __construct(GalleryRepository $gallery, Request $request)
    {
        $this->gallery = $gallery;

        if($request->query('utm_campaign')){
            Session::put('tracking', parent::getCampaign($request));
        }else{
            if(!session('tracking')){
                Session::put('tracking', parent::getCampaign($request));
            }
        }

    }

    public function gallery()
    {
        $galleries = $this->gallery->all();
        return view('Client::pages.gallery.gallery', compact('galleries'));
    }

    public function index($slug)
    {
        $data = $this->gallery->findByField('slug', $slug)->first();
        if(count($data)){
            return view('Client::pages.gallery.index', compact('data'));
        }else{
            abort(404);
        }

    }
}
