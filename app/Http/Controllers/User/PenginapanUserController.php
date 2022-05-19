<?php

namespace App\Http\Controllers\User;

use App\Models\Pulau;
use App\Models\Penginapan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenginapanUserController extends Controller
{
    public function index()
    {   
        $pulau=Pulau::all();
        $penginapan = Penginapan::Paginate(9);
        return view('pages.penginapan',[
            'penginapan'=>$penginapan,
            'pulau'=>$pulau
        ]);
    }

     //menampilkan data berdasarkan ID dari pulau
     public function pulaukategoripenginapan($pulau_id)
     {
         $pulau = Pulau::where('pulau_id',$pulau_id)->first();
         $penginapan = Penginapan::where('pulau_id',$pulau->pulau_id)->paginate(8);
         return view('pages.produk.detailpenginapan',compact('penginapan','pulau'));
     }

     public function pengDet($pulau_id, $id)
     {
        $penginapan = Penginapan::where('id', $id)->first();
        return view('pages.produk.viewpenginapan',compact('penginapan'));
    }
}
