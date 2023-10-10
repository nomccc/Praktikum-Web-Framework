<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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


    public function index()
    {
        //
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
