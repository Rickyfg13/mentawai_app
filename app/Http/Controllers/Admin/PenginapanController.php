<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pulau;
use App\Models\Sliders;
use App\Models\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PenginapanController extends Controller
{
    public function index()
    {
        $penginapan = Penginapan::Paginate(3);
        return view ('pages.admin.penginapan.tampil',['penginapan'=>$penginapan]);
    }

    public function tambah()
    {
        $pulau=Pulau::get();
        return view('pages/admin/penginapan/tambah',['pulau'=>$pulau]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'pulau_id'=> 'required',
            'nama_penginapan'=> 'required',
            'fasilitas'=> 'required',
            'harga'=>'required',
            'image'=>'image'
        ]);


        
        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
		$file->move($tujuan_upload,$nama_file);
       
        
        $penginapan = new Penginapan;
        $penginapan->pulau_id=$request->pulau_id;
        $penginapan->nama_penginapan=$request->nama_penginapan;
        $penginapan->fasilitas=$request->fasilitas;
        $penginapan->harga=$request->harga;
        $penginapan->image=$nama_file;
        $penginapan->save();


      
     
        return redirect('/penginapan-admin')->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $penginapan = Penginapan::where('id',$id)->first();
        $pulau=Pulau::get();
        return view('pages.admin.penginapan.edit',['penginapan'=>$penginapan, 'pulau'=>$pulau]);
    }

    public function update(Request $request, $id)
    {

        
        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
		$file->move($tujuan_upload,$nama_file);
       
           
        Penginapan::where('id',$id)->update([
            'pulau_id'=> $request->pulau_id ,
            'nama_penginapan'=>$request->nama_penginapan,
            'fasilitas'=>$request->fasilitas,
            'harga'=>$request->harga,
            'image'=>$nama_file,
        ]);


        // $request->session()->flash('notifikasi');
        // notify()->warning('Data berhasil diubah');
        return redirect('/penginapan-admin');
        
    }

    public function destroy($id)
    {
        Penginapan::where('id',$id)->delete();
        return back();
    }

}
