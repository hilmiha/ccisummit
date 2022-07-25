<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function index(){
        return view('masuk.index',[
            'title' => 'Masuk | CCI Summit 2022',
        ]);
    }

    public function masuk(Request $request){
        $credential = $request->validate([
            'email' => ['required', 'email:dns'],
            'sandi' => ['required', 'min:5', 'max:255']
        ]);

        if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['sandi']])) {
            $request->session()->regenerate();

            return redirect()->intended('beranda');
        }

        return back()->with('masuk_gagal', 'Login failed!');
    }

    public function keluar(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/beranda');

    }
}
