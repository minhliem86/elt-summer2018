<?php
namespace App\ViewComposers;

use Illuminate\View\View;

class MobileDetectComposer{



    public function __construct()
    {

    }

    public function compose(View $view)
    {
        // TODO: Bind data to view
        $mobile = new \Mobile_Detect();
        $view->with(['mobile' =>$mobile]);

    }
}