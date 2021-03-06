<div class="slider-container clearfix container" >
    <div class="row">
        <div id="yt_header_left" class="col-lg-3 col-md-3 col-sm-0 col-xs-12">



        </div>
        <div id="yt_header_right" class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">




            <!-- Module HomeSlider -->
            <div id="homepage-slider" class="col-lg-8 col-sm-12 col-md-12 col-xs-12">
                <ul id="homeslider" style="max-height:370px;">
                @if(isset($data))
                @foreach( $data as $slider)
                    <li class="homeslider-container">
                        <a href="{{$slider->url}}" target="_blank">
                            <img src="{{ url("slider/".$slider->yol) }}" width="612" height="370" alt="sample-1" />

                        </a>
                    </li>
                @endforeach
                @endif
                </ul>


                </div>
                <!-- /Module HomeSlider -->

                <!-- SP Slider -->
                <div class="moduletable  deal-listing col-sm-4 col-xs-12">



                    <!--<div class="page-title-slider">Deal Product</div>-->

                    <div id="sp_deal_1" class="sp-deal sp-preload" style="margin-bottom:40px; height: 362px;">

                        <div class="sp-loading"></div>

                        <div class="slider not-js cols-6 preset01-1 preset02-1 preset03-1 preset04-1">
                            <div class="vpo-wrap">
                                <div class="vp">
                                    <div class="vpi-wrap tt-effect-frontrow tt-effect-delay">
                                        @if (isset($teklislider))
                                            @foreach($teklislider as $veri1)
                                                <div class="item">
                                                    <div class="item-wrap clearfix">
                                                        <div class="item-img item-height">


                                                            <!--								<div class="price-percent-reduction"><span>-10%</span></div>
                                -->

                                                            <div class="item-img-info ">
                                                                <a class="product_img_link"
                                                                   href="#"
                                                                   title="Baze suma pite cazen mita katem"  >
                                                                    <img class="img_1" src="{{asset("resim/server/php/files/".$veri1->klasor."/".$veri1->resimAdi)}}"/>
                                                                </a>




                                                            </div>


                                                            <div class="item-time">
                                                                <div class="item-timer product_time_1_33"></div>
                                                                <script type="text/javascript">
                                                                    //<![CDATA[
                                                                    listdeal.push('product_time_1_33|2016/08/31 00:00:00') ;
                                                                    //]]>
                                                                </script>
                                                            </div>
                                                        </div>





                                                        <div class="item-title">
                                                            <a href="http://prestashop.magentech.com/sp_shoppystore/en/sofas-chairs/33-baze-suma-pite-cazen-mita-katem.html"
                                                               title="Baze suma pite cazen mita katem"   >
                                                                {{$veri1->baslik}}
                                                            </a>
                                                        </div>


                                                        <div class="item-content">
                                                            <div itemprop="offers" itemscope
                                                                 itemtype="http://schema.org/Offer"
                                                                 class="content_price">
                                                                                                                                            <span itemprop="price"
                                                                                                                                                  class="price product-price">
																			{{$veri1->fiyat}}																</span>
                                                                <meta itemprop="priceCurrency"
                                                                      content="USD"/>

                                                                        <span class="old-price product-price">
																		{{$veri1->piyasa_fiyati}}
																	</span>




                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>


                                @endforeach
                                @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-button bottom style1">
                            <div class="control-button">
                                <a class="preview"><i class="fa fa-angle-left"></i></a>
                                <a class="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        //<![CDATA[
                        jQuery(document).ready(function ($) {
                            ;
                            (function (element) {
                                var $el = $(element);

                                function runSlider() {
                                    $('.vpi-wrap', $el).owlCarousel({
                                        pagination: false,
                                        center: false,
                                        nav: true,
                                        loop: false,
                                        margin: 25,
                                        navText: [ 'prev', 'next' ],
                                        slideBy: 1,
                                        autoplay: false,
                                        autoplayTimeout: 2500,
                                        autoplayHoverPause: true,
                                        autoplaySpeed: 800,
                                        startPosition: 0,
                                        responsive:{
                                            0:{
                                                items:1
                                            },
                                            480:{
                                                items:1
                                            },
                                            768:{
                                                items:1
                                            },
                                            1200:{
                                                items:1
                                            }
                                        }
                                    });
                                }

                                var _timer = 0;
                                $(window).load(function () {
                                    if (_timer) clearTimeout(_timer);
                                    _timer = setTimeout(function () {
                                        runSlider();
                                        $('.sp-loading', $el).remove();
                                        $el.removeClass('sp-preload');
                                    }, 1000);
                                });

                                $('.slider', $el).touchSwipeLeft(function () {
                                            $('.slider', $el).responsiver('next');
                                        }
                                );
                                $('.slider', $el).touchSwipeRight(function () {
                                            $('.slider', $el).responsiver('prev');
                                        }
                                );

                                data = new Date(2013,10,26,12,00,00);
                                function CountDown(date,id){
                                    dateNow = new Date();
                                    amount = date.getTime() - dateNow.getTime();
                                    if(amount < 0 && $('#'+id).length){
                                        $('.'+id).html("Now!");
                                    } else{
                                        days=0;hours=0;mins=0;secs=0;out="";
                                        amount = Math.floor(amount/1000);
                                        days=Math.floor(amount/86400);
                                        amount=amount%86400;
                                        hours=Math.floor(amount/3600);
                                        amount=amount%3600;
                                        mins=Math.floor(amount/60);
                                        amount=amount%60;
                                        secs=Math.floor(amount);
                                        if(days != 0){
                                            out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" +" <div class='name-time'>"+((days==1)?"Day":"Days") + "</div>"+"</div> ";
                                        }
                                        if(hours != 0){
                                            out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" +" <div class='name-time'>"+((hours==1)?"Hour":"Hours") + "</div>"+"</div> ";
                                        }
                                        out += "<div class='time-item time-min'>" + "<div class='num-time'>" + mins + " </div>" +" <div class='name-time'>"+((mins==1)?"Min":"Mins") + "</div>"+"</div> ";
                                        out += "<div class='time-item time-sec'>" + "<div class='num-time'>" + secs + "</div>" +" <div class='name-time'>"+((secs==1)?"Sec":"Secs") + "</div>"+"</div> ";
                                        out = out.substr(0,out.length-2);
                                        $('.'+id).html(out) ;
                                        /*setTimeout(function(){
                                         CountDown(date,id);
                                         },1000);*/
                                    }
                                }
                                if(listdeal.length > 0){
                                    for(var i=0; i < listdeal.length  ; i++) {
                                        var arr = listdeal[i].split("|");

                                        if (arr[1].length) {
                                            var data = new Date(arr[1]);
                                            CountDown(data, arr[0]);
                                        }
                                    }
                                }
                            })('#sp_deal_1')
                        });
                        //]]>
                    </script>
                    <div class="postext-slider">

                    </div>
                </div>
                <!-- /SP Slider -->



                <style>
                    .static-home .banner-1 {
                        margin-left: 16px;
                    }


                    .static-home .banner-2 {
                        margin-left: -1px;
                    }
                    .static-home .banner-3 {
                        float: right;
                        margin-right: 15px;
                    }
                </style>



                <!-- SP Custom Html -->
                <div class="moduletable  banner-home col-sm-12">

                    <div class="static-home">
                        <div class="row">
                            <?php  $i = 1; ?>
                            @if(isset($ustBanner))
                                @foreach( $ustBanner as $banner1)

                                    <div class="img-banner banner-<?php echo $i;?>"><a title="Static Image" href="{{$banner1->url}}"><img src="{{ url("bannerResimler/".$banner1->yol) }}" alt="Static Image" /></a></div>
                                    <?php  $i++; ?>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
                <!-- /SP Custom Html -->
            </div>

        </div>
    </div>
</div>