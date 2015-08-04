<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/3/2015
 * Time: 4:32 PM
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class cikisController extends Controller {

    /* AÇIKLAMA
     * sessionController ile daha önce giriş yapmamış kullanıcının çıkış yapmaya çalışmasının önüne geçilmiştir.
     * flush() ile session bilgileri sıfırlanmıştır.
     * forget() ile kullanıcı bilgilerine ait çerezler sıfırlanmıştır.
     * anasayfaya yönlendirme yapılmıştır.
     */

    public function cikisYap()
    {
        Session::flush();
        Cookie::forget('user');
        return \Redirect::to('admin');
    }
} 