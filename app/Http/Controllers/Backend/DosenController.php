<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function DosenAdd(){
        return view('backend.dosen.add_dosen');
    }
    public function DosenView(){
        $data['allDataDosen'] = Dosen::all();
        return view('backend.dosen.view_dosen');
    }

    public function DosenStore(Request $request){

        $validatedData = $request->validate([
            'nip' => 'required',
            'namaDsn' => 'required',
            'alamatDsn' => 'required',
        ]);

        $data = new Dosen();
        $data->nip=$request->nip;
        $data->namaDsn=$request->namaDsn;
        $data->alamatDsn=$request->alamatDsn;
        $data->save();

        return redirect()->route('dosen.view')->with('info','Tambah dosen berhasil');
    }
}
