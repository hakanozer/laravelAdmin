<?php
/**
 * Created by PhpStorm.
 * User: Fatih
 * Date: 2.8.2015
 * Time: 22:48
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;


class sessionController
{

    /* AÇIKLAMA
     * Session('email') varsa if koşulu çalışacak ve kullanıcıya ait adı ve soyadı bilgileri veritabanından
     * alınmaktadır. Daha sonra anasayfaya bu bilgiler ile yönlendirme yapılmaktadır.
     *
     * Cookie('user') var ise else if çalışacak ve cookie bilgileri session'a aktarılacaktır. Daha sonra ise
     * if içerisindeki işlemin aynısı gerçekleşmektedir.
     *
     * else komutu ile izinsiz erişimin önüne geçilerek giriş sayfasına yönlendirme yapılmaktadır.
     * */

    public static function kontrol()
    {
        $SessionValue = session('email');
        $CookieValue = Cookie::get('user');

        if(!empty($SessionValue)){
            $gelen = DB::select('select * from admin where id=?', array(Session::get('id')));
            $bilgi = $gelen[0];
            Session::put('adi', $bilgi->adi);
            Session::put('soyadi', $bilgi->soyadi);
            return view('admin/anasayfa')->with('bilgi', $bilgi);
        }
        else if(!empty($CookieValue)){
            Session::put('id', $CookieValue["id"]);
            Session::put('email', $CookieValue["email"]);
            Session::put('password', $CookieValue["password"]);

            $gelen = DB::select('select * from admin where id=?', array(Session::get('id')));
            $bilgi = $gelen[0];

            Session::put('adi', $bilgi->adi);
            Session::put('soyadi', $bilgi->soyadi);
            return view('admin/anasayfa')->with('bilgi', $bilgi);
        }
        else{
            echo "<script>window.location.href = 'http://localhost:8080/laravelAdmin/admin';</script>";
        }
    }


} 