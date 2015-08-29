 @include('ust')

<div class="columns-container">
				<div id="columns" class="container">
					
					<div class="row">
						
												
																																
						<div id="center_column" class="center_column col-sm-12 col-md-12">
							
								
<div class="box">
<h1 class="page-subheading">Şifremi Unuttum!</h1>




<p>Lütfen siteye kayıt olduğunuz e-posta adresinizi girin. Yeni şifrenizi hemen göndereceğiz. </p>
<form action="" method="post" class="std" id="form_forgotpassword">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<fieldset>
		<div class="form-group">
			<label for="email">E-Posta Adresiniz</label>
			<input class="form-control" id="email" name="email" value="" type="text">
		</div>
		<p class="submit">
            <a href="#" class="btn btn-default button button-medium"><span>Şifremi Değiştir<i class="fa fa-chevron-right right"></i></span></a>
		</p>
	</fieldset>
</form>
</div>
<ul class="clearfix footer_links">
	<li><a class="btn btn-default button button-small" href="{{url('uyelikGiris')}}" title="Geri Dön" rel="nofollow"><span><i class="fa fa-chevron-left left"></i>Geri Dön</span></a></li>
</ul>
					</div><!-- #center_column -->
										
					</div><!-- .row -->
				</div><!-- #columns -->
				
								
			</div>

			@include('alt')