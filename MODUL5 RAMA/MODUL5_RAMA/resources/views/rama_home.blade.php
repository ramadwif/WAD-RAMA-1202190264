@extends('layouts.main')

@section('container')

<title>{{ $title }}</title>

<body>
<div class="container " style="padding-top: 30px;">
        <div class="d-flex justify-content-center">
            <h2><b>About Us</b></h2>
        </div>

    <div class="row align-items-md-stretch" style="padding-top: 30px;">
            <div class="col-md-5">
                <div class="">
                    <img src="https://image.freepik.com/free-vector/flat-hand-drawn-doctor-injecting-vaccine-patient_23-2148869091.jpg" width="75%;" class="float-end">
                </div>
            </div>
            <div class="col-md-7">
                <div class="h-100 p-5">
                    <p style="text-align: justify;">Vaksinasi adalah pemberian Vaksin dalam rangka menimbulkan atau meningkatkan kekebalan seseorang secara aktif terhadap suatu penyakit, sehingga
                      apabila suatu saat terpajan dengan penyakit tersebut tidak akan sakit atau hanya mengalami sakit ringan dan tidak menjadi sumber penularan.
                      Pelayanan vaksinasi COVID-19 dilaksanakan di Fasilitas Pelayanan Kesehatan milik Pemerintah Pusat, Pemerintah Daerah Provinsi, Pemerintah Daerah
                      Kabupaten/Kota atau milik masyarakat/swasta yang memenuhi persyaratan.</p>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection