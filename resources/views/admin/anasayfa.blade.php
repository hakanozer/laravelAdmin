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
         <div class="col-md-3">
             <div class="panel panel-primary widget">
                 <div class="panel-heading">
                     <h4>Ürünler<i class="pull-right fa fa-bar-chart fa-fw"></i></h4>
                 </div>
                 <div class="panel-footer">
                 @if(isset($urunler))
                     <h5>Toplam Ürünler<i class="pull-right">{{$urunler}}</i></h5>
                 @else
                     <h5>Toplam Ürünler<i class="pull-right">0</i></h5>
                 @endif
                     <i class="pull-right"><a class="btn btn-default btn-sm btn-primary" href="{{url('admin/urun')}}">Git</a></i>
                 </div>
             </div>
             <div class="panel panel-primary widget">
                 <div class="panel-heading">
                     <h4>Sipariş Yönetimi(Örnek) <i class="fa fa-cubes fa-fw pull-right"></i></h4>
                 </div>
                 <div class="panel-footer">
                 @if(isset($siparisler))
                     <h5>Toplam Sipariş<i class="pull-right">{{$siparisler}}</i></h5>
                 @else
                     <h5>Toplam Sipariş<i class="pull-right">0</i></h5>
                 @endif
                     <i class="pull-right"><a class="btn btn-default btn-sm btn-primary" href="{{url('admin/siparisler')}}">Git</a></i>
                 </div>
             </div>
         </div>
         <div class="col-md-3">
             <div class="panel panel-primary widget">

                 <div class="panel-heading">
                     <h4>Sosyal Medya Üyelikleri <i class="fa fa-thumbs-o-up fa-fw pull-right"></i></h4>
                 </div>
                 <div class="panel-footer">
                 @if(isset($sosyalmedyalar))
                     <h5>Toplam Üyelik<i class="pull-right">{{$sosyalmedyalar}}</i></h5>
                 @else
                     <h5>Toplam Üyelik<i class="pull-right">0</i></h5>
                 @endif
                     <i class="pull-right"><a class="btn btn-default btn-sm btn-primary" href="{{url('admin/sosyalMedya')}}">Git</a></i>
                 </div>

             </div>
             <div class="panel panel-primary widget">

                 <div class="panel-heading">
                     <h4>Banner Yönetimi <i class="fa fa-users fa-fw pull-right"></i></h4>
                 </div>
                 <div class="panel-footer">
                 @if(isset($bannerlar))
                     <h5>Toplam Banner<i class="pull-right">{{$bannerlar}}</i></h5>
                 @else
                    <h5>Toplam Banner<i class="pull-right">0</i></h5>
                 @endif
                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary" href="{{url('admin/bannerListele')}}">Git</a></i>
                 </div>

             </div>
         </div>
         <div class="col-md-3">
             <div class="panel panel-primary widget">
                 <div class="panel-heading">
                     <h4>İçerik Yönetimi <i class="pull-right fa fa-pie-chart fa-fw"></i></h4>
                 </div>
                 <div class="panel-footer">
                 @if(isset($icerikler))
                     <h5>Toplam İçerik<i class="pull-right">{{$icerikler}}</i></h5>
                 @else
                     <h5>Toplam İçerik<i class="pull-right">0</i></h5>
                 @endif
                     <i class="pull-right"><a class="btn btn-default btn-sm btn-primary" href="{{url('admin/icerik')}}">Git</a></i>
                 </div>
             </div>
             <div class="panel panel-primary widget">
                 <div class="panel-heading">
                     <h4>Anket Yönetimi <i class="fa fa-check-square-o fa-fw pull-right"></i></h4>
                 </div>
                 <div class="panel-footer">
                 @if(isset($anketler))
                     <h5>Toplam Anketler<i class="pull-right">{{$anketler}}</i></h5>
                 @else
                     <h5>Toplam Anketler<i class="pull-right">0</i></h5>
                 @endif
                     <i class="pull-right"><a class="btn btn-default btn-sm btn-primary" href="{{url('admin/anket')}}">Git</a></i>
                 </div>
             </div>
         </div>
         <div class="col-md-3">
             <div class="panel panel-primary widget">
                 <div class="panel-heading">
                     <h4>Haber Yönetimi <i class="fa fa-newspaper-o fa-fw pull-right"></i></h4>
                 </div>
                 <div class="panel-footer">
                     <h5>Toplam Haber<i class="pull-right">1</i></h5>
                     <h5>Aktif Haber<i class="pull-right">1</i></h5>
                     <h5>Pasif Haber<i class="pull-right">0</i></h5>
                     <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                     href="{{url('admin/haberler')}}">Git</a></i>
                 </div>
             </div>

             <div class="panel panel-primary widget">
                 <div class="panel-heading">
                     <h4>Duyuru Yönetimi(Örnek) <i class="fa fa-bullhorn fa-fw pull-right"></i></h4>
                 </div>
                 <div class="panel-footer">
                 @if(isset($bultenler))
                     <h5>Toplam Duyuru<i class="pull-right">{{$bultenler}}</i></h5>
                 @else
                     <h5>Toplam Duyuru<i class="pull-right">0</i></h5>
                 @endif
                     <i class="pull-right"><a class="btn btn-default btn-sm btn-primary" href="{{url('admin/bulten')}}">Git</a></i>
                 </div>
             </div>
         </div>
     </div>
</div>

@include('admin/alt')