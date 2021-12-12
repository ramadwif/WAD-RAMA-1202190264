@extends('layouts.main')

<title>{{ $title }}</title>

@section('container')

<div class="container " style="padding-top: 30px;">
        <div class="d-flex justify-content-center">
            <h2><b>List Vaccine</b></h2>
        </div>

        <div class="container" style="text-align: center;">
    <h5><b>List Vaccine</b></h5>
    <table class="table table-hover table-blue" style="background-color: #6c98c4;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <th scope="col">1</th>
            <th scope="col">Sinovac</th>
            <th scope="col">500000</th>
            <th>
            <a type="button" class="btn btn-warning" href="#">edit</a>
            <a type="button" class="btn btn-danger" href="#">delete</a>
            </th>
            </tr>
        </tbody>
    </table>

@endsection