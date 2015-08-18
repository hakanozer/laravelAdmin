<?php
/**
 * Created by PhpStorm.
 * User: Fatih
 * Date: 13.8.2015
 * Time: 10:51
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class anketController extends Controller
{

    public function anketListe()
    {
        $liste = DB::select("select * from anket");
        return view('admin/anket', array('data' => $liste));
    }

    public function anketEkle()
    {
        return view('admin/anketEkle');
    }

    public function anketEkleVT()
    {
        $data = Input::all();

        $kural = array('baslik' => 'required');
        $dogrulama = \Validator::Make($data, $kural);
        if ($dogrulama->fails()) {
            $bilgi["hata"] = "Lütfen anket başlığı alanını boş bırakmayınız!";
            return view('admin/anketEkle', array('bilgi' => $bilgi), array('data' => $data));
        }
        $ekle = DB::insert("insert into anket values(null,?,now())", array($data["baslik"]));
        if ($ekle) {
            $bilgi["bilgi"] = "Anket kaydı başarılı!";
        }
        else{
            $bilgi["hata"] = "Bir hata oluştu!";
        }
        return view('admin/anketEkle', array('bilgi' => $bilgi), array('data' => $data));
    }

    public function sil($silId)
    {
        $silme = DB::delete("delete from anket where id=?", array($silId));
        return Redirect::to('admin/anket');
    }

    public function duzenleAc($duzenleId)
    {
        $data = array();
        $duzenle = DB::select('select * from anket WHERE id=?', array($duzenleId));
        return view('admin/anketDuzenle', array('data' => $duzenle));
    }

    public function duzenle($duzenleId)
    {
        $gelenler = Input::all();
        $duzenle = DB::update("update anket set anket_baslik=? where id=?", array($gelenler["baslik"], $duzenleId));
        return Redirect::to('admin/anket');
    }

    public function soruDuzenleAc($duzenleId){
        $duzenle = DB::select('select * from anketdetay WHERE anket_id=?', array($duzenleId));
        return view('admin/anketSoruDuzenle', array('data' => $duzenle));
        //return view('admin/anketSoruDuzenle');
    }

    public function soruDuzenle($duzenleId){
        $gelenler = Input::All();
        $kural=array('sorunuz'=>'required');
        $dogrulama=\Validator::Make($gelenler,$kural);
        if($dogrulama->fails()){
            $bilgi["hata"]="Lütfen sorunuz alanını boş bırakmayınız!";
            $duzenle = DB::select('select * from anketdetay');
            return view('admin/anketSoruDuzenle', array('bilgi'=>$bilgi),array('data'=>$duzenle));
        }else{
            $bilgi["bilgi"]="Kayıt başarılı.";
            $bilgi["kid"]=$gelenler['soru'];
            $data=DB::update('update anketdetay set sorunuz=? WHERE id=?',array($gelenler["sorunuz"],$bilgi["kid"]));

            $duzenle = DB::select('select * from anketdetay');

            return view('admin/anketSoruDuzenle',array('bilgi' => $bilgi), array('data'=>$duzenle));
        }

    }

    public function soruEkleAc()
    {
        $gelenler = Input::All();
        $data = DB::select("select * from anket");
        return view('admin/anketSoruEkle', array('data' => $data));
    }

    public function soruEkle()
    {
        $gelenler = Input::All();

        $kural = array('sorunuz' => 'required');
        $dogrulama = \Validator::Make($gelenler, $kural);
        if ($dogrulama->fails()) {
            $bilgi["hata"] = "Lütfen soru alanını boş bırakmayınız!";
            $liste = DB::select("select * from anket");
            return view('admin/anketSoruEkle', array('bilgi' => $bilgi), array('data' => $liste));
        }

        $data = DB::insert('insert into anketdetay VALUES (NULL ,? ,?)', array($gelenler['soru'], $gelenler["sorunuz"]));

        if ($data) {
            $bilgi["bilgi"] = "Sorunuz eklemiştir";
            $liste = DB::select("select * from anket");
            $bilgi["kid"]=$gelenler['soru'];
        } else {
            $bilgi["hata"] = "Hata Oluştu";
        }
        return view('admin/anketSoruEkle', array('bilgi' => $bilgi), array('data' => $liste));
    }





}