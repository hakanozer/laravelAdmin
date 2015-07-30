<?php
/**
 * Created by PhpStorm.
 * User: wissen
 * Date: 4.5.2015
 * Time: 12:35
 */

namespace App\Http\Controllers;

use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class uyeController extends Controller {


    public function uye(){

        $datalar = DB::select("select *from kullanicilar");
        return view('uyeler', array("datalar"=>$datalar));
    }


    public function sil($id){

        DB::delete("delete from kullanicilar WHERE id = ?", array($id));
        return Redirect::to('uyeler');
    }


} 