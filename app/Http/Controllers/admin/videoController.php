<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 8/22/2015
 * Time: 11:53 AM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;

class videoController extends Controller {

    function listele()
    {
        $veri = DB::select('select * from videolar order by id desc');
        return view('admin/video',array('veri'=>$veri));
    }
    function videoSil($videoSil)
    {
        $videoSil = DB::delete("delete from videolar where id = ?", array($videoSil));
        if($videoSil > 0)
            return Redirect::to('admin/video');
    }

} 