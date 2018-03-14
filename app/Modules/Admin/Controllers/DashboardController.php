<?php

namespace App\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use developeruz\Analytics\Period;
use developeruz\Analytics\Analytics;
use Carbon\Carbon;
use App\Repositories\RegisterRepository;

class DashboardController extends Controller
{
    protected $analytic;
    protected $register;

    public function __construct(Analytics $analytic, RegisterRepository $register)
    {
        $this->analytic = $analytic;
        $this->register = $register;
    }

    public function index(Request $request)
    {
        $metric = 'ga:pageviews, ga:users';
        $dataAnalytic = [
            'filters' => 'ga:pagePath=~^/anh-van-he-2018/',
            'dimensions' => 'ga:date',
            'metrics' => 'ga:pageviews, ga:users, ga:sessionDuration',
        ];

        if($request->ajax()){
            if($request->has('week')){
                $startDate = Carbon::now()->subWeek()->startOfWeek();
                $endDate = Carbon::now();
                $period = Period::create($startDate, $endDate);
                $rs = $this->analytic->performQuery($period, $metric,$dataAnalytic);
            }else{
                $from = $request->input('from');
                $to = $request->input('to');

                $start_d = Carbon::createFromFormat('d/m/Y', $from);
                $to_d = Carbon::createFromFormat('d/m/Y', $to);
                $period = Period::create($start_d, $to_d);
                $rs = $this->analytic->performQuery($period, $metric,$dataAnalytic);
            }
            $data_analytic = [];
            foreach($rs->rows as $item){
                $data_analytic [] = ['date' => Carbon::createFromFormat( 'Ymd', $item[0])->format('d-m-Y'), 'visitors' => $item[2], 'pageviews' => $item[1] ];
            }
            return view('Admin::ajax.ajaxChart2', compact('data_analytic'))->render();

        }else{
            $startDate = Carbon::createFromFormat('d-m-Y', '12-03-2018');
            $endDate = Carbon::now();
            $period = Period::create($startDate, $endDate);
            $rs = $this->analytic->performQuery($period ,$metric ,$dataAnalytic);
            $data_analytic = [];
            foreach($rs->rows as $item){
                $data_analytic [] = ['date' => Carbon::createFromFormat( 'Ymd', $item[0])->format('d-m-Y'), 'visitors' => $item[2], 'pageviews' => $item[1] ];
            }
            $total_pageviews = $rs->totalsForAllResults['ga:pageviews'];
            $total_users = $rs->totalsForAllResults['ga:users'];
            $register =$this->register->all(['id'])->count();

            /*** PAGEVIEW ***/
            $startDate_pageview = Carbon::now()->subWeek()->startOfWeek();
            $endDate_pageview = Carbon::now();
            $period_pageview = Period::create($startDate_pageview, $endDate_pageview);
            $rs2 = $this->analytic->performQuery($period_pageview, $metric, $dataAnalytic);
            foreach($rs->rows as $item){
                $data_analytic2 [] = ['date' => Carbon::createFromFormat( 'Ymd', $item[0])->format('d-m-Y'), 'visitors' => $item[2], 'pageviews' => $item[1] ];
            }

            return view('Admin::pages.dashboard.index', compact('data_analytic','register', 'total_users', 'total_pageviews', 'data_analytic2'));
        }
    }

//    public function index ()
//    {
//        return view('Admin::pages.dashboard.index');
//    }
}
