@include('ust')
<div class="columns-container">
				<div id="columns" class="container">
					
					<div class="row">
						
												
																																
						<div id="center_column" class="center_column col-sm-12 col-md-12">
							
								<h1 class="page-heading">Giriş ve üyelik</h1>


	<!---->
	<div class="row">
	<!-- ÜYE OLMALIYIM FORMU(üYELİK FORM) -->
		<div class="col-xs-12 col-sm-6">
			<form action="" method="post" id="create-account_form" class="box">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<h3 class="page-subheading">Hesap Oluştur</h3>
				<div class="form_content clearfix">
					<p>Üyelik hesabı oluşturmak için lütfen aşağıdaki alanları doldurunuz.</p>
					<div class="alert alert-danger" id="create_account_error" style="display:none"></div>
					<div class="form-group">
                    	<label for="email_create">Adı</label>
                    	<input type="text" class="is_required validate account_input " required="required" data-validate="isEmail" id="email_create" name="name_create" size="45" value="">
                    </div>
                    <div class="form-group">
                    	<label for="email_create">Soyadı</label>
                    	<input type="text" class="is_required validate account_input " required="required" data-validate="isPassword" id="surname_create" name="surname_create" size="45" value="">
                    </div>
					<div class="form-group">
						<label for="email_create">E-Posta</label>
						<input type="email" class="is_required validate account_input " required="required" data-validate="isEmail" id="email_create" name="email_create" size="45" value="">

					</div>
					<div class="form-group">
                    	<label for="email_create">Şifre</label>
                    	<input type="password" class="is_required validate account_input " required="required" data-validate="isPassword" id="pass_create" name="pass_create" size="45" value="">

                    </div>
					<div class="submit">
						<input type="button" class="hidden" name="back" value="my-account">						<button class="button button-medium exclusive" type="submit" id="SubmitCreate" name="uyeOl" value="uyeOl">
							<span>
								<i class="fa fa-user left"></i>
								Hesap Oluştur
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
		<!-- ZATEN ÜYEYİM FORMU (GİRİŞ FORM) -->
		<div class="col-xs-12 col-sm-6">
			<form action="" method="post" id="login_form" class="box">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<h3 class="page-subheading">Zaten Üyeyim</h3>
				<div class="form_content clearfix">
					<div class="form-group">
						<label for="email">E-Posta</label>
						<input class="is_required validate account_input " size="45" data-validate="isEmail" type="email" id="email" name="email" required="required">
					</div>
					<div class="form-group">
						<label for="passwd">Şifre</label>
						<input class="is_required validate account_input " size="45" type="password" data-validate="isPasswd" id="passwd" name="password" value="" required="required">
					</div>
					<p class="lost_password form-group"><a href="{{url('sifremiUnuttum')}}" title="Şifremi Unuttum" rel="nofollow">Şifreni mi unuttun?</a></p>
					<p class="submit">
						<input type="button" class="hidden" name="back" value="my-account">						<button type="submit" id="SubmitLogin" name="girisYap" class="button" value="girisYap">
							<span>
								<i class="fa fa-lock left"></i>
								Giriş Yap
							</span>
						</button>
					</p>
				</div>
			</form>
		</div>
	</div>
						</div><!-- #center_column -->
										
					</div><!-- .row -->
				</div><!-- #columns -->
				
								
			</div>
@include('alt')