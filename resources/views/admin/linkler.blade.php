@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Linkler</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

      <form action="{{url('admin/linkler')}}" method="post">

     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="fAdi">Site Adı:</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input class="form-control" type="text" name="siteadi" >
                                       </div>

                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-3">
                                           <label for="fMail">Site adresi:</label>
                                       </div>
                                       <div class="col-md-9">
                                           <input class="form-control" type="text" name="siteadresi" >
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-9 col-md-offset-3">
                                        <input class="btn btn-default btn-sm btn-primary" type="submit" value="Kaydet" >
                                       </div>
                                   </div>
                               </div>

                               <style type="text/css">
                               .tg  {border-collapse:collapse;border-spacing:0;}
                               .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                               .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
                               </style>
                               <table class="tg">
                                 <tr>
                                   <th class="tg-031e">Site adı</th>
                                   <th class="tg-031e">Site adresi</th>
                                   <th class="tg-031e">Düzenle/Sil</th>
                                 </tr>
                         @if(isset($data))
                         @foreach($data as $veri)
                                   <tr>
                                     <td class="tg-031e">{{$veri->site_adi}}</td>
                                     <td class="tg-031e">{{$veri->site_adresi}}</td>
                                     <td class="tg-031e"><a href="{{url("admin/linklerDuzenle/$veri->id")}}">Düzenle</a>&nbsp;&nbsp;<a href="{{url("admin/linkler/sil/$veri->id")}}">Sil</a>&nbsp;&nbsp;</td>
                                   </tr>
                          @endforeach
                          @endif

                               </table>
                           </form>

    </div>


@include('admin/alt')