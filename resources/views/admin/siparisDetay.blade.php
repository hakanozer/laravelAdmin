<?php
$dil = Session::get('dil');
App::setLocale($dil);
?>

@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('adminDil.siparisDetay') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      @if(isset($veri))
      @foreach($veri as $item)
    <table class="table table-bordered table-striped">
<tbody>

                                        <tr>
                                            <th>{{ trans('adminDil.sipID') }}</th>
                                            <td colspan="4">{{$item->sip_id}}</td>

                                        </tr>
                                         <tr>                                                                                           <th>Müşteri:</th>                                                                         <td colspan="4">{{$item->kul_id}}</td>

                                          </tr>
                                           <tr>
                                          <th>{{ trans('adminDil.urunAdi') }}</th>
                                           <td colspan="4">{{$item->urun_id}}</td>
                                           </tr>
                                        <tr>
                                            <th>{{ trans('adminDil.faturaNo') }}</th>
                                            <td colspan="4">123456</td>
                                        </tr>
                                        <tr>
                                            <th>{{ trans('adminDil.magazaAd') }}</th>
                                            <td colspan="4">Your Store</td>
                                        </tr>
                                        <tr>
                                     <th>{{ trans('adminDil.toplam') }}</th>
                                     <td colspan="4">{{$item->toplam}}</td>
                                     </tr>
                                     <tr>
                                     <th>{{ trans('adminDil.IPaDRES') }}</th>
                                     <td colspan="4">180.249.127.212</td>
                                     </tr>
                                     <tr>
                                     <th>{{ trans('adminDil.sipDurum') }}</th>
                                     <td colspan="4">{{$item->durum}}</td>
                                     </tr>
                                     <tr>
                                     <th>{{ trans('adminDil.eklemeTarih') }}</th>
                                     <td colspan="4">{{$item->ekleme_tarihi}}</td>
                                     </tr>
                                     <tr>
                                     <th>{{ trans('adminDil.update') }}</th>
                                     <td colspan="4">{{$item->ekleme_tarihi}}</td>
                                     </tr>
                                    </tbody>
                                    @endforeach
                                    @endif
</table>

    </div>


@include('admin/alt')