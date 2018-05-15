<?php

namespace App\Modules\Client\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ScheduleController extends Controller
{
    public function index()
    {
        $city = DB::connection('mysql2')->table('city')->whereIn('id',[1,20,48,49,50,53,70,39])->lists('name','id');
        $program_old = DB::connection('mysql2')->table('program')->whereIn('id', [13,14,15])->lists('name','id');
        $program_new = $this->moveElement($program_old,0, 1);
        foreach($program_new as $k => $item_program){
            switch ($k) {
                case '1' :
                    $program_new[13] = 'Dành cho học viên 7-11 tuổi';
                    break;
                case '0' :
                    $program_new[14] = 'Dành cho học viên 4-7 tuổi';
                    break;
                case '2' :
                    $program_new[15] = 'Dành cho học viên 11-16 tuổi';
                    break;
            }
        }
        $program = array_diff_key($program_new,['0','1','2']);
        return view('Client::pages.schedule.index', compact('city', 'program'));
    }

    public function postFilter(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            if(!$request->input('program_id') || !$request->input('center_id')){
                return response()->json(['data'=> null, 'error' => true], 200);
            }else{
                $schedule = DB::connection('mysql4')->table('ila_course_schedules')->where('course_id', $request->input('program_id'))->where('center_id', $request->input('center_id'))->where('classgroup', 'Summer')->select('class_code','weeks','days','class_time_from','class_time_to', 'start_date', 'classgroup')->get();
                $view = view('Client::ajax.schedule',compact('schedule'))->render();
                return response()->json(['data'=>$view, 'error'=>false], 200);
            }
        }
    }


    public function _loadCenter(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $center = DB::connection('mysql2')->table('center')->where('id_city',$request->input('city_id'))->where('status',1)->lists('name_vi','id');
            $view = view('Client::ajax.loadCenter', compact('center'))->render();
            return response()->json(['data'=>$view,], 200);
        }
    }

    protected function moveElement($array, $a, $b) {
        $p1 = array_splice($array, $a, 1);
        $p2 = array_splice($array, 0, $b);
        $array = array_merge($p2,$p1,$array);
        return $array;
    }
}
