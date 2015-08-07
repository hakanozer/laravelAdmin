<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;


class dosyaYonetimiController extends Controller {


    public function index(){
        return view('admin/dosyaYonetimi');
    }

}