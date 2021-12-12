@extends('layouts.main')

@section('container')

<title>{{ $title }}</title>

<div class="row g-4">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card h-100">
            <img src="https://m.economictimes.com/thumb/msid-83148108,width-1200,height-900,resizemode-4,imgsize-596962/sinovac-vaccine-.jpg" class="card-img-top" alt="card image" style="height: 400px;">
            <div class="card-body">
              <h5 class="card-title">Sinovac</h5>
              <small class="text-muted">Rp 200000</small>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus at quasi id fuga incidunt nulla tenetur,
                  vitae eos autem deserunt amet quaerat aliquam blanditiis ullam, eveniet iste ea, dolorem temporibus?</p>
            </div>
            <div class="card-footer">
                <div class="d-grid gap-2">
                    <input class="btn btn-primary" type="submit" name="submit" value="Vaccine Now" style="width: 100%">
                </div>  
            </div>
          </div>
        </div>
      </div>

@endsection