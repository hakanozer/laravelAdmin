<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use File;


class galerilerKategoriController extends Controller
{


    public function index()
    {

        $data = DB::select('select * from gal_kategori order by id desc');
        $modalNumber = 0;
        return view('admin/galerilerKategori',array('data'=>$data, 'modalNumber'=>$modalNumber));

    }

    public function ekle(){

        $data = Input::all();
        $kural = array('kategoriAdi'=>'required|min:3');
        $dogrulama = \Validator::Make($data,$kural);
        if(!$dogrulama->passes()){

            return \Redirect::to('admin/galerikategori')->withErrors($dogrulama)->withInput();
        }
        else
        {
          $query = DB::insert("insert into gal_kategori values (null,?)",array($data["kategoriAdi"]));

        }

        $data = DB::select('select * from gal_kategori order by id desc');
        return \Redirect::to('admin/galerikategori')->with(array('data'=>$data));

    }

    public function sil($id){

        $resimler = DB::select('select id,yol from gal_resim where gal_kat_id = ?', array($id));

        foreach ($resimler as $resim){

            $defaultSizePath = "\\galeriResimler\\defaultSize\\";
            $path600x450 = "\\galeriResimler\\600x450\\";
            $fullPathDefaultSize = base_path().$defaultSizePath. $resim->yol;
            $fullPath600x450 = base_path().$path600x450. $resim->yol;

            if (File::exists($fullPathDefaultSize) && File::exists($fullPath600x450) ) {
                File::delete($fullPathDefaultSize);
                File::delete($fullPath600x450);
            }

            $query = DB::delete("delete from gal_resim where gal_kat_id = ?", array($id));

            if ($query >! 0){
                break;
            }

        }

        $silIslem = DB::delete("delete from gal_kategori where id = ?", array($id));

        if($silIslem > 0) {
            return Redirect::to('admin/galerikategori');
        }

    }


}
?>