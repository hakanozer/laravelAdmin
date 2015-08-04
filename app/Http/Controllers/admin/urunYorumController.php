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



}