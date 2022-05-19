@extends('layouts.admin')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Menu Booking</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Booking</a></li>
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
              <label>Booking</label>
            </div>
            <div class="card-body">
             <table class="table">
                 <thead>
                     <tr>
                         <th>No</th>
                         <th>Nama Penginapan</th>
                         <th>Nama Pemesan</th>
                         <th>No Hp</th>
                         <th>Lama Inap</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach($bookings as $booking)
                     <tr>
                         <td>{{ $loop->iteration }}</td>
                         <td>{{ $booking->nama_penginapan }}</td>
                         <td>{{ $booking->nama }}</td>
                         <td>{{ $booking->no_hp }}</td>
                         <td>{{ $booking->lama_inap }}</td>
                        <td>
                           <a href="{{ url('booking_tampil/'.$booking->id.'/edit') }}" class=" btn btn-secondary">Edit</a>
                           <form action="/booking/{{ ($booking->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" >Hapus</button>
                          </form>                          
                         </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                  {{ $bookings->links() }}
              </div>
            </div>
          </div>
        </section>
      </div>    
    </div>
  </section>
@endsection