<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryRepository;

class GalleryController extends Controller
{
    protected $gallery;
    public function __construct(GalleryRepository $gallery)
    {
        $this->gallery = $gallery;
    }

    public function index($slug)
    {
        $data = $this->gallery->findByField('slug', $slug)->first();
        return view('Client::pages.gallery.index', compact('data'));
    }
}
