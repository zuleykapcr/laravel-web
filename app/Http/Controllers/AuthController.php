<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // semua data form
        dd($request->all());

        // ambil spesifik input
        $username = $request->input('username');
        $password = $request->input('password');
    }
}
