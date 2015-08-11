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

//içerikekle
Route::get('admin/icerikEkle', 'admin\icerikEkleController@index');
Route::post('admin/icerikEkle', 'admin\icerikEkleController@ekle');

//içerik sill
Route::get('admin/icerik/sil/{id}', 'admin\icerikController@icerikSil');

//içerik düzenle
Route::get('admin/icerikDuzenle/{id}', 'admin\icerikDuzenleController@icerikDuzenleAc');
Route::post('admin/icerikDuzenle/{id}', 'admin\icerikDuzenleController@duzenleForm');

