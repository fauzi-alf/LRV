@extends('template')
@section("tittle")
TAMBAH DATAH
@endsection
@section('content')
<style>
    body{
        color: blue !important;
    }
</style>
<h1 class="text-center">Tambah Data</h1>
<br><br>
<div class="card shadow bg-tranparents px-5 py-5">
<table class="table table-bordered table-striped">
<form action="{{ route('destinations.tambah') }}" method="POST">
    @csrf
    <h2 class="text-center">Tambah Data</h2>
    <div class="form-group ">
        <label for="name">Nama</label>
        <input type="text" name="name" class="form-control bg-warning" id="name" required>
    </div>
   

    <div class="form-group mb-2">
        <label for="location">Lokasi</label>
        <input type="text" name="location" class="form-control bg-success" id="location">
    </div>
    <div class="form-group mb-2">
        <label for="details">Detail </label>
        <input type="text" name="details" class="form-control bg-primary" id="details">
    </div>
    <div class="form-group mb-2">
        <label for="day_open">Hari Buka</label>
        <input type="text" name="day_open" class="form-control bg-info" id="day_open">
    </div>
    <div class="form-group mb-2">
        <label for="time_open">Jam Buka</label>
        <input type="text" name="time_open" class="form-control bg-info" id="time_open">
    </div>
    <div class="form-check mb-2">
    <label for="pricing">Keterangan</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input bg-danger" type="radio" name="pricing" value="Free" id="pricing" checked>
        <label class="form-check-label " for="Free">Free</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pricing" value="Paid" id="pricing" checked>
        <label class="form-check-label bg-primary" for="Paid">Paid</label>
    </div>
</div>
<button type="submit" class="btn p-3 mt-3 btn-sm btn-primary">Simpan</button>
    <a href="{{ url('data-wisata') }}" class="btn p-3 mt-3 btn-sm btn-primary">Kembali</a>
</form>
</table>
</div>

@endsection