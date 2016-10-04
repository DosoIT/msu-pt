<?php

namespace App\Http\Controllers;

use App\createAccountModel;
use Illuminate\Http\Request;

use App\Http\Requests;





class CreateAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new createAccountModel();

        $user->std_id = '111';
        $user->user_name = $request ->input('user_name');
        $user->password = $request ->input('pass');
        $user->name = $request ->input('name');
        $user->lastname = $request ->input('lastname');
        $user->britday = $request ->input('date');
        $user->sex = $request ->input('sex');
        $user->email = $request ->input('email');
        $user->tel = $request ->input('tel');
        $user->address = $request ->input('address');
        $user->facebook = $request ->input('facebook');
        $user->status = $request ->input('status');
        $user->remember_token = $request ->input('_token');
        $user->save();
        return view('noom.manageProfile');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
