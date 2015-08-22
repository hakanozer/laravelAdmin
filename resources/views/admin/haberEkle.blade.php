@include('admin/ustMenu')

<div id="page-wrapper">

    <content style="padding: 40px 300px">

        <div class="text-right" style="margin-bottom: 25px">
            <a href="{{url('admin/haberler')}}" class="btn btn-primary"><i class="glyphicon glyphicon-backward"> </i> Geri Dön</a>
        </div>

<section>
    <script type="text/javascript" src="static/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>

    <div class="panel panel-primary" id="duzenle" style="width: 75%; margin: 0 auto; margin-bottom: 50px">

        <div class="panel-heading">
            <h4 class="panel-title text-center">Haber Ekleme</h4>
        </div>

        <div class="panel-body">

            <p class="text-center">Haber bilgilerinizi aşağıda girebilirsiniz.</p>
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
            <form class="form-horizontal" action="{{url('admin/haberEkle')}}" method="post" enctype="multipart/form-data" style="width: 90%; margin: 0 auto;">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="baslik">Haber Başlık</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="haber_baslik" name="haber_baslik" value="" class="form-control">
                        </div>
                    </div>
                </div>
 <script type="text/javascript">
                                                          CKEDITOR.replace( 'detay',
                                                                  {
                                                                      customConfig : 'config.js',
                                                                      toolbar : 'simple'
                                                                  })
                                                      </script>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="uzun_aciklama">Detay</label>
                        </div>
                         <div class="col-md-9">
                                                   <textarea name="detay" id="detay" rows="7" class="form-control ckeditor"></textarea>
                                                   </div>
                    </div>
                </div>
                <div class="form-group">
                                         <div class="row">
                                             <div class="col-md-3">
                                                 <label for="detay">Haber Görseli</label>
                                             </div>
                                             <div class="col-md-9">
                                                 <input type="file" name="dosya" id="dosya" class="type-file" required="">

                                             </div>
                                         </div>
                                     </div>

                <!-- Aktif / Pasif -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="resim">Durum</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" name="durum" id="durum">
                                <option value="0">Aktif</option>
                                <option value="1">Pasif</option>
                            </select>
                        </div>
                    </div>
                </div>




                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"> </div>
                        <div class="col-md-9 text-right">
                            <input type="submit" value="Ekle" name="ekle" class="btn btn-primary">
                            <a class="btn btn-danger" href="{{url('admin/haberler')}}">İptal</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <div class="panel-footer"></div>
    </div>
</section>
    </content>
</div>

@include('admin/alt')