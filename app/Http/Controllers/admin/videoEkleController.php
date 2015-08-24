<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 8/22/2015
 * Time: 12:08 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;

class videoEkleController extends Controller {


    public function index(){

        return view('admin/videoEkle');

    }
    public function ekle()
    {
        $data = Input::all();
        $yol=base_path("bower_components/elfinder/files");

        $kural = array('baslik'=>'required','kisa_aciklama'=>'required','detay'=>'required' );
        $dogrulama = \Validator::Make($data,$kural);
        if($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/videoEkle')->withErrors($dogrulama)->withInput();
        }

        //var_dump($data);
        $veri = DB::insert("insert into videolar values(null,?,?,?,?,now())", array($data["baslik"],$yol, $data["kisa_aciklama"], $data["detay"]));

        return \Redirect::to('admin/video');

    }


} 