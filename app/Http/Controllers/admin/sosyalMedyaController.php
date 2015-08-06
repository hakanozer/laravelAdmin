<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/5/2015
 * Time: 6:34 PM
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Redirect;

class sosyalMedyaController extends Controller {

    public function sosyalMedya(){

        return view('admin/sosyalMedya');

    }
    public function ekle(){

        $data = Input::all();
        $dataDuzenle = DB::update("update sosyalmedya set facebook=?, twitter=?,linkedin=?,googleplus=?,instagram=? where id=? ", array($data["facebook"],$data["twitter"],$data["linkedin"],$data["googleplus"],$data["instagram"], '1'));
        return view('admin/sosyalMedya');

    }





} 