<?php
/**
 * Created by PhpStorm.
 * User: wissen
 * Date: 28.4.2015
 * Time: 12:18
 */

namespace App\Http\Controllers;


use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;

class KisiController extends Controller {

    public function adiniYaz(){
        return "Merhaba Ali";
    }

    public  function tasarim(){
        return view('kisi');
    }


    public function form(){

        $data = \Input::all();
        $kural = array(
            'adi' => 'required',
            'soyadi' => 'required'
        );
        $dogrulama = \Validator::make($data,$kural);
        if($dogrulama->fails()){
            return \Redirect::to('kisi')->withErrors($dogrulama)->withInput();
        }

        //$adi = Request::input('adi');
        //var_dump($data);

        // veritabanı işlemleri
        // Bİlgi yazmalk için
        //DB::insert("insert into ogrenci values (null,'aaali','bilmem','ankara','3')");
        DB::insert('insert into bolum1 (bid, badi, aciklama, eposta) values (?, ?, ?, ?)', array('null', 'Ali','Bilmem', 'Ankara'));

        // verileri almak
        $datalar = DB::select('select *from bolum1');
        foreach($datalar as $row){
            //var_dump($row);
        }

        return view('kisi', array('data' => $data, 'vtData' => $datalar));

    }


} 