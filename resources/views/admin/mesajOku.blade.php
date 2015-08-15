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
            <h1 class="page-header">Mesajınız:</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<a  href="{{ url('admin/mesajlar')  }}" style="float: left; margin-bottom: 15px; "class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
    <div style="clear: both"></div>
<div class="row">
   <div class="col-lg-6">
          <div class="panel panel-default">
<div class="panel-body">
<div class="row">
        <div class="col-lg-6">
                    @if (isset($kullanici["user"]))
                        <form role="form" method="post" action="">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                                    <div class="form-group">
                                    <label>Gönderen Kişi:</label>
                                     <input type="text" class="form-control" name="gonderen" value="{{$kullanici["user"]->adi.' '.$kullanici["user"]->soyadi}}"/>                                                                                              </div>
<div class="form-group">
                                    <label>Gönderilen Tarih:</label>
                                     <input type="text" class="form-control" name="tarih" value="{{$kullanici["user"]->tarih}}"/>                                                                                              </div>
                                    <div class="form-group">                                                     <label>Mesaj:</label>                                                            <textarea name="mesaj" class="form-control">{{$kullanici["user"]->mesaj}}</textarea>
                                    </div>



                                </form>
                                 <input type="submit" onclick="window.location.href='{{url('admin/mesajlar/gonder')}}'" class="btn btn-success" value="Yanıtla"/>
                                @endif
                            </div>
</div>
    </div>

</div></div></div></div>
    </div>



@include('admin/alt')


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