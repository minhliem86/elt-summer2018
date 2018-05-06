<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TestimonialRepository;
use App\Repositories\GalleryRepository;

use Illuminate\Http\Request;
use DB;
use Session;

class HomeController extends Controller {

    protected $testimonial;
    protected $gallery;

    public function __construct(TestimonialRepository $testimonial, GalleryRepository $gallery, Request $request)
    {
        $this->testimonial = $testimonial;
        $this->gallery = $gallery;
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
        $mobile = new \Mobile_Detect();
//        $promotion = $this->promotion->getHomePage(['img_homepage', 'title'],4);
        $testimonial = $this->testimonial->all(['id','slug', 'img_avatar', 'content','title']);
        $galleries = $this->gallery->all(['*'],['photos']);
//        return view('Client::pages.home.index', compact('promotion', 'testimonial'));
        return view('Client::pages.home.index', compact('testimonial', 'mobile', 'galleries'));
    }

}
