@extends('layout.app')
@section('content')
<div class="bg">
    <div class="img-bg">
        <div class="vote">
            <div class="wrapper-header">
                <div class="iconsgroup">
                    <img class="logob" width="150px" src="{{asset('assets/image/logob.svg')}}">
                    <div width="150px" class="centerlogof">
                        <img class="logof" width="110px" src="{{asset('assets/image/logof.svg')}}">
                    </div>
                </div>
                <h1 style="color: white; margin-left: 20px;">PEMILIHAN PEMIMPIN ORGANISASI SEKOLAH<br>SMK RADEN UMAR SAID KUDUS<br>2023-2024</h1>
            </div>
            <hr>
            @yield('content-vote')
        </div>
    </div>
</div>
@endsection