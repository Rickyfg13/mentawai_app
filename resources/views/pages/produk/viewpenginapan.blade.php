@extends('layouts.wkp')

@section('title',$penginapan->nama_penginapan)
@section('content')

<div class="py-3 mb-4 shadow-sm bg-primary border-top">
    <div class="container">
        <h6 class="mb-0 ">Resorts / <a href="{{ url('/penginapan_user') }}" class="text-decoration-none" style="color: black;">{{ $penginapan->pulau->nama_pulau }}</a> / {{ $penginapan->nama_penginapan }}</h6>
    </div>
</div>

<div class="container">
    <div class="card-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('storage/post-image/'.$penginapan->image) }}" class="w-100" alt="">
                   
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">{{ $penginapan->nama_penginapan }}</h2>
                    <hr>
                    <label class="me-3">Price : IDR {{number_format ($penginapan->harga) }} / Night / Unit</label>
                    <p class="mt-3">
                        <h6>Fasilitas</h6>
                        {{ $penginapan->fasilitas }}
                    </p>
                    <hr>
                    <div class="row mt-2">
                       
                        <div class="col-md-10">
                            <br/>
                            <button type="button" class="btn btn-success me-3 float-start" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Book Now</button>
                            <a href="/penginapan_user" class="btn btn-primary" style="margin-bottom: 5px">Back</a>                                                                    
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Resort Book</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                            <form action="{{ url('booking') }}" method="POST" >
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="nama" class="col-form-label">Nama Penginapan</label>
                                        <input type="text" class="form-control" id="name" name="nama_penginapan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="col-form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_hp" class="col-form-label">Phone Number</label>
                                        <input type="text" class="form-control" name="no_hp" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="lama_inap" class="col-form-label">Night</label>
                                        <input type="number" class="form-control" name="lama_inap" >
                                    </div>
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Book</button>
                                    </div>
                                    </div>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>


@endsection

