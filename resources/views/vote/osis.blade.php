@extends('layout.vote.header')
@section('content-vote')
<div class="wrap-content">
    <h1 style="color: white; font-size: 28px;">PASLON KETUA dan WAKIL KETUA OSIS</h1>
    <div class="wrap">
        <div class="card">
            <img src="https://image.kpopmap.com/2023/05/iu_insta_cover.jpg">
            <h1 style="color: white; padding: 0; margin: 0;margin-top: 10px;">PASLON 1</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Ketua</span>
            <h1 style="color: white; padding: 0; margin: 0;">Keyy</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Wakil Ketua</span>
            <h1 style="color: white; padding: 0; margin: 0;">her</h1>
            @if($votePaslonOsis == 1)
            <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-off" type="submit">DI PILIH</button>
            @else
            <form action="{{ route('vote.osis')}}">
                <input type="hidden" name="paslonOsisNumber" value="1">

                <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-primary" type="submit">PILIH</button>
            </form>
            @endif
        </div>
        <div class="card">
            <img src="https://image.kpopmap.com/2023/05/iu_insta_cover.jpg">
            <h1 style="color: white; padding: 0; margin: 0;margin-top: 10px;">PASLON 2</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Ketua</span>
            <h1 style="color: white; padding: 0; margin: 0;">Keyy</h1>
            <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Wakil Ketua</span>
            <h1 style="color: white; padding: 0; margin: 0;">her</h1>
            @if($votePaslonOsis == 2)
            <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-off">DI PILIH</button>
            @else
            <form action="{{ route('vote.osis')}}">
                <input type="hidden" name="paslonOsisNumber" value="2">

                <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 24px;" class="button-primary" type="submit">PILIH</button>
            </form>
            @endif
        </div>

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