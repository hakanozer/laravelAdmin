<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/7/2015
 * Time: 4:22 PM
 */

namespace App\Http\Controllers\admin;

use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;

class linklerController extends Controller {

    public function link(){

        return view('admin/linkler');

    }

    public function ekle(){

        $data=Input::all();

        $dataEkle=DB::insert("insert into linkler values(null,?,?)",array($data["siteadi"],$data["siteadresi"]));

        if($dataEkle)
         return Redirect::to('admin/linkler');
        else
            echo "hata  ";


    }
    public function listele() {
        $data=DB::select("select * from linkler order by id desc");
        return view('admin/linkler',array('data'=>$data));

    }
    public function sil($sil) {

        $data=DB::delete("delete from linkler where id=?",array($sil));
        if ($data>0){
            return Redirect::to('admin/linkler');
        }
    }





} 