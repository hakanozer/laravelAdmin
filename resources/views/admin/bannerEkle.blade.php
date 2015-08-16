 @include('admin/ustMenu')



 <div id="page-wrapper">

     <content style="padding: 40px 0px">

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

     <section>


         <div class="panel panel-primary" style="width: 75%; margin: 0 auto; margin-bottom: 50px">
             <div class="panel-heading">
                 <h4 class="panel-title text-center">Reklam Ekle</h4>
             </div>
             <div class="panel-body">
                 <p class="text-center">Reklam Bilgilerinizi Giriniz.</p>
                 <hr>
                 <form class="form-horizontal" action="{{url('admin/bannerEkle')}}" enctype="multipart/form-data" method="post" style="width: 90%; margin: 0 auto;">
                     <!-- reklam adı -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="baslik">Reklam Adı</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="text" id="adi" name="adi" value="" class="form-control">
                             </div>
                         </div>
                     </div>
                     <!-- Gösterim Sayısı -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="kisa_aciklama">Gösterim Sayısı</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="text" id="gosterim" name="gosterim" value="0" class="form-control">
                             </div>
                         </div>
                     </div>
                     <!-- Başlangıç Tarihi -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="detay">Başlangıç Tarihi</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="datetime-local" name="baslangic" id="baslangic" class="form-control">
                             </div>
                         </div>
                     </div>
                     <!-- bitis Tarihi -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="detay">Bitiş Tarihi</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="datetime-local" name="bitis" id="bitis" class="form-control">
                             </div>
                         </div>
                     </div>
                     <!-- Reklam Görseli -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="detay">Reklam Görseli</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="file" name="dosya" id="dosya" class="type-file" required="">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                             </div>
                         </div>
                     </div>
                     <!-- Reklam Genişlik -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="baslik">Reklam Genişlik</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="text" id="genislik" name="genislik" value="" class="form-control">
                             </div>
                         </div>
                     </div>
                     <!-- Reklam Yükseklik -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="baslik">Reklam Yükselik</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="text" id="yukseklik" name="yukseklik" value="" class="form-control">
                             </div>
                         </div>
                     </div>
                     <!-- Reklam link -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3">
                                 <label for="baslik">Reklam Link</label>
                             </div>
                             <div class="col-md-9">
                                 <input type="text" id="link" name="link" value="" class="form-control">
                             </div>
                         </div>
                     </div>
                     <!-- Reklam Durum -->
                     <div class="form-group">
                        <div class="row">
                             <div class="col-md-3">

                                    <label for="baslik">Reklam Durumu</label>
                             </div>
                             <div class="col-md-9">
                                    <select class="form-control" name="durum" id="durum">
                                         <option value="0">Pasif</option>
                                         <option value="1" selected>Aktif</option>

                                     </select>
                             </div>
                        </div>
                     </div>

                     <input value="11" name="sid" type="hidden">
                     <!-- Buton -->
                     <div class="form-group">
                         <div class="row">
                             <div class="col-md-3"> </div>
                             <div class="col-md-9 text-right">
                                 <input type="submit" value="Ekle" name="ekle" class="btn btn-primary">
                                 <a class="btn btn-danger" href="{{url("admin/bannerListele")}}">İptal</a>
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
            <div class="panel-footer"></div>
        </div>
@include('admin/alt')