@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sipariş Detayı</h1>
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
                                            <th>Sipariş ID:</th>
                                            <td colspan="4">{{$item->sip_id}}</td>

                                        </tr>
                                         <tr>                                                                                           <th>Müşteri:</th>                                                                         <td colspan="4">{{$item->kul_id}}</td>

                                          </tr>
                                           <tr>
                                          <th>Ürün Adı:</th>
                                           <td colspan="4">{{$item->urun_id}}</td>
                                           </tr>
                                        <tr>
                                            <th>Fatura No:</th>
                                            <td colspan="4">123456</td>
                                        </tr>
                                        <tr>
                                            <th>Mağaza Adı:</th>
                                            <td colspan="4">Your Store</td>
                                        </tr>
                                        <tr>
                                     <th>Toplam:</th>
                                     <td colspan="4">{{$item->toplam}}</td>
                                     </tr>
                                     <tr>
                                     <th>IP Adresi:</th>
                                     <td colspan="4">180.249.127.212</td>
                                     </tr>
                                     <tr>
                                     <th>Sipariş Durumu:</th>
                                     <td colspan="4">{{$item->durum}}</td>
                                     </tr>
                                     <tr>
                                     <th>Ekleme Tarihi:</th>
                                     <td colspan="4">{{$item->ekleme_tarihi}}</td>
                                     </tr>
                                     <tr>
                                     <th>Güncelleme Tarihi:</th>
                                     <td colspan="4">{{$item->ekleme_tarihi}}</td>
                                     </tr>
                                    </tbody>
                                    @endforeach
                                    @endif
</table>

    </div>


@include('admin/alt')