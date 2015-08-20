<?php
$dil = Session::get('dil');
App::setLocale($dil);
?>

@include('admin/ustMenu')

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('adminDil.anketEkle') }}</h1>
            <a href="{{url ('admin/anket')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> {{ trans('adminDil.geriDon') }}</a>

            <div class="col-md-12" style="float: right; width: 106px; margin-top: -7px;">
                <a href="{{url ('admin/anketEkle')}}" class="btn btn-primary">{{ trans('adminDil.anketEkle') }}</a>
            </div>

            <div class="col-md-12" style="float: right; width: 106px; margin-top: -7px;">
                <a href="{{url ('admin/anketSoruEkle')}}" class="btn btn-primary">{{ trans('adminDil.soruEkle') }}</a>
            </div>


        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="panel panel-primary">

                <div class="panel-heading text-center">
                    <h3>{{ trans('adminDil.yenAnket') }}</h3>
                </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Bazı problemlerle karşılaştık<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


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

                    <form action="" method="post">

                        <input name="_token" value="{{csrf_token()}}" type="hidden">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">


                                    <label for="fSifre">{{ trans('adminDil.anketBaslik') }}</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" id="baslik" name="baslik"  class="form-control">
                                </div>
                                </div>


                            </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-3">

                                    <input class="btn btn-default btn-sm btn-primary" name="anketEkleButton" value="{{ trans('adminDil.kaydet') }}" type="submit">

                                    <a href="{{url('admin/anket')}}" class="btn btn-sm btn-danger">{{ trans('adminDil.iptal') }}</a>
                                </div>

                            </div>
                        </div>
                    </form>


                </div>

            </div>

        </div>

            </div>



@include('admin/alt')