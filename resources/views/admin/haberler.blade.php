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



<div id="page-wrapper" style="min-height: 328px;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Haberler</h1>

<div class="row">

                <div class="col-md-5" style="padding-bottom: 15px">
                    <a href="{{url('admin/anasayfa')}}" class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Ana Sayfa</a></div>




<form method="post" action="" name="selectbox">
<input class="btn btn-primary pull-right" type="submit" name="yolla" value="SEÇ">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group col-md-2 pull-right ">

                                      </div>
                <div class="form-group col-md-2 pull-right ">
                    <select class="form-control"  name="durum" id="" >
                        <option value="hepsi" selected>-- Hepsi</option>
                        <option value="aktif">Aktif</option>
                        <option value="pasif">Pasif</option>
                    </select>
                </div>

 </form>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">





          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                             <a href="{{url ('admin/haberEkle')}}" class="btn btn-primary">Haber Ekle</a>

                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="dataTable_wrapper">

                              <div class="row"><div class="col-sm-12">
                              <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                  <thead>
                                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 53px;">ID</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Kısa Resim: activate to sort column ascending" style="width: 180px;">Detay</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Haber_Başlık: activate to sort column ascending" style="width: 96px;">Haber Başlık</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Kısa Detay: activate to sort column ascending" style="width: 180px;">Resim</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Durum: activate to sort column ascending" style="width: 241px;">Durum</th>
                                  <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Tarih: activate to sort column ascending" style="width: 196px;">Tarih</th>
                                  <th style="width: 85px;" class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="İşlem: activate to sort column ascending">İşlem</th></tr>
                                  </thead>
                                  <tbody>



                                                                    @if(isset($veri))
                                                                        @foreach( $veri as $haberler)

                                                                    <tr class="odd gradeX">
                                                                        <td>{{ $haberler->id }}</td>
                                                                        <td>{{ $haberler->haber_baslik }}</td>
                                                                        <td>{{ $haberler->detay }}</td>
                                                                        <td><img style="border: double" src="{{asset("haberResimler/".$haberler->resimYolu)}}" width="150px" height="150px"></td>
                                                                        <td>{{ $haberler->durum }}</td>
                                                                        <td>{{ $haberler->tarih }}</td>

                                                                         <td>
                                                                         <a href="{{url("admin/haberDuzenle/$haberler->id")}}">
                                                                         <button style="margin:1px" type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a>
                                                                         <a href="{{url("admin/haberler/sil/$haberler->id")}}">
                                                                         <button style="margin:1px"  type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></a>

                                  </td>




                                                                    </tr>

                                                                        @endforeach
                                                                    @endif

                                                                    </tbody>
                              </table></div></div>
                              </div></div>
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

