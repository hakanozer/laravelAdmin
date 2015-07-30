@extends("index")

@section("title")
Kullanıcılar Ekleme Sayfası
@endsection

@section("content")

<div class="panel panel-primary" style="margin-top: 25px">

    <div class="panel-heading text-center">
        <h3>Kullanıcı Ekle</h3>
    </div>

    <div class="panel-body">

        <form style="width: 75%; margin: 0 auto" action="{{url("kullanicilar/ekle")}}" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="kulAdi">Adı: </label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="kulAdi" id="kulAdi"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-4">
                        <label for="kulSoyadi">Soyadı: </label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="kulSoyadi" id="kulSoyadi"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-4">
                        <label for="kulMail">Mail Adresi: </label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="email" name="kulMail" id="kulMail"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-4">
                        <label for="kulGizli">Gizli soru: </label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="kulGizli" id="kulGizli"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-4">
                        <label for="kulSifre">Şifreniz: </label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="password" name="kulSifre" id="kulSifre"/>
                    </div>
                </div>

                <br/>

                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <input type="submit" value="Kaydet" class="btn btn-primary"/>
                    </div>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection
