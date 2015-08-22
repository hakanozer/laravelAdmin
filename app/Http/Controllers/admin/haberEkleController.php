<?php


namespace App\Http\Controllers\admin;

use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use Image;






class haberEkleController extends Controller {

    public function haberEkle()

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
            $destinationPath = 'haberResimler/';
            $extension = $file->getClientOriginalExtension();
            $filename = trcharacter(substr($file->getClientOriginalName(),0,-5))."_".str_random(12).".{$extension}";
            $upload_success = $file->move($destinationPath, $filename);
            DB::insert("insert into haberler values(null,?,?,?,?,now())", array($data["haber_baslik"], $data["detay"], $filename,$data["durum"]));
        }
    }
return redirect::To('admin/haberler');
//       $data = Input::all();
//       $kural = array('haber_baslik'=>'required','detay'=>'required','dosya'=>'required','durum'=>'required' );
//       $dogrulama = \Validator::Make($data,$kural);
//       if($dogrulama->fails()) {
//           // gönderilen verilerde hata var
//           return \Redirect::to('admin/haberEkle')->withErrors($dogrulama)->withInput();
//       }
//       $dosya=Input::file('dosya');

//       $uzanti = $dosya->getClientOriginalExtension();
//       $dosyaAdi=date('YmdHis')."_b.".$uzanti;
//       $path = base_path('haberResimler/'.$dosyaAdi);
//       $imagePath = 'haberResimler/'.$dosyaAdi;
//       //Image::make($dosya->getRealPath())->save($path);
//       //Image::make($dosya->getRealPath())->save($path);
//       Image::make($dosya->getRealPath())->resize(100, 100)->save($path);
//       //var_dump($data);
//       $veri = DB::insert("insert into haberler values(null,?,?,?,?,now())", array($data["haber_baslik"], $data["detay"],
//           $imagePath,$data["durum"]));

//       return \Redirect::to('admin/haberEkle');

    }



    public function index(){
        return view('admin/haberEkle');
    }
}

