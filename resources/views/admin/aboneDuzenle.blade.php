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


<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Abone E-Posta Güncelleme Sayfası</h1>
        <a href="{{url ('admin/bulten')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
    </div>
    <!-- /.col-lg-12 -->
</div>
    <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-primary">

                    <div class="panel-heading text-center">
                        <h3>E-Posta Düzenle</h3>
                    </div>

                    @if (isset($bilgi))
                        @if (isset($bilgi["bilgi"]))
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{$bilgi["bilgi"]}}</div>
                        @endif

                        @if (isset($bilgi["hata"]))
                            <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{$bilgi["hata"]}}</div>
                        @endif
                    @endif

                    @if(isset($hataliEpostalar))
                        <div class="alert alert-danger alert-dismissable">
                        @foreach($hataliEpostalar as $detay)
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{$detay}}</div>
                        @endforeach
                    @endif

                    <div class="panel-body">
                    @if(isset($data))
                        <form action="{{url('admin/aboneDuzenle/'.$data['id'])}}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="fSifre">E-Posta</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" name="email" id="email" value="{{$data['email']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <a href="{{ url('admin/aboneDuzenle/'.$data['id']) }}">
                                        <input class="btn btn-default btn-sm btn-primary" type="submit" name="aboneDuzenle" value="Kaydet">
                                        </a>
                                        <a href="{{ url('admin/bulten') }}" class="btn btn-sm btn-danger">İptal</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    @endif
                    </div>



                </div>

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
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>