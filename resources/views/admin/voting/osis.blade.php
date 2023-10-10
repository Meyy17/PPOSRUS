@extends('layout.admin.sidebar')
@section('content-admin')
<h1 style="color: white;">Hasil Voting Ketua dan Wakil Ketua OSIS</h1>
<div class="row" style="gap: 20px;">
    <div class="tabbar">
        <a href="" class="tab-active">
            <span style="font-weight: 500; padding: 0; margin: 0; font-size: 15px; line-height: 0;">Osis</span>
        </a>
        <a href="{{route('admin.voting.mpk')}}" class="tab">
            <span style="font-weight: 500; padding: 0; margin: 0; font-size: 15px; line-height: 0;">Mpk</span>
        </a>
    </div>
</div>

<div class="row" style="justify-content: space-between; margin-top: 20px;">

    <div class="card-dashboard-small">
        <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$countkandidat}} Kandidat</h1>
    </div>

    <div class="card-dashboard-small">
        <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$countuser}} Hak Suara</h1>
    </div>

    <div class="card-dashboard-small">
        <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$countvote}} Suara Masuk</h1>
    </div>
</div>

<div class="wrap" style="margin-top: 50px;">
    @foreach($osis as $data)
    <div class="card-content">
        <img src="{{env('APP_URL').'/storage/'.$data->image}}">
        <h1 style="color: white; padding: 0; margin: 0;margin-top: 10px;">PASLON {{$data->number}}</h1>
        <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Ketua</span>
        <h1 style="color: white; padding: 0; margin: 0;  font-size: 15px;">{{$data->ketua}}</h1>
        <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; margin-top: 10px;">Wakil Ketua</span>
        <h1 style="color: white; padding: 0; margin: 0; font-size: 15px;">{{$data->wakil}}</h1>

        <div class="card-dashboard-full" style="margin-top: 20px;">
            <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$data->votes_count}} Suara</h1>
        </div>
    </div>
    @endforeach
</div>

@endsection