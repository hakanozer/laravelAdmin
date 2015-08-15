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

    <content style="padding: 40px 0px">

        <div class="text-right" style="margin-bottom: 25px">
            <a href="{{url('admin/bos')}}" class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>
            <section>
        <h2>Reklamlar</h2>
        <hr>

        <a class="btn btn-primary" href="{{url ('admin/bannerEkle')}}" style="margin-bottom: 25px">Reklam Ekle</a>

      <!-- dataTable.js işlemleri -->
        <link rel="stylesheet" href="static/css/jquery.dataTables.css">

        <table class="table display table-hover table-condensed table-responsive dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="reklamlar_info">

            <thead>
            <tr role="row"><th class="text-center sorting_asc" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                    Adı
                : activate to sort column descending" style="width: 43px;">
                    Adı
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Gösterim
                : activate to sort column ascending" style="width: 91px;">
                    Gösterim
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Tıklanma
                : activate to sort column ascending" style="width: 91px;">
                    Tıklanma
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Başlangıç
                : activate to sort column ascending" style="width: 99px;">
                    Başlangıç
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Bitiş
                : activate to sort column ascending" style="width: 53px;">
                    Bitiş
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Resim
                : activate to sort column ascending" style="width: 66px;">
                    Resim
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Genişlik
                : activate to sort column ascending" style="width: 84px;">
                    Genişlik
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Yükselik
                : activate to sort column ascending" style="width: 87px;">
                    Yükselik
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Link
                : activate to sort column ascending" style="width: 52px;">
                    Link
                </th><th class="text-center sorting" tabindex="0" aria-controls="reklamlar" rowspan="1" colspan="1" aria-label="
                    Durum
                : activate to sort column ascending" style="width: 71px;">
                    Durum
                </th></tr>
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
                                                  <td><img style="border: double" src="{{asset($ban->yol)}}" width="150px" height="150px"></td>
                                                  <td>{{ $ban->genislik }}</td>

                                                  <td>{{ $ban->yukseklik }}</td>
                                                  <td>{{ $ban->url }}</td>

                                                  <td>{{ $ban->url }}</td>







                                              </tr>

                                            @endforeach
                                      @endif

                                  </tbody>
    </table>
 </div></div>
 <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="reklamlar_info" role="status" aria-live="polite">Kayıt bulunamadı.</div></div>

 <div class="col-sm-7"><div class="dataTables_paginate paging_full" id="reklamlar_paginate"><ul class="pagination"><li class="paginate_button first disabled" aria-controls="reklamlar" tabindex="0" id="reklamlar_first"><a href="#">İlk</a></li><li class="paginate_button previous disabled" aria-controls="reklamlar" tabindex="0" id="reklamlar_previous"><a href="#">&lt;&lt;&lt;</a></li><li class="paginate_button next disabled" aria-controls="reklamlar" tabindex="0" id="reklamlar_next"><a href="#">&gt;&gt;&gt;</a></li><li class="paginate_button last disabled" aria-controls="reklamlar" tabindex="0" id="reklamlar_last"><a href="#">Son</a></li></ul></div></div></div></div>

    </section>
    </content>


</div>


<div class="panel-body">


                          <!-- /.table-responsive -->

                      </div>
                      <!-- /.panel-body -->


              </div>
              <!-- /.col-lg-12 -->
          </div>
<footer class="text-center">
</footer>

@include('admin/alt')

<!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->




