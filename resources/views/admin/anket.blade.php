<?php
$dil = Session::get('dil');
App::setLocale($dil);
?>


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

@include('admin/ustMenu')

<!-- DAHA SONRA BURAYA BİR JAVASCRIPT GELEBİLİR -->

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('adminDil.anketYonetim') }}</h1>
            <a href="{{url ('admin/anasayfa')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> {{ trans('adminDil.geriDon') }}</a>

            <div class="col-md-12" style="float: right; width: 106px; margin-top: -7px;">
                <a href="{{url ('admin/anketEkle')}}" class="btn btn-primary">{{ trans('adminDil.anketEkle') }}</a>
            </div>

            <div class="col-md-12" style="float: right; width: 106px; margin-top: -7px;">
                <a href="{{url ('admin/anketSoruEkle')}}" class="btn btn-primary">{{ trans('adminDil.soruEkle') }}</a>
            </div>


        </div>

        <!-- /.col-lg-12 -->
    </div>

<div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Mevcut Anketler


                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="dataTable_wrapper">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                  <thead>
                                  <tr >

                                      <!-- DAHA SONRA BURAYA BİR ŞEYLER GELEBİLİR -->

                                      <th>ID</th>
                                      <th>{{ trans('adminDil.anketBaslik') }}</th>
                                      <th>{{ trans('adminDil.kayıtTarih') }}</th>
                                      <th style="width: 48px;">{{ trans('adminDil.islem') }}</th>
                                  </tr>
                                  </thead>
                                  <tbody>


                                  @if(isset($data))
                                      @foreach($data as $veri)

                                  <tr class="odd gradeX">

                                      <!-- DAHA SONRA BURAYA BİR ŞEYLER GELEBİLİR -->

                                      <td>{{ $veri->id }}</td>
                                      <td>{{ $veri->anket_baslik }}</td>
                                      <td>{{ $veri->tarih}}</td>
                                      <td>
                                        <a href="{{url("admin/anketDuzenle/$veri->id")}}">
                                        <button style="margin:1px" type="button" class="btn btn-primary btn-circle" title="Düzenle"><i class="fa fa-list"></i></button></a>
                                        <a href="{{url("admin/anketSil/$veri->id")}}">
                                        <button style="margin:1px"  type="button" class="btn btn-danger btn-circle" title="Sil"><i class="fa fa-times"></i></button></a>
                                        <a href="{{url("admin/anketSoruDuzenle/$veri->id")}}">
                                        <button style="margin:1px" type="button" class="btn btn-info btn-circle" title="Anket Soru Düzenle"><i class="fa fa-exchange"></i></button></a>

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
