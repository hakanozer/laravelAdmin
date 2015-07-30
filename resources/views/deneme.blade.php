@extends('app')

@section('content')
          <div class="container">
          	<div class="row">
          		<div class="col-md-10 col-md-offset-1">
          			<div class="panel panel-default">
          				<div class="panel-heading">Sayfamız</div>

          				<div class="panel-body">
          					Merhaba Dünya

          					<form action="{{ url('/deneme') }} method="post">
          					    <input type="text" name="adi"/>
          					    <input type="text" name="soyadi"/>
          					    <input type="submit" value="Gönder"/>
          					</form>


          				</div>
          			</div>
          		</div>
          	</div>
</div>
@endsection

