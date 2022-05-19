<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Bookings;
use App\Models\Penginapan;
use App\Models\RumahMakan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.admin.dashbord',
    [
        'bookings'=>Bookings::count(),
        'rumahmakans'=>RumahMakan::count(),
        'penginapans'=>Penginapan::count(),
        'wisata'=>Wisata::count(),
    ]
    );
    }
}
