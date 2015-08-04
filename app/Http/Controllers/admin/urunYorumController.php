<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 7/31/2015
 * Time: 4:02 PM
 */

namespace App\Http\Controllers\admin;

use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;


class urunYorumController extends Controller {


    function listele()
    {
        $data = DB::select('select y.id,k.adi,k.soyadi,u.baslik as urunBaslik,y.baslik as yorumBaslik,y.icerik,y.puan,y.tarih, y.durum as durum from yorumlar as y left join kullanicilar as k on y.kul_id = k.id left join urunler as u on y.urun_id = u.id order by y.id desc');
        $kullanici = DB::select('select * from kullanicilar order by id desc');
        $urunler = DB::select('select * from urunler order by id desc');


        return view('admin/urunYorumlar',array('data'=>$data, 'kullanici'=>$kullanici, 'urunler'=>$urunler));
    }


    function yorumEkle()
    {
        $yorum = Input::all();
        $yorumEkle = DB::insert("insert into yorumlar(id,urun_id,kul_id,baslik,icerik,puan,durum,tarih) values(null,?,?,?,?,? ,DEFAULT ,now())",array($yorum["urun"],$yorum["kullanici"],$yorum["yorumBaslik"],$yorum["yorumIcerik"],$yorum["puan"]));
        return Redirect::to('admin/urunYorum');
    }


    function yorumSil($sil)
    {
        $yorumSil = DB::delete("delete from yorumlar where id = ?", array($sil));
        if($yorumSil > 0)
            return Redirect::to('admin/urunYorum');
    }

    function durumAktif($degistir)
    {
        $durum = DB::update('update yorumlar set durum=0 where id = ?', array($degistir));
        return Redirect::to('admin/urunYorum');
    }

    function durumPasif($degistir)
    {
        $durum = DB::update('update yorumlar set durum=1 where id = ?', array($degistir));
        return Redirect::to('admin/urunYorum');
    }

}