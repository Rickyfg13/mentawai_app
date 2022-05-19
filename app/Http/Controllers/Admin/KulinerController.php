<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kuliner;
use App\Models\Pulau;
use Illuminate\Support\Facades\DB;


class KulinerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $kuliners = Kuliner::Paginate(3);
        return view ('pages.admin.kuliner.tampil',['kuliners'=>$kuliners]);
    }

    public function tambah()
    {
        $pulau=Pulau::get();
        return view('pages/admin/kuliner/tambah',['pulau'=>$pulau]);
    }

    public function store(Request $request)
    {
         $request->validate([
            'pulau_id'=> 'required',
            'nama_makanan'=> 'required',
            'harga'=>'required',
            'image'=>'image'
        ]);

       
        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
		$file->move($tujuan_upload,$nama_file);
        

        $kuliner = new Kuliner;
        $kuliner->pulau_id=$request->pulau_id;
        $kuliner->nama_makanan=$request->nama_makanan;
        $kuliner->harga=$request->harga;
        $kuliner->image=$nama_file;
        $kuliner->save();

    
         return redirect('/kuliner-admin')->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = Kuliner::where('id',$id)->first();
        $pulau=Pulau::get();
        return view('pages.admin.kuliner.edit',['data'=>$data, 'pulau'=>$pulau]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'pulau_id'=> 'required',
            'nama_makanan'=> 'required',
            'harga'=>'required',
            'image'=>'required|image'
        ]);


         
        $file = $request->file('image');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'storage/post-image';
		$file->move($tujuan_upload,$nama_file);


     
        $data = Kuliner::where('id',$id)->first();
        $data->pulau_id=$request->pulau_id;
        $data->nama_makanan=$request->nama_makanan;
        $data->harga=$request->harga;
        $data->image=$nama_file;
        $data->save();

        // $request->session()->flash('notifikasi');
        // notify()->warning('Data berhasil diubah');
        return redirect('/kuliner-admin');
        
    }


    public function destroy($id)
    {
        Kuliner::where('id',$id)->delete();
        return back();
    }

  

}
