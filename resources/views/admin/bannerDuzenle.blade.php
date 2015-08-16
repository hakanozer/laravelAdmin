
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
<div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h4>Reklam Düzenleme</h4>
                </div>

                <div class="panel-body">


 @if(isset($data))
 @foreach($data as $veri)
<form style="width: 90%; margin: 0 auto" method="post" class="form-horizontal" enctype="multipart/form-data" action="{{url("admin/bannerDuzenle/".$veri->id)}}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group" >

                            <div class="col-md-3">
                                <label for="baslik">Reklam Adı</label>
                            </div>
                             <input value="{{ $veri->ad }}" class="form-control" type="text" name="ad" id="adi"/>
                        </div>
                        <div class="form-group" >
                            <div class="col-md-3">
                                <label for="baslik">Reklam Resmi</label>
                            </div>
                            <input value="{{ $veri->yol }}" class="form-control" type="file" name="dosya" id="dosya"  required/>
                        </div>
                         <!-- Resim -->

                             <label>Resim</label>

                        <div class="form-group" style="border-style: ridge" >

                                <div class="col-md-3">
                                </div>
                                 <div class="col-md-6">
                                      <img style="border: double" src="{{asset("resimler/".$veri->yol)}}" width="200/" >
                                 </div>

                        </div>

                        <div class="form-group" >
                            <div class="col-md-3">
                                <label for="baslik">Reklam Genişlik</label>
                            </div>
                            <input value="{{$veri->genislik}}" class="form-control" type="text" name="genislik" id="genislik"/>
                        </div>
                        <div class="form-group" >
                            <div class="col-md-3">
                                <label for="baslik">Reklam Yükseklik</label>
                            </div>
                            <input value="{{$veri->yukseklik}}" class="form-control" type="text" name="yukseklik" id="yukseklik"/>
                        </div>
                        <div class="form-group" >
                            <div class="col-md-3">
                                <label for="baslik">Reklam Linki</label>
                            </div>
                            <input value="{{$veri->url}}" class="form-control" type="text" name="url" id="href"/>
                        </div>

                        <div class="form-group">
                            <div class="col-md-3">
                                <label for="baslik">Reklam Durumu</label>
                            </div>
                            <select class="form-control" name="durum" id="">
                                    <option value="0">Pasif</option>
                                    <option value="1" selected>Aktif</option>

                            </select>
                        </div>

                         @endforeach
                         @endif

                        <!-- Buton -->
                                             <div class="form-group">
                                                 <div class="row">
                                                     <div class="col-md-3"> </div>
                                                     <div class="col-md-9 text-right">
                                                         <input class="btn btn-primary" type="submit" name="duzenle" value="Kaydet"/>
                                                         <a class="btn btn-danger" href="{{url("admin/bannerListele")}}">İptal</a>
                                                     </div>
                                                 </div>
                                             </div>

                             </form>

                        </div>
                     </div>
                </div>
            </div>
            </content>
 </div>




@include('admin/alt')