<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswanew;

class MahasiswanewController extends Controller
{
    public function mahasiswanew()
    {
        $mahasiswa = Mahasiswanew::all();
        return view('mahasiswanew', ['mahasiswanew' => $mahasiswa]);
    }
    
    public function search(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswanew::where('nama','like', '%'.$cari.'%')->orWhere('nim','like', '%'.$cari.'%')->paginate();
        return view('mahasiswanew', ['mahasiswanew'=> $mahasiswa], ['cek'=> 'mahasiswanew']);
    }
    
    public function formulirmahasiswanew()
    {
        return view('formulirmahasiswanew');
    }

    public function simpanmahasiswanew(Request $request){
        $mahasiswa = Mahasiswanew::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat,
        ]);
        return redirect("/mahasiswanew")->with('alert','Berhasil disimpan');
    }

    public function formulirupdate($id){
        $mahasiswa = Mahasiswanew::find($id);
        return view('formulirupdate', ['mahasiswanew' => $mahasiswa]);
    }

    public function editmahasiswanew($id, Request $request)
    {
        $mahasiswa = Mahasiswanew::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->bidang_minat = $request->bidang_minat;
        $mahasiswa->save();
        return redirect('/mahasiswanew')->with('alert','Berhasil disimpan');
    }

    public function hapusmahasiswanew($id){
        $mahasiswa = Mahasiswanew::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswanew')->with('alert','Berhasil dihapus');
    }
    
}
