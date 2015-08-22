<?php


namespace App\Http\Controllers\admin;

use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use File;



class haberDuzenleController extends Controller {

    public function haberDuzenleAc($haber_id)
    {
        $data = array();

        $q = "SELECT * FROM haberler WHERE id = ?";
        $al = DB::select($q, array($haber_id));
        $data["haberler"] = $al[0];
        return View::Make("admin/haberDuzenle")->with("data", $data);
    }


    public function haberDuzenle($haber_id)
    {
        function trcharacter($s)
        {
            $tr = array('ş', 'Ş', 'ı', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'ç', 'Ç');
            $en = array('s', 's', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c');
            $s = str_replace($tr, $en, $s);
            $s = strtolower($s);
            $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '-', $s);
            $s = preg_replace('/[^%a-z0-9 _-]/', '-', $s);
            $s = preg_replace('/\s+/', '-', $s);
            $s = preg_replace('|-+|', '-', $s);
            $s = str_replace("--", "-", $s);
            $s = trim($s, '-');
            return $s;
        }

        $data = Input::all();
        if (Input::hasFile('dosya')) {
            $eskiResim = DB::select("select resimYolu from haberler where id = ?", array($haber_id));
            echo "Resim Yolu ".$eskiResim[0]->resimYolu;
            $eskiResimFileName = $eskiResim[0]->resimYolu;
            File::delete("haberResimler/".$eskiResimFileName);

            $file = Input::file('dosya');
            $destinationPath = 'haberResimler/';
            $extension = $file->getClientOriginalExtension();
            $filename = trcharacter(substr($file->getClientOriginalName(), 0, -5)) . "_" . str_random(12) . ".{$extension}";
            $upload_success = $file->move($destinationPath, $filename);
            DB::insert("update haberler set resimYolu = ? where id = ?", array($filename, $haber_id));
        }

        $form = Input::all();

        $kural = array('haber_baslik' => 'required', 'detay' => 'required', 'durum' => 'required');
        $dogrulama = \Validator::Make($form, $kural);

        if ($dogrulama->fails()) {
            // Gönderilen Verilerde Hata Varsa ...
            return \Redirect::to('admin/haberDuzenle/' . $haber_id)->withErrors($dogrulama)->withInput();
        }

        $data = DB::update('update haberler set haber_baslik = ?, detay = ?, durum = ? WHERE id = ?', array($form["haber_baslik"], $form["detay"], $form["durum"], $haber_id));

        if ($data) {
            $mesaj = "basarili";
            return Redirect::to("admin/haberler")->with("mesaj", $mesaj);
        } else {
            $mesaj = "basarisiz";
            return Redirect::to("admin/haberler")->with("mesaj", $mesaj);
        }
    }


    public function index()
    {
        return view('admin/haberEkle');
    }



}