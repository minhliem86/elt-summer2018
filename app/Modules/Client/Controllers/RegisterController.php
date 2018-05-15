<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Validator;

use Illuminate\Http\Request;
use App\Repositories\RegisterRepository;
use DB;

class RegisterController extends Controller {

	protected $register;

	public function __construct(RegisterRepository $register, Request $request)
    {
        $this->register  = $register;
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
        return view('Client::pages.register.index', compact('city', 'program'));
    }

    public function postRegister(Request $request)
    {
        $rules = [
          'fullname' => 'required',
          'email' => 'required|email',
          'phone' => 'required|digits_between:7,11',
            'program'=>'required',
            'city' => 'required',
            'center' => 'required'
        ];
        $messages = [
            'fullname.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập định dạng email',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.digits_between' => 'Vui lòng nhập định dạng số/không dấu cách',
            'city.required' => 'Vui lòng chọn thành phố',
            'program.required' => 'Vui lòng chọn chương trình học',
            'center.required' => 'Vui lòng chọn trung tâm ILA',
        ];
        $valid = Validator::make($request->all(),$rules, $messages);
        if($valid->fails()){
            return redirect()->back()->withInput()->withErrors($valid->errors());
        }else{
            $data = [
              'fullname' => $request->input('fullname'),
              'email' => $request->input('email'),
              'phone' => $request->input('phone'),
              'id_city' => $request->input('city'),
                'id_program' => $request->input('program'),
                'id_center' => $request->input('center'),
            ];

            $reg = $this->register->create($data);

            $source_digital = session('tracking');

            $data_marketing = [
                'mobile' => $request->input('phone'),
                'study_ila' => 0,
                'status' => 0,
                'visitor' => 0,
                'is_run_cron' => 0,
            ];

            $data_final = $data_marketing + $source_digital + $data;

            DB::connection('mysql3')->table('customer')->insert($data_final);

            Session::flush();

            return redirect()->route('register.thankyou')->with(['success'=>'done']);
        }
    }

    public function thankyou()
    {

        if(Session::has('success')){
//            $data = Session::get('data');
            return view('Client::pages.register.thankyou');
        }else{
            return redirect()->back();
        }
    }

    public function _loadCenter(Request $request)
    {
        if(!$request->ajax()){
            abort(404);
        }else{
            $center = DB::connection('mysql2')->table('center')->where('id_city',$request->input('city_id'))->where('status',1)->lists('name_vi','id');
            $view = view('Client::pages.register.loadCenter', compact('center'))->render();
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
