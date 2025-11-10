<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);


        DB::table('customers')->insert([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'password' => md5($request->input('password')), // Mã hóa mật khẩu bằng MD5
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('login.form');
        // dd($request->all());
    }
}

