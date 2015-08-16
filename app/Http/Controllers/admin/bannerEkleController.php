<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 04.08.2015
 * Time: 17:31
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Image;
use Input;
use Redirect;
use Illuminate\Support\Facades\DB;



class bannerEkleController extends Controller {
    public function index()
    {
        return view('admin/bannerEkle');
    }

    public function ekle()
    {
        $yukseklik=$_POST["yukseklik"];
        $genislik=$_POST["genislik"];
//        $data = Input::all();
//        //$id = $data["id"];
//        // Validasyonlar
//        $kural = array(
//            'ad'=>'required',
//            'yol'=>'required',
//            'genislik'=>'required',
//            'yukseklik'=>'required',
//            'url'=>'required',
//            'durum'=>'required');
//        $dogrulama = \Validator::Make($data,$kural);
//        if($dogrulama->fails()){
//            // gönderilen verilerde hata var
//            return \Redirect::to('admin/bannerEkle')->withErrors($dogrulama)->withInput();
//        } else {

             if(isset($_POST["ekle"])) {

                $dosya = Input::file('dosya');
                $data = Input::all();

                $uzanti = $dosya->getClientOriginalExtension();
                $dosyaAdi = date('YmdHis') . "_b." . $uzanti;
                $path = base_path('resimler/' . $dosyaAdi);
                $imagePath = 'resimler/' . $dosyaAdi;
                Image::make($dosya->getRealPath())->resize($genislik, $yukseklik)->save($path);

                DB::insert("insert into banner values (null, ?,?,?,?,?,?,?,?,?,?,?)", array($data["adi"], '0', $data["yukseklik"], $data["genislik"], $dosyaAdi, $data["link"], '0', '0', $data["baslangic"], $data["bitis"], $data["durum"]));
                return Redirect('admin/bannerListele');
           }

        }
    }