<?php
$dil = Session::get('dil');
App::setLocale($dil);
?>


@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('adminDil.sosyalMedya') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

<form action="{{url('admin/sosyalMedya')}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

 <p class="fa fa-facebook-square"> {{ trans('adminDil.facebook') }}
</p><input class="form-control" placeholder="{{ trans('adminDil.faceGir') }}" name="facebook"><br>
<p class="fa fa-twitter-square"> {{ trans('adminDil.twitter') }} </p>
</p><input class="form-control" placeholder="{{ trans('adminDil.twitGir') }}" name="twitter"><br>
<p class="fa fa-linkedin-square"> {{ trans('adminDil.Linkedin') }} </p>
<input class="form-control" placeholder="{{ trans('adminDil.LinkedinGir') }}" name="linkedin"><br>
<p class="fa fa-google-plus-square"> {{ trans('adminDil.GooglePlus') }} </p>
<input class="form-control" placeholder="{{ trans('adminDil.GooglePlusGir') }}" name="googleplus"><br>
<p class="fa fa-instagram"> {{ trans('adminDil.Instagram') }} </p>
<input class="form-control" placeholder="{{ trans('adminDil.InstagramGir') }}" name="instagram"><br>

<input type="submit" value="{{ trans('adminDil.kaydet') }}"  class="btn btn-default btn-sm btn-primary" >



</form>
    </div>
</div>

@include('admin/alt')