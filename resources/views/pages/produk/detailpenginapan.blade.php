@extends('layouts.wkp')
@section('title','Resort | Mentawai')
@section('content')
<div class="col-lg-7">
    <div class="item-list">
        <h2 class="">{{ $pulau->nama_pulau }} Resort</h2>
        <hr style="margin-bottom: 2em;">
            <div class="row list-product">
                @foreach ($penginapan as $item)
                <div class="col-lg-4 item">
                    <a href="{{ url('penginapan_pulau/'.$pulau->pulau_id.'/'.$item->id) }}">
                        <img class="rounded mx-auto d-block" src="{{ asset('/storage/post-image/'.$item->image) }}" alt="nopic" height="180" width="180">
                    </a>
                    <p class="product-name mt-3 font-weight-bold">{{ $item->nama_penginapan }}</p>
                    <p class="product-price">IDR {{number_format ($item->harga)  }} / night</p>
                </div>
                @endforeach
            </div>
            <a href="/penginapan_user" class="btn btn-primary" style="margin-bottom: 5px">Back</a>
            {{ $penginapan->links() }}
        </div>
    </div>
@endsection