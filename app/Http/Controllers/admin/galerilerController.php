<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Image;
use File;


class galerilerController extends Controller
{


    public function index(){

        $data = DB::select('select * from gal_kategori order by id ASC');
        $resimler = DB::select('SELECT DISTINCT kat.id, res.yol from gal_kategori as kat LEFT JOIN gal_resim as res on res.gal_kat_id = kat.id ORDER BY id ASC');


        return view('admin/galeriler', array('data'=>$data, 'resimler'=>$resimler));
    }


    public function duzenle($id){

        $query =DB::select('select * from gal_resim where gal_kat_id = ?', array($id));

        $modalNumber = 0;
        return view('admin/galerilerDuzenle', array('modalNumber' => $modalNumber, 'galeriId'=> $id, 'resimler' => $query ));

    }
    
    public function duzenleForm($id){

        $data = Input::all();


        $kural = array('baslik'=>'required|min:3', 'resim'=>'max:1536|required|mimes:jpeg,jpg,bmp,png,gif');
        $dogrulama = \Validator::Make($data,$kural);
        if(!$dogrulama->passes()){

            return \Redirect::to('admin/galeriler/duzenle/'.$id)->withErrors($dogrulama)->withInput();
        }
        else
        {
            if (Input::hasFile('resim')){

                $dosya=Input::file('resim');

                $uzanti = $dosya->getClientOriginalExtension();

                if (strlen($uzanti) == 3)
                    $dosyaAdi = (substr($dosya->getClientOriginalName(),0,-4));
                else if (strlen($uzanti) == 4)
                    $dosyaAdi = (substr($dosya->getClientOriginalName(),0,-5));


                $dosyaAdi = $dosyaAdi ."_".date('YmdHis').'.'.$uzanti;
                $path = base_path('galeriResimler/600x450/'.$dosyaAdi);
                Image::make($dosya->getRealPath())->resize(600,450)->save($path);
                $path = base_path('galeriResimler/defaultSize/'.$dosyaAdi);
                Image::make($dosya->getRealPath())->save($path);
                $path = $dosyaAdi;

                $query = DB::insert('insert into gal_resim values (null,?,?,?)', array($id,$data["baslik"],$path));

                return Redirect::back();

            }

        }
    }

    public  function sil($id){

        $resim = DB::select('select yol from gal_resim where id = ?', array($id));

        $defaultSizePath = "\\galeriResimler\\defaultSize\\";
        $path600x450 = "\\galeriResimler\\600x450\\";
        $fullPathDefaultSize = base_path().$defaultSizePath. $resim[0]->yol;
        $fullPath600x450 = base_path().$path600x450. $resim[0]->yol;

        if (File::exists($fullPathDefaultSize) && File::exists($fullPath600x450) ) {
            File::delete($fullPathDefaultSize);
            File::delete($fullPath600x450);
        }


        $query = DB::delete('delete from gal_resim where id = ?', array($id));
        if ($query > 0) {
            return Redirect::back();
        }
    }
}
?>