@extends('layouts.wkp')
@section('title','Resort | Mentawai')
@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="category">
            <h2 id="category-label">Lokasi Pulau</h2>
            <ul class="list-group">
              @foreach ($pulau as $pulaus)
              <li class="list-group-item"><a href="{{ url('penginapan_pulau/'.$pulaus->pulau_id) }}">{{ $pulaus->nama_pulau }}</a></li>    
              @endforeach         
            </ul>
          </div>
      
        </div>
          <div class="col-lg-8">
            <div class="item-list">
            <h2>Our Resort</h2>
            <hr style="margin-bottom: 2em;">
            <div class="row list-product">
                @foreach ($penginapan as $item)
                <div class="col-lg-4 item">
                   
                    <img class="rounded mx-auto d-block" src="{{ asset('/storage/post-image/'.$item->image) }}" alt="nopic" height="180" width="180">
              
                    <p class="product-name mt-3 font-weight-bold">{{ $item->nama_penginapan }}</p>
                    <p class="product-price">IDR {{number_format ($item->harga)  }} / night</p>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>  
    <!-- Pagination Link -->
 {{ $penginapan->links() }}
   

  </div>
@endsection



