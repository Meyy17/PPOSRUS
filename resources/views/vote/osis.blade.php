@extends('layout.vote.header')
@section('content-vote')
<div class="wrap-content">
    <h1 style="color: white; font-size: 20px;">PASLON KETUA dan WAKIL KETUA OSIS</h1>
    <div class="wrap">
        @foreach($osis as $data)
        <div class="card-content">
            <img src="{{$data->image}}">
            <h1 style="color: white; padding: 0; margin: 0;margin-top: 10px;">PASLON {{$data->number}}</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Ketua</span>
            <h1 style="color: white; padding: 0; margin: 0;  font-size: 15px;">{{$data->ketua}}</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Wakil Ketua</span>
            <h1 style="color: white; padding: 0; margin: 0; font-size: 15px;">{{$data->wakil}}</h1>
            @if($votePaslonOsis == $data->number)
            <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 15px;" class="button-off" type="submit">DI PILIH</button>
            @else
            <form action="{{ route('vote.osis')}}">
                <input type="hidden" name="paslonOsisNumber" value="{{$data->number}}">

                <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 15px;" class="button-primary" type="submit">PILIH</button>
            </form>
            @endif
        </div>
        @endforeach


    </div>
    <div style="display: flex; width: 100%; justify-content: end;">
        @if($votePaslonOsis != "")
        <form action="{{ route('vote.mpk')}}" method="GET">
            <input type="hidden" name="paslonOsisNumber" value="{{$votePaslonOsis}}">
            <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-primary" type="submit">Lanjut</button>
        </form>
        @else
        <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-off">Lanjut</button>
        @endif
    </div>
</div>
</div>
@endsection