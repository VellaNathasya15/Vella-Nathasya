<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prelab13;

class Prelab13Controller extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = PreLab13::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    
    public function search(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = Prelab13::where('nama','like', '%'.$cari.'%')->orWhere('nim','like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa'=> $mahasiswa], ['cek'=> 'mahasiswa']);
    }
    
    public function formulirmahasiswa()
    {
        return view('formulirmahasiswa');
    }

    public function simpanmahasiswa(Request $request){
        $mahasiswa = Prelab13::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);
        return redirect("/mahasiswa")->with('alert','Berhasil disimpan');
    }

    public function editmahasiswa($id)
    {
        $mahasiswa = Prelab13::find($id);
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa($id, Request $request)
    {
        $pakar = implode(',', $request-> pakar);
        $mahasiswa = Prelab13::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->bidang_minat = $request->bidang_minat;
        $mahasiswa->pakar = $pakar;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alert','Berhasil disimpan');
    }

    public function hapusmahasiswa($id){
        $mahasiswa = Prelab13::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alert','Berhasil dihapus');
    }
}
