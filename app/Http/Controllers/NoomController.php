<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NoomController extends Controller
{
    function index()
    {
        return view('noom/editPublish');
    }

    function manageProfile()
    {
        return view('noom/manageProfile');
    }

    function addPortfolio()
    {
        return view('noom/addPortfolio');
    }

    function editPortfolio()
    {
        return view('noom/editPortfolio');
    }

    function managePortfolio()
    {
        return view('noom/managePortfolio');
    }
}
