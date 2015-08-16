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


class urunController extends Controller {


    function listele()
    {
        $veri = DB::select('select * from urunler order by id desc');
        return view('admin/urunler',array('veri'=>$veri));
    }
    function urunSil($urunsil)
    {
        $urunsil = DB::delete("delete from urunler where id = ?", array($urunsil));
        if($urunsil > 0)
            return Redirect::to('admin/urun');
    }

    public function ekle(){
        $data = Input::all();
        $kural = array('kategori_id'=>'required','baslik'=>'required','kisa_aciklama'=>'required','aciklama'=>'required','fiyat'=>'required','kampanya'=>'required','piyasa_fiyati'=>'required','durum'=>'required','stok'=>'required' );
        $dogrulama = \Validator::Make($data,$kural);
        if($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/urunEkle')->withErrors($dogrulama)->withInput();
        }
            //var_dump($data);
            $urun = DB::insert("insert into urunler values(null,?,?,?,?,?,?,?,?,?,now())", array($data["kategori_id"], $data["baslik"], $data["kisa_aciklama"], $data["aciklama"], $data["fiyat"], $data["kampanya"], $data["piyasa_fiyati"], $data["durum"], $data["stok"]));

        return \Redirect::to('admin/urunEkle');

    }

    public function urunDuzenleAc($urun_id)
    {

        $q2 = "Select * from kategoriler";
        $al2 = DB::select($q2);

        $data = array();
        $q = "SELECT * FROM urunler WHERE id = ?";
        $al = DB::select($q, array($urun_id));
        $data["urunler"] = $al[0];
        return View::make("admin/urunDuzenle", array('al2'=>$al2))->with("data", $data);
    }
    public function duzenleUrun($urun_id)
    {
        $form = Input::all();
        $kural = array('kategori_id'=>'required' , 'baslik'=>'required','kisa_aciklama'=>'required','aciklama'=>'required','fiyat'=>'required','kampanya'=>'required','piyasa_fiyati'=>'required','durum'=>'required','stok'=>'required' );
        $dogrulama = \Validator::Make($form,$kural);
        if($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/urunDuzenle/'. $urun_id)->withErrors($dogrulama)->withInput();
        }
        $q = "UPDATE urunler SET kategori_id = ?, baslik=? , kisa_aciklama = ?, aciklama = ?, fiyat=? ,kampanya=? ,piyasa_fiyati=? ,durum=? ,stok=?  WHERE id = ?";
        $islem = DB::update($q, array( $form["kategori_id"], $form["baslik"], $form["kisa_aciklama"], $form["aciklama"], $form["fiyat"], $form["kampanya"], $form["piyasa_fiyati"], $form["durum"], $form["stok"], $urun_id));
        if ($islem) {
            $mesaj = "basarili";
            return Redirect::to("admin/urun")->with("mesaj", $mesaj);
        }
        else {
            $mesaj = "basarisiz";
            return Redirect::to("admin/urun")->with("mesaj", $mesaj);
        }
        // Mesaj session'a yazılıyor redirect yapıldığı için.
    }
    function index()
    {
        $q2 = "Select * from kategoriler";
        $al2 = DB::select($q2);



        return View::make("admin/urunEkle", array('al2'=>$al2));

    }


}