<?php
/**
 * Created by PhpStorm.
 * User: Fatih
 * Date: 1.8.2015
 * Time: 14:52
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\sessionController;

class anasayfaController extends Controller {

    /* sessionController ile mail ve şifresiz giriş engellenmiştir. */

    public function index(){
        return view('admin/anasayfa');
    }
} 