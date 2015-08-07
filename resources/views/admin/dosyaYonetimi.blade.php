@include('admin/ustMenu')


<!-- jQuery and jQuery UI (REQUIRED) -->
<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/themes/smoothness/jquery-ui.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

<!-- elFinder CSS (REQUIRED) -->
<link rel="stylesheet" type="text/css" href="../bower_components/elfinder/css/elfinder.min.css">
<link rel="stylesheet" type="text/css" href="../bower_components/elfinder/css/theme.css">

<!-- elFinder JS (REQUIRED) -->
<script  type="text/javascript" src="../bower_components/elfinder/js/elfinder.full.js"></script>

<!-- elFinder translation (OPTIONAL) -->
<script src="../bower_components/elfinder/js/i18n/elfinder.ru.js"></script>


<script type="text/javascript" charset="utf-8">
    var jk = jQuery.noConflict();
    jk(document).ready(function() {
        jk('#elfinder').elfinder({
            url : '../bower_components/elfinder/php/connector.minimal.php'
        });
    });
</script>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dosya Yönetimi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">

        <div id="elfinder"></div>


    </div>

@include('admin/alt')