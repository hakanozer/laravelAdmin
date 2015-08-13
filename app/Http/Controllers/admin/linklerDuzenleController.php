<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/13/2015
 * Time: 4:28 PM
 */

namespace App\Http\Controllers\admin;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class linklerDuzenleController extends Controller {

     public function duzenleAc($duzenleid){
         $data = array();

         $q = "SELECT * FROM linkler WHERE id = ?";
         $al = DB::select($q, array($duzenleid));
         $data["linkler"] = $al[0];

         return View::make("admin/linklerDuzenle")->with("data", $data);


     }
    public function duzenle($duzenleid)
    {
        $form = Input::all();
        $kural = array('siteadi'=>'required','siteadresi'=>'required');
        $dogrulama = \Validator::Make($form,$kural);
        if($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/linklerDuzenle/'. $duzenleid)->withErrors($dogrulama)->withInput();
        }

        $q = "UPDATE linkler SET site_adi = ?, site_adresi = ? WHERE id = ?";
        $islem = DB::update($q, array( $form["siteadi"],  $form["siteadresi"], $duzenleid));

        if ($islem) {

            $mesaj = "basarili";
            return Redirect::to("admin/linkler")->with("mesaj", $mesaj);
        }
        else {
            $mesaj = "basarisiz";
            return Redirect::to("admin/linkler")->with("mesaj", $mesaj);
        }


        // Mesaj session'a yazılıyor redirect yapıldığı için.

    }


    public function link()
    {
        return view('admin/linkler');
    }


} 