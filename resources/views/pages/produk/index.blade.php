@extends('layouts.wkp')
@section('title','Food | Mentawai')
@section('content')
<div class="col-lg-7">
    <div class="item-list">
        <h2 class="">{{ $pulau->nama_pulau }} Restaurant</h2>
        <hr style="margin-bottom: 2em;">
            <div class="row list-product">
                @foreach ($rmj as $kuliner)
                <div class="col-lg-4 item">
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img class="rounded mx-auto d-block" src="{{ asset('/storage/post-image/'.$kuliner->image) }}" alt="nopic" height="180" width="180">
                    </a>
                    <p class="product-name mt-3 font-weight-bold">{{ $kuliner->nama_rm }}</p>
                    <p class="product-price">Jam Buka: {{ ($kuliner->jam_buka)  }}</p>
                </div>
                @endforeach
            </div>
            <a href="/kuliner_user" class="btn btn-primary" style="margin-bottom: 5px">Back</a>
            {{ $rmj->links() }}
        </div>
    </div>
@endsection