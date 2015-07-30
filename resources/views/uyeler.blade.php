@extends('app')
@section('content')

 <div class="container">
          	<div class="row">
          		<div class="col-md-10 col-md-offset-1">
          			<div class="panel panel-default">
          				<div class="panel-heading">Üye Listesi</div>

          				<div class="panel-body">


                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>Adı</th>
                                    <th>Soyadı</th>
                                    <th>Email</th>
                                    <th>Şifre</th>
                                    <th>Tarih</th>
                                    <th>Sil</th>
                                  </tr>
                                </thead>
                                <tbody>


                            @if (count($datalar) > 0)
                                @foreach($datalar as $key=>$val)
                                  <tr>
                                    <td>{{$val->adi}}</td>
                                    <td>{{$val->soyadi}}</td>
                                    <td>{{$val->mail}}</td>
                                    <td>{{$val->sifre}}</td>
                                    <td>{{$val->tarih}}</td>
                                    <td><a href="{{url("uyeler/sil/$val->id")}}">Sil</a> </td>
                                  </tr>
                                  @endforeach
                            @endif

                                </tbody>
                              </table>
                            </div>



          			</div>
          		</div>
          	</div>
</div>



@endsection