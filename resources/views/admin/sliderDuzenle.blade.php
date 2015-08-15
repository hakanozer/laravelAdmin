@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Slider Düzenle</h1><a href="{{url ('admin/sliderYonetimi')}}" style="float: left; margin-bottom: 15px; " class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">

           <section>

                   <div class="panel panel-primary" style="width: 75%; margin: 0 auto; margin-bottom: 50px">

                       <div class="panel-heading">
                           <h4 class="panel-title text-center">Slider Düzenleme</h4>
                       </div>

                       <div class="panel-body">

                           <p class="text-center">Slider bilgilerinizi aşağıda düzenleyebilirsiniz.</p>
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
                                @foreach($data as $slider)

                            <form class="form-horizontal"  enctype="multipart/form-data"  action="{{url("admin/sliderDuzenle/".$slider->id)}}" method="post" style="width: 90%; margin: 0 auto;">
                            <input name="slider_id" type="hidden" value="{{$data["slider"]->id}}"/>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <!-- Başlık -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="baslik">Başlık</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" id="baslik" name="baslik" value="{{$slider->baslik}}" class="form-control" placeholder="Slider Başlığı Giriniz">
                                    </div>
                                </div>
                            </div>

                            <!-- Kısa Açıklama -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label >Açıklama</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" id="aciklama" name="aciklama" value="{{$slider->kisa_aciklama}}" class="form-control" placeholder="Slider Açıklaması Giriniz">
                                    </div>
                                </div>
                            </div>

                            <!-- URL -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label >URL</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" id="url" name="url" value="{{$slider->url}}" class="form-control" placeholder="Slider URL'i Giriniz">
                                    </div>
                                </div>
                            </div>

                            <!-- Resim -->
                            <div class="form-group">
                                <div class="row">
                                     <div class="col-md-3">
                                        <label >Resim</label>
                                     </div>
                                     <div class="col-md-9">
                                          <img style="border: double" src="{{asset("slider/".$slider->yol)}}" width="200/" >
                                     </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="resim">Dosya Seçiniz</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control" type="file" name="dosya" id="dosya">
                                    </div>
                                </div>
                            </div>



                            <!-- Buton -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3"> </div>
                                    <div class="col-md-9 text-right">
                                        <input type="submit"  value="Güncelle" name="guncelle" class="btn btn-primary">
                                        <a class="btn btn-danger" href="{{url ('admin/sliderYonetimi')}}">İptal</a>
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
