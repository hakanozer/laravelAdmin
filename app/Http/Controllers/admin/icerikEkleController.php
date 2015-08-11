<?php


namespace App\Http\Controllers\admin;

use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;




class icerikEkleController extends Controller {

    public function ekle()
    {
        $data = Input::all();
        $kural = array('baslik'=>'required','kisa_aciklama'=>'required','detay'=>'required' );
        $dogrulama = \Validator::Make($data,$kural);
        if($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/icerikEkle')->withErrors($dogrulama)->withInput();
        }
            //var_dump($data);
            $veri = DB::insert("insert into icerikler values(null,?,?,?,now())", array($data["baslik"], $data["kisa_aciklama"], $data["detay"]));

        return \Redirect::to('admin/icerikEkle');

    }

    public function index(){
        return view('admin/icerikEkle');
    }








}