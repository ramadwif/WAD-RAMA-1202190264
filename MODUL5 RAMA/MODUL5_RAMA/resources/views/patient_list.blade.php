@extends('layouts.main')

@section('container')

<title>{{ $title }}</title>

<div class="container " style="padding-top: 30px;">
        <div class="d-flex justify-content-center">
            <h2><b>Patient List</b></h2>
        </div>

<div class="container" style="text-align: center;">
    <h5><b>List Patient</b></h5>
    <table class="table table-hover table-blue" style="background-color: #6c98c4;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Vaccine</th>
                <th scope="col">Name</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <th scope="col">1</th>
            <th scope="col">Sinovac</th>
            <th scope="col">Asep</th>
            <th scope="col">Bandung</th>
            <th scope="col">08123456000</th>
            <th>
            <a type="button" class="btn btn-warning" href="#">edit</a>
            <a type="button" class="btn btn-danger" href="#">delete</a>
            </th>
        </tbody>
    </table>
@endsection