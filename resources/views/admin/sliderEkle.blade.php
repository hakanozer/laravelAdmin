@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Slider Ekle</h1><a href="{{url ('admin/sliderYonetimi')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">


        <section>

           <div class="panel panel-primary" style="width: 75%; margin: 0 auto; margin-bottom: 50px">

           <div class="panel-heading">
               <h4 class="panel-title text-center">Slider Ekleme</h4>
           </div>

               <div class="panel-body">
                   <p class="text-center">Slider bilgilerinizi aşağıda girebilirsiniz.</p>
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
                           {{ $veri }}
                       @endforeach
                   @endif

                   <form enctype="multipart/form-data" class="form-horizontal" action="{{url('admin/sliderEkle')}}" method="post" style="width: 90%; margin: 0 auto;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                       <!-- Adı -->
                       <div class="form-group">
                           <div class="row">
                               <div class="col-md-3">
                                   <label for="baslik">Adı</label>
                               </div>
                               <div class="col-md-9">
                                   <input type="text" id="adi" name="adi" value="" class="form-control" placeholder="Slider Adı Giriniz">
                               </div>
                           </div>
                       </div>

                       <!-- Dosya(Yol) -->
                       <div class="form-group">
                           <div class="row">
                               <div class="col-md-3">
                                   <label for="kisa_aciklama">Dosya</label>
                               </div>
                               <div class="col-md-9">
                                   <input class="form-control" type="file" name="dosya" id="dosya">
                               </div>
                           </div>
                       </div>

                       <!-- Başlık -->
                       <div class="form-group">
                           <div class="row">
                               <div class="col-md-3">
                                   <label for="baslik">Başlık</label>
                               </div>
                               <div class="col-md-9">
                                   <input type="text" id="baslik" name="baslik" value="" class="form-control" placeholder="Bir Başlık Giriniz">
                               </div>
                           </div>
                       </div>

                       <!-- Kısa Açıklama -->
                       <div class="form-group">
                           <div class="row">
                               <div class="col-md-3">
                                   <label for="baslik">Açıklama</label>
                               </div>
                               <div class="col-md-9">
                                   <input type="text" id="aciklama" name="aciklama" value="" class="form-control" placeholder="Slider Adı Giriniz">
                               </div>
                           </div>
                       </div>

                       <!-- URL -->
                       <div class="form-group">
                           <div class="row">
                               <div class="col-md-3">
                                   <label for="baslik">URL</label>
                               </div>
                               <div class="col-md-9">
                                   <input type="text" id="url" name="url" value="" class="form-control" placeholder="Slider URL Giriniz">
                               </div>
                           </div>
                       </div>

                       <!-- Buton -->
                       <div class="form-group">
                           <div class="row">
                               <div class="col-md-3"> </div>
                               <div class="col-md-9 text-right">
                                   <input type="submit"  value="Ekle" name="ekle" class="btn btn-primary">
                                   <a class="btn btn-danger" href="{{url ('admin/sliderYonetimi') }}">İptal</a>
                               </div>
                           </div>
                       </div>
                   </form>

               </div>

                           <div class="panel-footer"></div>
                       </div>

                   </section>

    </div>


@include('admin/alt')