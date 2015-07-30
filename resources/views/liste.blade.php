@extends('app')
@section('content')

<div class="container">
    <div>Merhaba Listeler Burada</div>



    @if(isset($dataDuzenle["kul"]))
        <hr>
        <h1>Data Düzenle</h1>
        <form action="{{url("veritabani/duzenle/".$dataDuzenle["kul"]->id)}}" method="post">
            <input type="hidden" name="kulID" value="{{$dataDuzenle["kul"]->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="adi" value="{{$dataDuzenle["kul"]->adi}}">
            <input type="text" name="soyadi" value="{{$dataDuzenle["kul"]->soyadi}}">
            <input type="text" name="mail" value="{{$dataDuzenle["kul"]->mail}}">
            <input type="text" name="sifre" value="{{$dataDuzenle["kul"]->sifre}}">
            <input type="submit" name="duzenle" value="Düzenle">
        </form>
    @endif



    <div>
        <h1>Yeni Bilgi Ekle</h1>
        <form action="{{url('veritabani/ekle')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="text" class="form-control" name="adi" id="adi"/><br/>
            <input type="text" class="form-control" name="soyadi" id="soyadi"/><br/>
            <input type="text" class="form-control" name="mail" id="mail"/><br/>
            <input type="text" class="form-control" name="sifre" id="sifre"/><br/>
            <input type="submit" class="form-control"/><br/>
        </form>
    </div>




    <style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-j278{font-weight:bold;background-color:#ffffc7}
    </style>
    <table class="tg">
      <tr>
        <th class="tg-j278">id</th>
        <th class="tg-j278">adı</th>
        <th class="tg-j278">soyadı</th>
        <th class="tg-j278">mail</th>
        <th class="tg-j278">şifre</th>
        <th class="tg-j278">tarih</th>
          <th class="tg-j278">Sil</th>
          <th class="tg-j278">Düzenle</th>
      </tr>

      @if(isset($data))
      @foreach($data as $veri)
      <tr>
        <td class="tg-031e">{{$veri->id}}</td>
        <td class="tg-031e">{{$veri->adi}}</td>
        <td class="tg-031e">{{$veri->soyadi}}</td>
        <td class="tg-031e">{{$veri->mail}}</td>
        <td class="tg-031e">{{$veri->sifre}}</td>
        <td class="tg-031e">{{$veri->tarih}}</td>
          <td class="tg-031e"><a href="{{url("veritabani/sil/$veri->id")}}">Sil</a> </td>
          <td class="tg-031e"><a href="{{url("veritabani/duzenle/$veri->id")}}">Düzenle</a> </td>
      </tr>
      @endforeach
      @endif
    </table>





</div>

@endsection