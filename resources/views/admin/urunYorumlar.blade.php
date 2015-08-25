<?php
$dil = Session::get('dil');
App::setLocale($dil);
?>

@include('admin/ustMenu')

<!-- Bootstrap Core CSS -->
<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->





<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> {{ trans('adminDil.urunYorumlari') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


<form style="width: 100%; margin: 0 auto" action="{{url("urunYorum/yorumEkle")}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

   <div class="row">

   <label>{{ trans('adminDil.urunSecin') }}</label>
   @if (count($data) > 0)
        <select name="urun">
            @foreach($urunler as $val)
            <option value="{{$val->id}}">{{$val->baslik}}</option>
            @endforeach
        </select>
   @endif

   </div>



   <div class="row">

    <label>{{ trans('adminDil.kullaniciSecin') }}</label>
    @if (count($data) > 0)
        <select name="kullanici">
            @foreach($kullanici as $val)
            <option value="{{$val->id}}">{{$val->adi.' '.$val->soyadi}}</option>
            @endforeach
        </select>
    @endif
   </div>



   <div class="row">

   <label>{{ trans('adminDil.baslik') }}</label>
   <input type="text" name="yorumBaslik" class="form-control" id="inputSuccess" placeholder="Başlık ekle...">

   </div>



   <div class="row">

   <label>{{ trans('adminDil.yorumEkle') }}</label>
   <input type="text" name="yorumIcerik" class="form-control" id="inputSuccess" placeholder="Yorum ekle...">

   </div>

   <div class="row">
<label>{{ trans('adminDil.puanVer') }}</label>
       <select class="form-control" name="puan" >
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
       </select>

   </div>


   <div class="row">


   <input type="submit" value="{{ trans('adminDil.gonder') }}" class="btn btn-success"/>


   </div>

</form>

  <br>









    <div class="row">





          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          {{ trans('adminDil.tumUrunYorum') }}
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="dataTable_wrapper">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>{{ trans('adminDil.kulAdiSoyadi') }}</th>
                                      <th>{{ trans('adminDil.urunAdi') }}</th>
                                      <th>{{ trans('adminDil.yorumBaslik') }}</th>
                                      <th>{{ trans('adminDil.yorum') }}</th>
                                      <th>{{ trans('adminDil.puan') }}</th>
                                      <th>{{ trans('adminDil.tarih') }}</th>
                                      <th style="width: 48px;">{{ trans('adminDil.islem') }}</th>
                                  </tr>
                                  </thead>
                                  <tbody>


                                  @if(isset($data))
                                      @foreach( $data as $yorum)

                                  <tr class="odd gradeX">
                                      <td>{{ $yorum->id }}</td>
                                      <td>{{ $yorum->adi.' '.$yorum->soyadi}}</td>

                                      <td>{{ $yorum->urunBaslik }}</td>
                                      <td>{{ $yorum->yorumBaslik }}</td>
                                      <td>{{ $yorum->icerik }}</td>
                                      <td>{{ $yorum->puan }}</td>
                                      <td>{{ $yorum->tarih }}</td>
                                      <td>

                                         @if($yorum->durum==0)

                                                                               <a href="{{url("admin/urunYorum/durumPasif/$yorum->id")}}"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button></a>

                                                                               @else

                                                                               <a href="{{url("admin/urunYorum/durumAktif/$yorum->id")}}"><button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button></a>

                                                                               @endif

                                                                               <a href="{{url("admin/urunYorum/sil/$yorum->id")}}"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></a>

                                                                               </td>



                                      </td>

                                  </tr>

                                      @endforeach
                                  @endif

                                  </tbody>
                              </table>
                          </div>
                          <!-- /.table-responsive -->

                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>


    </div>


















@include('admin/alt')


    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

