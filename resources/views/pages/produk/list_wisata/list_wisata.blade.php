@extends('layouts.wkp')
@section('title','Tourism | Mentawai')
@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="category">
            <h2 id="category-label">Lokasi Pulau</h2>
            <ul class="list-group">
              @foreach ($wisata_list as $wislist)
              <li class="list-group-item"><a href="{{ url('wisata_pulau/'.$wislist->pulau_id) }}">{{ $wislist->nama_wisata }}</a></li>  
              @endforeach
            </ul>
          </div>
      
        </div>
          <div class="col-lg-8">
            <div class="item-list">
            <h2>Our Tourism</h2>
            <hr style="margin-bottom: 2em;">
            <div class="row list-product">
                {{-- @foreach ($wisata as $item)
                <div class="col-lg-4 item">
                    <img class="rounded mx-auto d-block" src="{{ asset('/storage/post-image/'.$item->image) }}" alt="nopic" height="180" width="180">
                    
                    <p class="product-name mt-3 font-weight-bold">{{ $item->nama_wisata }}</p>
                    <p class="product-price">IDR {{number_format ($item->biaya) }} / person</p>
                </div>
                @endforeach --}}
            </div>
          </div>
        </div>
      </div>  
    <!-- Pagination Link -->
 {{-- {{ $wisata->links() }} --}}
   

  </div>
@endsection