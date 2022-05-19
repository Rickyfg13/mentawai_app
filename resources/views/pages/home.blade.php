@extends('layouts.app')
@section('content') 
@section('title','Home | Mentawai ')
<br>
<br>

<!-- Container -->
<div class="container">
    <!-- Info Panel -->
    <div class="row justify-content-center">
        <div class="col-lg-12 info-panel">
            <h4 class="text-center">Explore Mentawai Islands</h4>
        </div>
    </div>
    <!-- End Info Panel -->
</div>
<!-- Akhir Continer -->

<!-- Event -->
<div class="event">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('asset/frontend/images/new_images/pagai_selatan/bagat_saumang1.jpg') }}" class="card-img-top" alt="..." style="height: 211px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('asset/frontend/images/img/mentawai1.jpg') }}" class="card-img-top" alt="..." style="height: 211px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('asset/frontend/images/img/rendang.jpg') }}" class="card-img-top" alt="..." style="height: 211px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <p></p>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('asset/frontend/images/img/nila.jpg') }}" class="card-img-top" alt="..." style="height: 211px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('asset/frontend/images/img/airterjunpujujurung.jpg') }}" class="card-img-top" alt="..." style="height: 211px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('asset/frontend/images/img/slider1.jpg') }}" class="card-img-top" alt="..." style="height: 211px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection