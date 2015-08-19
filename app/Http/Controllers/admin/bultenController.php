<?php
/**
 * Created by PhpStorm.
 * User: Fatih
 * Date: 7.8.2015
 * Time: 22:55
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;

class bultenController extends Controller {

    // Bülten Aboneleri Listesi
    public function index(){
        $ss = DB::select('select * from bulten');
        return View::make('admin/bulten')->with('veri',$ss);
    }

    // Abone Ekleme Sayfası
    public function aboneEkleIndex(){
        return view('admin/aboneEkle');
    }

    // Abone Ekleme İşlemi
    public function aboneEkle()
    {
        $hataliEpostalar = array();
        $bilgi = array();
        $mailler = Input::all();
        $sayac = 0;

        // e-posta mı e-postalar mı?
        $maillerVirgul = strstr($mailler['E-Posta'], ",", true);



        #region Çoklu E-Posta
        if ($maillerVirgul) {
            // maillerdeki boşluklar kaldırıldı.
            $mailler1 = str_replace(" ", "", $mailler["E-Posta"]);

            // mailleri ayıran virgüller esas alınarak mailler belirlendi.
            $mailler2 = explode(",", $mailler1);


            $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
            foreach($mailler2 as $item) {
                if(preg_match($pattern, $item) === 1) {
                    // doğru
                }else {

                    // hatalı
                    $hataliEpostalar[] = $item;
                }

            }

            var_dump($hataliEpostalar);

            // TODO: validasyonu hocaya sor
            #region E-postaların hepsi doğru mu?
            if ($mailler2) {

            }
            #endregion

            #region Kayıt İşlemi
            else{
                // geri kalan sağlam e-postalar kayıt işlemine tabi tutuluyor.
                for ($i = 0; $i < count($mailler2); $i++) {
                    $sonuc = DB::table('bulten')->insert(['email' => $mailler2[$i], 'tarih' => date('Y-m-d H:i:s')]);
                    if ($sonuc) {
                        $sayac++;
                    }
                }

                // Bildirim için gerekli kontroller yapılıyor.
                if ($sayac) {
                    if ($hataliEpostalar) {
                        return view('admin/bulten/aboneEkle', array('hataliEpostalar', $hataliEpostalar));
                    }
                    else{
                        $bilgi["bilgi"] = $sayac." adet e-posta eklendi.";
                    }
                }
                else {
                    $bilgi["hata"] = "E-posta kaydı sırasında beklenmeyen bir hata oluştu.";
                }

                return View::make('admin/aboneEkle', array('bilgi'=>$bilgi));
            }
            #endregion
        }
        #endregion

        #region Tek E-Posta
        else{
            $kural = array('E-Posta' => 'required|email');
            $dogrulama = Validator::Make($mailler, $kural);

            if ($dogrulama->fails()) {
                return \Redirect::to('admin/bulten/aboneEkle')->withErrors($dogrulama)->withInput();
            }

            $kayit = DB::table('bulten')->insert(['email' => $mailler['E-Posta'], 'tarih' => date('Y-m-d H:i:s')]);

            if (!empty($kayit)) {
                $bilgi["bilgi"] = $kayit." adet e-posta eklendi.";
            }
            else{
                $bilgi["hata"] = "E-posta eklenirken beklenmeyen bir hata oluştu.";
            }

            return View::make('admin/aboneEkle', array('bilgi'=>$bilgi));
            //return Redirect::to('admin/aboneEkle', array('bilgi'=>$bilgi));
        }
        #endregion

    }

    // TODO: seçilenleri sil kısmı yapılabilir. (SİLME İŞLEMİ ÇALIŞMAKTADIR)
    // Abone Silme İşlemi
    public function aboneSil($id){
        if (count($id)==1) {
            $sonuc = DB::table('bulten')->where('id', $id)->delete();
            if ($sonuc) {
                return Redirect::to('admin/bulten');
            }
            else{
                echo "Başarısız Silme";
            }
        }
        else if(count($id)>1){
            for ($i = 0; $i < count($id); $i++) {
                $sonuc = DB::table('bulten')->where('id', $id[$i])->delete();
            }
            if ($sonuc) {
                return Redirect::to('admin/bulten');
            }
            else{
                echo "Başarısız Silme";
            }
        }
        else{}
    }

    // Çoklu Abone Sil İşlemi
    public function aboneCokluSil(){
        $gelenInput = Input::all();
        var_dump($gelenInput);
    }

    // Abone Düzenleme Sayfası
    public function aboneDuzenleAc($id){
        $gelen = DB::select('select * from bulten where id=?', array($id));
        $sonuc = (array)$gelen[0];
        return View::make("admin/aboneDuzenle")->with("data", $sonuc);
    }

    // Abone Düzenleme İşlemi
    public function aboneDuzenle($id){
        $data = Input::all();
        $sonuc = DB::table('bulten')->where('id', $id)->update(array('email' => $data['email']));
        if ($sonuc) {
            $bilgi['bilgi'] = "E-Posta başarı ile güncellenmiştir.";
        }
        else{
            $bilgi['hata'] = "E-Posta güncelleme işlemi başarısız oldu.";
        }
        return view('admin/aboneDuzenle', array('bilgi'=>$bilgi));
    }

    // Bülten Sayfası
    public function bultenOlustur(){
        return view('admin/bultenOlustur');
    }
}
