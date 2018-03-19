<?php
/*CLIENT ROUTES*/
Route::group(['middleware'=>'web','namespace' => 'App\Modules\Client\Controllers'], function(){
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@index']);

//    Route::get('/khuyen-mai', ['as' => 'khuyenmai', 'uses' => 'PromotionController@index']);
//    Route::get('/chia-se-trai-nghiem', ['as' => 'testimonial', 'uses' => 'TestimonialController@index']);
//    Route::get('/chia-se-trai-nghiem/{slug}', ['as' => 'testimonial.detail', 'uses' => 'TestimonialController@detail'])->where('slug','[0-9a-zA-Z._\-]+');
//    Route::get('/du-hoc-{slug}', ['as' => 'country', 'uses' => 'CourseController@country'])->where('slug','[a-zA-Z._\-]+');
//    Route::get('/du-hoc-{slug}/{slugCourse}', ['as' => 'country.course', 'uses' => 'CourseController@course'])->where(['slug'=>'[a-zA-Z._\-]+', 'slugCourse' => '[a-zA-Z0-9._\-]+']);
//
//    Route::get('/dang-ky', ['as' => 'register', 'uses' => 'RegisterController@index']);
//    Route::post('/dang-ky', ['as' => 'register.post', 'uses' => 'RegisterController@postRegister']);
//    Route::get('/thank-you', ['as' => 'register.thankyou', 'uses' => 'RegisterController@thankyou']);
//    Route::post('/dang-ky/load-center', ['as' => 'register.loadCenter', 'uses' => 'RegisterController@_loadCenter']);
//
//    /*TRAVEL BLOG*/
//    Route::get('/travel-blog-2017', ['as' => 'travelblog', 'uses' => 'TravelBlogController@getTravelblog']);
//    Route::get('/travel-blog-2017/du-hoc-{slug}', ['as' => 'travelblog.country', 'uses' => 'TravelBlogController@getCountry'])->where('slug','[0-9a-zA-Z._\-]+');
//    Route::get('/travel-blog-2017/{tourcode}', ['as'=>'travelblog.tour', 'uses' => 'TravelBlogController@getCourse'])->where('tourcode','[0-9a-zA-Z._\-]+');
//    Route::get('/travel-blog-2017/{tourcode}/{album_id}', ['as' => 'travelbog.album', 'uses'=>'TravelBlogController@getAlbum'])->where(['tourcode'=>'[0-9a-zA-Z._\-]+', 'album_id'=>'[0-9]+']);
//
//    /*LANDING PAGE*/
//    Route::get('/di-de-lon', ['as' => 'contest.index', 'uses' => 'ContestController@index']);
//    Route::post('di-de-lon', ['as' => 'contest.post', 'uses' => 'ContestController@postRegister']);
//    Route::get('hoan-tat-dang-ky', ['as' => 'contest.thankyou', 'uses' => 'ContestController@thankyou']);
//
//    Route::get('/ngay-hoi-van-hoa', ['as' => 'landingpage.getNgayHoi', 'uses' => 'LandingpageController@getNgayHoiVanHoa']);
//    Route::post('/ngay-hoi-van-hoa', ['as' => 'landingpage.postNgayHoi', 'uses' => 'LandingpageController@postNgayHoiVanHoa']);
//    Route::get('/ngay-hoi-van-hoa-thanks', ['as' => 'landingpage.postNgayHoi.thankyou', 'uses' => 'LandingpageController@getNgayHoiVanHoathankyou']);
//
//    Route::get('/su-kien', ['as' => 'event.index', 'uses' => 'EventController@index']);
//    Route::post('/su-kien/load', ['as' => 'event.ajax', 'uses' => 'EventController@loadAjax']);

//    REGISTER
    Route::get('/dang-ky', ['as' => 'register', 'uses' => 'RegisterController@index']);
    Route::post('/dang-ky', ['as' => 'register.post', 'uses' => 'RegisterController@postRegister']);
    Route::get('/thank-you', ['as' => 'register.thankyou', 'uses' => 'RegisterController@thankyou']);
    Route::post('/dang-ky/load-center', ['as' => 'register.loadCenter', 'uses' => 'RegisterController@_loadCenter']);

    /*PROGRAM*/
    Route::get('/chuong-trinh', ['as' => 'program.index', 'uses' => 'ProgramController@index']);
//    Route::get('/chuong-trinh/{slug}', ['as' => 'program.detail', 'uses' => 'ProgramController@detail'])->where('slug','[0-9a-zA-Z./\-]+');
    Route::get('/chuong-trinh/jumpstart', ['as' => 'program.jumpstart', 'uses' => 'ProgramController@jumpstart']);
    Route::get('/chuong-trinh/super-juniors', ['as' => 'program.super-juniors', 'uses' => 'ProgramController@superjunior']);
    Route::get('/chuong-trinh/smart-teens', ['as' => 'program.smart-teens', 'uses' => 'ProgramController@smartteen']);

    /*FACEBOOK*/
    Route::get('facebook', ['as' => 'facebook.index', 'uses' => 'FacebookController@index']);

//    View::composer(['Client::layouts.discover', 'Client::layouts.header'], function($view)  {
//        $country = new App\Repositories\CountryRepository;
//        $country_composer = $country->getComposer(['title','slug', 'img_url']);
//        $view->with('country_composer', $country_composer);
//    });

});