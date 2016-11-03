<?php

namespace App\Http\Controllers\Employer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EmployerPostModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ManageEmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lin.post_employer');

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
        if ($request->pic == null) {
            $wppost = new EmployerPostModel();
            $wppost->wp_titel = $request->titelpost;
            $wppost->wp_total = $request->total;
            $wppost->wp_detail = $request->detail;
            $wppost->wp_location = $request->location;
            $wppost->wp_description = $request->description;
            $wppost->wp_property = $request->property;
            $wppost->wp_tel = $request->tel;
            $wppost->wp_fb = $request->fb;
            $wppost->wp_email = $request->email;
            $wppost->save();
        } else {
            $newName = time() . '.' . $request->pic->getClientOriginalExtension();
            $request->pic->move(public_path('picture'), $newName);
            $post = new EmployerPostModel();
            $post->wp_pic = $newName;
            $post->wp_titel = $request->titelpost;
            $post->wp_total = $request->total;
            $post->wp_detail = $request->detail;
            $post->wp_location = $request->location;
            $post->wp_description = $request->description;
            $post->wp_property = $request->property;
            $post->wp_tel = $request->tel;
            $post->wp_fb = $request->fb;
            $post->wp_email = $request->email;
            $post->save();
        }
        Session::get('insert');
        return redirect('showpostEmployer')->with('insert', 'บันทึกข้อมูลเรียบร้อย');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = EmployerPostModel::where('wp_id',$id)->get();
        return view('lin.editpost_employer', ['edit_post' => $data]);
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
        if ($request->pic == null) {
            $updates = EmployerPostModel::where('wp_id', $id)->update(['wp_titel' => $request->titel,
                'wp_total' => $request->total,
                'wp_detail' => $request->detail,
                'wp_location' => $request->location,
                'wp_description' => $request->description,
                'wp_property' => $request->property,
                'wp_tel' => $request->tel,
                'wp_fb' => $request->fb,
                'wp_email' => $request->email,
            ]);
        } else {
            $img = EmployerPostModel::where('wp_id', $id)->get();
            foreach ($img as $value) {
                File::delete('picture/' . $value->wp_pic);
                $imageName = rand(1, 999999999) . '.' . $request->pic->getClientOriginalExtension();
                $request->pic->move(public_path('picture'), $imageName);
                $update = EmployerPostModel::where('wp_id', $id)->update([
                    'wp_pic' => $imageName,
                    'wp_titel' => $request->titel,
                    'wp_detail' => $request->detail,
                    'wp_location' => $request->location,
                    'wp_description' => $request->description,
                    'wp_property' => $request->property,
                    'wp_tel' => $request->tel,
                    'wp_fb' => $request->fb,
                    'wp_email' => $request->email,
                ]);
            }
        }
        Session::get('updates');
        return redirect('showpostEmployer')->with('updates', 'อัพเดตข้อมูลเรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = EmployerPostModel::where('wp_id', $id)->get();
        foreach ($img as $value) {
            File::delete('picture/' . $value->wp_pic);
        }
        $del = EmployerPostModel::where('wp_id', $id)->delete(['wp_id' => $id]);
        Session::get('delete');
        return redirect('showpostEmployer')->with('delete', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
