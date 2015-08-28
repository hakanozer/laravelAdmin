<div class="footer-container">
    <div id="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Block Newsletter module -->
                    <div id="newsletter_block_home" class="newsletter_home col-lg-12 col-md-12 col-sm-12" >

                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="block_content">
                                <form action="" method="post">
                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="form-group" >
                                        <input class="inputNew grey newsletter-input" size="80" id="newsletter-input" type="email" name="email" required="true"  placeholder="Lütfen E-posta Adresinizi Giriniz" />
                                        <button type="submit" name="AboneEkle" class="btn btn-default button button-small">
                                            <span>Abone Ol</span>
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5  col-xs-12">
                            <div class="title-block">
                                <div class="page-heading" >Sign up and Save!</div>
                                <div class="pre-text">Receive email-only deals, special offers &amp; product exclusives</div>
                            </div>
                        </div>


                    </div>
                    <!-- /Block Newsletter module-->

                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="wrap-footer">

                    <!-- Block myaccount module -->
                    <section class="footer-account box-footer">
                        <h3 class="mod-title">My account</h3>
                        <div class="block_content toggle-footer">
                            <ul class="list-link">
                                <li><a href="#" title="My orders" rel="nofollow"> My orders</a></li>
                                <li><a href="#" title="My merchandise returns" rel="nofollow"> My merchandise returns</a></li>
                                <li><a href="#" title="My credit slips" rel="nofollow"> My credit slips</a></li>
                                <li><a href="#" title="My addresses" rel="nofollow"> My addresses</a></li>
                                <li><a href="#" title="Manage my personal information" rel="nofollow"> My personal info</a></li>
                                <li><a href="#" title="My vouchers" rel="nofollow"> My vouchers</a></li>

                            </ul>
                        </div>
                    </section>
                    <!-- /Block myaccount module -->





                    <!-- MODULE Block footer -->
                   <section class="footer-block box-footer" id="block_various_links_footer">
                        <h3 class="mod-title">Linkler</h3>
                            @if(isset($link))
                                <ul class="list-link">
                                @foreach($link as $veriler)
                                    <li class="item">
                                    <a href="{{url('$veriler->site_adresi')}}" title="New products">
                                        {{$veriler->site_adi}}
                                    </a>
                                    </li>
                                @endforeach
                                </ul>

                   </section>

                             @endif

                    <!-- /MODULE Block footer -->

                    <!-- SP Custom Html -->
                    <div class="moduletable   box-footer corporate-block">

                        <div class="col-footer">

                            <div class="footer-title">

                                <h3>İçerikler</h3>

                            </div>

                            <div class="content-block-footer"> <ul class="list-link">
@if(isset($icerikler))
@foreach( $icerikler as $icerik)

<li><a href="{{url('icerikDetay/'.$icerik->id)}}"><span class="icon-caret-right">{{$icerik->baslik}}</span></a></li>
 @endforeach
                        @endif
                                </ul>

                            </div>

                        </div>
                    </div>
                    <div class="moduletable   box-footer choose-block">

                        <div class="col-footer">

                            <div class="footer-title">

                                <h3>Why Choose Us</h3>

                            </div>

                            <div class="content-block-footer">

                                <ul class="list-link">

                                    <li><a href="#"><span class="icon-caret-right"> </span>About us</a></li>

                                    <li><a href="#"><span class="icon-caret-right"> </span>Blog</a></li>

                                    <li><a href="#"><span class="icon-caret-right"> </span>Company</a></li>

                                    <li><a href="#"><span class="icon-caret-right"> </span>Investor Relations</a></li>

                                    <li><a href="#"><span class="icon-caret-right"> </span>Typography</a></li>

                                </ul>

                            </div>

                        </div>
                    </div>
                    <!-- /SP Custom Html -->
                    <!-- SP Category Slider -->
                    <!-- /SP Category Slider -->
                    <!-- MODULE Block contact infos -->
                    @if(isset($sorgu))
                    @foreach($sorgu as $veri)
                    <section id="block_contact_infos" class="contact-infos box-footer">
                        <h3 class="mod-title">İletişim</h3>
                        <ul class="list-contact">
                            <li>
                                <label class="label"><i class="fa fa-home"></i></label>
                                Adres:
                                <span> {{$veri->adres}}</span>
                            </li>
                            <li>
                                 <label class="label"><i class="fa fa-phone"></i></label>
                                 Tel:
                                 <span>{{$veri->telefon}}</span>
                            </li>
                            <li>
                                 <label class="label"><i class="fa fa-envelope"></i></label>
                                 Email:
                                 <span>{{$veri->mail_adres}}</span>
                            </li>

                        </ul>


                    </section>
                    @endforeach
                    @endif
                    <!-- /MODULE Block contact infos -->





                    <form method="post" style="margin:0;">
                        <div id="tool_customization" class="layout_1">
                            <h3>Theme Config</h3>

                            <ul class="yt-toggle-box">
                                <li class="yt-divider">
                                    <div class="list-tools">
                                        <p id="theme-title">
                                            Theme color
                                            <i class="fa fa-caret-down pull-right"></i>
                                        </p>
                                    </div>

                                    <ul id="color-box" class="list-box">

                                        <li class="theme1 ">
                                            <div class="color-theme"> </div>
                                        </li>
                                        <li class="theme2 ">
                                            <div class="color-theme"> </div>
                                        </li>
                                        <li class="theme3 ">
                                            <div class="color-theme"> </div>
                                        </li>
                                        <li class="theme4 ">
                                            <div class="color-theme"> </div>
                                        </li>
                                        <li class="theme5 ">
                                            <div class="color-theme"> </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="yt-divider">
                                    <div class="list-tools">
                                        <p id="font-title">
                                            Font
                                            <i class="fa fa-caret-down pull-right"></i>
                                        </p>
                                    </div>
                                    <div class="list-box">

                                        <select name="font" id="font" class="font-list">
                                            <option value="">Choose a font</option>
                                            <option value="font1" selected="selected">Open Sans</option>
                                            <option value="font2">Josefin Slab</option>
                                            <option value="font3">Arvo</option>
                                            <option value="font4">Lato</option>
                                            <option value="font5">Volkorn</option>
                                            <option value="font6">Abril Fatface</option>
                                            <option value="font7">Ubuntu</option>
                                            <option value="font8">PT Sans</option>
                                            <option value="font9">Old Standard TT</option>
                                            <option value="font10">Droid Sans</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="yt-divider">
                                    <div class="list-tools">
                                        <p id="layout-title">
                                            Box Layout
                                            <i class="fa fa-caret-down pull-right"></i>
                                        </p>
                                    </div>
                                    <div class="list-box">

                                        <select name="layout" id="layout" class="layout-list">
                                            <option value="wide" selected="selected">Wide</option>
                                            <option value="boxed">Boxed</option>
                                        </select>

                                        <ul id="pattern-box">
                                            <li class="pattern1 ">

                                            </li>
                                            <li class="pattern2 ">

                                            </li>
                                            <li class="pattern3 ">

                                            </li>
                                            <li class="pattern4 ">

                                            </li>
                                            <li class="pattern5 ">

                                            </li>
                                            <li class="pattern6 ">

                                            </li>
                                            <li class="pattern7 ">

                                            </li>
                                            <li class="pattern8 ">

                                            </li>
                                            <li class="pattern9 ">

                                            </li>
                                            <li class="pattern10 ">

                                            </li>
                                        </ul>

                                    </div>
                                </li>

                            </ul>


                            <!-- BUTTON RESET CPANEL  -->
                            <div class="btn-tools">
                                <button type="button" class="btn btn-1" id="reset" name="resetLiveConfigurator">Reset</button>
                                <a href="#" name="quitLiveConfigurator" id="quit" class="btn sp-quit" >Quit</a>
                            </div>



                        </div>
                    </form>

                    <script type="text/javascript">
                        $(document).ready(function($) {
                            var pattern = "pattern7";
                            $("body").addClass(pattern);
                        });
                    </script>

                    <!-- SP Slider -->
                    <!-- /SP Slider -->
                </div>

            </div>
        </div>
    </footer>

    <div class="ps-footer clearfix">
        <div class="container">

            <!-- SP Custom Html -->
            <div class="moduletable  ">

                <div class="box-sevicer">

                    <div class="sn-sevirce sn-put1">

                        <div class="img-sevirce img-sevirce1"> </div>

                        <div class="content-service"><a class="sn-title" href="#" rel="nofollow">High Quality</a>Nullam sed sollicitudin mauris velit id venenatis morbi</div>

                    </div>

                    <div class="sn-sevirce sn-put2">

                        <div class="img-sevirce img-sevirce2"> </div>

                        <div class="content-service"><a class="sn-title" href="#" rel="nofollow">Awesome Support</a>Nullam sed sollicitudin mauris velit id venenatis morbi</div>

                    </div>

                    <div class="sn-sevirce sn-put3">

                        <div class="img-sevirce img-sevirce3"> </div>

                        <div class="content-service"><a class="sn-title" href="#" rel="nofollow">Really Fast Deliveries</a>Nullam sed sollicitudin mauris velit id venenatis morbi</div>

                    </div>

                    <div class="sn-sevirce sn-put4">

                        <div class="img-sevirce img-sevirce4"> </div>

                        <div class="content-service"><a class="sn-title" href="#" rel="nofollow">14-Day Returns</a>Nullam sed sollicitudin mauris velit id venenatis morbi</div>

                    </div>

                    <div class="sn-sevirce sn-put5">

                        <div class="img-sevirce img-sevirce5"> </div>

                        <div class="content-service"><a class="sn-title" href="#" rel="nofollow">Secure Checkout</a>Nullam sed sollicitudin mauris velit id venenatis morbi</div>

                    </div>

                </div>
            </div>
            <!-- /SP Custom Html -->
        </div>
    </div>

    <div class="ps-footer-tag clearfix">

    </div>


    <div id="footer-bottom">
        <div  class="container">
            <div class="row">
                <div class="copy-right col-sm-7 clear">
                    {{$veri->telif}}
                </div>

                <div class="ps-footer-payment col-lg-5 col-sm-5">

                    <!-- SP Custom Html -->
                    <div class="moduletable  ">


                    </div>
                    <!-- /SP Custom Html -->
                </div>

            </div>
        </div>

    </div>



</div><!-- #footer -->



</div><!-- #page -->



<script>// <![CDATA[
    $(document).ready(function(){
        if (!!$.prototype.bxSlider)
            slider = $('.list-msg').bxSlider({
                useCSS: false,
                maxSlides: 1,
                //slideWidth: homeslider_width,
                //infiniteLoop: homeslider_loop,
                //hideControlOnEnd: true,
                pager: false,
                autoHover: true,
                auto: true,
                //speed: parseInt(homeslider_speed),
                //pause: homeslider_pause,
                controls: false
            });
    });
    // ]]></script>
<!-- /MODULE Block best sellers -->
<!-- /MODULE Block best sellers -->
<script type="text/javascript">
    $(document).ready(function($) {


        $('.recommend-title').accordion_snyderplace({
            defaultOpen: 'section-1',
            speed: 'fast',
            animateOpen: function (elem, opts) { //replace the standard slideUp with custom function
                elem.next().slideFadeToggle(opts.speed);
            },
            animateClose: function (elem, opts) { //replace the standard slideDown with custom function
                elem.next().slideFadeToggle(opts.speed);
            }
        });
        //custom animation for open/close
        $.fn.slideFadeToggle = function(speed, easing, callback) {
            return this.animate(
                    {
                        opacity: 'toggle',
                        height: 'toggle'
                    },

                    {
                        speed: 100, easing: 'swing', callback: 'none'
                    }
            );
        };
    });
</script>


<style>
    div.item.clone {
        visibility: hidden;
    }
</style>


</body></html>