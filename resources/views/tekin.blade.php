<?php
/**
 * Created by PhpStorm.
 * User: Tekin
 * Date: 2.5.2015
 * Time: 19:47
 */
?>
@extends('app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<form method="post" class="form-horizontal" action="">
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
						<div class="form-group">
							<label class="col-md-4 control-label">Kullanıcı Adı</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="isim"
									value="<?php echo $user["isim"]; ?>">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button formaction="kisiGuncelle" type="submit" class="btn btn-success">Kullanıcının Adını Güncelle</button>
								<button formaction="kisiSil" type="submit" class="btn btn-danger">Kullanıcıyı Sil ve Çıkış Yap</button>
								
							</div>
						</div>
						

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
