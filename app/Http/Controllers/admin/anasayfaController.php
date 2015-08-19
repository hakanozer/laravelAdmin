<?php
/**
 * Created by PhpStorm.
 * User: Fatih
 * Date: 20.8.2015
 * Time: 00:50
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class anasayfaController extends Controller {

    public function index(){
        $urunler = DB::table('urunler')->count();
        $icerikler = DB::table('icerikler')->count();
        $siparisler = DB::table('siparisler')->count();
        $bultenler = DB::table('bulten')->count();
        $bannerlar = DB::table('banner')->count();
        $anketler = DB::table('anket')->count();
        $sosyalmedyalar = DB::table('sosyalmedya')->count();

        return view('admin/anasayfa')
            ->with('urunler',$urunler)
            ->with('icerikler',$icerikler)
            ->with('siparisler',$siparisler)
            ->with('bultenler',$bultenler)
            ->with('bannerlar',$bannerlar)
            ->with('anketler',$anketler)
            ->with('sosyalmedyalar',$sosyalmedyalar);
    }
} 