<?php

namespace App\Http\Controllers\Employer;

use App\UserDetailModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EmployerPostModel;
use Illuminate\Support\Facades\Auth;

class ShowPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $emp=EmployerPostModel::all();
//        return view('lin.detail_employer',['post_work'=>$emp]);


            $post_work = EmployerPostModel::paginate(5);


            $profile = UserDetailModel::where('user_id', Auth::user()->id)->get();

        return view('lin.detail_employer', ['profile'=>$profile,'post_work'=>$post_work]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $em_post = EmployerPostModel::where('wp_id', $id)->get();
        return view('lin.detail_post', ['detail_post' => $em_post]);
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
