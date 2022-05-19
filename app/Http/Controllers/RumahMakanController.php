<?php

namespace App\Http\Controllers;

use App\Models\Pulau;
use App\Models\RumahMakan;
use Illuminate\Http\Request;

class RumahMakanController extends Controller
{
    public function index()
    {   
        $rumahmakans = RumahMakan::Paginate(3);
        return view('pages.admin.rumahmakan.tampil',['rumahmakans'=>$rumahmakans]);
    }

    public function create()
    {
        $pulau=Pulau::all();
        return view('pages.admin.rumahmakan.tambah',['pulau'=>$pulau]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'pulau_id'=>'required',
            'nama_rm'=> 'required|max:50',
            'jam_buka'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
        $file->move($tujuan_upload,$nama_file);


        $rumahmakan = new RumahMakan; 
        $rumahmakan->pulau_id = $request->pulau_id;
        $rumahmakan->nama_rm = $request->nama_rm;
        $rumahmakan->jam_buka = $request->jam_buka;
        $rumahmakan->image = $nama_file;
        $rumahmakan->save();
        
        return redirect('/Rms')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
        $rumahmakan = RumahMakan::where('id',$id)->first();
        $pulau=Pulau::all();
        return view('pages.admin.rumahmakan.edit',['rumahmakan'=>$rumahmakan,'pulau'=>$pulau]);
    }

    public function update(Request $request, $id)
    {
      

        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
        $file->move($tujuan_upload,$nama_file);

        RumahMakan::where('id',$id)->update([
            'pulau_id'=> $request->pulau_id ,
            'nama_rm'=>$request->nama_rm,
            'jam_buka'=>$request->jam_buka,
            'image'=>$nama_file,
        ]);



        return redirect('/Rms')->with('sukses','Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        //delete
        RumahMakan::where('id',$id)->delete();
        return redirect('/Rms')->with('sukses','Data Berhasil Dihapus');
    
    }
}
