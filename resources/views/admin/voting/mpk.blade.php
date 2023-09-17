@extends('layout.admin.sidebar')
@section('content-admin')
<h1 style="color: white;">Hasil Voting Ketua dan Wakil Ketua OSIS</h1>
<div class="row" style="gap: 20px;">
    <div class="tabbar">
        <a href="{{route('admin.voting.osis')}}" class="tab">
            <span style="font-weight: 500; padding: 0; margin: 0; font-size: 15px; line-height: 0;">Osis</span>
        </a>
        <a href="" class="tab-active">
            <span style="font-weight: 500; padding: 0; margin: 0; font-size: 15px; line-height: 0;">Mpk</span>
        </a>
    </div>
</div>
@endsection