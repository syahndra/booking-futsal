<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function tambah()
    {
        return view('user.tambah');
    }

    public function proses_tambah(Request $request)
    {
        // @dd($request);
        $request->validate([
            'nama_user' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
            'level' => 'required|in:superadmin,admin',
        ]);

        User::create([
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,            
        ]);

        return redirect('/users');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'nama_user' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'username' => 'required|unique:users,username,' . $user->id,
            'level' => 'required|in:superadmin,admin',
        ]);

        if ($request->filled('password')) {
            $user->update([
                'nama_user' => $request->nama_user,
                'email' => $request->email,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'level' => $request->level,
            ]);
        } else {
            $user->update($request->only(['nama_user', 'email', 'username', 'level']));
        }

        return redirect('/users');
    }

    public function hapus(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/users');
    }
}
