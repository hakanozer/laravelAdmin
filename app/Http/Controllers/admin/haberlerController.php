<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use \Illuminate\Redis\Database;

use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;





class haberlerController extends Controller {


    public function durumAc($haber_id)
    {
        $data = array();

        $q = "SELECT * FROM haberler WHERE durum = ?";
        $al = DB::select($q, array($haber_id));
        $data["haberler"] = $al[0];

        return View::Make("admin/haberler")->with("data", $data);


    }

    function listele()
    {
        $veri = DB::select('select * from haberler order by id desc');
        return view('admin/haberler',array('veri'=>$veri));
    }

    function haberSil($habersil)
    {
        $habersil = DB::delete("delete from haberler where id = ?", array($habersil));
        if($habersil > 0)
            return Redirect::to('admin/haberler');
    }


    function durumPasifAktif(){
        $data = Input::all();
        if ($data["durum"] == "hepsi") {
            $veri = DB::select('select * from haberler order by id desc');
            return view('admin/haberler',array('veri'=>$veri));
        }

        if ($data["durum"] == "aktif") {
            $veri = DB::select('select * from haberler where durum = 0 order by id desc');
            return view('admin/haberler',array('veri'=>$veri));
        }

        if ($data["durum"] == "pasif") {
            $veri = DB::select('select * from haberler where durum = 1 order by id desc');
            return view('admin/haberler',array('veri'=>$veri));
        }

    }


    public function index(){
        return view('admin/haberler');
    }

}






