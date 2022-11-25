<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
//--resource
class BarangController extends Controller
{
    public function BarangView(){
        //$allDataUser = User::all();
        $data['allDataBarang'] = Barang::all();
        return view('backend.barang.view_barang', $data);
    }

    public function BarangAdd(){
        //$allDataUser = User::all();
        //$data['allDataUser'] = User::all();
        return view('backend.barang.add_barang');
    }

    public function BarangStore(Request $request){

        $validatedData = $request->validate([
            'JenisBarang' => 'required',
            'namaBarang' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $data = new Barang();
        $data->JenisBarang=$request->JenisBarang;
        $data->namaBarang=$request->namaBarang;
        $data->stok=$request->stok;
        $data->harga=$request->harga;
        $data->save();

        return redirect()->route('barang.view')->with('info','Tambah barang berhasil');
    }

    public function BarangEdit($id){
        //dd('berhasil masuk controller Barang edit');
        $editData = Barang::find($id);
        return view('backend.barang.edit_barang', compact('editData'));
    }

    public function BarangUpdate(Request $request, $id){

        $validatedData = $request->validate([
            'JenisBarang' => 'required',
            'namaBarang' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $data = Barang::find($id);
        $data->JenisBarang=$request->JenisBarang;
        $data->namaBarang=$request->namaBarang;
        $data->stok=$request->stok;
        $data->harga=$request->harga;
        $data->save();

        return redirect()->route('barang.view')->with('info','Update user berhasil');
    }
}
