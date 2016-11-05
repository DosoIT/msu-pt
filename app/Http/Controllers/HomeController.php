<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->status=='ผู้ว่าจ้าง'){
            return redirect('/showpostEmployer');
        }
        else if(Auth::user()->status=='PartTime'){
            return redirect('/manageProfile');
        }else {
            return redirect('/homepage');
        }
    }
}
