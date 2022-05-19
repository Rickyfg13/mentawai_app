@extends('layouts.wkp')
@section('title','Tourism | Mentawai')
@section('content')


<div class="content">
    <div class="row">
        <div class="col-lg-4">
            <div class="category">
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih Tempat Wisata
                    </button>
                    <ul class="dropdown-menu">
                    @foreach ($wislist as $wislists)
                        <li><a class="dropdown-item" href="#">{{ $wislists->nama_wisata }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-7"> 
            <div class="item-list">
                <h2 class="">{{ $pulau->nama_pulau }} Tourism</h2>
                <hr style="margin-bottom: 2em;">

                
                    <div class="row list-product">
                        @foreach ($wisata as $item)
                        <div class="col-lg-4 item">
                            <a href="{{ url('wisata_pulau/'.$pulau->pulau_id.'/'.$item->id) }}">
                                <img class="rounded mx-auto d-block" src="{{ asset('/storage/post-image/'.$item->image) }}" alt="nopic" height="180" width="180">
                            </a>
                            <p class="product-name mt-3 font-weight-bold">{{ $item->nama_wisata }}</p>
                            <p class="product-price">IDR {{number_format ($item->biaya)  }} / person</p>
                        </div>
                        @endforeach
                    </div>

                    <a href="/wisata_user" class="btn btn-primary" style="margin-bottom: 5px">Back</a>
                    {{ $wisata->links() }}
                </div>
        </div>
    </div>
</div>

@endsection