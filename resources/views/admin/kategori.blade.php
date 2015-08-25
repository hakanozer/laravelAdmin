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
            <h1 class="page-header"> Kategoriler</h1>
        </div>

    </div>
    <div class="row">
    <div class="panel panel-primary" style="width: 75%; margin: 0 auto; margin-bottom: 50px">
                <div class="panel-heading">
                    <h4 class="panel-title text-center">Ürün Kategori Ekle</h4>
                </div>
                <div class="panel-body">
                    <p class="text-center">Ürün Kategori Bilgilerinizi Giriniz.</p>
                    <div>
                    @if (count($errors) > 0)
                                      <div class="alert alert-danger">
                                         Bir <strong>sorun </strong>oluştu. <br><br>
                                         <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                         </ul>
                                      </div>
                                      @endif
                    </div>
                    <hr>
                    <form action=""  method="post" id="katDuz">

                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                        <!-- ÜST KATEGROİ -->
                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-3">
                                    <label>Üst Kategori Seçiniz</label>
                                </div>
                                <div class="col-md-9">


                                    @if(isset($data))
                                    <?php
                                     echo "<select class=\"form-control\" name=\"topCategory\" id=\"urunTopKategori\"><option value=\"0\">Kategori Seçiniz </option>";
                                    ?>
                                        <?php echo $data; ?><?php echo "</select>"; ?>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <!-- Kategori Adı -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="kisa_aciklama">Kategori Adını Giriniz</label>
                                </div>
                                <div class="col-md-9">
                                    <input name="kategori_adi" class="form-control" placeholder="Kategori Adı Giriniz" type="text">

                                </div>
                            </div>
                        </div>


                        <!-- Buton -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"> </div>
                                <div class="col-md-9 text-right">



                                    <input type="submit"  id="btnkaydet"  name="kaydet" class="btn btn-primary" value="Kaydet" >
                                    <input type="submit"  id="btnduzenle"  name="duzenle" class="btn btn-primary" value="Düzenle" >

                                </div>
                            </div>
                        </div>

    <script>
        function yonlendirBasarili() {
            var page_url = window.location.href;
            page_url = page_url.replace("&sonuc=basarili", "");
            window.location.href = page_url;
        };

        function yonlendirBasarisiz() {
            var page_url = window.location.href;
            page_url = page_url.replace("&sonuc=basarisiz", "");
            window.location.href = page_url;
        };
    </script>


                </div>
                <div class="panel-footer">

                    <div class="row">
                        <div class="col-md-3">

                                <input type="submit" id="btnSil" name="sil" class="btn btn-danger" value="Sil">

</div>
</form>

<div class="col-md-9">

@if(isset($bilgi))
@foreach($bilgi as $veri)
                    <form action="" method="post" id="duzKaydet">
                                 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                 <input type="hidden" name="kategoriId" value="{{$veri->id}}">
                                 <input type="text" name="kategoriAdi" value="{{$veri->baslik}}">
                                 <input class="btn btn-danger" type="submit" id="btnDuzenleKaydet" name="guncelle" value="Güncelle">
                         </form>
                        @endforeach
                        @endif
                         @if(isset($islem))
                                                <div class="alert-warning"> {{$islem}}</div>
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

</div>

<script>
$( document ).ready(function() {
$('input#btnduzenle').click(function(){
    $('form#katDuz').attr('action', "kategoriAc").submit();
});

$('input#btnDuzenleKaydet').click(function(){
    $('form#duzKaydet').attr('action', "kategoriEkle").submit();
});

$('input#btnSil').click(function(){
    $('form#katDuz').attr('action', "kategoriSil").submit();
});


});
</script>