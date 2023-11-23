<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function authenticate(Request $request)
    {
        // $credentials = $req->validate([
        //     'emailAdmin' => ['required'],
        //     'passwordAdmin' => 'required'
        // ]);

        // if (Auth::guard('webAdmin')->attempt($req->only(['emailAdmin', 'passwordAdmin']))) {
        //     // $request->session()->regenerate();
        //     return redirect()->route('/dashboard');
        // }
        // // https://laravel.com/docs/10.x/redirects#redirecting-with-flashed-session-data
        // return redirect()->back()->with('error', 'Email atau password salah');
        $admin = DB::table('admins')->where('email', $request->emailAdmin)->where('password', $request->passwordAdmin)->count();

        if ($admin) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah');
        }
    }


    public function register(Request $request)
    {
        //memvalidasi inputan yang diberikan
        // $validator = Validator::make($request->all(), [
        //     'name' => 'string|max:255',
        //     'email' => 'string|email|max:255|unique:users',
        //     'password' => 'string|confirmed',
        // ]);

        // //jika validasi gagal
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        //membuat user baru
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        //mengarahkan halaman
        return redirect('/registrasi')->with('success', 'Akun berhasil ditambahkan');;
    }


    public function login()
    {
        //
        // Validator::make(request()->all(), [
        //     'email' => [ 'required','email'],
        //     'password' => ['required','password']
        // ])->validate();

        //memeriksa inputan dengan database yang tersimpan
        if (Auth::attempt(request()->only(['email', 'password']))) {
            //mengarahkan halaman
            return redirect('/dashboard');
        }
        return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        //menghapus sesi otentikasi pengguna
        auth()->logout();
        //mengarahkan halaman
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
