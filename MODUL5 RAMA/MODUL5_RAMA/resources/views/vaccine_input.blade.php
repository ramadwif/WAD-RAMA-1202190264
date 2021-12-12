@extends('layouts.main')

@section('container')

<title>{{ $title }}</title>

<div class="container " style="padding-top: 30px;">
        <div class="d-flex justify-content-center">
            <h2><b>Input Vaccine</b></h2>
        </div>
    
<form>
    <div class="mb-3">
        <label for="namavaksin" class="form-label">Vaccine Name</label>
        <input type="text" class="form-control" id="namavaksin" name="name" aria-describedby="name">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Rp</span>
                <input type="text" class="form-control" aria-label="price" name="price" aria-describedby="price">
            </div>
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <textarea class="form-control" id="desc" rows="3" name="description"></textarea>
    </div> 
    <div class="form-group">
    <label for="desc" class="form-label">Image</label>
        <input type="file" class="form-control-file" id="fotovaksin" name="images">
    </div>
    <br>
    <button class="btn btn-primary" type="submit" name="submit" style="width: 100px">Submit</button>
</form>

@endsection