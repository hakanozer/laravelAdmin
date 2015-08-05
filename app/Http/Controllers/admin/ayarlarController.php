<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/3/2015
 * Time: 3:31 PM
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;

class ayarlarController extends Controller{

    function liste()
    {

        $data = DB::select('select * from ayarlar order by id DESC limit 0,1');
        return view('admin/ayarlar',array('data'=>$data));
    }

    public function duzenle() {
        $data = Input::all();
        $id = $data["id"];
        // Validasyonlar
        $kural = array(
            'site_baslik'=>'required|max:60',
            'meta_keyler'=>'required|max:500',
            'meta_description'=>'required|max:150',
            'domain_ismi'=>'required|max:500',
            'smtp_adresi'=>'required|max:500',
            'smtp_kullanici_adi'=>'required|max:500',
            'smtp_sifre'=>'required|max:500|min:5',
            'longtitude'=>'required|numeric|digits_between:0,20',
            'latitude'=>'required|numeric|digits_between:0,20',
            'mail_adresi'=>'required|email|max:500',
            'telefon'=>'required|numeric|digits_between:10,13',
            'fax'=>'required|numeric|digits_between:10,13',
            'gsm'=>'required|numeric|digits_between:10,13',
            'adres'=>'required|max:500'
        );
        $dogrulama = \Validator::Make($data,$kural);
        if($dogrulama->fails()){
            // gönderilen verilerde hata var
            return \Redirect::to('admin/siteAyarlar')->withErrors($dogrulama)->withInput();
        } else {

            //Update
        DB::table('ayarlar')
            ->where('id', $id)
            ->update( array(
                'site_baslik' => $data["site_baslik"],
                'meta_key' => $data["meta_keyler"],
                'meta_desc' => $data["meta_description"],
                'domain_name' => $data["domain_ismi"],
                'smtp_adres' => $data["smtp_adresi"],
                'smtp_kul_adi' => $data["smtp_kullanici_adi"],
                'smtp_sifre' => $data["smtp_sifre"],
                'long' => $data["longtitude"],
                'lat' => $data["latitude"],
                'mail_adres' => $data["mail_adresi"],
                'telefon' => $data["telefon"],
                'fax' => $data["fax"],
                'gsm' => $data["gsm"],
                'adres' => $data["adres"]
                )
            );
            return \Redirect::to('admin/siteAyarlar');
        }


    }





}