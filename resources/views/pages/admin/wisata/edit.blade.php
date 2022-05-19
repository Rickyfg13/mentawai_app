@extends('layouts.admin')
@section('content')


<h1 class="ml-5">Form Edit Data Wisata</h1>
<div class="col-lg-5 ml-5">
    <form action="/wisata/{{ $data->id }}" method="Post" enctype="multipart/form-data">    
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Pulau</label>
            <div class="input-group mb-3">

                <select class="form-select" name="pulau_id">
                  
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
            <label for="title">Nama Wisata</label>
            <input type="text" class="form-control" name="nama_wisata" value="{{ old('nama_wisata') ? old('nama_wisata') : $data->nama_wisata }}">
            @error('nama_wisata')
             <div class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>
       
        <div class="form-group">
            <label for="title">Fasilitas</label>
            <input type="text" class="form-control" name="fasilitas" value="{{ old('fasilitas') ? old('fasilitas') : $data->fasilitas }}">
            @error('fasilitas')
             <div class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>
      
        <div class="form-group">
            <label for="title">Biaya</label>
            <input type="number" class="form-control" name="biaya" value="{{ old('biaya') ? old('biaya') : $data->biaya }}">
            @error('biaya')
             <div class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>
        <div class="form-group ">
            <div class="mb-3">
                <label for="formFile" class="form-label">Masukan Gambar</label>
                <input class="form-control" type="file" id="formFile" name="image">
              </div>
            {{-- <input type="text" class="form-control" name="images"> --}}
            @error('image')
             <div class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
       <a href="/wisata-admin" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection