<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ForgotPasswordEmail;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function index()
    {
        // kita ambil data user lalu simpan pada variable $user
        $user = Auth::user();
        // @dd($user);
        // kondisi jika user nya ada
        if ($user) {
            // jika user nya memiliki level admin
            if ($user->level == 'superadmin') {
                // arahkan ke halaman admin ya
                return redirect()->intended('dashboard');
            }
            // jika user nya memiliki level user
            else if ($user->level == 'admin') {
                // arahkan ke halaman user
                return redirect()->intended('dashboard');
            }
        }
        return view('auth.login');
    }
    //
    public function proses_login(Request $request)
    {
        // dd($request); //mengambil parameter data yang masuk
        // echo $request->username; 
        // kita buat validasi pada saat tombol login di klik
        // validas nya username & password wajib di isi
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        // ambil data request username & password saja
        $credential = $request->only('username', 'password');
        // cek jika data username dan password valid (sesuai) dengan data
        if (Auth::attempt($credential)) {
            // kalau berhasil simpan data user ya di variabel $user
            $user = Auth::user();
            // cek lagi jika level user admin maka arahkan ke halaman admin
            if ($user->level == 'superadmin') {
                return redirect()->intended('dashboard');
            }
            // tapi jika level user nya user biasa maka arahkan ke halaman user
            else if ($user->level == 'admin') {
                return redirect()->intended('dashboard');
            }
            // jika belum ada role maka ke halaman /
            return redirect()->intended('/');
        }
        // jika ga ada data user yang valid maka kembalikan lagi ke halaman login
        // pastikan kirim pesan error juga kalau login gagal ya
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Username atau password salah']);
    }
    public function logout(Request $request)
    {
        // logout itu harus menghapus session nya
        $request->session()->flush();
        // jalan kan juga fungsi logout pada auth
        Auth::logout();
        // kembali kan ke halaman login
        return Redirect('login');
    }

}
