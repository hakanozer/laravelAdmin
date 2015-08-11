<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 7/31/2015
 * Time: 4:02 PM
 */

namespace App\Http\Controllers\admin;

use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;


class icerikController extends Controller {


    function listele()
    {
        $veri = DB::select('select * from icerikler order by id desc');
        return view('admin/icerik',array('veri'=>$veri));
    }

    function icerikSil($iceriksil)
    {
        $iceriksil = DB::delete("delete from icerikler where id = ?", array($iceriksil));
        if($iceriksil > 0)
            return Redirect::to('admin/icerik');
    }

    public function index(){
        return view('admin/icerikDuzenle');
    }




}