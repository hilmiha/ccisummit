<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaftarController extends Controller
{
    public function index(){
        return view('daftar.index',[
            'title' => 'Buat Akhun Baru | CCI Summit 2022',
        ]);
    }

    public function daftarkan(Request $request){
        $validated_data = $request->validate([
            'nama' => ['required', 'max:255'],
            'nim' => ['required', 'numeric', 'min:25'],
            'nohp' => ['required', 'regex:/^(\+62|62|0)8[1-9][0-9]{6,9}$/'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'sandi' => ['required', 'confirmed', 'min:5', 'max:255']
        ]);

        $validated_data['sandi'] = bcrypt($validated_data['sandi']);
        $validated_data['id'] = 'usr_'.uniqid();
        $validated_data['kode_role'] = 0;
        
        User::create($validated_data);

        // return redirect('/masuk');
        return redirect('/masuk')->with('daftar_berhasil', 'Pendaftaran Kamu berhasil. Sekarang kamu sudah bisa masuk.');
    }
}
