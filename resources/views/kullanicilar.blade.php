@extends("index")

@section("title")
Kullanıcılar Sayfası
@endsection

@section("content")

<div class="panel panel-primary" style="margin-top: 25px">

    <div class="panel-heading text-center">
        <h3>Kullanıcılar Sayfası</h3>
    </div>

    <div class="panel-body text-center">

        <a class="btn btn-primary" href="{{ url("kullanicilar/ekle") }}">Kullanıcı Ekle</a>
        <a class="btn btn-primary" href="{{ url("kullanicilar/liste") }}">Kullanıcılar Listesi</a>

    </div>

</div>

@endsection