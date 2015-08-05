<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 8/5/2015
 * Time: 2:33 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class urunPuanController extends Controller{


    function urunPuanlari(){

        $puan=DB::select('select up.id,u.baslik,up.puan,up.ip_no,up.tarih from urunler u left join urun_puan up on u.id = up.urun_id order by up.id desc');

        return view('admin/urunPuan',array('puan'=>$puan));
    }

} 