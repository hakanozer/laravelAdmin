<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/6/2015
 * Time: 2:36 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;
use Image;
use File;

class sliderController extends Controller
{
    function sliderListele()
    {
        $data = DB::select('select * from slider order by id desc');
        return view('admin/sliderYonetimi',array('data'=>$data));
    }

    function sliderSil($sil)
    {
        $silenecek = DB::select("select yol from slider where id = ?", array($sil));
        $fileName = $silenecek[0]->yol;
        File::delete("slider/".$fileName);

        $sliderSil = DB::delete("delete from slider where id = ?", array($sil));
        if($sliderSil > 0)
            return Redirect::to('admin/sliderYonetimi');
    }

    function sliderDuzenle($duzenle)
    {
        $veri = array();
        $data = DB::select('select * from slider where id = ?', array($duzenle));
        $veri["slider"] = $data[0];
        return View::make("admin/sliderDuzenle")->with("data", $veri);
    }

    function sliderDuzenleForm($guncelle)
    {
        function trcharacter($s)
        {
            $tr = array('ş','Ş','ı','İ','ğ','Ğ','ü','Ü','ö','Ö','ç','Ç');
            $en = array('s','s','i','i','g','g','u','u','o','o','c','c');
            $s = str_replace($tr,$en,$s);
            $s = strtolower($s);
            $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '-', $s);
            $s = preg_replace('/[^%a-z0-9 _-]/', '-', $s);
            $s = preg_replace('/\s+/', '-', $s);
            $s = preg_replace('|-+|', '-', $s);
            $s = str_replace("--","-",$s);
            $s = trim($s, '-');
            return $s;
        }

        $data = Input::all();
        if (Input::hasFile('dosya'))
        {
            $eskiResim = DB::select("select yol from slider where id = ?", array($guncelle));
            $eskiResimFileName = $eskiResim[0]->yol;
            File::delete("slider/".$eskiResimFileName);

            $file = Input::file('dosya');
            $destinationPath = 'slider/';
            $extension = $file->getClientOriginalExtension();
            $filename = trcharacter(substr($file->getClientOriginalName(),0,-5))."_".str_random(12).".{$extension}";
            $upload_success = $file->move($destinationPath, $filename);
            DB::insert("update slider set yol = ? where id = ?", array($filename,$guncelle));
        }

        $form = Input::all();

        $kural = array('baslik'=>'required','aciklama'=>'required','url'=>'required');
        $dogrulama = \Validator::Make($form,$kural);

        if($dogrulama->fails())
        {
            // Gönderilen Verilerde Hata Varsa ...
            return \Redirect::to('admin/sliderDuzenle/'.$guncelle)->withErrors($dogrulama)->withInput();
        }

        $data = DB::update('update slider set baslik = ?, kisa_aciklama = ?, url = ? WHERE id = ?', array( $form["baslik"],  $form["aciklama"], $form["url"], $guncelle));

        if ($data)
        {
            $mesaj = "basarili";
            return Redirect::to("admin/sliderYonetimi")->with("mesaj", $mesaj);
        }
        else
        {
            $mesaj = "basarisiz";
            return Redirect::to("admin/sliderYonetimi")->with("mesaj", $mesaj);
        }
    }

    function sliderEkle()
    {
        return View::make("admin/sliderEkle");
    }

    function yeniSlider()
    {
        function trcharacter($s)
        {
            $tr = array('ş','Ş','ı','İ','ğ','Ğ','ü','Ü','ö','Ö','ç','Ç');
            $en = array('s','s','i','i','g','g','u','u','o','o','c','c');
            $s = str_replace($tr,$en,$s);
            $s = strtolower($s);
            $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '-', $s);
            $s = preg_replace('/[^%a-z0-9 _-]/', '-', $s);
            $s = preg_replace('/\s+/', '-', $s);
            $s = preg_replace('|-+|', '-', $s);
            $s = str_replace("--","-",$s);
            $s = trim($s, '-');
            return $s;
        }

        if(isset($_POST["ekle"]))
        {
            $data = Input::all();
            if (Input::hasFile('dosya'))
            {
                $file = Input::file('dosya');
                $destinationPath = 'slider/';
                $extension = $file->getClientOriginalExtension();
                $filename = trcharacter(substr($file->getClientOriginalName(),0,-5))."_".str_random(12).".{$extension}";
                $upload_success = $file->move($destinationPath, $filename);
                DB::insert("insert into slider values (null,?,?,?,?,?,now())", array($data["adi"],$filename,$data["baslik"], $data["aciklama"],$data["url"]));
            }
        }
            return redirect::To('admin/sliderYonetimi');
    }
}