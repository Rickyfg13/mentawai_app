<?php

namespace App\Http\Controllers\User;

use App\Models\Pulau;
use App\Models\Wisata;
use App\Models\WisataList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WisataUserController extends Controller
{
    public function index()
    {   
        $pulau=Pulau::all();
        $wisata = Wisata::Paginate(9);
        return view('pages.wisata',[
            'wisata'=>$wisata,
            'pulau'=>$pulau,
        ]);
    }

     //menampilkan data berdasarkan ID dari pulau
     public function pulaukategoriwisata($pulau_id)
     {
         $pulau = Pulau::where('pulau_id',$pulau_id)->first();
         $wislist = WisataList::where('pulau_id',$pulau_id)->get();
         $wisata = Wisata::where('pulau_id',$pulau->pulau_id)->paginate(8);
         return view('pages.produk.detailwisata',compact('wisata','pulau','wislist'));
     }
     public function WiDet($pulau_id, $id)
     {
        $wisata = Wisata::where('id', $id)->first();
        return view('pages.produk.viewwisata',compact('wisata'));
    }

    public function WisataList()
    {

    }

   

}
