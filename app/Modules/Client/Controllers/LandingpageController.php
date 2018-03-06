<?php namespace App\Modules\Client\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Validator;

use Illuminate\Http\Request;
use DB;

class LandingpageController extends Controller {

    public function getNgayHoiVanHoa()
    {
        return view('Client::pages.ngayhoivanhoa.index');
    }

    public function postNgayHoiVanHoa(Request $request)
    {
        $rules = [
          'fullname' => 'required',
          'email' => 'required|email',
          'phone' => 'required|digits_between:7,11',
            'city'=>'required',
            'quocgia' => 'required'
        ];
        $messages = [
            'fullname.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập định dạng email',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.digits_between' => 'Vui lòng nhập định dạng số/không dấu cách',
            'city.required' => 'Vui lòng chọn thành phố',
        ];
        $valid = Validator::make($request->all(),$rules, $messages);
        if($valid->fails()){
            return redirect()->back()->withInput()->withErrors($valid->errors());
        }else{
            $data = [
              'fullname' => $request->input('fullname'),
              'email' => $request->input('email'),
              'phone' => $request->input('phone'),
              'city' => $request->input('city'),
                'quocgia' => $request->input('quocgia'),
            ];

            \DB::table('lp_ngayhoivanhoa')->insert($data);
            return redirect()->route('landingpage.postNgayHoi.thankyou')->with(['success'=>'done']);
        }
    }

    public function getNgayHoiVanHoathankyou()
    {

        if(Session::has('success')){
            return view('Client::pages.ngayhoivanhoa.thankyou');
        }else{
            return redirect()->route('landingpage.getNgayHoi');
        }
    }

}
