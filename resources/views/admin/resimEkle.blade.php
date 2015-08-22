@include('admin/ustMenu')


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ürün Resim Ekleme</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        @if($id)
        <iframe src="../../resim/index.php?resim_id={{ $id }}" style="width: 100%; height: 500px;" frameborder="0"></iframe>
        @endif
    </div>


@include('admin/alt')