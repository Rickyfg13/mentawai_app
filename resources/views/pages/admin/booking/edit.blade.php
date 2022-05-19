@extends('layouts.admin')
@section('content')

<h1 class="ml-5">Form Edit Booking</h1>
<div class="col-lg-5 ml-5">
    <form action="{{ url('booking_tampil/'.$bookings->id) }}" method="post" > 
        @csrf
        @method('PUT')   
            <div class="form-group">
                <label for="title">Nama Penginapan</label>
                <input type="text" class="form-control" name="nama_penginapan"
                value="{{ old('nama_penginapan') ? old('nama_penginapan') : $bookings->nama_penginapan }}"
                >
                @error('nama_penginapan')
                <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </div>
            <div class="form-group">
                <label >Nama Pemesan</label>
                <input type="text" class="form-control" name="nama"
                value="{{ old('nama') ? old('nama') : $bookings->nama }}"
                >
                @error('nama')
                <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_hp" value="{{ old('no_hp') ? old('no_hp') : $bookings->no_hp }}">
                @error('no_hp')
                 <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
            </div>

            <div class="form-group">
                <label for="title">Lama Inap</label>
                <input type="number" class="form-control" name="lama_inap"
                value="{{ old('lama_inap') ? old('lama_inap') : $bookings->lama_inap }}"
                >
                @error('lama_inap')
                <div class="alert alert-danger">{{ $message }}</div>   
                @enderror
                </div>
            
        <button type="submit" class="btn btn-primary">Simpan</button>
       <a href="{{ url('booking_tampil') }}" class="btn btn-primary">Back</a>
    </form>
</div>
@endsection