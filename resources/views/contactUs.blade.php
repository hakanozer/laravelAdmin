@include('ust')

<div class="columns-container">
				<div id="columns" class="container">

					<div class="row">



						<div id="center_column" class="center_column col-sm-12 col-md-12">


<div class="page-heading">
	<h1>Bize Ulaşın</h1>
	<!--<p>Browse qua the following product new the we </p>-->
</div>



	<form action="{{url('iletisim')}}" method="post" class="contact-form-box">
		<fieldset>

        <div class="clearfix row">
            <div class="col-xs-9 col-md-3">
                <div class="form-group selector1">
                    <label for="id_contact">Konu Başlığı</label>
                                    <div  id="uniform-id_contact" style="width: 254px;">
                                    <select id="id_contact" class="form-control" name="baslik">
                        <option value="0">-- Seçiniz --</option>
                                                    <option value="Müşteri Servisi">Müşteri Servisi</option>

                                                    <option value="Webmaster">Webmaster</option>

                                            </select></div>
                </div>
                    <!--<p id="desc_contact0" class="desc_contact">&nbsp;</p>-->

                                                    <p class="form-group">
                    <label for="email">Email Adres</label>
                                            <input class="form-control grey validate" type="text" id="email" name="mail" data-validate="isEmail" value="">
                                    </p>
                                                            <div class="form-group selector1">
                            <label>Referans No</label>
                                                            <input class="form-control grey" type="text" name="referans" id="id_order" value="">
                                                    </div>
                                                                                            <p class="form-group">

                				<div class="submit">
					<button type="submit" name="submitMessage" id="submitMessage" class="button ">Gönder</button>
				</div>
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="form-group">
                    <label for="message">Mesaj</label>
                    <textarea class="form-control" id="message" name="message" rows="13" cols="50"></textarea>
                </div>
            </div>
        </div>

	</fieldset>
</form>

					</div><!-- #center_column -->

					</div><!-- .row -->
				</div><!-- #columns -->


			</div>
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

@include('alt')