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
     <!-- TODO: BU BÖLÜM ÝSTATÝSTÝKÝ VERÝLER ÝLE DOLDURULACAKTIR. -->
                     <div class="col-md-3">
                         <div class="panel panel-primary widget">
                             <div class="panel-heading">
                                 <h4>Ürünler<i class="pull-right fa fa-bar-chart fa-fw"></i></h4>
                             </div>
                             <div class="panel-footer">
                                 <h5>Toplam Ürünler<i class="pull-right">1</i></h5>
                                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                                 href="{{url('admin/urunler')}}">Git</a></i>
                             </div>
                         </div>
                         <div class="panel panel-primary widget">
                             <div class="panel-heading">
                                 <h4>Sipariþ Yönetimi(Örnek) <i class="fa fa-cubes fa-fw pull-right"></i></h4>
                             </div>
                             <div class="panel-footer">
                                 <h5>Toplam Sipariþ<i class="pull-right">0</i></h5>
                                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                                 href="#">Git</a></i>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="panel panel-primary widget">

                             <div class="panel-heading">
                                 <h4>Beðeni Yönetimi(Örnek) <i class="fa fa-thumbs-o-up fa-fw pull-right"></i></h4>
                             </div>
                             <div class="panel-footer">
                                 <h5>Toplam Beðeni<i class="pull-right">0</i></h5>
                                 <h5>Pozitif Beðeni<i class="pull-right">0</i></h5>
                                 <h5>Negatif Beðeni<i class="pull-right">0</i></h5>
                                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                                 href="{{url('admin/sosyalMedya')}}">Git</a></i>
                             </div>

                         </div>
                         <div class="panel panel-primary widget">

                             <div class="panel-heading">
                                 <h4>Müþteri Yönetimi(Örnek) <i class="fa fa-users fa-fw pull-right"></i></h4>
                             </div>
                             <div class="panel-footer">
                                 <h5>Toplam Müþteri<i class="pull-right">0</i></h5>
                                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                                 href="#">Git</a></i>
                             </div>

                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="panel panel-primary widget">
                             <div class="panel-heading">
                                 <h4>Ýçerik Yönetimi <i class="pull-right fa fa-pie-chart fa-fw"></i></h4>
                             </div>
                             <div class="panel-footer">
                             @if(isset($veri))
                                 <h5>Toplam Ýçerik<i class="pull-right">{{count($veri)}}</i></h5>
                             @endif
                                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                                 href="{{url('admin/icerik')}}">Git</a></i>
                             </div>
                         </div>
                         <div class="panel panel-primary widget">
                             <div class="panel-heading">
                                 <h4>Anket Yönetimi(Örnek) <i class="fa fa-check-square-o fa-fw pull-right"></i></h4>
                             </div>
                             <div class="panel-footer">
                                 <h5>Toplam Anketler<i class="pull-right">2</i></h5>
                                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                                 href="#">Git</a></i>
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
                                 <h5>Toplam Duyuru<i class="pull-right">1</i></h5>
                                 <i class="pull-right"><a class="btn btn-default btn-sm btn-primary"
                                 href="#">Git</a></i>
                             </div>
                         </div>
                     </div>
                 </div> 


@include('admin/alt')