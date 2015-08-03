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


class urunYorumController extends Controller {


    function listele()
    {
        $data = DB::select('select * from yorumlar order by id desc');
        return view('admin/urunYorumlar',array('data'=>$data));
    }

    function yorumSil($sil)
    {
        $yorumSil = DB::delete("delete from yorumlar where id = ?", array($sil));
        if($yorumSil > 0)
            return Redirect::to('admin/urunYorum');
    }

    function durumAktif($degistir)
    {
        $durum = DB::update('update yorumlar set durum=0 where id = ?', array($degistir));
        return Redirect::to('admin/urunYorum');
    }

    function durumPasif($degistir)
    {
        $durum = DB::update('update yorumlar set durum=1 where id = ?', array($degistir));
        return Redirect::to('admin/urunYorum');
    }
}