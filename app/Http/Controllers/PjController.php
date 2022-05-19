<?php

namespace App\Http\Controllers;

use App\Models\Pjs;
use App\Models\Pulau;
use Illuminate\Http\Request;

class PjController extends Controller
{
    public function index() {
        $pjs = Pjs::all();
        $pulau = Pulau::all();
        return view('pages.admin.pj.tampil',['pjs'=>$pjs, 'pulau'=>$pulau]);
    }

    public function tambah() {
        $pulau = Pulau::all();
        return view('pages.admin.pj.tambah', ['pulau'=>$pulau]);
    }

    public function store(Request $request) {
        $request->validate([
            'pulau_id'=> 'required',
            'nama_pj'=> 'required|max:30', 
            'no_hp'=>'required|max:12',
        ]);
        
        $pjs = new Pjs;
        $pjs->pulau_id = $request->pulau_id;
        $pjs->nama_pj = $request->nama_pj;
        $pjs->no_hp = $request->no_hp;
        $pjs->save();
        return redirect('/pjs');
    }

    public function edit($id) {
        $pjs = Pjs::where('id',$id)->first();
        $pulau = Pulau::all();
        return view('pages.admin.pj.edit', ['pjs'=>$pjs, 'pulau'=>$pulau]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'pulau_id'=> 'required',
            'nama_pj'=> 'required|max:30', 
            'no_hp'=>'required|max:12',
        ]);
        
        $pjs = Pjs::where('id',$id)->first();
        $pjs->pulau_id = $request->pulau_id;
        $pjs->nama_pj = $request->nama_pj;
        $pjs->no_hp = $request->no_hp;
        $pjs->save();
        return redirect('/pjs');
    }

    public function destroy($id) {
        Pjs::where('id',$id)->delete();
        return redirect('/pjs');
    }
}
