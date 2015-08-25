<?php
/**
 * Created by PhpStorm.
 * User: web
 * Date: 8/3/2015
 * Time: 3:31 PM
 */

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\sessionController;
use Illuminate\Redis\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Request;
use Session;


class ayarlarController extends Controller{

    function liste()
    {


        $data = DB::select('select * from ayarlar order by id DESC limit 0,1');
        return view('admin/ayarlar',array('data'=>$data));
    }

    public function duzenle() {
        $data = Input::all();
        $id = $data["id"];
        // Validasyonlar
        $kural = array(
            'site_baslik'=>'required|max:60',
            'meta_keyler'=>'required|max:500',
            'meta_description'=>'required|max:150',
            'domain_ismi'=>'required|max:500',
            'smtp_adresi'=>'required|max:500',
            'smtp_kullanici_adi'=>'required|max:500',
            'smtp_sifre'=>'required|max:500|min:5',
            'longtitude'=>'required|numeric|digits_between:0,20',
            'latitude'=>'required|numeric|digits_between:0,20',
            'mail_adresi'=>'required|email|max:500',
            'telefon'=>'required|numeric|digits_between:10,13',
            'fax'=>'required|numeric|digits_between:10,13',
            'gsm'=>'required|numeric|digits_between:10,13',
            'adres'=>'required|max:500'
        );
        $dogrulama = \Validator::Make($data,$kural);
        if($dogrulama->fails()){
            // gönderilen verilerde hata var
            return \Redirect::to('admin/siteAyarlar')->withErrors($dogrulama)->withInput();
        } else {

            //Update
        DB::table('ayarlar')
            ->where('id', $id)
            ->update( array(
                'site_baslik' => $data["site_baslik"],
                'meta_key' => $data["meta_keyler"],
                'meta_desc' => $data["meta_description"],
                'domain_name' => $data["domain_ismi"],
                'smtp_adres' => $data["smtp_adresi"],
                'smtp_kul_adi' => $data["smtp_kullanici_adi"],
                'smtp_sifre' => $data["smtp_sifre"],
                'long' => $data["longtitude"],
                'lat' => $data["latitude"],
                'mail_adres' => $data["mail_adresi"],
                'telefon' => $data["telefon"],
                'fax' => $data["fax"],
                'gsm' => $data["gsm"],
                'adres' => $data["adres"]
                )
            );
            return \Redirect::to('admin/siteAyarlar');
        }


    }







    public function resimUpload() {
        // getting all of the post data
        $file = array('image' => Input::file('logo'));
        $data = Input::all();
        $id = $data["id"];

        // setting up rules
        $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
        // doing the validation, passing post data, rules and the messages
        $validator = Validator::make($file, $rules);
        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return Redirect::to('admin/siteAyarlar')->withInput()->withErrors($validator);
        }
        else {
            // checking file is valid.
            if (Input::file('logo')->isValid()) {
                $destinationPath = 'logolar'; // upload path
                $extension = Input::file('logo')->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                Input::file('logo')->move($destinationPath, $fileName); // uploading file to given path
                // sending back with message
                Session::flash('success', 'Upload successfully');

                DB::table('ayarlar')->where('id', $id)->update( array('logo' => $fileName));

                return Redirect::to('admin/siteAyarlar');
            }
            else {
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::to('upload');
            }
        }

        return \Redirect::to('admin/siteAyarlar');
    }



}