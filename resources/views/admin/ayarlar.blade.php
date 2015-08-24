@include('admin/ustMenu')
<!-- Harita ile ilgili -->
<div id="page-wrapper">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">Site Ayarları</h1>
      </div>
      <!-- /.col-lg-12 -->
   </div>
   <!-- /.row -->
   <div class="row">
      <div class="col-lg-12">
         <div class="panel panel-default">
            <div class="panel-heading">
               Site Ayarları
            </div>
            <div class="panel-body">
               <div class="row">
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                     Bir <strong>sorun </strong>oluştu. <br><br>
                     <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
                  @endif
                  @if(isset($data))
                  @foreach($data as $veri)
                  <form role="form" action="" method="post">
                     <div class="col-lg-6">
                        <div class="form-group">
                           <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           <input type="hidden" name="id" value="{{$veri->id}}">
                        </div>
                        <h3>Genel Ayarlar</h3>
                        <br>
                        <div class="form-group">
                           <label>Site Baslik (Title)</label>
                           <input class="form-control" name="site_baslik" value="{{$veri->site_baslik}}" />
                        </div>
                        <div class="form-group">
                           <label>Meta Keyler</label>
                           <input class="form-control" name="meta_keyler" value="{{$veri->meta_key}}" />
                        </div>
                        <div class="form-group">
                           <label>Meta Description</label>
                           <input class="form-control"  name="meta_description" value="{{$veri->meta_desc}}"/>
                        </div>
                        <div class="form-group">
                           <label>Domain İsmi</label>
                           <input class="form-control" name="domain_ismi" value="{{$veri->domain_name}}" />
                        </div>
                        <div class="form-group">
                           <label>Smtp Adresi</label>
                           <input class="form-control" name="smtp_adresi" value="{{$veri->smtp_adres}}" />
                        </div>
                        <div class="form-group">
                           <label>Smtp Kullanıcı Adı</label>
                           <input class="form-control" name="smtp_kullanici_adi" value="{{$veri->smtp_kul_adi}}" />
                        </div>
                        <div class="form-group">
                           <label>Smtp Şifre</label>
                           <input class="form-control"  name="smtp_sifre"  value="{{$veri->smtp_sifre}}"/>
                        </div>
                        <div class="form-group">
                           <h3>İletişim Bilgileri</h3>
                           <br>
                           <label>Mail Adres</label>
                           <input class="form-control" name="mail_adresi"  value="{{$veri->mail_adres}}"/>
                        </div>
                        <div class="form-group">
                           <label>Telefon</label>
                           <input class="form-control" name="telefon" value="{{$veri->telefon}}"/>
                        </div>
                        <div class="form-group">
                           <label>Fax</label>
                           <input class="form-control" name="fax" value="{{$veri->fax}}" />
                        </div>
                        <div class="form-group">
                           <label>GSM</label>
                           <input class="form-control" name="gsm" value="{{$veri->gsm}}" />
                        </div>
                        <div class="form-group">
                           <label>Adres</label>
                           <input class="form-control" name="adres"  value="{{$veri->adres}}"/>
                        </div>
                        <div class="form-group">
                           <label>Telif Hakları Yazısı</label>
                           <input class="form-control" name="telif"  value="{{$veri->telif}}"/>
                        </div>
                     </div>
                     <!-- /.col-lg-6 (nested) -->
                     <div class="col-lg-6">
                        <h3>Google Maps Koordinatları</h3>
                        <br>
                        
                        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                        <script type="text/javascript">
                           var geocoder = new google.maps.Geocoder();
                           
                           function geocodePosition(pos) {
                               geocoder.geocode({
                                   latLng: pos
                               }, function(responses) {
                                   if (responses && responses.length > 0) {
                                          updateMarkerAddress(responses[0].formatted_address);
                                      } else {
                                                   updateMarkerAddress('Cannot determine address at this location.');
                                                      }
                                                  });
                                              }
                           
                                                                                function updateMarkerStatus(str) {
                                                                                    document.getElementById('markerStatus').innerHTML = str;
                                                                                }
                           
                                                                                function updateMarkerPosition(latLng) {
                                                                                    document.getElementById('lat').value = latLng.lat();
                                                                                    document.getElementById('lng').value = latLng.lng();
                           
                                                                                }
                           
                                                                                function updateMarkerAddress(str) {
                                                                                    document.getElementById('address').innerHTML = str;
                                                                                }
                           
                                                                                function initialize() {
                                                                                    var latLng = new google.maps.LatLng( document.getElementById('lat').value , document.getElementById('lng').value);
                                                                                    var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                                                                                        zoom: 8,
                                                                                        center: latLng,
                                                                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                                                                    });
                                                                                    var marker = new google.maps.Marker({
                                                                                        position: latLng,
                                                                                        title: 'Point A',
                                                                                        map: map,
                                                                                        draggable: true
                                                                                    });
                           
                                                                                    // Update current position info.
                                                                                    updateMarkerPosition(latLng);
                                                                                    geocodePosition(latLng);
                           
                                                                                    // Add dragging event listeners.
                                                                                    google.maps.event.addListener(marker, 'dragstart', function() {
                                                                                        updateMarkerAddress('Adres Bulunuyor...');
                                                                                    });
                           
                                                                                    google.maps.event.addListener(marker, 'drag', function() {
                                                                                        updateMarkerStatus('Gezinme...');
                                                                                        updateMarkerPosition(marker.getPosition());
                                                                                    });
                           
                                                                                    google.maps.event.addListener(marker, 'dragend', function() {
                                                                                        updateMarkerStatus('Gezinme Bitiş');
                                                                                        geocodePosition(marker.getPosition());
                                                                                    });
                                                                                }
                           
                                                                                // Onload handler to fire off the app.
                                                                                google.maps.event.addDomListener(window, 'load', initialize);
                                                                            
                        </script>
                        <style>
                           #mapCanvas {
                           width: 100%;
                           height: 400px;
                           float: left;
                           }
                           #infoPanel {
                           float: left;
                           margin-left: 10px;
                           margin-top:10px;
                           }
                           #infoPanel div {
                           margin-bottom: 5px;
                           }
                        </style>
                        <div id="mapCanvas"></div>
                        <div id="infoPanel">
                           <b>Pin Durum:</b>
                           <div id="markerStatus"><i>Gezinerek Adresi Değiştiriniz</i></div>
                           <b>Seçim Adresiniz:</b>
                           <div id="address"></div>
                        </div>
                        <div class="form-group">
                           <label>Latitude</label>
                           <input class="form-control" id="lat" name="latitude" value="{{$veri->lat}}" />
                        </div>
                        <div class="form-group">
                           <label>Longtitude</label>
                           <input class="form-control"  id="lng" name="longtitude" value="{{$veri->long}}" />
                           <div id="map-canvas"></div>
                        </div>
                        <button type="submit" class="btn btn-success pull-right">Güncelle</button>
                    </div>
                  </form>



<form role="form" action="{{url("admin/siteAyarlar/1")}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{$veri->id}}">
    <div style="padding: 10px;"></div>
    <div class="form-group">
     <label>Logo Düzenle</label>
     <input type="file" name="logo" id="logo"/>

        @if(isset($data))
            @foreach($data as $veri)
               @if($veri->logo != null)
     <img src="../logolar/{{$veri->logo}}" width="100" height="100" alt="Resim Yok"/>
            @else
     <img src="../logolar/resimyok.png" width="100" height="100" alt="Resim Yok"/>
            @endif
            @endforeach
</div>
<button type="submit" class="btn btn-success pull-right">Güncelle</button>
</form>

                              @endif

                  @endforeach
                  @endif
               </div>
               <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
         </div>
         <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
   </div>
   <!-- /.col-lg-12 -->
</div>
@include('admin/alt')