<?php

namespace App\Http\Controllers;

use App\Models\Pulau;
use Illuminate\Http\Request;

class PulauController extends Controller
{
    public function index()
    {
        $pulau = Pulau::all();
        return view('pages.pulau',[
            
            'pulau'=>$pulau,
            
        ]);
    }
}
