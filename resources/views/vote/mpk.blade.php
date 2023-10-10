@extends('layout.vote.header')
@section('content-vote')
<div class="wrap-content">
    <h1 style="color: white; font-size: 20px;">PASLON KETUA dan WAKIL KETUA MPK</h1>
    <div class="wrap">
        @foreach($mpk as $data)
        <div class="card-content">
            <img src="{{env('APP_URL').'/storage/'.$data->image}}">
            <h1 style="color: white; padding: 0; margin: 0;margin-top: 10px;">PASLON {{$data->number}}</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Ketua</span>
            <h1 style="color: white; padding: 0; margin: 0;  font-size: 15px;">{{$data->ketua}}</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Wakil {{$data->wakil}}</span>
            <h1 style="color: white; padding: 0; margin: 0; font-size: 15px;">her</h1>
            @if($votePaslonMpk == $data->number)
            <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 15px;" class="button-off">DI PILIH</button>
            @else
            <form action="{{ route('vote.mpk')}}">
                <input type="hidden" name="paslonOsisNumber" value="{{$votePaslonOsis}}">
                <input type="hidden" name="paslonMpkNumber" value="{{$data->number}}">

                <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 15px;" class="button-primary" type="submit">PILIH</button>
            </form>
            @endif
        </div>
        @endforeach

    </div>
    <div style="display: flex; width: 100%; justify-content: space-between;">
        @if($votePaslonMpk != "" && $votePaslonOsis != "")
        <form action="{{ route('vote.osis')}}" method="GET">
            <input type="hidden" name="paslonOsisNumber" value="{{$votePaslonOsis}}">

            <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-primary" type="submit">Kembali</button>
        </form>
        <form action="{{ route('vote.action')}}" method="POST">
            @csrf
            <input type="hidden" name="paslonOsisNumber" value="{{$votePaslonOsis}}">
            <input type="hidden" name="paslonMpkNumber" value="{{$votePaslonMpk}}">
            <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-primary" type="submit">Lanjut</button>
        </form>
        @elseif($votePaslonOsis != "")
        <form action="{{ route('vote.osis')}}" method="GET">
            <input type="hidden" name="paslonOsisNumber" value="{{$votePaslonOsis}}">

            <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-primary" type="submit">Kembali</button>
        </form>

        <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-off">Lanjut</button>
        @else
        <form action="{{ route('vote.osis')}}" method="GET">
            <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-primary" type="submit">Kembali</button>
        </form>
        <button style="width: 200px; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-off">Lanjut</button>
        @endif
    </div>
</div>
</div>
@endsection