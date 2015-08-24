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
            <h1 class="page-header">Video Ekleme Sayfası</h1><a href="{{url ('admin/video')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

       <section>

               <div class="panel panel-primary" style="width: 75%; margin: 0 auto; margin-bottom: 50px">

                   <div class="panel-heading">
                       <h4 class="panel-title text-center">Video Ekleme</h4>
                   </div>

                   <div class="panel-body">

                       <p class="text-center">İçerik bilgilerinizi aşağıda girebilirsiniz.</p>
                       <hr>
                       @if (count($errors) > 0)
                       						<div class="alert alert-danger">
                       							<strong>Uyarı ! </strong>Belirtilen Alanları Boş Bırakmayınız.<br><br>
                       							<ul>
                       								@foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                       								@endforeach
                       							</ul>
                       						</div>
                       					@endif



                                           @if (isset($data))
                                               @foreach($data as $video)



                       <form class="form-horizontal"  action="{{url("admin/videoDuz/".$video->id)}}" method="post" style="width: 90%; margin: 0 auto;">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input name="video_id" type="hidden" value="{{$data["videolar"]->id}}"/>

                           <!-- Başlık -->
                           <div class="form-group">
                               <div class="row">
                                   <div class="col-md-3">
                                       <label for="baslik">Video Başlık</label>
                                   </div>
                                   <div class="col-md-9">
                                       <input type="text" id="baslik" name="baslik" value="{{$video->baslik}}" class="form-control">
                                   </div>
                               </div>
                           </div>

                           <!-- Kısa Açıklama -->
                           <div class="form-group">
                               <div class="row">
                                   <div class="col-md-3">
                                       <label >Kısa Açıklama</label>
                                   </div>
                                   <div class="col-md-9">
                                       <input type="text" id="kisa_aciklama" name="kisa_aciklama" value="{{$video->kisa_aciklama}}" class="form-control">
                                   </div>
                               </div>
                           </div>

                           <!-- Detay -->
                            <script type="text/javascript">
                                                          CKEDITOR.replace( 'detay',
                                                                  {
                                                                      customConfig : 'config.js',
                                                                      toolbar : 'simple'
                                                                  })
                                                      </script>

                                                      <!-- Detay -->
                                                      <div class="form-group">
                                                      <div class="row">
                                                      <div class="col-md-3">
                                                      <label for="kisa_aciklama">Detay</label>
                                                       </div>
                                                       <div class="col-md-9">
                                                      <textarea name="detay" id="detay" rows="7" class="form-control ckeditor">{{$video->detay}}</textarea>
                           </div>
                           </div>
                           </div>

                           <!-- Buton -->
                           <div class="form-group">
                               <div class="row">
                                   <div class="col-md-3"> </div>
                                   <div class="col-md-9 text-right">

                                       <input type="submit"  value="Güncelle" name="ekle" class="btn btn-primary">

                                       <a class="btn btn-danger" href="{{url ('admin/video')}}">İptal</a>
                                   </div>
                               </div>
                           </div>

                       </form>
@endforeach
 @endif
                   </div>

                   <div class="panel-footer"></div>
               </div>

           </section>

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

    <!-- jssor slideri için kulladığımız javascript dosyaları -->