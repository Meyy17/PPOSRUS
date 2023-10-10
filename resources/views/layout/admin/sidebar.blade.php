@extends('layout.app')
@section('content')
<div class="bg" style="display: flex; flex-direction: row; padding: 0; margin: 0;">
    <div class="sidebar">
        <div style="position: fixed; display: flex; flex-direction: column; align-items: center; justify-content: start; height: 100vh; width: 10%;">
            <div class="iconsgroup">
                <img class="logob" width="150px" src="{{asset('assets/image/logob.svg')}}">
                <div width="150px" class="centerlogof">
                    <img class="logof" width="110px" src="{{asset('assets/image/logof.svg')}}">
                </div>
            </div>
            <a href="{{route('admin.dashboard')}}" class="{{ (request()->is('admin/dashboard')) ? 'sidebarbtn-t' : 'sidebarbtn-f' }}">
                <h4>Dashboard</h4>
            </a>
            <a href="{{route('admin.kandidat.osis')}}" class="{{ (request()->is('admin/kandidat/osis')) || (request()->is('admin/kandidat/mpk'))? 'sidebarbtn-t' : 'sidebarbtn-f' }}">
                <h4>Kandidat</h4>
            </a>
            <a href="{{route('admin.voting.osis')}}" class="{{ (request()->is('admin/voting/osis'))|| (request()->is('admin/voting/mpk')) ? 'sidebarbtn-t' : 'sidebarbtn-f' }}">
                <h4>Voting</h4>
            </a>
            <a href="{{route('admin.logout')}}" class="sidebarbtn-d">
                <h4>Keluar</h4>
            </a>

        </div>
    </div>
    <div class="img-bg">
        <div class="vote">
            @yield('content-admin')
        </div>
    </div>
</div>
@endsection