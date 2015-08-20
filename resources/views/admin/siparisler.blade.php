
<?php
$dil = Session::get('dil');
App::setLocale($dil);
?>
@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{ trans('adminDil.siparisIslemleri') }}</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
<div class="panel panel-default">
                      <div class="panel-heading">
                          {{ trans('adminDil.tümIcerikler') }}
                          <div class="col-md-5" style="float: right; width: 106px; margin-top: -7px;">

                                       </div>
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <div class="dataTable_wrapper">

                              <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                  <thead>
                                  <tr role="row"><th class="sorting" tabindex="0" aria-controls="dataTables-example"
                                  rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending"
                                   style="width: 29px;">{{ trans('adminDil.sipID') }}</th><th class="sorting_asc" tabindex="0"
                                   aria-controls="dataTables-example" rowspan="1" colspan="1"
                                   aria-label="Başlık: activate to sort column descending"
                                   style="width: 62px;" aria-sort="ascending">{{ trans('adminDil.MUSTERİ') }}</th><th class="sorting_asc"
                                   tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"
                                    aria-label="Başlık: activate to sort column descending" style="width: 62px;"
                                    aria-sort="ascending">{{ trans('adminDil.urunAdi') }}</th><th class="sorting" tabindex="0"
                                    aria-controls="dataTables-example" rowspan="1" colspan="1"
                                     aria-label="Kısa Açıklama: activate to sort column ascending"
                                     style="width: 127px;">{{ trans('adminDil.durum') }}</th><th class="sorting" tabindex="0"
                                     aria-controls="dataTables-example" rowspan="1" colspan="1"
                                     aria-label="Detay: activate to sort column ascending"
                                     style="width: 58px;">{{ trans('adminDil.eklemeTarih') }}</th><th class="sorting" tabindex="0"
                                     aria-controls="dataTables-example" rowspan="1" colspan="1"
                                     aria-label="Tarih: activate to sort column ascending"
                                     style="width: 140px;">{{ trans('adminDil.toplam') }}</th><th style="width: 55px;" class="sorting"
                                     tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"
                                      aria-label="İşlem: activate to sort column ascending">{{ trans('adminDil.aksiyon') }}</th></tr>
                                  </thead>
                                  <tbody>
                              @if(isset($data))
                              @foreach($data as $item)
                                  <tr class="gradeX odd" role="row">
                                      <td class="">{{$item->sip_id}}</td>
                                      <td class="sorting_1">{{$item->kul_id}}</td>
                                      <td>{{$item->urun_id}}</td>
                                      <td>{{$item->durum}}</td>
                                      <td>{{$item->ekleme_tarihi}}</td>
                                      <td>{{$item->toplam}}</td>
  <td> <a href="{{url('admin/siparisDetay/'.$item->sip_id)}}" title="" class="btn btn-info" data-original-title="View" ><i class="fa fa-eye"></i></a></td>
                                   </tr>
                                   @endforeach
                                   @endif
</tbody>
                              </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                          </div>
                          <!-- /.table-responsive -->

                      </div>
                      <!-- /.panel-body -->
                  </div>

    </div>


@include('admin/alt')