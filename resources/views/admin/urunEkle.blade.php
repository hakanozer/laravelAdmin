@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ürün Ekleme Sayfası</h1><a href="{{url ('admin/urun')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <div class="row">
           <section>

           <div class="panel panel-primary" style="width: 75%; margin: 0 auto; margin-bottom: 50px">
                       <div class="panel-heading">
                           <h4 class="panel-title text-center">Ürün Ekleme</h4>
                       </div>
                       <div class="panel-body">
                           <h4 class="text-center">Ürün Bilgilerinizi Giriniz</h4>
                               @if (count($errors) > 0)
                                   <div class="alert alert-danger">
                                       <strong>Uyarı ! </strong>Belirtilen Alanları Boş Bırakmayınız.<br><br>
                                          <ul>
                                              @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                              @endforeach
                                          </ul>
                                   </div>
                               @endif
                               @if (isset($data))
                                   @foreach($data as $veri)
                                      {{ $veri }}
                                   @endforeach
                               @endif
                           <hr>
                           <form class="form-horizontal" action="{{url('admin/urunEkle')}}" method="post" style="width: 90%; margin: 0 auto;">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <div class="form-group">
                                   <div class="row">
                                     <div class="col-md-3">
                                       <label for="kategori_id">
                                         Kategori Adı Giriniz
                                       </label>
                                     </div>
                                     <div class="col-md-9">

                                       <select name="kategori_id">
                                         <option value="">
                                           Kategori Seçiniz
                                         </option>
                                         @if(isset($al2))
                                         @foreach( $al2 as $veri2)
                                         {{--
                                         <input type="hidden" name="kategori_id" value="{{$veri2->
                               id}}"/>
                                         --}}
                                         <option value="{{$veri2->id}}">
                                 {{$veri2->
                                 baslik}}
                                         </option>
                                         @endforeach
                                         @endif
                                       </select>
                                     </div>
                                   </div>
                                 </div>
                               <!-- ürün Adı -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="baslik">Ürün Adını Giriniz</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input type="text" name="baslik" id="baslik" value="" placeholder="Ürün Adı" class="form-control">
                                       </div>
                                   </div>
                               </div>
                               <!-- Kısa Açıklama -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="kisa_aciklama">Kısa Açıklama Giriniz</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input type="text" name="kisa_aciklama" id="kisa_aciklama" placeholder="Ürün Kısa Açıklama" class="form-control">
                                       </div>
                                   </div>
                               </div>
                               <!-- Açıklama -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="aciklama">Ürün Açıklamasını Giriniz</label>
                                       </div>
                                       <div class="col-md-9">
                                           <textarea name="aciklama"  placeholder="Ürün Açıklamasını Giriniz" cols="30" rows="5" class="form-control"></textarea>
                                       </div>
                                   </div>
                               </div>
                               <!-- Ürün Fiyatı -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="fiyat">Ürün Fiyatını Giriniz</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input type="text" name="fiyat" id="fiyat" placeholder="Ürün Fiyat" class="form-control">
                                       </div>
                                   </div>
                               </div>
                               <!-- Ürün Tipi -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="durum">Ürün Tipini Seçiniz</label>
                                       </div>
                                       <div class="col-md-9">
                                           <select class="form-control" name="durum">
                                               <option value="0">Ürünün Tipini Seçiniz</option>
                                               <option value="1">Satılık</option>
                                               <option value="2">Kiralık</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>
                               <!-- Kampanya -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="kampanya">Kampanya var mı ?</label>
                                       </div>
                                       <div class="col-md-9">
                                           <select class="form-control" name="kampanya">
                                               <option>Seçiniz</option>
                                               <option value="1">Evet</option>
                                               <option value="0">Hayır</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>
                               <!-- Stok -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="detay">Stok</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input type="text" name="stok" id="stok" placeholder="Ürün Stok " class="form-control">
                                       </div>
                                   </div>
                               </div>
                               <!-- Piyasa Fiyatı -->
                               <div class="form-group">
                                 <div class="row">
                                    <div class="col-md-3">
                                          <label for="piyasa_fiyat">Piyasa Fiyatı</label>
                                    </div>
                                    <div class="col-md-9">
                                    <input type="text" name="piyasa_fiyati" id="piyasa_fiyati" placeholder="Ürün Piyasa Fiyati " class="form-control">
                                     </div>
                                 </div>
                               </div>
                                <!-- Özel Ürün Seçimi -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="fiyat">Özel Ürün mü?</label>
                                       </div>
                                       <div class="col-md-9">
                                         <div class="checkbox">
                                             <label>
                                               <input type="checkbox" name="onecikan"  >Öne Çıkan
                                             </label>
                                         </div>
                                         <div class="checkbox">
                                             <label>
                                               <input type="checkbox" name="indirimliurun"  >İndirimli Ürün
                                             </label>
                                         </div>
                                         <div class="checkbox">
                                             <label>
                                               <input type="checkbox" name="coksatan"  >Çok Satan
                                             </label>
                                         </div>
                                         <div class="checkbox">
                                             <label>
                                               <input type="checkbox" name="kargobedava"  >Kargo Bedava
                                             </label>
                                         </div>                                                                                                                           <div class="checkbox">                                                                                                              <label>                                                                                                                               <input type="checkbox" name="bugunteslimat" >Bugün Teslimat
                                              </label>                                                                                                                   </div>

                                       </div>
                                   </div>
                               </div>
                               <!-- Buton -->
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3"> </div>
                                       <div class="col-md-9 text-right">
                                           <input type="submit" value="Kaydet" name="kaydet" class="btn btn-primary">
                                           <input type="hidden" name="sirketId" value="11">
                                       </div>
                                   </div>
                               </div>
                           </form>
                       </div>
                       <!--<div class="panel-footer"></div>-->
                   </div>

           </section>

    </div>


@include('admin/alt')
