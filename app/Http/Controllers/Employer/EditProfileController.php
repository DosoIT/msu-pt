<?php

namespace App\Http\Controllers\Employer;

use App\ProfileEmployerModel;
use App\UserDetailModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EmployerDetailModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = UserDetailModel::where('user_id', Auth::user()->id)->get();
        return view('lin.edit_profileEmployer', ['profile' => $profile]);
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
        //insert data
        if ($request->image == null){
            $insert = new UserDetailModel();
            $insert->user_id = $request->user_id;
            $insert->address = $request->address;
            $insert->lo_id = $request->location;
            $insert->tel = $request->tel;
            $insert->facebook = $request->facebook;
            $insert->price_st = 0;
            $insert->price_fn = 0;
            $insert->save();
        }else{
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('picture'), $imageName);
            $insert = new UserDetailModel();
            $insert->user_id = $request->user_id;
            $insert->address = $request->address;
            $insert->lo_id = $request->location;
            $insert->tel = $request->tel;
            $insert->facebook = $request->facebook;
            $insert->price_st = 0;
            $insert->price_fn = 0;
            $insert->picture= $imageName;
            $insert->save();
        }
        return redirect('showpostEmployer')->with('insertprofile', 'บันทึกข้อมูลเรียบร้อยแล้ว'); //ส่งตัวแปรไป ปริ้นค่า
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        if ($request->image == null) {
            $update = UserDetailModel::where('id', $id)->update
            (['address' => $request->address,
                'lo_id'=> $request->location,
                'tel' => $request->tel,
                'facebook' => $request->facebook,

            ]);
        } else {
            $img = UserDetailModel::where('id', $id)->get();
            foreach ($img as $value) {
                File::delete('picture/' . $value->picture);
                $imageName = rand(1, 999999999) . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('picture'), $imageName);
                $update = UserDetailModel::where('id', $id)->update
                (['address' => $request->address,
                    'lo_id'=> $request->location,
                    'tel' => $request->tel,
                    'facebook' => $request->facebook,
                    'picture' => $imageName,
                ]);
            }
        }
        return redirect('showpostEmployer')->with('updateprofile', 'อัพเดตข้อมูลเรียบร้อยแล้ว'); //ส่งตัวแปรไป ปริ้นค่า
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
