<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/14/2015
 * Time: 3:04 PM
 */

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Input;
use Redirect;
use View;
use Image;


class bannerDuzenleController extends Controller{
    public function index()
    {
        $data=DB::select('select * from banner');

        return view('admin/bannerListele')->with('data',$data);
    }
    public function listele()
    {
        $data=DB::select('select * from banner');
        var_dump($data);
        return Redirect("admin/bannerListele",array("data"=>$data));


    }
    function bannerSil($sil)
    {

        $bannerSil = DB::delete("delete from banner where id = ?", array($sil));
        if($bannerSil)
            return Redirect::to('admin/bannerListele');


    }

    function bannerDuzenle($duzenle)
    {
        if(isset($_POST["duzenle"])) {
            $veri = array();
            $data = DB::select('select * from banner where id = ?', array($duzenle));
            $veri["banner"] = $data[0];
            return View::make("admin/bannerDuzenle")->with("data", $veri);
        }
    }

    function bannerDuzenleKaydet($duzenle)
    {
        $form=input::all();


//        $kural = array('ad'=>'required','yol'=>'required','genislik'=>'required','yukseklik'=>'required','url'=>'required','durum'=>'required');
//        $dogrulama = \Validator::Make($form,$kural);
//        if($dogrulama->fails()) {
//            // gönderilen verilerde hata var
//            return Redirect::to('admin/bannerDuzenle/'. $duzenle)->withErrors($dogrulama)->withInput();
//        }else{
        $dosya=Input::file('dosya');
        $uzanti = $dosya->getClientOriginalExtension();
        $dosyaAdi=date('YmdHis')."_b.".$uzanti;
        $path = base_path('bannerResimler/'.$dosyaAdi);
        $imagePath = 'bannerResimler/'.$dosyaAdi;
        Image::make($dosya->getRealPath())->save($path);
            $sorgu="UPDATE banner SET ad=?,yol=?, genislik=?, yukseklik=?, url=?, durum=? WHERE id=?";
            $islem=DB::update($sorgu,array($form["ad"],$dosyaAdi,$form["genislik"],$form["yukseklik"],$form["url"],$form["durum"], $duzenle));
            if($islem){
                $mesaj="basarili";
                return Redirect::to("admin/bannerListele")->with("mesaj",$mesaj);
            }else{
                $mesaj="başarısız";
                return Redirect::to("admin/bannerListele")->with("mesaj",$mesaj);
            }
        }



} 