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
    .modal.modal-wide .modal-dialog {
        width: 90%;
    }
    .modal-wide .modal-body {
        overflow-y: auto;
    }

    .img-responsive{
        margin: 0px auto;
    }
    .btn-xs{
        float: right;
    }

</style>

<script type='text/javascript'>
    $(".modal-wide").on("show.bs.modal", function() {
        var height = $(window).height() - 200;
        $(this).find(".modal-body").css("max-height", height);
    });

</script>




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Galeri Düzenle</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Resim Ekle
                    </div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Uyarı!</strong> Form girişlerinde bazı problemler var. <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif



                        <form role="form" method="post" action="{{ url('admin/galeriler/duzenle/'. $galeriId) }}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <input name="baslik" class="form-control" placeholder="Resim Başlığı">
                            </div>

                            <div class="form-group">
                                <label>Resim Ekle: </label>
                                <input name="resim" type="file" id="resim">
                            </div>

                            <input type="submit" class="btn btn-success" value="Gönder"/>
                        </form>
                    </div>

                </div>
            <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->

            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Galerideki Resimler
                    </div>
                    <div class="panel-body">
                        @foreach($resimler as $resim)
                            <div class="col-lg-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        {{$resim->baslik}}
                                        <button type="button" class="btn btn-danger btn-xs" onclick="window.location.href='{{url('admin/galeriler/sil/'.$resim->id)}}'">Resmi Sil</button>
                                    </div>
                                    <div class="panel-body" style="padding: 0px;">

                                        <a><img class="img-responsive" data-toggle="modal" data-target="#myModal{{$number = $modalNumber += 1}}" src="{{asset('galeriResimler/600x450/'.$resim->yol)}}"></a>
                                            <div class="modal modal-wide fade" id="myModal{{$number}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel">{{$resim->baslik}}</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                           <img class="img-responsive" src="{{asset('galeriResimler/defaultSize/'.$resim->yol)}}">
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            <div>
        </div>


    </div>

    @include('admin/alt')

<!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

    <!-- jssor slideri için kulladığımız javascript dosyaları -->



<script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


