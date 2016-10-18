<?php

namespace App\Http\Controllers\Employer;

use App\ProfileEmployerModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EmployerDetailModel;

class EditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lin.edit_profileEmployer');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert data

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('picture'), $imageName);
        $imageName = null;
        $profile = new ProfileEmployerModel();
        $profile->em_pic = $imageName;
        $profile->em_name = $request->fullname;
        $profile->em_location = $request->address;
        $profile->em_tel = $request->tel;
        $profile->em_fb = $request->facebook;
        $profile->em_email = $request->email;
        $profile->save();

        Session::get('insert');
        return redirect('showprofileEmployer')->with('insert','บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
