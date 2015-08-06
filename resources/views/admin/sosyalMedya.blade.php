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

<form action="{{url('admin/sosyalMedya')}}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

 <p class="fa fa-facebook-square"> Facebook hesabı:
</p><input class="form-control" placeholder="Facebook hesabınızı girin.." name="facebook"><br>
<p class="fa fa-twitter-square"> Twitter hesabı: </p>
</p><input class="form-control" placeholder="Twitter hesabınızı girin.." name="twitter"><br>
<p class="fa fa-linkedin-square"> Linkedin hesabı: </p>
<input class="form-control" placeholder="Linkedin hesabınızı girin.." name="linkedin"><br>
<p class="fa fa-google-plus-square"> Google plus hesabı:</p>
<input class="form-control" placeholder="Google plus hesabınızı girin.." name="googleplus"><br>
<p class="fa fa-instagram"> Instagram hesabı: </p>
<input class="form-control" placeholder="Instagram hesabınızı girin.." name="instagram"><br>

<input type="submit" value="Kaydet"  class="btn btn-default btn-sm btn-primary" >



</form>
    </div>
</div>

@include('admin/alt')