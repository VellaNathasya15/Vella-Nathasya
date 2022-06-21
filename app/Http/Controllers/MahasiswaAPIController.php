<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswanew;

class MahasiswaAPIController extends Controller
{
    public function all(){
        $mahasiswa = Mahasiswanew::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil ditampilkan',
            'data'    => $mahasiswa
        ], 200);
    }

    public function create(Request $request){
        $mahasiswa = Mahasiswanew::create([
            'id' => $request->id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat,

        ]);

        if ($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil disimpan',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal disimpan',
            ], 401);    
            
        }
    }
    public function update(Request $request) {
        $mahasiswa = Mahasiswanew::whereId($request->id)->update([
            'id' => $request->id,
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil diubah',
            ], 200);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal disimpan',
            ], 400);
        }
    }

    public function delete($id){
        $mahasiswa = Mahasiswanew::find($id);
        $mahasiswa->delete();

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil dihapus',
            ], 200);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal dihapus',
            ], 400);
        }
    }
}
