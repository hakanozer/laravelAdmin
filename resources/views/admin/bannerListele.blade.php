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
<style>
   table {border-collapse:collapse; table-layout:fixed; width:310px;}
   table td {border:solid 1px #fab; width:100px; word-wrap:break-word;}
    .img-responsive{
          width: 100%;
          height: 60px;
     }
   </style>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Banner Yönetimi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <button style="float: right; margin-bottom: 15px; " type="button" class="btn btn-primary" color="blue" onclick="window.location.href='bannerEkle'">Banner Ekle</button>
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>

                                          <th>Adı<br></th>
                                          <th>Gösterim</th>
                                          <th>Tıklanma</th>
                                          <th>Başlangıç</th>
                                          <th>Bitiş<br></th>
                                          <th>Resim<br></th>
                                          <th>Genişlik</th>
                                          <th>Yükseklik</th>
                                          <th>Link<br></th>
                                          <th>Durum<br></th>

                                    <th style="width: 100px;">İşlem<br></th>
                                </tr>
                                </thead>
                                <tbody>


                                @if(isset($data))
                                                                         @foreach( $data as $ban)

                                                                             <tr class="odd gradeX">
                                                                                 <td>{{ $ban->ad }}</td>
                                                                                 <td>{{ $ban->gosterim }}</td>
                                                                                 <td>{{ $ban->tiklanma }}</td>
                                                                                 <td>{{ $ban->baslangic_tarih }}</td>
                                                                                 <td>{{ $ban->bitis_tarih }}</td>
                                                                                 <td><img class="img-responsive" style="border: double" src="{{asset("bannerResimler/".$ban->yol)}}" width="150px" height="150px"></td>
                                                                                 <td>{{ $ban->genislik }}</td>

                                                                                 <td>{{ $ban->yukseklik }}</td>
                                                                                 <td>{{ $ban->url }}</td>

                                                                                 <td>{{ $ban->durum }}</td>

                                                                                 <td><a href="{{url("admin/bannerDuzenle/$ban->id")}}" class="btn btn-primary"> <i class="fa fa-pencil" name="duzenle"></i></a>
                                                                                 <input type="button" class="btn btn-danger" value="Sil" data-toggle="modal"  data-target="#myModal{{$modalID += 1}}"></td>
                             <!-- Modal -->
                             <div class="modal fade" id="myModal{{$modalID}}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title" id="myModalLabel">Uyarı!</h4>
                                         </div>
                                         <div class="modal-body">
                                             Silmek istediğinizden emin misiniz?
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-primary" data-dismiss="modal">Hayır</button>
                                            <a href="{{url("admin/bannerListele/$ban->id")}}"> <button type="button" class="btn btn-danger">Tabi ki</button></a>
                                         </div>
                                     </div>
                                     <!-- /.modal-content -->
                                 </div>
                                 <!-- /.modal-dialog -->
                             </div>
                             <!-- /.modal -->








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
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
