@extends('layout.admin.sidebar')
@section('content-admin')
<h1 style="color: white;">Kandidat</h1>
<div class="row" style="gap: 20px;">
    <div class="tabbar">
        <a href="{{route('admin.kandidat.osis')}}" class="tab">
            <span style="font-weight: 500; padding: 0; margin: 0; font-size: 15px; line-height: 0;">Osis</span>
        </a>
        <a href="" class="tab-active">
            <span style="font-weight: 500; padding: 0; margin: 0; font-size: 15px; line-height: 0;">Mpk</span>
        </a>
    </div>
    <button class="btn-secondary">Tambah</button>

</div>
<div class="wrap" style="margin-top: 50px;">
    @foreach($mpk as $data)
    <div class="card-content">
        <img src="{{$data->image}}">
        <h1 style="color: white; padding: 0; margin: 0;margin-top: 10px;">PASLON {{$data->number}}</h1>
        <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Ketua</span>
        <h1 style="color: white; padding: 0; margin: 0;  font-size: 15px;">{{$data->ketua}}</h1>
        <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Wakil Ketua</span>
        <h1 style="color: white; padding: 0; margin: 0; font-size: 15px;">{{$data->wakil}}</h1>


        <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 15px; box-shadow: 0px 7px 0px 0px #C2C2C2; background-color: white; color: #D9534F;" class="button-primary" type="submit">EDIT</button>
        <button style="width: 100%; margin-top: 20px; font-weight: 600; font-size: 15px;" class="button-primary" type="submit">HAPUS</button>

    </div>
    @endforeach


</div>
@endsection