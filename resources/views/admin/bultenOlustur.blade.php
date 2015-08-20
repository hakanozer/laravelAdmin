@include('admin/ustMenu')

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Yeni E-Bülten</h1>
            <a href="{{url ('admin/bulten')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary">
            <i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>
        <!-- /.col-lg-12 -->

    </div>
    <div class="row">
        <div class="col-md-7 col-md-offset-2 ">

            <div class="panel panel-primary">

                <div class="panel-heading text-center">
                    <h3>E-Bülten Yeni Abone Ekle</h3>
                </div>


                <div>
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
                </div>

                <!-- todo:Başarılı kayıt işlemi admine yansıtılacaktır. -->
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


                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('admin/bulten/bultenGonder')}}"
                    method="post" style="width: 90%; margin: 0 auto;">

                     <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <!-- Başlık -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="baslik">Bülten Başlık</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="baslik" name="baslik" class="form-control">
                                </div>
                            </div>
                        </div>

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
                        <label for="kisa_aciklama">Bülten Detayı</label>
                         </div>
                         <div class="col-md-9">
                        <textarea name="detay" id="detay" rows="7" class="form-control ckeditor"></textarea>

                         </div>
                        </div>
                        </div>

                        <!-- Buton -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"> </div>
                                <div class="col-md-9 text-right">
                                    <input type="submit"  value="Gönder" name="gonder" class="btn btn-primary">
                                    <a class="btn btn-danger" href="{{url ('admin/bulten')}}">İptal</a>
                                </div>
                            </div>
                        </div>
                    </form>



                </div>

            </div>

        </div>

    </div>

</div>


@include('admin/alt')