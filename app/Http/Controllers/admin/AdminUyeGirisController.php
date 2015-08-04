<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class AdminUyeGirisController extends Controller
{

    public function  giris()
    {
        return view('admin/adminGiris');
    }

    public function girisKontrol()
    {
        #region E-mail ve Şifre kontrolü
        $data = Input::all();
        $kural = array('email' => 'required|email', 'password' => 'required');
        $dogrulama = \Validator::Make($data, $kural);
        if ($dogrulama->fails()) {
            // gönderilen verilerde hata var
            return \Redirect::to('admin/')->withErrors($dogrulama)->withInput();
        }
        #endregion!

        #region Kullanıcı var mı?
        $bilgi = array();
        $gelen = DB::select('select * from admin where mail=? and sifre=?',
            array($data["email"], md5($data["password"])));
        $bilgi = $gelen[0];
        #endregion

        #region Kullanıcı varsa ne olacak?
        /*Session ile bilgilerini tut. Eğer "BENİ HATIRLA" ile giriş yaptı ise Cookie de oluştur.
        Kullanıcı yoksa giriş sayfasına yönlendir.*/
        if ($gelen) {
            if (isset($data["remember"])) {
                Session::put('id', $bilgi->id);
                Session::put('email', $data["email"]);
                Session::put('password', $data["password"]);
                Cookie::queue(Cookie::make('user', array($bilgi->id, $data["email"], $data["password"], 24000)));
//
                return Redirect::to('admin/anasayfa');
            } else {
                Session::put('id', $bilgi->id);
                Session::put('email', $data["email"]);
                Session::put('password', $data["password"]);
//
                return Redirect::to('admin/anasayfa');
            }
        } else {
            return view('admin');
        }
        #endregion
    }

} 