@extends("index")

@section("title")
Kullanıcılar Listesi
@endsection

@section("content")

<div class="panel panel-primary" style="margin-top: 25px">

    <div class="panel-heading text-center">
        <h3>Kullanıcılar Listesi</h3>
        <h5>
            <a class="btn btn-default" href="{{url("kullanicilar")}}">Anasayfa</a>
            <a class="btn btn-default" href="{{url("kullanicilar/ekle")}}">Kullanıcı Ekle</a>
        </h5>
    </div>

    <div class="panel-body">

        <hr/>

        @if(session()->has("mesaj"))
            @if(session("mesaj") == "basarili")
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>İşleminiz başarı ile gerçekleştirildi.</h4>
                    </div>
                </div>
            @else
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4>İşleminiz başarısız oldu.</h4>
                    </div>
                </div>
            @endif
        @endif

        <table class="table table-hover table-condensed table-striped">

            <thead>
                <tr>
                    <th class="text-center">Adı</th>
                    <th class="text-center">Soyadı</th>
                    <th class="text-center">Mail</th>
                    <th class="text-center">Gizli Soru</th>
                    <th class="text-center">İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data["kullanicilar"] as $kul)
                    <tr>
                        <td class="text-center">
                            {{ $kul->adi }}
                        </td>
                        <td class="text-center">
                            {{ $kul->soyadi }}
                        </td>
                        <td class="text-center">
                            {{ $kul->mail }}
                        </td>
                        <td class="text-center">
                            {{ $kul->gizli_soru }}
                        </td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{url("kullanicilar/duzenle/$kul->id")}}">Düzenle</a>
                            <a class="btn btn-danger" href="{{url("kullanicilar/sil/$kul->id")}}">Sil</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>

</div>

@endsection
