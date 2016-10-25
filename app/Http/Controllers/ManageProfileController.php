<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\ClassifyModel;
use App\DiscriptionModel;
use App\SkillModel;
use App\UserDetailModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Resource;

class ManageProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categrory = CategoryModel::all();
        $detail = UserDetailModel::where('user_id', Auth::user()->id)->get();
        $classify = ClassifyModel::where('user_id', Auth::user()->id)->get();
        $skill = SkillModel::where('user_id', Auth::user()->id)->get();
        $decrip = DiscriptionModel::where('user_id', Auth::user()->id)->get();

        return view('noom/manageProfile', [
            'cate' => $categrory,
            'detail' => $detail,
            'classify' => $classify,
            'skill' => $skill,
            'decrip' => $decrip
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        $this->validate($request, [
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('picture'), $imageName);

        $user = new UserDetailModel();
        $user->user_id = Auth::user()->id;
        $user->address = $request->address;
        $user->tel = $request->tel;
        $user->facebook = $request->facebook;
        $user->email = $request->email;
        $user->picture = $imageName;
        $user->save();


        $classify = new ClassifyModel();
        $classify->user_id = Auth::user()->id;
        $classify->c_id = $request->cat_id;
        $classify->save();


        foreach ($request->skill as $skill) {
            $skillmodel = new SkillModel();

            $skillmodel->s_detail = $skill;
            $skillmodel->user_id = Auth::user()->id;;
            $skillmodel->save();
        }

        foreach ($request->job as $jop) {
            $discripmodel = new DiscriptionModel();

            $discripmodel->dt_detail = $jop;
            $discripmodel->user_id = Auth::user()->id;
            $discripmodel->save();
        }

        return redirect('profile');
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

        //User Detail
        if ($request->image == null) {
            $update = UserDetailModel::where('id', $id)->update
            (['address' => $request->address,
                'tel' => $request->tel,
                'facebook' => $request->facebook,
                'email' => $request->email,
            ]);
        } else {
            $img = UserDetailModel::where('id', $id)->get();
            foreach ($img as $value) {
                File::delete('picture/' . $value->picture);
                $imageName = rand(1, 999999999) . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('picture'), $imageName);
                $update = UserDetailModel::where('id', $id)->update
                (['address' => $request->address,
                    'tel' => $request->tel,
                    'facebook' => $request->facebook,
                    'email' => $request->email,
                    'picture' => $imageName
                ]);
            }
        }

        //Skill
        $s_id = $request->skill_id;
        $s_detail = $request->skill;
        for ($i = 0; $i < count($s_id); $i++) {
            SkillModel::where('s_id', $s_id[$i])->update([
                's_detail' => $s_detail[$i]
            ]);
        }

        //Decript
        $dt_id = $request->job_id;
        $dt_detail = $request->job;
        for ($i = 0; $i < count($dt_id); $i++) {
            DiscriptionModel::where('dt_id', $dt_id[$i])->update([
                'dt_detail' => $dt_detail[$i]
            ]);
        }

        $cate_id = $request->cat_id;
        $cf_id = $request->class_id;

        ClassifyModel::where('cf_id', $cf_id)->update([
            'c_id' => $cate_id
        ]);

        return redirect('profile');

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
