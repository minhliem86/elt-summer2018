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
//        $metric = 'ga:pageviews';
        $dataAnalytic = [
            'filters' => 'ga:landingPagePath=~/anh-van-he/',
            'dimensions' => 'ga:date, ga:sourceMedium ',
            'metrics' => 'ga:pageviews, ga:users, ga:sessions',
        ];

        if($request->ajax()){
            if($request->has('week')){
                $startDate = Carbon::now()->subWeek()->startOfWeek();
                $endDate = Carbon::now();
                $period = Period::create($startDate, $endDate);

            }else{
                $from = $request->input('from');
                $to = $request->input('to');

                $start_d = Carbon::createFromFormat('d/m/Y', $from);
                $to_d = Carbon::createFromFormat('d/m/Y', $to);
                $period = Period::create($start_d, $to_d);

            }
            $data_analytic = $this->mainChart($period)['analytic'];
            return view('Admin::ajax.ajaxChart2', compact('data_analytic'))->render();

        }else{
            $startDate = Carbon::createFromFormat('d-m-Y', '19-03-2018');
            $endDate = Carbon::now();
            $period = Period::create($startDate, $endDate);
            $data_analytic = $this->mainChart($period)['analytic'];
            $rs = $this->mainChart($period)['rs'];

            $total_pageviews = $rs->totalsForAllResults['ga:pageviews'];
            $total_users = $rs->totalsForAllResults['ga:users'];

//            /*** PAGEVIEW ***/
            $data_analytic2 = $this->pageView($period);

            $data_group = $this->array_group_by($data_analytic2, 'source');

            $source = $this->analyticSource($data_group, 'session');

            return view('Admin::pages.dashboard.index', compact('data_analytic','register', 'total_users', 'total_pageviews', 'data_analytic2', 'source'));
        }
    }

    private function pageView($period)
    {
        $metric = 'ga:pageviews, ga:users';
        $dataAnalytic = [
            'filters' => 'ga:landingPagePath=~/anh-van-he/',
            'dimensions' => 'ga:date, ga:sourceMedium ',
            'metrics' => 'ga:pageviews, ga:users, ga:sessions',
        ];
        $rs = $this->analytic->performQuery($period, $metric,$dataAnalytic);
        foreach($rs->rows as $item){
            $data_analytic [] = ['date' => Carbon::createFromFormat( 'Ymd', $item[0])->format('d-m-Y'), 'visitors' => $item[3], 'pageviews' => $item[2],'session' => $item[4] , 'source' => $item[1] ];
        }
        return $data_analytic;
    }

    private function mainChart($period)
    {
        $metric = 'ga:pageviews, ga:users';
        $dataAnalytic = [
            'filters' => 'ga:landingPagePath=~/anh-van-he/',
            'dimensions' => 'ga:date',
            'metrics' => 'ga:pageviews, ga:users',
        ];
        $rs = $this->analytic->performQuery($period, $metric,$dataAnalytic);
        foreach($rs->rows as $item){
            $data_analytic [] = ['date' => Carbon::createFromFormat( 'Ymd', $item[0])->format('d-m-Y'), 'visitors' => $item[2], 'pageviews' => $item[1] ];
        }
        return $data_analytic = ['analytic'=> $data_analytic, 'rs' => $rs];
    }


    private function analyticSource($arr, $key){
        $data = [];
        foreach($arr as $k=>$v)
        {
            $count = 0;
            foreach($v as $v2){

                $count += $v2[$key];
            }
            $data[$k] = $count;
        }

        return $data;
    }

    protected function array_group_by(array $arr, $key_selector='pageviews') {
        $result = array();
        foreach ($arr as $element) {
            $result[$element[$key_selector]][] = $element;
        }
        return $result;
    }

//    public function index ()
//    {
//        return view('Admin::pages.dashboard.index');
//    }
}
