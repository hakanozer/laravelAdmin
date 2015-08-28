<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('/haberDetay/{id}', 'WelcomeController@haberDetay');
Route::get('/icerikDetay/{id}', 'WelcomeController@icerikDetay');


Route::get('sayfa', 'HomeController@sayfa');


// üye listeleri alınıyor
Route::get('uyeler', 'uyeController@uye');
Route::get('uyeler/sil/{id}','uyeController@sil');

Route::get('deneme', 'denemeController@deneme');
// KULLANICILAR:

Route::get('tekin', 'TekinController@tekinaydogdu');
Route::get('tablolariOlustur', 'TekinController@tablolariOlustur');
Route::post('kisiGuncelle', 'TekinController@KisiGuncelle');
Route::post('kisiSil', 'TekinController@KisiSil');

/** anasayfa */
Route::get("kullanicilar", "KullanicilarController@index");

/** kullanıcılar listesi. */
Route::get("kullanicilar/liste", "KullanicilarController@liste");

/** Kullanıcı düzenleme sayfası. */
Route::get("kullanicilar/duzenle/{id}", "KullanicilarController@duzenle");
Route::post("kullanicilar/duzenle/{id}", "KullanicilarController@duzenleForm");

/** Kullanıcı silme işlemi. */
Route::get("kullanicilar/sil/{id}", "KullanicilarController@silForm");

/** Kullanıcı ekleme sayfası. */
Route::get("kullanicilar/ekle", "KullanicilarController@ekle");
Route::post("kullanicilar/ekle", "KullanicilarController@ekleForm");

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Veritabanı İşlemleri İçin Fonksiyonlar
Route::get("veritabani","veritabaniController@liste"); // veritabanı controller'ı aç ve içerisinden "liste" adındaki fonksiyonu çalıştır demiş olduk ... @işareti ile veritabanı içerisinde "liste" fonksiyonunu aramış olduk .
Route::post("veritabani/ekle","veritabaniController@ekle");
Route::get("veritabani/sil/{id}","veritabaniController@silData");
Route::get("veritabani/duzenle/{id}", "veritabaniController@duzenle");
Route::post("veritabani/duzenle/{id}", "veritabaniController@duzenleForm");




// Admin Başlangıç
Route::get('admin', 'admin\AdminUyeGirisController@giris');
Route::post('admin','admin\AdminUyeGirisController@girisKontrol');

// Admin Anasayfa Yönlendirme
Route::get('admin/anasayfa', 'admin\anasayfaController@index');

// Admin Çıkış
Route::get('admin/cikis', 'admin\cikisController@cikisYap');


// admin panel boş sayfa başlıyor
Route::get('admin/bos', 'admin\bosController@index');

Route::get('admin/kullanicilar', 'admin\kullanicilarController@index');
Route::get('admin/kullanicilar/ekle', 'admin\kullanicilarController@ekle');
Route::post('admin/kullanicilar/ekle', 'admin\kullanicilarController@ekleForm');
Route::get('admin/kullanicilar/sil/{id}', 'admin\kullanicilarController@sil');
Route::get('admin/kullanicilar/duzenle/{id}', 'admin\kullanicilarController@duzenle');
Route::post('admin/kullanicilar/duzenle/{id}', 'admin\kullanicilarController@duzenleForm');

// ürün yorumları
Route::get('admin/urunYorum', 'admin\urunYorumController@listele');

// yorum ekle
Route::post('urunYorum/yorumEkle','admin\urunYorumController@yorumEkle');

// ürün silme
Route::get('admin/urunYorum/sil/{id}', 'admin\urunYorumController@yorumSil');

// ürün durum degistirme
Route::get('admin/urunYorum/durumAktif/{id}', 'admin\urunYorumController@durumAktif');
Route::get('admin/urunYorum/durumPasif/{id}', 'admin\urunYorumController@durumPasif');

//admin düzenleme
Route::get('admin/adminDuzenle','admin\adminDuzenleController@liste');
Route::post('admin/adminDuzenle', 'admin\adminDuzenleController@guncelle');
Route::get('admin/sifreDegistir','admin\sifreDegistirController@sifreDegistir');
Route::post('admin/sifreDegistir','admin\sifreDegistirController@sifreDegistirVT');

//icerik
Route::get('admin/icerik', 'admin\icerikController@listele');

//içerik ekle
Route::get('admin/icerikEkle', 'admin\icerikEkleController@index');
Route::post('admin/icerikEkle', 'admin\icerikEkleController@ekle');

//içerik sil
Route::get('admin/icerik/sil/{id}', 'admin\icerikController@icerikSil');

//içerik düzenle
Route::get('admin/icerikDuzenle/{id}', 'admin\icerikDuzenleController@icerikDuzenleAc');
Route::post('admin/icerikDuzenle/{id}', 'admin\icerikDuzenleController@duzenleForm');


//site ayarları
Route::get("admin/siteAyarlar","admin\ayarlarController@liste");
Route::post("admin/siteAyarlar", "admin\ayarlarController@duzenle");
Route::post("admin/siteAyarlar/{id}", "admin\ayarlarController@resimUpload");

//ürün puanlari
Route::get('admin/urunPuan', 'admin\urunPuanController@urunPuanlari');


// dosya işlemleri
Route::get('admin/dosyaYonetimi', 'admin\dosyaYonetimiController@index');

//sosyal Medya
Route::get('admin/sosyalMedya','admin\sosyalMedyaController@sosyalMedya');
Route::post('admin/sosyalMedya','admin\sosyalMedyaController@ekle');


//admin panel galeriler için yazılmış rotalar
Route::get('admin/galeriler', 'admin\galerilerController@index');
Route::get('admin/galeriler/duzenle/{id}', 'admin\galerilerController@duzenle');
Route::post('admin/galeriler/duzenle/{id}', 'admin\galerilerController@duzenleForm');
Route::get('admin/galeriler/sil/{id}', 'admin\galerilerController@sil');


//admin panel galeri kategorileri için yazılmış rotalar
Route::get('admin/galerikategori', 'admin\galerilerKategoriController@index');
Route::get('admin/galerikategori/sil/{id}', 'admin\galerilerKategoriController@sil');
Route::post('admin/galerikategori/ekle', 'admin\galerilerKategoriController@ekle');


//mesajlar
//mesaj liste
Route::get('admin/mesajlar','admin\mesajlarController@mesajlarliste');

//mesaj sil
Route::get('admin/mesajlar/sil/{id}','admin\mesajlarController@mesajSil');

//mesaj oku
Route::get('admin/mesajlar/oku/{id}','admin\mesajlarController@mesajOku');

// mesaj gönderme
Route::get('admin/mesajlar/gonder','admin\mesajlarController@gonder');
Route::post('admin/mesajlar/gonder','admin\mesajlarController@gonderForm');

//Linkler
Route::get('admin/linkler','admin\linklerController@link');
Route::post('admin/linkler','admin\linklerController@ekle');
Route::get('admin/linkler','admin\linklerController@listele');
Route::get('admin/linkler/sil/{id}','admin\linklerController@sil');
Route::get('admin/linklerDuzenle/{id}','admin\linklerDuzenleController@duzenleAc');
Route::post('admin/linklerDuzenle/{id}','admin\linklerDuzenleController@duzenle');


//banner listele
Route::get('admin/bannerListele','admin\bannerListeleController@index');
Route::post('admin/bannerListele','admin\bannerListeleController@listele');

//banner Sil
Route::get('admin/bannerListele/{sil}','admin\bannerListeleController@bannerSil');

//bannerEkle
Route::get('admin/bannerEkle','admin\bannerEkleController@index');
Route::post('admin/bannerEkle','admin\bannerEkleController@ekle');

//banner Düzenle
Route::post('admin/bannerDuzenle/{duzenle}','admin\bannerDuzenleController@bannerDuzenleKaydet');
Route::get('admin/bannerDuzenle/{duzenle}','admin\bannerListeleController@bannerDuzenle');

// Bülten Sayfası
Route::get('admin/bulten', 'admin\bultenController@index');

// Bülten Oluştur - Gönder
Route::post('admin/bulten/yeni', 'admin\bultenController@bultenAc');
Route::post('admin/bulten/bultenGonder', 'admin\bultenController@bultenGonder');

// Bültene Abone Ekle
Route::get('admin/bulten/aboneEkle', 'admin\bultenController@aboneEkleIndex');
Route::post('admin/bulten/aboneEkle', 'admin\bultenController@aboneEkle');

// Abone Sil (Tekil[1] ve Çoğul[2])
Route::get('admin/bulten/aboneSil/{id}', 'admin\bultenController@aboneSil');
Route::post('admin/bulten/aboneSil', 'admin\bultenController@aboneCokluSil');

// Abone Düzenle
Route::get('admin/aboneDuzenle/{id}', 'admin\bultenController@aboneDuzenleAc');
Route::post('admin/aboneDuzenle/{id}', 'admin\bultenController@aboneDuzenle');


// slider listesi
Route::get('admin/sliderYonetimi', 'admin\sliderController@sliderListele');

// slider ekle
Route::get('admin/sliderEkle', 'admin\sliderController@sliderEkle');
Route::post('admin/sliderEkle', 'admin\sliderController@yeniSlider');

// slider silme
Route::get('admin/sliderYonetimi/sil/{id}', 'admin\sliderController@sliderSil');

// slider düzenle
Route::get('admin/sliderDuzenle/{id}', 'admin\sliderController@sliderDuzenle');
Route::post('admin/sliderDuzenle/{id}', 'admin\sliderController@sliderDuzenleForm');

//kategori işlemleri yaıpılıyor
Route::get('admin/kategori','admin\kategoriController@liste');

//kategori sil işlemi yapılıyor
Route::post('admin/kategoriSil','admin\kategoriController@olay');

//kategori update işlemi yapılıyor
Route::post('admin/kategoriAc','admin\kategoriController@duzenleAc');
Route::post('admin/kategoriEkle','admin\kategoriController@duzenleKaydet');

//kategori ekle işlemi yapılıyor
Route::post('admin/kategori','admin\kategoriController@ekle');

//siparişler
Route::get('admin/siparisler', 'admin\siparislerController@siparisler');
Route::get('admin/siparisDetay/{id}', 'admin\siparislerController@siparislerDetay');

// ürün listele
Route::get('admin/urun', 'admin\urunController@listele');

// ürün ekle
Route::get('admin/urunEkle', 'admin\urunController@index');
Route::post('admin/urunEkle', 'admin\urunController@ekle');

// resim ekleme
Route::get('admin/resimEkle/{id}', 'admin\urunController@resimEkle');

// ürün sil
Route::get('admin/urun/sil/{id}', 'admin\urunController@urunSil');

//ürün düzenleme
Route::get("admin/urunDuzenle/{id}", "admin\urunController@urunDuzenleAc");
Route::post("admin/urunDuzenle/{id}", "admin\urunController@duzenleUrun");

//haberler
Route::get('admin/haberler', 'admin\haberlerController@listele');
Route::post('admin/haberler', 'admin\haberlerController@durumPasifAktif');
Route::get('admin/haberler/sil/{id}', 'admin\haberlerController@haberSil') ;

//haberduzenle
Route::get('admin/haberDuzenle/{id}', 'admin\haberDuzenleController@haberDuzenleAc');
Route::post('admin/haberDuzenle/{id}', 'admin\haberDuzenleController@haberDuzenle');

//haber ekle
Route::get('admin/haberEkle', 'admin\haberEkleController@index');
Route::post('admin/haberEkle', 'admin\haberEkleController@haberEkle');

// Anket Sayfası
Route::get('admin/anket','admin\anketController@anketListe');
Route::get('admin/anketEkle', 'admin\anketController@anketEkle');
Route::post('admin/anketEkle', 'admin\anketController@anketEkleVT');
Route::get('admin/anketSil/{id}','admin\anketController@sil');
Route::get('admin/anketDuzenle/{id}','admin\anketController@duzenleAc');
Route::post('admin/anketDuzenle/{id}','admin\anketController@duzenle');
Route::get('admin/anketSoruDuzenle/{id}','admin\anketController@soruDuzenleAc');
Route::post('admin/anketSoruDuzenle/{id}','admin\anketController@soruDuzenle');
Route::get('admin/anketSoruEkle','admin\anketController@soruEkleAc');
Route::post('admin/anketSoruEkle','admin\anketController@soruEkle');


//Video sayfası

Route::get('admin/video', 'admin\videoController@listele');
Route::get('admin/videoEkle', 'admin\videoEkleController@index');
Route::post('admin/videoEkle', 'admin\videoEkleController@ekle');
Route::get('admin/video/sil/{id}', 'admin\videoController@videoSil');
Route::get('admin/videoDuz/{id}', 'admin\videoDuzController@videoDuz');
Route::post('admin/videoDuz/{id}', 'admin\videoDuzController@duzForm');



Route::get('admin/dil/{locale}', function ($locale) {
    $dil = substr($locale,0,2);
    //$url = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";
    Session::put('dil', $dil);
    App::setLocale(Session::get('dil'));
    return Redirect::to('admin/bos');
    //echo "<script> window.history.go(-1);</script>";
    //echo "<meta http-equiv=\"refresh\" content=\"0;url=javascript:history.back()\">";
});



//excel işlemleri için gerekli rotalar
Route::get('admin/excel','admin\excelController@liste');
Route::get('admin/excel/{tableName}','admin\excelController@dosyaOlustur');


//site onyuz abone ekle
Route::post('/','WelcomeController@bultenAboneEkle');

//urun detay
Route::get('urunDetay/{id}','WelcomeController@urunDetay');

// iletişim
//contact sayfası yönlendiriliyor
Route::get('iletisim','WelcomeController@contactUs');
Route::post('iletisim','WelcomeController@contactUsKaydet');
// iletişim