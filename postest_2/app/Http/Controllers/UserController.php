<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registration( Request $request ){
        $validate = $request->validate([
            'name' => 'required|min:4|max:255',
            'nickname' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255|confirmed',
        ]);       


        // https://www.tutorialspoint.com/how-to-get-the-last-inserted-id-using-laravel-eloquent
        // https://laravel.com/docs/10.x/queries#auto-incrementing-ids

        // Query Builder
        // Create
        $id = DB::table('users')->insertGetId(
            [
                'name' => $request->name, 
                'email' => $request->email, 
                'password' => Hash::make($request->password), 
                'role' => 'participant'
            ]
        );           
    }
}
