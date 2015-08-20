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
<form name="myform" action="{{url ('admin/bulten/yeni')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">E - Bülten Yönetim Sayfası</h1>
            <a href="{{url ('admin/anasayfa')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary">
            <i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>

            <div class="col-md-18" style="float: right; width: 106px; margin-top: -7px;">
                <input type="submit" id="sil" name="sil" class="btn btn-danger" value="Seçimleri Sil" />
            </div>

            <!--<a id="sil"  href="{{url ('admin/bulten/aboneSil')}}" class="btn btn-danger pull-right" >
            <i class="glyphicon glyphicon-remove"> </i> Alayını Sil</a>-->

        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Kayıtlı E-Bülten Aboneleri



                          <div class="col-md-18" style="float: right; width: 106px; margin-top: -7px;">
                            <input type="submit" name="gonder" class="btn btn-primary" value="Bülten Gönder"/>
                          </div>
                          <div class="col-md-20" style="float: right; width: 106px; margin-top: -7px;">
                            <a href="{{url ('admin/bulten/aboneEkle')}}" class="btn btn-primary">Abone Ekle</a>
                          </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="dataTable_wrapper">
                              <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                  <thead>
                                  <tr >
                                      <th>
                                      <!-- TODO: bütün checkbox ların seçimi script ile sağlanacak. -->
                                        <input type="checkbox" id="tumsecim" /> <b>Check All</b>
                                      </th>
                                      <th>ID</th>
                                      <th>E-Posta</th>
                                      <th>Kayıt Tarihi</th>
                                      <th style="width: 48px;">İşlem</th>
                                  </tr>
                                  </thead>
                                  <tbody>


                                  @if(isset($veri))
                                      @foreach( $veri as $bulten)

                                  <tr class="odd gradeX">
                                      <th>
                                          <input name="secim[]"  type="checkbox" value="{{ $bulten->id }}"/>{{ $bulten->id }}
                                      </th>
                                      <td>{{ $bulten->id }}</td>
                                      <td>{{ $bulten->email }}</td>
                                      <td>{{ $bulten->tarih }}</td>
                                      <td>
                                        <a href="{{url("admin/aboneDuzenle/".$bulten->id)}}">
                                        <button style="margin:1px" type="button" class="btn btn-primary btn-circle" title="Düzenle"><i class="fa fa-list"></i></button></a>
                                        <a href="{{url("admin/bulten/aboneSil/".$bulten->id)}}">
                                        <button style="margin:1px"  type="button" class="btn btn-danger btn-circle" title="Sil"><i class="fa fa-times"></i></button></a>
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

</form>
              <!-- /.col-lg-12 -->
          </div>
    </div>
</div>

@include('admin/alt')

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript-->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
-->
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>


    <script type="text/javascript">


var jk = jQuery.noConflict();
jk(document).ready(function(){
    jk('#sil').hide();
    jk("#tumsecim").on("click", function() {
      var all = jk(this);
      jk('input:checkbox').each(function() {
           jk(this).prop("checked", all.prop("checked"));
      });
      jk('#sil').slideToggle();
    });

});


        </script>

