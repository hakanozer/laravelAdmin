<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class AdminUyeGirisController extends Controller {


    public function  giris(){
        return view('admin/adminGiris');
    }


    public function girisKontrol(){

        $data = Input::all();
        $kural = array('email'=>'required|email','password'=>'required');
        $dogrulama = \Validator::Make($data,$kural);
        if($dogrulama->fails()){
            // gönderilen verilerde hata var
            return \Redirect::to('admin/')->withErrors($dogrulama)->withInput();
        }
        return view('admin/adminGiris', array('data'=>$data));
    }

} 