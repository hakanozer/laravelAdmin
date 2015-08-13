@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin Panel</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
                               @if (isset($data))
                                @foreach($data as $veri)
    <form action="{{url('admin/linklerDuzenle/'.$veri->id)}}" method="post">

     <input name="icerik_id" type="hidden" value="{{$data["linkler"]->id}}"/>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="fAdi">Site Adı:</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input class="form-control" type="text" name="siteadi" value="{{$veri->site_adi}}" >
                                       </div>

                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="fMail">Site adresi:</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input class="form-control" type="text" name="siteadresi" value="{{$veri->site_adresi}}" >
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-9 col-md-offset-3">
                                        <input class="btn btn-default btn-sm btn-primary" type="submit" value="Güncelle" >
                                       </div>
                                   </div>
                               </div>
      </form>
      @endforeach
       @endif







    </div>


@include('admin/alt')