<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

use App\User;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user',['user' => $user]);
    }

    public function search(Request $request)
    {
        $cari = $request->cari;
        $user = User::where('nama','like', '%'.$cari.'%')->orWhere('email','like', '%'.$cari.'%')->paginate();
        return view('user', ['user'=> $user], ['cek'=> 'user']);
    }

    public function formuliredituser($id)
    {
        $user = User::find($id);
        return view('formuliredituser', ['user' => $user]);

    }
    public function edituser($id, Request $request)
    {
        $user = User::find($id);
       
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect('/user')->with('alert','Berhasil disimpan');
    }

    public function hapususer($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert','Berhasil dihapus');
    }


    public function formuliruser(){
        return view ('formuliruser');
    }

    public function simpanuser(Request $request){
        $user = User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request -> password)
        ]);
        return redirect('/user');
    }
    public function login(){
        return view ('login');
    }

    public function ceklogin(Request $request){
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/login');
        }
        else {
            return redirect('/mahasiswanew');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect ('/login');
    }

   




}
