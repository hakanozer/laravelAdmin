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

        return view('site', array('ust' => $veri), array('sorgu' => $sorgu), array('data'=>$data));
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

    public function contactUs(){
        $sorgu = $this->iletisimGetir();
        $veri = $this->gonder();
        return view('contactUs',array('sorgu'=>$sorgu));

    }
    public function contactUsKaydet()
    {
        $contactBilgi = Input::all();


        $contactSonuc = DB::table('iletisim_mesaj')
            ->insert(['baslik' => $contactBilgi["baslik"],'mail' => $contactBilgi["mail"],'referans_no' => $contactBilgi["referans"],'mesaj' => $contactBilgi["message"], 'tarih' => date('Y-m-d H:i:s')]);
        return Redirect::to('iletisim');
    }


}
