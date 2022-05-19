@extends('layouts.admin')
@section('content')


<h1 class="ml-5">Form Tambah Data Rumah Makan</h1>
<div class="col-lg-5 ml-5">
    <form action="{{ route('Rms.store') }}" method="Post" enctype="multipart/form-data">    
        @csrf
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
            <label for="title">Nama Rumah Makan</label>
            <input type="text" class="form-control" name="nama_rm">
            @error('nama_rm')
             <div class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>
        
        <div class="form-group">
            <label for="title">Jam Buka</label>
            <select name="jam_buka" class="form-select">
                <option>Pilih Jam Buka</option>
                <option value="08.00-16.00">08.00-16.00</option>
                <option value="08.30-18.00">08.30-18.00</option> 
                <option value="11.00-20.00">11.00-20.00</option> 
            </select>
            @error('jam_buka')
             <div class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>
    
        <div class="form-group ">
            <div class="mb-3">
                <label for="formFile" class="form-label">Masukan Gambar Rumah Makan</label>
                <input class="form-control" type="file" id="formFile" name="image">
              </div>
            {{-- <input type="text" class="form-control" name="images"> --}}
            @error('image')
             <div class="alert alert-danger">{{ $message }}</div>   
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
       <a href="{{ route('Rms.index') }}" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection