<?php
$x = \App\Http\Controllers\sessionController::genelkontrol(); if ($x) {  echo $x; exit(); } else{}
$dil = Session::get('dil'); App::setLocale($dil);
?>
<?php
//$dil = Session::get('dil');
//App::setLocale($dil);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Admin Panel</title>

    <!-- Admin.css -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <!-- <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/bower_components/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('/dist/css/timeline.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('/bower_components/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- ckeditor !-->
    <script src="{{ asset('/bower_components/ckeditor/ckeditor.js')}}"></script>




    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin/anasayfa')  }}">Laravel Admin Panel</a>
        </div>
        <div>
            <p class="prg" style="    margin-top: -10px;"> {{ trans('hosgeldiniz') }}

                @if (Session::get('adi'))

                    <a href="{{ url('admin/adminDuzenle')  }}">
                        {{ Session::get('adi')  }}
                        {{ Session::get('soyadi')  }}
                    </a>

                @endif

                <a href="{{url("admin/dil/tr")}}"><button type="button" name="tr" class="btn btn-link">Tr</button></a>
                <a href="{{url("admin/dil/en")}}"><button type="button" name="en" class="btn btn-link">En</button></a>


            </p>


        </div>

        <!-- /.navbar-header -->
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ trans('adminDil.adminProfil') }}</a>
                    </li>
                    <li><a href="{{url ('admin/siteAyarlar')}}"><i class="fa fa-gear fa-fw"></i> {{ trans('adminDil.ayarlar') }}</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{url('admin/cikis')}}"><i class="fa fa-sign-out fa-fw"></i> {{ trans('adminDil.cıkısYap') }}</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Arama...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>

                   <li>
                                          <a href="{{ url('admin/anasayfa')  }}"><i class="fa fa-dashboard fa-fw"></i> Admin Panel</a>
                                      </li>



                                      <li>
                                          <a href="#"><i class="fa fa-th-large fa-fw"></i> {{ trans('adminDil.urunYonetimi') }}<span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level">
                                              <li>
                                                  <a href="{{url('admin/kategori')}}">{{ trans('adminDil.kategoriler') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{url('admin/urun')}}">{{ trans('adminDil.urunler') }}</a>
                                              </li>
                                          </ul>
                                          <!-- /.nav-second-level -->
                                      </li>



                                      <li>
                                          <a href="#"><i class="fa fa-list-alt fa-fw"></i> {{ trans('adminDil.icerikYonetimi') }}<span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level">
                                              <li>
                                                  <a href="{{url('admin/icerik')}}">{{ trans('adminDil.icerikler') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{url('admin/urunYorum')}}">{{ trans('adminDil.urunYorumlari') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{url('admin/urunPuan')}}">{{ trans('adminDil.urunPuanlari') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{url('admin/mesajlar')}}">{{ trans('adminDil.mesajlar') }}</a>
                                              </li>

                                          </ul>
                                          <!-- /.nav-second-level -->
                                      </li>

                  <li>
                                          <a href="{{ url('admin/haberler')  }}"><i class="fa fa-camera-retro fa-fw"></i>{{ trans('adminDil.haberler') }}</a>
                                      </li>


                                      <li>
                                          <a href="#"><i class="fa fa-camera-retro fa-fw"></i> {{ trans('adminDil.galeriYonetimi') }}<span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level">
                                              <li>
                                                  <a href="{{url('admin/galerikategori')}}">{{ trans('adminDil.kategori') }}</a>
                                              </li>
                                              <li>
                                                  <a href="{{url('admin/galeriler')}}">{{ trans('adminDil.galeriler') }}</a>
                                              </li>
                                          </ul>
                                          <!-- /.nav-second-level -->
                                      </li>


                                      <li>
                                          <a href="{{ url('admin/sliderYonetimi')  }}"><i class="fa fa-photo fa-fw"></i> {{ trans('adminDil.sliderYonetimi') }}</a>
                                      </li>


                                      <li>
                                          <a href="{{ url('admin/kullanicilar')  }}"><i class="fa fa-users fa-fw"></i> {{ trans('adminDil.kullaniciYonetimi') }}</a>
                                      </li>


                                      <li>
                                          <a href="{{ url('admin/dosyaYonetimi')  }}"><i class="fa fa-files-o fa-fw"></i> {{ trans('adminDil.dosyaIslemleri') }}</a>
                                      </li>
									  
										<li>
											<a href="{{ url('admin/excel')  }}"><i class="fa fa-files-o fa-fw"></i>Veri Tabanı Excel Çıktısı Alma</a>
										</li>


                                      <li>
                                          <a href="{{ url('admin/siparisler')  }}"><i class="fa fa-bars fa-fw"></i> {{ trans('adminDil.siparisIslemleri') }}</a>
                                      </li>

                                      <li>
                                          <a href="tables.html"><i class="fa fa-file-text fa-fw"></i> {{ trans('adminDil.raporlar') }}</a>
                                      </li>


                                      <li>
                                          <a href="{{url('admin/bannerListele')}}"><i class="fa fa-file-picture-o fa-fw"></i>{{ trans('adminDil.bannerYonetimi') }}</a>
                                      </li>

                   <li>
                                          <a href="{{url('admin/sosyalMedya')}}"><i class="fa fa-facebook-square fa-fw"></i> {{ trans('adminDil.sosyalMedya') }}</a>
                                      </li>

                    <li>
                                            <a href="{{url('admin/bulten')}}"><i class="fa fa-edit fa-fw"></i>{{ trans('adminDil.eBulteNyONETİMİ') }}</a>
                                        </li>

                                        <li>
                                            <a href="{{url('admin/anket')}}"><i class="fa fa-edit fa-fw"></i>{{ trans('adminDil.anketYonetim') }}</a>
                                        </li>


<li>
                         <a href="{{url('admin/linkler')}}"><i class="fa fa-link fa-fw"></i>{{ trans('adminDil.linkler') }}</a>
                                        </li>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>