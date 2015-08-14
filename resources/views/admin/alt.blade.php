</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('/bower_components/raphael/raphael-min.js')}}"></script>
<!--<script src="../bower_components/morrisjs/morris.min.js"></script>-->
<!--<script src="../js/morris-data.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/dist/js/sb-admin-2.js')}}"></script>

<script>
        $(document).ready(function() {
            if ($('#dataTables-example').length){
                $('#dataTables-example').DataTable({
                    responsive: true,

                    "language": {
                        "sProcessing":   "İşleniyor...",
                        "sLengthMenu":   "Sayfada _MENU_ Kayıt Göster",
                        "sZeroRecords":  "Eşleşen Kayıt Bulunmadı",
                        "sInfo":         "  _TOTAL_ Kayıttan _START_ - _END_ Arası Kayıtlar",
                        "sInfoEmpty":    "Kayıt Yok",
                        "sInfoFiltered": "( _MAX_ Kayıt İçerisinden Bulunan)",
                        "sInfoPostFix":  "",
                        "sSearch":       "Bul:",
                        "sUrl":          "",
                        "oPaginate": {
                            "sFirst":    "İlk",
                            "sPrevious": "Önceki",
                            "sNext":     "Sonraki",
                            "sLast":     "Son"
                    }
                  }
                });
            }
        });


</script>


</body>

