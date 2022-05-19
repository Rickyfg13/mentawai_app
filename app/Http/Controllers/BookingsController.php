<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{
   

    public function index(Request $request)
    {
        $request->validate([
            'nama_penginapan'=>'required',
            'nama'=>'required',
            'no_hp'=>'required|max:12',
            'lama_inap'=>'required',
        ]);

        $booking = new Bookings;
        $booking->nama_penginapan=$request->nama_penginapan;
        $booking->nama=$request->nama;
        $booking->no_hp=$request->no_hp;
        $booking->lama_inap=$request->lama_inap;
        $booking->save();

        return redirect('/booking_sukses');

    }

    public function sukses_booking()
    {
        return view('pages.sukses_booking');
    }

    public function tampil_booking()
    {
        $bookings = Bookings::Paginate(3);
        return view('pages.admin.booking.tampil',['bookings'=>$bookings]);
    }
    public function destroy($id)
    {
        Bookings::where('id',$id)->delete();
        return back();
    }

    public function edit($id)
    {
        $bookings = Bookings::find($id);
        return view('pages.admin.booking.edit',['bookings'=>$bookings]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penginapan'=>'required',
            'nama'=>'required',
            'no_hp'=>'required|max:12',
            'lama_inap'=>'required',
        ]);

        $booking = Bookings::find($id);
        $booking->nama_penginapan=$request->nama_penginapan;
        $booking->nama=$request->nama;
        $booking->no_hp=$request->no_hp;
        $booking->lama_inap=$request->lama_inap;
        $booking->save();

        return redirect('/booking_tampil');
    }
}
