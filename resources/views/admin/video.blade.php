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
            <h1 class="page-header"> Videolar</h1>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">





          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Tüm Videolar
                          <div class="col-md-5" style="float: right; width: 106px; margin-top: -7px;">
                                                      <a href="{{url ('admin/videoEkle')}}" class="btn btn-primary">Video Ekle</a>
                                       </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="dataTable_wrapper">

                              <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>Başlık</th>
                                      <th>Video</th>
                                      <th>Kısa Açıklama</th>
                                      <th>Detay</th>
                                      <th>Tarih</th>
                                      <th style="width: 48px;">İşlem</th>
                                  </tr>
                                  </thead>
                                  <tbody>



                                  @if(isset($veri))
                                      @foreach( $veri as $video)


                                  <tr class="odd gradeX">
                                      <td>{{ $video->id }}</td>
                                      <td>{{ $video->baslik }}</td>
                                      <td ><video width="150" height="150" controls>
                                            <source src="{{url("bower_components/elfinder/files/". $video->baslik).".mp4" }}" type="video/mp4">
                                          </video></td>
                                      <td>{{ $video->kisa_aciklama }}</td>
                                      <td>{{ $video->detay }}</td>
                                      <td>{{ $video->tarih }}</td>
                                       <td>
                                       <a href="{{url("admin/videoDuz/$video->id")}}">
                                       <button style="margin:1px" type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a>
                                       <a href="{{url("admin/video/sil/$video->id")}}">
                                       <button style="margin:1px"  type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></a>

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

