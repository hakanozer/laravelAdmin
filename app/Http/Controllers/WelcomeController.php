<?php namespace App\Http\Controllers;

use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;
use Image;
use File;

class WelcomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {

        $veri = $this->gonder();
        $sorgu = $this->iletisimGetir();
        $data = $this->sliderGoster();
        
        $indirimliUrunler = $this->indirimliUrunler();
        $oneCikanUrunler=$this->oneCikanUrunler();
        $cokSatanUrunler=$this->cokSatanUrunler();
	$UsIltsmData = $this->UstIletisim();
        return view('site',array('ust' => $veri,'sorgu' => $sorgu,'data'=>$data,'indirimliUrunler'=>$indirimliUrunler,'oneCikanUrunler'=>$oneCikanUrunler,'cokSatanUrunler'=>$cokSatanUrunler,'UsIltsmData' => $UsIltsmData));
    }

    public function gonder(){
        $veri=DB::select('select * from kategoriler ');
        return $veri;
    }

    public function sliderGoster()
    {
        $data = DB::select('select yol, url from slider order by id desc');
        return $data;
    }

    public function iletisimGetir()
    {
        $sorgu=DB::select("select * from ayarlar");
        return $sorgu;
    }

    public function bultenAboneEkle(){
        $gelenAbone=Input::all();

        $sonuc = DB::table('bulten_abone')
            ->insert(['email' => $gelenAbone["email"], 'tarih' => date('Y-m-d H:i:s')]);
        return Redirect::to('/');
    }


    public function indirimliUrunler()
    {
        $indirimliUrunler  = DB::select('select u.*,ur.adi from urunler as u inner join urun_resimleri as ur on u.id = ur.urun_id where u.indirimli_urun = 1 order by u.id desc limit 10');
        return $indirimliUrunler;
    }
    
    public function oneCikanUrunler()
    {
        $oneCikanUrunler  = DB::select('select u.*,ur.adi from urunler as u inner join urun_resimleri as ur on u.id = ur.urun_id where u.one_cikan = 1 order by u.id desc limit 10');
        return $oneCikanUrunler;
    }
    
     public function cokSatanUrunler(){
        $cokSatanUrunler=DB::select('select u.*,ur.adi from urunler as u inner join urun_resimleri as ur on u.id = ur.urun_id where u.cok_satan = 1 order by u.id desc limit 10');
        return $cokSatanUrunler;
    }
    
     public function UstIletisim(){
        $UsIltsmData = DB::select("select * from ayarlar");
        return $UsIltsmData;
    }
}
