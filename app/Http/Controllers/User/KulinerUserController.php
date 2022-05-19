<?php

namespace App\Http\Controllers\User;

use App\Models\Pulau;
use App\Models\Kuliner;
use App\Models\RumahMakan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KulinerUserController extends Controller
{
    public function index()
    {   
        $pulau=Pulau::all();
        $kuliners = Kuliner::Paginate(9);
        return view('pages.kuliner',[
            'kuliners'=>$kuliners,
            'pulau'=>$pulau,
        ]);
    }

    //menampilkan data kuliner berdasarkan ID dari pulau
    public function pulaukategorikuliner($pulau_id)
    {
        $pulau = Pulau::where('pulau_id',$pulau_id)->first();
        $rmj = RumahMakan::where('pulau_id',$pulau->pulau_id)->paginate(8);
        return view('pages.produk.index',compact('rmj','pulau'));
    }
}
