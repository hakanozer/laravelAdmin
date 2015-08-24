<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 8/22/2015
 * Time: 1:13 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;

class videoDuzController extends Controller {


    public function videoDuz($video_id)
    {
        $data = array();

        $q = "SELECT * FROM videolar WHERE id = ?";
        $al = DB::select($q, array($video_id));
        $data["videolar"] = $al[0];

        return View::make("admin/videoDuz")->with("data", $data);

    }

    public function duzForm($video_id)
    {
        $yol=base_path("bower_components/elfinder/files");
        $form = Input::all();
        $kural = array('baslik'=>'required','kisa_aciklama'=>'required','detay'=>'required' );
        $dogrulama = \Validator::Make($form,$kural);
        if($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/videoDuz/'. $video_id)->withErrors($dogrulama)->withInput();
        }


        $q = "UPDATE videolar SET baslik = ?,yol=?, kisa_aciklama = ?, detay = ? WHERE id = ?";
        $islem = DB::update($q, array( $form["baslik"],$yol, $form["kisa_aciklama"], $form["detay"], $video_id));

        if ($islem) {

            $mesaj = "basarili";
            return Redirect::to("admin/video")->with("mesaj", $mesaj);
        }
        else {
            $mesaj = "basarisiz";
            return Redirect::to("admin/video")->with("mesaj", $mesaj);
        }
        // Mesaj session'a yazılıyor redirect yapıldığı için.
    }



} 