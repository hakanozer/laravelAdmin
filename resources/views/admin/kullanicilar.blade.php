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
            <h1 class="page-header">Kullanıcılar</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <button style="float: right; margin-bottom: 15px; " type="button" class="btn btn-success" onclick="window.location.href='kullanicilar/ekle'" >Yeni Kullanıcı Ekle</button>
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tüm Kullanıcılar
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Adı</th>
                                    <th>Soyadı</th>
                                    <th>E-mail</th>
                                    <th>Tarih</th>
                                    <th>Durum</th>
                                    <th style="width: 48px;">İşlem</th>
                                </tr>
                                </thead>
                                <tbody>


                                @if(isset($data))
                                    @foreach( $data as $value)

                                        <tr class="odd gradeX">
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->adi }}</td>
                                            <td>{{ $value->soyadi }}</td>
                                            <td>{{ $value->mail }}</td>
                                            <td>{{ $value->tarih }}</td>
                                            <td>@if($value->durum)
                                                   Pasif
                                                @else
                                                   Aktif
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-circle" onclick="window.location.href='{{ url("admin/kullanicilar/duzenle/".$value->id) }}'"><i class="fa fa-list"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-circle" onclick="window.location.href='{{ url("admin/kullanicilar/sil/".$value->id) }}'"><i class="fa fa-times"></i>
                                                </button>

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

<!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

