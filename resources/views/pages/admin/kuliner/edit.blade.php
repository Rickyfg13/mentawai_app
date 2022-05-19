@extends('layouts.admin')
@section('content')

<h1 class="ml-5">Form Edit Data Kuliner</h1>
<div class="col-lg-5 ml-5">
    <form action="/kuliner/{{ $data->id }}" method="post"  enctype="multipart/form-data"> 
        @csrf
        @method('PUT')   
            <div class="form-group">
                <label for="title">Nama Makanan</label>
                <input type="text" class="form-control" name="nama_makanan"
                value="{{ old('nama_makanan') ? old('nama_makanan') : $data->nama_makanan }}"
                >
                @error('nama_makanan')
                <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Pulau</label>
                <div class="input-group mb-3">
    
                    <select class="form-select" id="inputGroupSelect01" name="pulau_id">
                      
                      @foreach($pulau as $baris)
                            <option value="{{ old('pulau_id') ? old ('pulau_id') : $baris->pulau_id }}">
                                {{ $baris->nama_pulau }}
                            </option>
                      @endforeach
    
    
                    </select>
    
                  </div>
                {{-- <input type="text" class="form-control" name="lokasi"> --}}
                @error('nama_pulau')
                 <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Harga</label>
                <input type="number" class="form-control" name="harga"
                value="{{ old('harga') ? old('harga') : $data->harga }}"
                >
                @error('harga')
                <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
                </div>
            <div class="form-group ">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Masukan Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="image" value="{{ old('image') ? old('image') : $data->image }}"
                    >
                </div>
                {{-- <input type="text" class="form-control" name="images"> --}}
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
       <a href="/kuliner-admin" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection