@include('admin/ustMenu')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Kullanıcı Ekle</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
<a  href="{{ url('admin/kullanicilar')  }}" style="float: left; margin-bottom: 15px; "class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
    <div style="clear: both"></div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Kullanıcı Bilgilerini Giriniz:
                </div>
                <div class="panel-body">
                    <div class="row">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (isset($result))
                            @if ($result)
                                <div class="alert alert-success"> Kullanıcı Başarıyla Eklendi. </div>
                            @else
                                <div class="alert alert-danger">Kullanıcı Eklenirken Hata Oluştu.</div>
                            @endif
                        @endif
                        <div class="col-lg-6">
                            <form role="form" method="post" action="{{ url('admin/kullanicilar/ekle') }}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="form-group">
                                    <input name="adi" class="form-control" placeholder="Ad">
                                </div>

                                <div class="form-group">
                                    <input name="soyadi" class="form-control" placeholder="Soyad">
                                </div>

                                <div class="form-group">
                                    <input name="mail" class="form-control" placeholder="E-mail">
                                </div>

                                <div class="form-group">
                                    <input name="sifre" class="form-control" type="password" placeholder="Şifre">
                                </div>

                                <div class="form-group">
                                    <input name="sifreTekrar" class="form-control" type="password" placeholder="Şifre Tekrar">
                                </div>


                                <div class="form-group">
                                    <label>Durum: </label>
                                    <label class="radio-inline">
                                        <input name="durum" id="optionsRadiosInline1" value="0" type="radio" checked> Aktif
                                    </label>
                                    <label class="radio-inline">
                                        <input name="durum" id="optionsRadiosInline2" value="1" type="radio">Pasif
                                    </label>
                                </div>

                                <input type="submit" class="btn btn-success" value="Gönder"/>

                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

@include('admin/alt')