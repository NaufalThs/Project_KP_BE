<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class adminController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function verifyLogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'telp' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        // Cari admin berdasarkan username
        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Jika valid, kembalikan respons sukses
            return response()->json(['status' => 'success'], 200);
        } else {
            // Jika tidak valid, kembalikan respons error
            return response()->json(['status' => 'error', 'message' => 'Invalid username or password'], 401);
        }
    }
}
