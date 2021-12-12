@extends('layouts/main')

<title>{{ $title }}</title>

@section('container')

<div class="container " style="padding-top: 30px;">
        <div class="d-flex justify-content-center">
            <h2><b>Edit Vaccine</b></h2>
        </div>

<form>
    <div class="mb-3">
        <label for="namavaksin" class="form-label">Vaccine Name</label>
        <input type="text" class="form-control" id="namavaksin" aria-describedby="name">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Rp</span>
                <input type="text" class="form-control" aria-label="price" aria-describedby="price">
            </div>
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <textarea class="form-control" id="desc" rows="3"></textarea>
    </div> 
    <div class="form-group">
    <label for="desc" class="form-label">Image</label>
        <input type="file" class="form-control-file" id="fotovaksin">
    </div>
    <br>
    <button class="btn btn-primary" type="submit" name="submit" style="width: 100px">Update</button>
</form>

@endsection