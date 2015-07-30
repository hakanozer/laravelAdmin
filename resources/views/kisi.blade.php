@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Kişi Sayfası</div>

				<div class="panel-body">

                    @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Hata!</strong> Lütfen Tüm Alanları Doldurunuz.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    @if (isset($data))
                        @foreach($data as $gelen)
                            {{$gelen}}
                        @endforeach
                    @endif


                    <hr/>
                    @if (isset($vtData))
                    {{$vtData[0]->aciklama}}
                    <hr/>
                        @foreach($vtData as $vgelen)
                        {{$vgelen->aciklama}}
                            <?php
                             //var_dump($vgelen);
                            ?>
                         @endforeach
                    @endif

                    <?php
                    //var_dump($_POST);
                    ?>

					<form  action="{{ url('/kisi') }}" method="post">
					    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					    <input type="text" name="adi"/>
					    <input type="text" name="soyadi"/>
					    <input type="submit" name="gonder" value="Gönder"/>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection