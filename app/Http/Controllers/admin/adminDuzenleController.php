<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class adminDuzenleController extends Controller {


    public function liste()
    {
        $data = DB::select('select * from admin WHERE id=?',array(Session::get('id')));
    
        return view('admin/adminDuzenle',array('data'=>$data));
    }

    function guncelle(){
        $gelenler = Input::all();
        //$kullanici = Session::all();
        $kulId = Session::get('id');
        //$kullanici["id"];

        //$kulId2 = Cookie::get('user');
        //$kid= $kulId2['id'];





        $data = DB::update("update admin set adi=?, soyadi=?, mail=? WHERE id=?",array($gelenler['adi'],$gelenler['soyadi'],$gelenler['mail'],$kulId));


        $data = DB::select('select * from admin WHERE id=?',array('1'));
        return view('admin/adminDuzenle',array('data'=>$data));
    }

}