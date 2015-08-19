<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300'
	rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<nav class="navbar navbar-default">
		<div class="container-fluid">
</div>
	</nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Lütfen giriş yapınız</h3>
                    </div>


                    @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Bazı problemlerle karşılaştık<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif




                    @if (isset($data))
                        @foreach($data as $veri)
                            {{ $veri }}
                        @endforeach
                    @endif

                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/admin') }}">
                        <div>
                            <label>Varsayılan kullanıcı: <b>ali@mail.com</b> </label>
                        </div>
                        <div>
                            <label>Varsayılan şifre: <b>12345</b> </label>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-posta" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Şifre" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Beni Hatırla
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block" value = "Giriş Yap">Giriş Yap</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





</body>
</html>
