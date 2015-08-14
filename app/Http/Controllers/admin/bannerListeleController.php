<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 04.08.2015
 * Time: 17:31
 */

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Image;
use \Intervention\Image\ImageServiceProvider;
use Redirect;

class bannerListeleController extends Controller {
    public function index()
    {
        $data=DB::select('select * from banner');

        return view('admin/bannerListele')->with('data',$data);
    }
    public function listele()
    {
        $data=DB::select('select * from banner');
        var_dump($data);
        return Redirect("admin/bannerListele",array("data"=>$data));


    }


} 