<?php
/**
 * Created by PhpStorm.
 * User: Web
 * Date: 7/23/2015
 * Time: 4:10 PM
 */

namespace App\Http\Controllers;

use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class veritabaniController extends Controller
{
    // Listele Fnc.
    function liste() // "veritabaniController@liste" kısmında yer alan "liste" .
    {
        $data = DB::select('select * from kullanicilar');
        return view('liste',array('data'=>$data)); // liste.blade.php'de yer alan isim olan "liste" .
    }

    // Ekle Fnc.
    public function ekle()
    {
        $data = Input::all();
        var_dump($data);

        $ekle = DB::insert("insert into kullanicilar(id,adi,soyadi,mail,sifre,tarih) values(null,?,?,?,?,now())",array($data["adi"],$data["soyadi"],$data["mail"],$data["sifre"]));

        //return view('liste');
        return Redirect::to('veritabani'); // Bu da bir yönlendirme işlemidir . to sayesinde .
    }



    // silme işlemi yapılıyor
    public function silData($sil){

        // data silme işlemi
        $silIslem = DB::delete("delete from kullanicilar where id = ?", array($sil));
        //echo "<script>alert('".$silIslem."');</script>";
        if($silIslem > 0)
            return Redirect::to('veritabani');
    }



    // düzenleme işlemi yapılıyor
    public function duzenle($id) {

        $dataDuzen = array();
        $kul = DB::select("select *from kullanicilar where id = ? limit 0,1", array($id));
        $dataDuzen["kul"] = $kul[0];
        return View::make('liste')->with("dataDuzenle",$dataDuzen);
    }


} 