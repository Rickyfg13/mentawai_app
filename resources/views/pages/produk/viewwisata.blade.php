@extends('layouts.wkp')

@section('title',$wisata->nama_wisata)
@section('content')

<div class="py-3 mb-4 shadow-sm bg-primary border-top">
    <div class="container">
        <h6 class="mb-0 ">Tourism / <a href="{{ url('/wisata_user') }}" class="text-decoration-none" style="color: black;">{{ $wisata->pulau->nama_pulau }}</a> / {{ $wisata->nama_wisata }}</h6>
    </div>
</div>

<div class="container">
    <div class="card-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('storage/post-image/'.$wisata->image) }}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">{{ $wisata->nama_wisata }}</h2>
                    <hr>
                    <label class="me-3">Price : IDR {{number_format ($wisata->biaya) }} / Person</label>
                    <p class="mt-3">
                        <h6>Fasilitas</h6>
                        {{ $wisata->fasilitas }}
                    </p>
                    <hr>
                    <div class="row mt-2">
                       
                        <div class="col-md-10">
                           
                            <a href="/wisata_user" class="btn btn-primary" style="margin-bottom: 5px">Back</a>                                                                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>


@endsection