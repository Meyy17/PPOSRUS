@extends('layout.app')
@section('content')
<div class="bg">
    <div class="img-bg">
        <div class="center-wrapper">
            <div class="welcome-wrapper">
                <div class="iconsgroup">
                    <img class="logob" width="220px" src="{{asset('assets/image/logob.svg')}}">
                    <div width="220px" class="centerlogof">
                        <img class="logof" width="180px" src="{{asset('assets/image/logof.svg')}}">
                    </div>
                </div>
                <h1 style="text-align: center; color: white;">
                    BERHASIL MEGIKUTI PEMILIHAN PEMIMPIN ORGANISASI SEKOLAH<br>SMK RADEN UMAR SAID KUDUS<br>2023-2024
                </h1>

                <button style="width: 100%; padding: 10px;font-size: 20px; font-weight: 600;" class="button-primary" onclick="window.location.href=`{{route('index')}}`">Kembali Ke Home</button>
            </div>
        </div>
    </div>
</div>
@endsection