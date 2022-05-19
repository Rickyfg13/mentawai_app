<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Pulau;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::Paginate(3);
        return view ('pages/admin/wisata/tampil',['wisata'=>$wisata]);
    }
    public function tambah()
    {
        $pulau=Pulau::get();
        return view('pages/admin/wisata/tambah',['pulau'=>$pulau]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'pulau_id'=> 'required',
            'nama_wisata'=>'required|max:30',
            'biaya'=>'required',
            'image'=>'image|file|max:1024',
            'fasilitas'=>'required|max:255',
        ]);

        
        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
		$file->move($tujuan_upload,$nama_file);


        $wisata= new Wisata;
        $wisata->pulau_id=$request->pulau_id;
        $wisata->nama_wisata=$request->nama_wisata;
        $wisata->biaya=$request->biaya;
        $wisata->image=$nama_file;
        $wisata->fasilitas=$request->fasilitas;
        $wisata->save();

       
        

        return redirect('/wisata-admin');
    }


    public function edit($id)
    {
        $data = Wisata::where('id',$id)->first();
        $pulau=Pulau::get();
        return view('pages.admin.wisata.edit',['data'=>$data,'pulau'=>$pulau]);
    }
    public function update(Request $request, $id)
    {
        

          
        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
		$file->move($tujuan_upload,$nama_file);
        
        Wisata::where('id',$id)->update([
            'pulau_id'=> $request->pulau_id ,
            'nama_wisata'=>$request->nama_wisata,
            'biaya'=>$request->biaya,
            'fasilitas'=>$request->fasilitas,
            'image'=>$nama_file,
        ]);

        // $request->session()->flash('notifikasi');
        // notify()->warning('Data berhasil diubah');
        return redirect('/wisata-admin');
        
    }


    public function destroy($id)
    
    {
        Wisata::where('id',$id)->delete();
        return back();
    }

    public function show($id)
    {
        $wisata = Wisata::where('id', $id)->first();
        return view('pages.admin.wisata.show',['wisata'=>$wisata]);

    }
}
