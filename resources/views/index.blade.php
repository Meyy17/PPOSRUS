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
                    PEMILIHAN PEMIMPIN ORGANISASI SEKOLAH<br>SMK RADEN UMAR SAID KUDUS<br>2023-2024
                </h1>
                <form action="{{ route('authentication')}}" method="POST" class="card">
                    @csrf
                    <span style="color: white;">Masukkan NIS</span>
                    <input type="number" class="input-default" placeholder="NIS" required name="nis">
                    <button type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection