<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TestimonialRepository;

use Illuminate\Http\Request;

class HomeController extends Controller {

    protected $testimonial;

    public function __construct(TestimonialRepository $testimonial)
    {
        $this->testimonial = $testimonial;
    }

    public function index()
    {
//        $promotion = $this->promotion->getHomePage(['img_homepage', 'title'],4);
        $testimonial = $this->testimonial->all(['id','slug', 'img_avatar', 'content','title']);
//        return view('Client::pages.home.index', compact('promotion', 'testimonial'));
        return view('Client::pages.home.index', compact('testimonial'));


    }

}
