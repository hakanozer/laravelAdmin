@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin Panel Anasayfa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
     <!-- /.row -->
    <div class="row">

        @if(isset($bilgi))
           <p>HOŞGELDİNİZ,
           <a href="{{ url('/admin/anasayfa#') }}">
           {{ $bilgi->adi." ".$bilgi->soyadi }}
           </a>
           </p>
        @endif

    </div>


@include('admin/alt')