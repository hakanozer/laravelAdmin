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
	    $haber=$this->haber();
        $icerikler=$this->icerikler();
        $ustBanner = $this->ustBannerGoster();
        $ortaBanner = $this->ortaBannerGoster();
        $altBanner = $this->altBannerGoster();
        $solAltBanner = $this->solAltBanner();
        $videoGonder=$this->videoGonder();
        $teklislider=$this->teklislider();
<<<<<<< HEAD
        $cokSatanlar= $this->cokSatanlar();
        $link = $this->linkGetir();
        return view('site',array('ust' => $veri,'sorgu' => $sorgu,'data'=>$data,'indirimliUrunler'=>$indirimliUrunler,'oneCikanUrunler'=>$oneCikanUrunler,'cokSatanUrunler'=>$cokSatanUrunler,'UsIltsmData' => $UsIltsmData,'haber'=>$haber,'icerikler'=>$icerikler, 'ustBanner'=>$ustBanner,'altBanner'=>$altBanner,'ortaBanner'=>$ortaBanner,'solAltBanner'=>$solAltBanner,'videoVeri'=>$videoGonder,'teklislider'=>$teklislider,'cokSatanlar'=>$cokSatanlar , 'link'=>$link ));

=======

        $cokSatanlar= $this->cokSatanlar();
        return view('site',array('ust' => $veri,'sorgu' => $sorgu,'data'=>$data,'indirimliUrunler'=>$indirimliUrunler,'oneCikanUrunler'=>$oneCikanUrunler,'cokSatanUrunler'=>$cokSatanUrunler,'UsIltsmData' => $UsIltsmData,'haber'=>$haber,'icerikler'=>$icerikler, 'ustBanner'=>$ustBanner,'altBanner'=>$altBanner,'ortaBanner'=>$ortaBanner,'solAltBanner'=>$solAltBanner,'videoVeri'=>$videoGonder,'teklislider'=>$teklislider,'cokSatanlar'=>$cokSatanlar ));  

        $cokSatanlar= $this->$cokSatanlar();
        return view('site',array('ust' => $veri,'sorgu' => $sorgu,'data'=>$data,'indirimliUrunler'=>$indirimliUrunler,'oneCikanUrunler'=>$oneCikanUrunler,'cokSatanUrunler'=>$cokSatanUrunler,'UsIltsmData' => $UsIltsmData,'haber'=>$haber,'icerikler'=>$icerikler, 'ustBanner'=>$ustBanner,'altBanner'=>$altBanner,'ortaBanner'=>$ortaBanner,'solAltBanner'=>$solAltBanner,'videoVeri'=>$videoGonder,'teklislider'=>$teklislider,'cokSatanlar'=>$cokSatanlar ));
>>>>>>> origin/master
    }


    // slider ürün sağ
    public function teklislider()
    {
        $teklislider=DB::select("SELECT u.id, u.baslik, u.fiyat, u.piyasa_fiyati, r.adi as resimAdi, r.klasor FROM urunler u inner join urun_resimleri r ON U.id = r.urun_id where u.durum = ? group by u.id order by u.tarih desc limit 4",array(0));
        return $teklislider;
    }
    // slider ürün sağ


    // video
    public function videoGonder(){
        $videoGonder=DB::select('select * from videolar ORDER BY id DESC limit 1');
        return $videoGonder;
    }
    // viodeo


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
public function haber()
    {

        /*Haberler*/
        $haber=DB::select('select * from haberler order BY id DESC');

        $string = "";
        foreach($haber as $haberler){
            $string = strip_tags($haberler->detay);

            if (strlen($string) > 250) {

                // truncate string
                $stringCut = substr($string, 0, 250);

                // make sure it ends in a word so assassinate doesn't become ass...
                $kisaDetay = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="haberDetay/'.$haberler->id.'">Devamini Oku </a>';
                $haberler->detay = $kisaDetay;
            }

        }



        return $haber;




    }
    public function icerikler(){
        $icerikler=DB::select('select * from icerikler order BY id DESC');
        return $icerikler;
    }

    public function haberDetay($id)
    {
        $haberDetay=DB::select('select * from haberler where id = '.$id.'');
        $icerikler = $this->icerikler();
        $sorgu = $this->iletisimGetir();
        return view('haberDetay',array('haberDetay'=>$haberDetay,'icerikler'=>$icerikler,'sorgu'=>$sorgu)) ;
    }
    public function icerikDetay($id){
        $icerikDetay=DB::select('select * from icerikler WHERE id='.$id.'');
        $icerikler = $this->icerikler();
        $sorgu = $this->iletisimGetir();
        return view('icerikDetay',array('icerikDetay'=>$icerikDetay,'icerikler'=>$icerikler,'sorgu'=>$sorgu)) ;
    }


    // banner başlangıç
    public function ustBannerGoster()
    {
        $ustBanner = DB::select('select * from banner where yukseklik = 148 order by id desc');
        return $ustBanner;
    }

    public function ortaBannerGoster()
    {
        $ortaBanner = DB::select('select * from banner where genislik = 870 order by id desc');
        return $ortaBanner;
    }

    public function altBannerGoster()
    {
        $altBanner = DB::select('select * from banner where yukseklik = 200 order by id desc');
        return $altBanner;
    }

    public function solAltBanner()
    {
        $solAltBanner = DB::select('select * from banner where yukseklik = 330 order by id desc');
        return $solAltBanner;
    }
    // banner bitiş

    //urun Detay

    public function urunDetay($id){
        $detay=DB::select('select u.*,ur.adi from urunler as u inner join urun_resimleri as ur on u.id = ur.urun_id where u.id=? ',array($id));

        return view ('urunDetay',array('detay'=>$detay));
    }

    public function cokSatanlar(){
        $query = DB::select("select urunler.id,urunler.baslik,urunler.fiyat, resim.adi from urunler inner join urun_resimleri as resim on urunler.id = resim.urun_id where urunler.cok_satan = 1 group by urunler.id order by urunler.id asc limit 5");

        $cokSatanlarIndex = 0;
        foreach($query as $value) {

            $cokSatanlar[$cokSatanlarIndex]["id"] = $value->id;
            $cokSatanlar[$cokSatanlarIndex]["baslik"] = $value->baslik;
            $cokSatanlar[$cokSatanlarIndex]["fiyat"] = $value->fiyat;
            $cokSatanlar[$cokSatanlarIndex]["resimAdi"] = $value->adi;

            $query2 = DB::select("select count(*) as sayi from urun_puan where urun_id = ?", array($value->id));

            if ($query2[0]->sayi != 0){
                $query3 = DB::select("select puan from urun_puan where urun_id = ?", array($value->id));

                $toplamPuan = 0;

                foreach($query3 as $value2){
                    $toplamPuan += $value2->puan;
                }

                $puan = $toplamPuan / $query2[0]->sayi;
                $cokSatanlar[$cokSatanlarIndex]["puan"] = round($puan);
            }
            else{
                $cokSatanlar[$cokSatanlarIndex]["puan"]= null;

            }
            $cokSatanlarIndex += 1;
        }

        return $cokSatanlar;

    }

<<<<<<< HEAD

    // iletişim
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
    // LinkGetir
    public function linkGetir(){
        $link=DB::select("select * from linkler");

        return $link;
    }



}
=======

>>>>>>> origin/master

