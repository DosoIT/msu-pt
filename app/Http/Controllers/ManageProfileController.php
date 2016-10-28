<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\ClassifyModel;
use App\DiscriptionModel;
use App\LocationModel;
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
        $local = LocationModel::all();
        $detail = UserDetailModel::where('user_id', Auth::user()->id)->get();
        $classify = ClassifyModel::where('user_id', Auth::user()->id)->get();
        $skill = SkillModel::where('user_id', Auth::user()->id)->get();
        $decrip = DiscriptionModel::where('user_id', Auth::user()->id)->get();


        return view('noom/manageProfile', [
            'cate' => $categrory,
            'detail' => $detail,
            'classify' => $classify,
            'skill' => $skill,
            'decrip' => $decrip,
            'local' => $local
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
        $user->lo_id = $request->lo_id;
        $user->tel = $request->tel;
        $user->facebook = $request->facebook;
        $user->picture = $imageName;
        $user->price_st = $request->price_st;
        $user->price_fn = $request->price_F;
        $user->save();

        foreach ($request->cate_id as $cate) {
            $classify = new ClassifyModel();
            $classify->user_id = Auth::user()->id;
            $classify->c_id = $cate;
            $classify->save();
        }


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
                'lo_id'=>$request->lo_id,
                'tel' => $request->tel,
                'facebook' => $request->facebook,
                'price_st' => $request->price_st,
                'price_fn' => $request->price_F,
            ]);
        } else {
            $img = UserDetailModel::where('id', $id)->get();
            foreach ($img as $value) {
                File::delete('picture/' . $value->picture);
                $imageName = rand(1, 999999999) . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('picture'), $imageName);
                $update = UserDetailModel::where('id', $id)->update
                (['address' => $request->address,
                    'lo_id'=>$request->lo_id,
                    'tel' => $request->tel,
                    'facebook' => $request->facebook,
                    'picture' => $imageName,
                    'price_st' => $request->price_st,
                    'price_fn' => $request->price_F,
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


        //classify
        $cate_id = $request->cate_id;
        $cf_id = $request->class_id;
        foreach ($cf_id as $kk) {
            $cf = ClassifyModel::where('cf_id', $kk);
            $cf->delete();
        }
        foreach ($cate_id as $value) {
            $cf = new ClassifyModel();
            $cf->user_id = Auth::user()->id;
            $cf->c_id = $value;

            $cf->save();
        }
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
