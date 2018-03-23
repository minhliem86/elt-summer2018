<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Session;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected function getCampaign($request, $media_id='', $ga_medium='', $campaign_id=220)

    {

        if($request->query('utm_source')){
            // $this->db3->where($where);

            $row = DB::connection('mysql3')->table('media')->where('alias', $request->get('utm_source'))->first();

            if(count($row)){

                $media_id = $row->id;

                $ga_medium = $row->medium;

            }

        }



        if($request->query('utm_campaign')){

//            $where2 = ['alias'=> $this->input->get('utm_campaign')];

            // $this->db3->where($where2);

            $row2 = DB::connection('mysql3')->table('campaign')->where('alias', $request->get('utm_campaign'))->first();

            if(count($row2)){

                $campaign_id = $row2->id;

            }

        }

        return $data = [

            'id_campaign'=> $campaign_id,

            'id_media' => $media_id,

            'ga_medium' => $ga_medium

        ];

    }

}
