<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 8/5/2015
 * Time: 2:31 PM
 */

namespace App\Http\Controllers\admin;

use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;
use \Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;

class mesajlarController extends Controller{

    function mesajlarliste(){

       $data=DB::select('select m.id, gk.adi as GonAdi,gk.soyadi as GonSoyadi,k.adi as AlAdi, k.soyadi as AlSoyadi, m.mesaj, m.durum, m.tarih from mesajlar as m LEFT JOIN kullanicilar as k on m.alici_id = k.id LEFT JOIN kullanicilar as gk on m.gonderen_id = gk.id');


        return view('admin/mesajlar',array('data'=>$data));

    }

    function gonder(){

        $kisiler=DB::select('select * from kullanicilar order by id desc');

        return view('admin/mesajGonder',array('kisiler'=>$kisiler));
    }

    function gonderForm(){

        $data=Input::all();
        $kural = array('kisiler'=>'required','mesaj'=>'required');
        $dogrulama = \Validator::Make($data,$kural);
        $kulID=Session::get('id');
        if(!$dogrulama->passes()){

            return \Redirect::to('admin/mesajlar/gonder')->withErrors($dogrulama)->withInput();
        }else {
            $query = DB::insert("insert into mesajlar VALUES(null,?,?,?,DEFAULT,now())", array($kulID, $data["kisiler"], $data["mesaj"]));

            return Redirect::to('admin/mesajlar');
        }
    }

    function mesajSil($sil)
    {
        $mesajSil = DB::delete("delete from mesajlar where id = ?", array($sil));
        if($mesajSil > 0)
            return Redirect::to('admin/mesajlar');
    }

    function mesajOku($oku){

        $mesajOku=DB::select("select k.adi,k.soyadi,m.mesaj,m.tarih from mesajlar as m left join kullanicilar as k on m.gonderen_id=k.id where m.id = ? limit 0,1", array($oku));
        $d = DB::update('update mesajlar set durum=1 where id = ?', array($oku));
        $kullanici["user"] = $mesajOku[0];

        return view('admin/mesajOku',array('kullanici'=>$kullanici));
    }


} 