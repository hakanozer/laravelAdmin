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
        <div class="col-md-6 col-md-offset-3">

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
                        @if(isset($bilgi['hataliEposta']))
                        <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>{{$bilgi["hataliEposta"]}}</div>
                        @endif
                    @endif
                @endif


                <div class="panel-body">




                </div>

            </div>

        </div>

    </div>

</div>


@include('admin/alt')