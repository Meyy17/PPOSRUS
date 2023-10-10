@extends('layout.admin.sidebar')
@section('content-admin')
<h1 style="color: white;">Edit Kandidat Osis</h1>
<div class="center-all">
    <div class="form-add">
        <form action="{{route('admin.kandidat.update.osis.action')}}" method="PUT" enctype="multipart/form-data">
            @csrf
            <!-- <div class="column">
                <span style="color: white;">Banner</span>
                <input type="file" placeholder="Nama Ketua" class="input-default" name="image">
            </div> -->

            <div class="column">
                <span style="color: white;">Nomor Kandidat</span>
                <input type="number" placeholder="Nomor kandidat" class="input-default" name="number">
            </div>
            <div class="column">
                <span style="color: white;">Nama Ketua</span>
                <input type="text" placeholder="Nama Ketua" class="input-default" name="ketua">
            </div>
            <div class="column">
                <span style="color: white;">Nama Wakil</span>
                <input type="text" placeholder="Nama Wakil" class="input-default" name="wakil">
            </div>


            <button type="submit" class="button-primary" style="padding-left: 20px; padding-right: 20px;">Tambah</button>
        </form>
    </div>
</div>

@endsection