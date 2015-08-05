<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/4/2015
 * Time: 3:41 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class sifreDegistirController extends Controller{


    function sifreDegistir(){

            return view('admin/sifreDegistir');

    }


    function sifreDegistirVT(){

        $gelenler = Input::all();
        $bilgi = array();
        if($gelenler["sifre"]== "" || $gelenler["sifreTekrar"] == ""){
            $bilgi["hata"] = "Şifreler Boş Girilemez!";
            return view('admin/sifreDegistir', array('bilgi'=>$bilgi));
        }

        if($gelenler["sifre"] == $gelenler["sifreTekrar"])
        {
        $data = DB::update("update admin set sifre=? WHERE id=?",array(md5($gelenler['sifre']),$gelenler['kulID']));

        //cho "Şifre Değiştirildi.";
            $bilgi["bilgi"] = "Şifre Değiştirildi.";
        }else{
            //echo "Şifreler Uyuşmuyor";
            $bilgi["hata"] = "Şifreler Uyuşmuyor";
        }
        return view('admin/sifreDegistir', array('bilgi'=>$bilgi));
        //return view('admin/adminDuzenle',array('data'=>$data));
    }

} 