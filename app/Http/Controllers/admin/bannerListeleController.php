<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 04.08.2015
 * Time: 17:31
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Image;
use \Intervention\Image\ImageServiceProvider;
use Redirect;
use View;

class bannerListeleController extends Controller {
    public function index()
    {
        $data=DB::select('select * from banner');
        $modalID = 0;

        return view('admin/bannerListele')->with(array('data'=>$data, 'modalID'=>$modalID));
    }
    public function listele()
    {
        $data=DB::select('select * from banner');
        var_dump($data);
        return Redirect("admin/bannerListele",array("data"=>$data));


    }
    function bannerSil($sil)
    {

        $bannerSil = DB::delete("delete from banner where id = ?", array($sil));
        if($bannerSil)
            return Redirect::to('admin/bannerListele');


    }

    function bannerDuzenle($duzenle)
    {
        $veri = array();
        $data = DB::select('select * from banner where id = ?', array($duzenle));
        $veri["banner"] = $data[0];
        return View::make("admin/bannerDuzenle")->with("data", $veri);
    }
    function bannerDuzenleKaydet($duzenle)
    {
        $inputlar = Input::all();

        $veri = array();
        $data = DB::select('select * from banner where id = ?', array($duzenle));
        $veri["banner"] = $data[0];
        return View::make("admin/bannerDuzenle")->with("data", $veri);
    }

} 