<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    // Siteiçi arama kategorileri listele
    public static function araKategoriler()
    {
        $araKategoriler = DB::select('select * from kategoriler where ust_id = 0');
        return $araKategoriler;
    }

}