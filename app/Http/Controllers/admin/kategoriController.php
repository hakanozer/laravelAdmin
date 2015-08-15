<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 8/3/2015
 * Time: 3:20 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Console\Tinker\Presenters\EloquentModelPresenter;
use Illuminate\Support\Facades\DB;
use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;



class kategoriController extends Controller
{

    public $html = "";

    public static  function liste($id=0,$string=0) {
        global $html;

        $ustKat = DB::select("select * from kategoriler where ust_id='$id'");
        $bilgi=DB::select("select * from kategoriler");

        $i = 0;
        foreach ($ustKat as $k_item) {

            if($k_item->ust_id == "0") {
                $html .= '<option value="'. $k_item->id .'"> '.$k_item->baslik.' </option>';
            }else {
                $bosluk = '-';
                $ustKatBak = DB::select("select * from kategoriler where id='$k_item->ust_id'");
                foreach ($ustKatBak as $veri) {
                    $i++;
                    if($veri->ust_id > 0) {$bosluk .= '-'; }
                }
                $html .= '<option value="'. $k_item->id .'"> '.$bosluk.' '.$k_item->baslik.' </option>';
            }
            kategoriController::liste($k_item->id,$string+1);
        }
        return view('admin/kategori', array('data' => $html));
    }

    public function olay(){

        $durum = Input::all();

        if(isset($durum["sil"])) {

            // silme işlemi
            $sil_id = $durum["topCategory"];
            $silIslem = DB::delete("delete from kategoriler where id = ?", array($sil_id));
        }
        return Redirect::to('admin/kategori');
    }

    public function duzenleAc()
    {
        $durum = Input::all();
        if(empty($durum["topCategory"])){
            return Redirect::to('admin/kategori');}
        else{
            if (isset($durum["duzenle"])) {

                $gelen = DB::select("select *from kategoriler where id = ?", array($durum["topCategory"]));
                return view::make('admin/kategori', array('bilgi' => $gelen));
            }
        }
    }
    public function duzenleKaydet()
    {
        $durum = Input::all();
        if (isset($durum["guncelle"])) {
            $gelen = DB::select("update kategoriler set baslik = ? where id = ?", array($durum["kategoriAdi"],$durum["kategoriId"]));
            return Redirect::to('admin/kategori');
        }
    }
    public function ekle(){

        $durum = Input::all();
        $kural = array(
            'kategori_adi'=>'required|max:60',
        );
        $dogrulama = \Validator::Make($durum,$kural);
        if($dogrulama->fails()){
            // gönderilen verilerde hata var
            return \Redirect::to('admin/kategori')->withErrors($dogrulama)->withInput();
        } else {

            $giden = DB::insert("insert into kategoriler  VALUES (NULL ,?,?)", array($durum["topCategory"], $durum["kategori_adi"]));

            if (isset($giden)) {
                return Redirect::to('admin/kategori');
            }
        }
        }
}