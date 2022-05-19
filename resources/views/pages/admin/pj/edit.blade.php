@extends('layouts.admin')
@section('content')

<h1 class="ml-5">Form Edit Data Penanggungjawab</h1>
<div class="col-lg-5 ml-5">
    <form action="/pjs/{{ $pjs->id }}" method="post"> 
        @csrf
        @method('PUT')   
        
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
                    <label for="title">Nama Penanggungjawab</label>
                    <input type="text" class="form-control" name="nama_pj"
                    value="{{ old('nama_pj') ? old('nama_pj') : $pjs->nama_pj }}"
                    >
                    @error('nama_pj')
                    <div class="alert alert-danger">{{ $message }}</div>   
                    @enderror
                </div>

            <div class="form-group">
                <label for="title">Nomor Hp</label>
                <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') ? old('no_hp') : $pjs->no_hp }}">
                @error('no_hp')
                 <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </div>
    
         
        <button type="submit" class="btn btn-primary">Simpan</button>
       <a href="/pjs" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection