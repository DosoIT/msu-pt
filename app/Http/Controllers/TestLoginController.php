<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestLoginController extends Controller
{
    public function index()
    {


    }

    public function store(Request $request)
    {
        $user = $request->input('username');
        $pass = $request->input('password');

        if ($user == 'noom') {
            session(['chk' => 'noom']);
            return view('noom.manageProfile');
        } else if ($user == 'lin') {
            session(['chk' => 'lin']);
            return view('lin.detail_employer');
        } else {
            session()->forget('chk');
            return view('layouts.home');
        }

    }
}
