@include('admin/ustMenu')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin Panel</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

<form action="{{url('admin/adminDuzenle')}}" method="post">


<input type="hidden" name="kulID" value="1">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="fAdi">Adınız:</label>
                                </div>
@if(isset($data))
@foreach($data as $veri)
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="adi" id="fAdi" value="{{$veri->adi}}"  >
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="fMail">Soyadınız:</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="soyadi" id="fSoyadi" VALUE="{{$veri->soyadi}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="fMail">Mailiniz:</label>
                                </div>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="mail" id="email" VALUE="{{$veri->mail}}">
                                </div>
                            </div>
                        </div>
                        @endforeach
@endif

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3">
                                   <a href="{{url('admin/adminDuzenle',$veri->id)}}"><input class="btn btn-default btn-sm btn-primary" type="submit" name="duzenle" value="Kaydet" ></a>
                                    <a href="{{url('admin/anasayfa')}}" class="btn btn-sm btn-danger">İptal</a>
                                    <a class="btn btn-warning btn-sm" href="{{url('admin/sifreDegistir')}}">Şifre Değiştir</a>
                                </div>
                            </div>
                        </div>
                    </form>


    </div>
    </div>
@include('admin/alt')