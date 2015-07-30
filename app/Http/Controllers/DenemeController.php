<?php
/**
 * Created by PhpStorm.
 * User: wissen
 * Date: 28.4.2015
 * Time: 10:46
 */

namespace App\Http\Controllers;


class DenemeController extends Controller {


    public function index()
    {
        return view('home');
        //return "Merhaba Dünya";
        //return "Hello, world!";
    }





    public function deneme()
    {

        /*
        $tabloolustur = new \CreateUsersTable();
        $tabloolustur->up();
        $resettablo = new \CreatePasswordResetsTable();
        $resettablo->up();
        */
        return view('deneme');
        //return "Merhaba Dümya";
    }


} 