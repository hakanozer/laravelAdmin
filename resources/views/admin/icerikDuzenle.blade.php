@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">İçerik Ekleme Sayfası</h1><a href="{{url ('admin/icerik')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

       <section>

               <div class="panel panel-primary" style="width: 75%; margin: 0 auto; margin-bottom: 50px">

                   <div class="panel-heading">
                       <h4 class="panel-title text-center">İçerik Ekleme</h4>
                   </div>

                   <div class="panel-body">

                       <p class="text-center">İçerik bilgilerinizi aşağıda girebilirsiniz.</p>
                       <hr>
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



                       <form class="form-horizontal"  action="{{url("admin/icerikDuzenle/".$veri->id)}}" method="post" style="width: 90%; margin: 0 auto;">
                        <input name="icerik_id" type="hidden" value="{{$data["icerikler"]->id}}"/>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <!-- Başlık -->
                           <div class="form-group">
                               <div class="row">
                                   <div class="col-md-3">
                                       <label for="baslik">İçerik Başlık</label>
                                   </div>
                                   <div class="col-md-9">
                                       <input type="text" id="baslik" name="baslik" value="{{$veri->baslik}}" class="form-control">
                                   </div>
                               </div>
                           </div>

                           <!-- Kısa Açıklama -->
                           <div class="form-group">
                               <div class="row">
                                   <div class="col-md-3">
                                       <label >Kısa Açıklama</label>
                                   </div>
                                   <div class="col-md-9">
                                       <input type="text" id="kisa_aciklama" name="kisa_aciklama" value="{{$veri->kisa_aciklama}}" class="form-control">
                                   </div>
                               </div>
                           </div>

                           <!-- Detay -->
                           <div class="form-group">
                           <div class="row">
                           <div class="col-md-3">
                           <label >Detay</label>
                            </div>
                            <div class="col-md-9">
                           <textarea style="width:535px;" name="detay">{{$veri->detay}}</textarea>
                           </div>
                           </div>
                           </div>

                           <!-- Buton -->
                           <div class="form-group">
                               <div class="row">
                                   <div class="col-md-3"> </div>
                                   <div class="col-md-9 text-right">
                                       <input type="submit"  value="Güncelle" name="ekle" class="btn btn-primary">

                                       <a class="btn btn-danger" href="{{url ('admin/icerik')}}">İptal</a>
                                   </div>
                               </div>
                           </div>
                       </form>
@endforeach
 @endif
                   </div>

                   <div class="panel-footer"></div>
               </div>

           </section>

    </div>


@include('admin/alt')