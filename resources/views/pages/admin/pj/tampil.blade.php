@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tampil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Penanggungjawab</a></li>
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
              <a href="/pjs_tambah" class="btn btn-sm btn-primary">
                  <i class="fas fa-plus"> Data</i>
              </a>
            </div><!-- /.card-header -->
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
                         <th>Nama Penanggungjawab</th>
                         <th>Nomor Hp</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach($pjs as $item)
                     <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $item->pulau->nama_pulau}}</td>
                         <td>{{ $item->nama_pj }}</td>
                         <td>{{ $item->no_hp }}</td>         
                         <td>
                           <a href="/pjs/{{ $item->id }}/edit" class=" btn btn-secondary">Edit</a>
                           <form action="/pjs/{{ $item->id }}" method="post" style="display: inline-block;">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure?')" >Hapus</button>
                          </form>
                         </td>
                      </tr>
                     @endforeach
                 </tbody>
             </table>
             {{-- {{ $pjs->links() }} --}}
              </div>
            </div>
          </div>
        </section>
      </div>    
    </div>
  </section>
@endsection