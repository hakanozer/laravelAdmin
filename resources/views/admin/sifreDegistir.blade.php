@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-primary">

                    <div class="panel-heading text-center">
                        <h3>Şifre Değiştirme</h3>
                    </div>

                    <div class="panel-body">

                        <form action="{{url('admin/sifreDegistir')}}" method="post">
<input type="hidden" name="kulID" value="1">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="fSifre">Şifre:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" name="sifre" id="sifre">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="fSifreTekrar">Şifre Tekrar:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" name="sifreTekrar" id="sifreTekrar">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-9 col-md-offset-3">
                                        <a href="{{ url('admin/sifreDegistir') }}"> <input class="btn btn-default btn-sm btn-primary" type="submit" name="kulSifre" value="Kaydet">
                                        </a>
                                        <a href="{{ url('admin/sifreDegistir') }}" class="btn btn-sm btn-danger">İptal</a>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>

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


                </div>

            </div>

        </div>

    </div>


@include('admin/alt')