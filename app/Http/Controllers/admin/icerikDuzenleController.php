<?php


namespace App\Http\Controllers\admin;

use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;




class icerikDuzenleController extends Controller {

    public function icerikDuzenleAc($icerik_id)
    {
        $data = array();

        $q = "SELECT * FROM icerikler WHERE id = ?";
        $al = DB::select($q, array($icerik_id));
        $data["icerikler"] = $al[0];

        return View::make("admin/icerikDuzenle")->with("data", $data);


    }
    public function duzenleForm($icerik_id)
    {
            $form = Input::all();
        $kural = array('baslik'=>'required','kisa_aciklama'=>'required','detay'=>'required' );
        $dogrulama = \Validator::Make($form,$kural);
        if($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/icerikDuzenle/'. $icerik_id)->withErrors($dogrulama)->withInput();
        }

            $q = "UPDATE icerikler SET baslik = ?, kisa_aciklama = ?, detay = ? WHERE id = ?";
            $islem = DB::update($q, array( $form["baslik"],  $form["kisa_aciklama"], $form["detay"], $icerik_id));

            if ($islem) {

                $mesaj = "basarili";
                return Redirect::to("admin/icerik")->with("mesaj", $mesaj);
            }
            else {
                $mesaj = "basarisiz";
                return Redirect::to("admin/icerik")->with("mesaj", $mesaj);
            }


        // Mesaj session'a yazılıyor redirect yapıldığı için.

    }


    public function index()
    {
        return view('admin/icerikEkle');
    }



}