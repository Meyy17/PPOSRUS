@extends('layout.app')
@section('content')
<div class="bg">
    <div class="img-bg">
        <div class="vote">
            <div class="wrapper-header">
                <div>
                    <h1 style="color: white; margin-left: 20px; font-size: 12px;">PEMILIHAN PEMIMPIN ORGANISASI SEKOLAH<br>SMK RADEN UMAR SAID KUDUS<br>2023-2024</h1>
                </div>
                <h1 style="color: white; margin-left: 20px; font-size: 12px;">{{Auth()->user()->name}} <br> Nis : {{Auth()->user()->nis}}</h1>
            </div>
            <hr>
            @yield('content-vote')
        </div>
    </div>
</div>
@endsection