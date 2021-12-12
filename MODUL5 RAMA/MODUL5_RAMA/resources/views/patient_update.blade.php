@extends('layouts/main')

<title>{{ $title }}</title>

@section('container')

<div class="container " style="padding-top: 30px;">
        <div class="d-flex justify-content-center">
            <h2><b>Patient Update</b></h2>
        </div>

    <form action="#" method="post">
    <div class mb-3>
        <div class="mb-2">
            <label for="vaksin"><b>Vaccine Id</b></label>
            <input class="form-control" type="text" name="vaksin" id="vaksin" value="1" readonly>
        </div>
        <div class="mb-2">
            <label for="nama"><b>Patient Name</b></label>
            <input class="form-control" type="text" name="nama" id="nama" >
        </div>
        <div class="mb-2">
            <label for="nik"><b>NIK</b></label>
            <input class="form-control" type="text" name="nik" id="nik">
        </div>
        <div class="mb-2">
            <label for="alamat"><b>Alamat</b></label>
            <input class="form-control" type="text" name="alamat" id="alamat" >
        </div>
        <div class="mb-2">
            <label for="ktp"><b>KTP</b></label>
            <input class="form-control-file" type="file" name="ktp" id="ktp">
        </div>
        <div class="mb-2">
            <label for="nohp"><b>No Hp</b></label>
            <input class="form-control" type="number" name="nohp" id="nohp" >
        </div>
        <div class="mb-2">
            <button class="btn btn-primary" type="submit" name="submit" style="width: 100px">Update</button>
        </div>
    </div>
</form>

@endsection