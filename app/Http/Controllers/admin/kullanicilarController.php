<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;


class kullanicilarController extends Controller {

    public $postBack;

    public function index(){

        $data = DB::select('select * from kullanicilar order by id desc');
        return view('admin/kullanicilar',array('data'=>$data));

    }

    public function ekle(){

        return view('admin/kullanicilarEkle');
    }

    public function ekleForm(){

        $data = Input::all();
        $kural = array('adi'=>'required','soyadi'=>'required','mail'=>'required|email','sifre'=>'required|min:3', 'sifreTekrar'=>'required|min:3|same:sifre','durum'=>'required');

        $dogrulama = \Validator::Make($data,$kural);
        if(!$dogrulama->passes()){

            return \Redirect::to('admin/kullanicilar/ekle')->withErrors($dogrulama)->withInput($data);
        }
        else
        {

            $emailControl = DB::table('kullanicilar')->where('mail', $data["mail"])->count();

            if ($emailControl > 0){
                $emailControl = true;
                $result = null;
            } else {

               $query = DB::insert("insert into kullanicilar values (null,?,?,?,?,?,now())", array($data["adi"], $data["soyadi"], $data["mail"], $data["sifre"], $data["durum"]));

                $emailControl = false;

                if ($query)
                    $result = true;
                else
                    $result = false;
            }
        }
        return view('admin/kullanicilarEkle', array('result'=>$result, 'emailControl'=>$emailControl));


    }

    public function sil($id){

        $silIslem = DB::delete("delete from kullanicilar where id = ?", array($id));
        //echo "<script>alert('".$silIslem."');</script>";
        if($silIslem > 0)
            return Redirect::to('admin/kullanicilar');
    }

    public function duzenle($id) {

        $query = DB::select("select * from kullanicilar where id = ? limit 0,1", array($id));
        $kullanici["user"] = $query[0];
        return view('admin/kullanicilarDuzenle', array('kullanici' => $kullanici));

    }

    public function duzenleForm($id){

        $data = Input::all();
        $kural = array('adi'=>'required','soyadi'=>'required','mail'=>'required|email','sifre'=>'required|min:3', 'sifreTekrar'=>'required|min:3|same:sifre','durum'=>'required');

        $dogrulama = \Validator::Make($data,$kural);
        if(!$dogrulama->passes()){

            return \Redirect::to('admin/kullanicilar/duzenle/'.$id)->withErrors($dogrulama)->withInput();
        }
        else {

            $query = DB::update("update kullanicilar set adi=?, soyadi=?, mail=?, sifre=?, durum=? where id=?", array($data["adi"], $data["soyadi"], $data["mail"], $data["sifre"], $data["durum"], $data["id"]));


            if ($query)
                $result = true;
            else
                $result = false;


        }

        $query = DB::select("select * from kullanicilar where id = ? limit 0,1", array($id));
        $kullanici["user"] = $query[0];

        return view('admin/kullanicilarDuzenle', array('result'=>$result, 'kullanici' => $kullanici));
    }

}

?>