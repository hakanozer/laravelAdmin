<?php
/**
 * Created by PhpStorm.
 * User: Tekin
 * Date: 2.5.2015
 * Time: 19:46
 */
namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Http\Requests\Auth;

class TekinController extends Controller
{

    function tekinaydogdu()
    {
        if (! \Auth::check()) {
            // echo "<script>alert('Önce Kayıt olmalısınız..');</script>";
            \Session::flash('flash_message', 'İşlem yapabilmek için önce kayıt olmalısınız. Tabii daha önce VeriTabanı Tablolarını Oluşturmalısınız :)');
            \Session::flash('flash_type', 'alert-warning');
            return \Redirect::to('auth/register');
        }
        
        return view('tekin', [
            'user' => $this->getUser()
        ]);
    }

    function tablolariOlustur()
    {
        $tabloolustur = new \CreateUsersTable();
        $tabloolustur->up();
        $resettablo = new \CreatePasswordResetsTable();
        $resettablo->up();

        return \Redirect::to('auth/register');
    }

    function getUser()
    {
        $user = array();
        $user["isim"] = \Auth::user()->name;
        return $user;
    }

    function KullaniciIslem()
    {
        $data = "Ali";
        $array = array();
        $array["isim"] = \Request::input('isim') . "deneme";
        var_dump(\Request::input());
        return view('tekin', $data);
    }

    function KisiGuncelle()
    {
        \DB::update('update users set name = ? where email = ?', [
            \Request::input('isim'),
            \Auth::user()->email
        ]);
        \Auth::user()->name = \Request::input('isim');
        return view('tekin', [
            'user' => $this->getUser()
        ]);
    }

    function KisiSil()
    {
        \Auth::logout();
        \Session::flush();
        \DB::delete('delete from users WHERE name = ?', [
            \Request::input('isim')
        ]);
        
        return \Redirect::to('auth/register');
    }
} 