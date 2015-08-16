<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/15/2015
 * Time: 12:15 PM
 */

namespace App\Http\Controllers\admin;

use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;

class siparislerController extends Controller{


    public function siparisler(){
        $data=DB::select('select sip.sip_id,sep.kul_id,sep.urun_id,sip.durum,sip.ekleme_tarihi,sip.toplam from sepet sep left join siparisler sip on sep.siparis_ref = sip.ref_no order by sep.siparis_ref desc');

        return view('admin/siparisler',array('data'=>$data));

    }

    public function siparislerDetay($id){


        $veri=DB::select('select sip.sip_id,sep.kul_id,sep.urun_id,sip.durum,sip.ekleme_tarihi,sip.toplam from sepet sep left join siparisler sip on sep.siparis_ref = sip.ref_no WHERE  sip_id  = ?', array($id));

        return view('admin/siparisDetay',array('veri'=>$veri));

    }



} 