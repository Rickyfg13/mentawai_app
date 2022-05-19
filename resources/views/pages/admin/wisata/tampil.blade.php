@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Wisata</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/wisata" class="text-decoration-none">Wisata</a></li>
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
        <section class="col-lg-12 connectedSortable">
          <div class="card">
            <div class="card-header">
              <a href="/wisata_tambah" class="btn btn-sm btn-primary">
                  <i class="fas fa-plus"> Data</i>
              </a>
            </div><!-- /.card-header -->
            <div class="card-body">
             <table class="table">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Pulau</th>
                         <th>Nama Wisata</th>                    
                         <th>Biaya</th>
                         <th>Fasilitas</th>
                         <th>Foto</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach($wisata as $item)
                     <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $item->pulau->nama_pulau}}</td>
                         <td>{{ $item->nama_wisata }}</td>
                         <td> {{number_format ($item->biaya) }}</td>    
                         <td>{{ $item->fasilitas }}</td>
                         <td><img width="80px" src="{{ asset('/storage/post-image/'.$item->image) }}" alt=""></td>  
                         <td>
                          <a href="/wisata/{{ $item->id }}/edit" class=" btn btn-secondary">Edit</a>
                          <form action="/wisata/{{ $item->id }}" method="post" style="display: inline-block;">
                           @csrf
                           @method("delete")
                           <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')" >Hapus</button>
                         </form>
                        </td>
                     </tr>
                     @endforeach
                 </tbody>
             </table>
             {{ $wisata->links() }}
              </div>
            </div>
          </div>
        </section>
      </div>    
    </div>
  </section>
@endsection