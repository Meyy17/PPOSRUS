@extends('layout.admin.sidebar')
@section('content-admin')
<h1 style="color: white;">Dashboard</h1>
<div class="row" style="justify-content: space-between;">

    <div class="card-dashboard-small">
        <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$countkandidatosis}} Kandidat Osis</h1>
        <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$countkandidatmpk}} Kandidat Mpk</h1>
    </div>
    <div class="card-dashboard-small">
        <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$countvoteosis}} Suara Osis</h1>
        <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; font-size: 12px;">Dari {{$countuser}} Hak Suara</span>
    </div>
    <div class="card-dashboard-small">
        <h1 style="color: white; font-size: 20px; padding: 0; margin: 0;">{{$countvotempk}} Suara Mpk</h1>
        <span style="color: #DCDCDC; font-weight: 400; padding: 0; margin: 0; font-size: 12px;">Dari {{$countuser}} Hak Suara</span>
    </div>
</div>
@endsection