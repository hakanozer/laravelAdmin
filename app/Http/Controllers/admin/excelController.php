<?php
/**
 * Created by PhpStorm.
 * User: web1
 * Date: 8/15/2015
 * Time: 12:32 PM
 */

namespace App\Http\Controllers\admin;

use \Illuminate\Redis\Database;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;

class excelController extends Controller {


    public function liste(){
        $sorgu = DB::select("SHOW TABLES");
        return view('admin/excel',array('data'=>$sorgu));
    }

    public function dosyaOlustur($tableName){

        $filename = $tableName;
        $databaseName = DB::getDatabaseName();
        header('Content-Encoding: UTF-8');
        header('Content-Type: text/plain; charset=utf-8');
        header("Content-disposition: attachment; filename=".$filename.".xls");
        echo "\xEF\xBB\xBF"; // UTF-8 BOM

        //tablo adına göre sütun adları çekiliyor
        $tableColumnsNames = DB::select("SELECT column_name FROM information_schema.columns WHERE table_schema= ? and  table_name = ? ",array($databaseName,$tableName));

        // $tableData = DB::select("SELECT * FROM $tableName ORDER by id");
        $tableData = DB::table($tableName)->orderBy('id', 'asc')->get();


        // exceldeki görüntü oluşturuluyor(sütun isimlerinin yazıldığı kısım)
        echo "<table border=\"1\">";
            echo "<tr>";
                foreach ($tableColumnsNames as $columnsNames){
                    foreach($columnsNames as $columnName){
                        echo "<th>$columnName</th>";
                    }
                }
            echo "</tr>";
        //sütunlardaki verilerin yazıldığı kısım
        foreach ($tableData as $row){
                echo "<tr>";
                foreach($row as $value){
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }

        echo "</table>";


    }


}

?>