@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Rumah Makan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Rumah Makan</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
        </div>
      </div>
      <div class="row">
        <section class="col-lg-9 connectedSortable">
          <div class="card">
            <div class="card-header">
              <a href="{{ route('Rms.create') }}" class="btn btn-sm btn-primary ">
                 Tambah Data
              </a>
            </div>
            <div class="card-body">

              @if (session('pesan'))
              <div>
                Berhasil Ditambahkan
              </div>
              @endif
             <table class="table">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Pulau</th>
                         <th>Nama Rumah Makan</th>
                         <th>Jam Buka</th>
                         <th>Foto</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach($rumahmakans as $rm)
                     <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $rm->pulau->nama_pulau}}</td>
                         <td>{{ $rm->nama_rm }}</td>
                         <td>{{ $rm->jam_buka }}</td>
                         <td><img width="80px" src="{{ asset('/storage/post-image/'.$rm->image) }}" alt=""></td>
                         <td>
                           <a href="Rms/{{$rm->id  }}/edit" class=" btn btn-secondary">Edit</a>
                           <form action="/Rms/{{$rm->id  }}" method="post" style="display: inline-block;">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" >Hapus</button>
                          </form>                          
                         </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                  {{ $rumahmakans->links() }}
              </div>
            </div>
          </div>
        </section>
      </div>    
    </div>
  </section>
@endsection