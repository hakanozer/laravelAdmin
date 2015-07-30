<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class KullanicilarController extends Controller {

    /**
     * Anasayfa.
     * @return mixed
     */
    public function index()
    {
        $data = array();

        return View::make("kullanicilar")->with("data", $data);
    }


    /**
     * Kullanıcı listeleme sayfası.
     *
     * @return mixed
     */
    public function liste()
    {
        $data = array();

        $q = "SELECT * FROM kullanicilar";
        $kullanicilar = DB::select($q);

        $data["kullanicilar"] = $kullanicilar;

        return View::make("kulListe")->with("data", $data);
    }

    /**
     * Kullanıcı düzenleme sayfası.
     * @param $kul_id
     */
    public function duzenle($kul_id)
    {
        $data = array();

        $q = "SELECT * FROM kullanicilar WHERE id = ?";
        $kul = DB::select($q, array($kul_id));

        $data["kullanici"] = $kul[0];

        return View::make("kulDuzenle")->with("data", $data);
    }

    /**
     * Formla gelen düzenle işlemi.
     */
    public function duzenleForm($kul_id)
    {
        $form = Input::all();

        if (!empty($form["kulAdi"]) and !empty($form["kulSoyadi"]) and
            !empty($form["kulMail"]) and !empty($form["kulSifre"]) and
            !empty($form["kulGizli"])) {

            $q = "UPDATE kullanicilar SET adi = ?, soyadi = ?, mail = ?, sifre = ?, gizli_soru = ? WHERE id = ?";
            $islem = DB::update($q, array( $form["kulAdi"],  $form["kulSoyadi"], $form["kulMail"], $form["kulSifre"], $form["kulGizli"], $kul_id));

            if ($islem) {
                $mesaj = "basarili";
            }
            else {
                $mesaj = "basarisiz";
            }
        }

        // Mesaj session'a yazılıyor redirect yapıldığı için.
        return redirect("kullanicilar/liste")->with("mesaj", $mesaj);
    }

    /**
     * Kullanıcı silme işlemi.
     * @param $kul_id
     * @return redirect
     */
    public function silForm($kul_id)
    {

        // Kullanıcı silme işlemi.
        $q = "DELETE FROM kullanicilar WHERE id = ?";
        $islem = DB::delete($q, array($kul_id));

        if ($islem) {
            $mesaj = "basarili";
        }
        else {
            $mesaj = "basarisiz";
        }

        return redirect("kullanicilar/liste")->with("mesaj", $mesaj);
    }

    /**
     * Kullanıcı ekleme sayfası.
     * @return Viem
     */
    public function ekle()
    {
        $data = array();

        return View::make("kulEkle")->with("data", $data);
    }

    /**
     * @return redirect
     */
    public function ekleForm()
    {
        $form = Input::all();

        if (!empty($form["kulAdi"]) and !empty($form["kulSoyadi"]) and
            !empty($form["kulMail"]) and !empty($form["kulSifre"]) and
            !empty($form["kulGizli"])) {

            $q = "INSERT INTO kullanicilar VALUES(NULL, ?, ?, ?, ?, now(), ?)";
            $islem = DB::insert($q, array($form["kulMail"], $form["kulSifre"], $form["kulAdi"], $form["kulSoyadi"], $form["kulGizli"]));

            if ($islem) {
                $mesaj = "basarili";
            }
            else {
                $mesaj = "basarisiz";
            }

        }

        return redirect("kullanicilar/liste")->with("mesaj", $mesaj);
    }

}
