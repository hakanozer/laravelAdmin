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
            <h1 class="page-header">E - Bülten Yönetim Sayfası</h1>
            <a href="{{url ('admin/anasayfa')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary">
            <i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>

            <a id="sil"  href="{{url ('admin/bulten/aboneSil')}}" style="float: left; margin-bottom: 15px; "
            class="btn btn-danger pull-right hidden" >
            <i class="glyphicon glyphicon-remove"> </i> Alayını Sil</a>


        </div>
        <!-- /.col-lg-12 -->
    </div>

<script language="javascript">
    function checkAll(field)
    {
        for (i = 0; i < field.length; i++)
            field[i].checked = true ;
    }

    function uncheckAll(field)
    {
        for (i = 0; i < field.length; i++)
            field[i].checked = false ;
    }
</script>

<script type="text/javascript">

var formblock;
var forminputs;

function prepare() {
    formblock= document.getElementById('form_id');
    forminputs = formblock.getElementsByTagName('input');
}


function select_all(name, value) {

if (value==1) {
$("#sil").removeClass("hidden");
} else {
$("#sil").addClass("hidden");
}
    for (i = 0; i < forminputs.length; i++) {
        // regex here to check name attribute
        var regex = new RegExp(name, "i");
        if (regex.test(forminputs[i].getAttribute('name'))) {
            if (value == '1') {
                forminputs[i].checked = true;
            } else {
                forminputs[i].checked = false;
            }
        }
    }
}

if (window.addEventListener) {
    window.addEventListener("load", prepare, false);
} else if (window.attachEvent) {
    window.attachEvent("onload", prepare)
} else if (document.getElementById) {
    window.onload = prepare;
}
</script>

    <div class="row">
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Kayıtlı E-Bülten Aboneleri

                          <div class="col-md-18" style="float: right; width: 106px; margin-top: -7px;">
                          <a href="{{url ('admin/bulten/yeni')}}" class="btn btn-primary">Bülten Gönder</a>
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
                                      <input name="tümü" type="checkbox" id="check-all">
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
                                      <form id="form_id" name="myform" action="" method="post">
                                          <input name="secim" id="checkbox[]" type="checkbox">
                                      </form>
                                      </th>
                                      <td id="idbox[]">{{ $bulten->id }}</td>
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
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
    var i=0;
      $('#check-all').click(function(){

        if (i==0) {
         $("#sil").removeClass("hidden");
         $("input:checkbox").attr('checked', true);
         i=1;
        }else if (i==1) {
         $("#sil").addClass("hidden");
                $("input:checkbox").attr('checked', false);
                i=0;
        }
      });
    });
    </script>

      <script type="text/javascript">
        $(document).ready(function() {
        for (i=0 ; i < checkbox.length ; i++) {
         if (checkbox[i].value=checked) {

         }

        }

          $('#bultenid-').click(function(){

            if (i==0) {
             $("#sil").removeClass("hidden");
             $("input:checkbox").attr('checked', true);

            }else if (i==1) {
             $("#sil").addClass("hidden");
                    $("input:checkbox").attr('checked', false);
                    i=0;
            }
          });
        });
        </script>

