<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\ClassifyModel;
use App\DiscriptionModel;
use App\PortFolioModel;
use App\SkillModel;
use App\UserDetailModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function index()
    {
        $userDatail = UserDetailModel::where('user_id', Auth::user()->id)->get();

        $skill = SkillModel::where('user_id', Auth::user()->id)->get();
        $discript = DiscriptionModel::where('user_id', Auth::user()->id)->get();

        $classify = ClassifyModel::where('user_id', Auth::user()->id)->get();
        $cate = CategoryModel::all();


        return view('noom/profile', [
            'userDetail' => $userDatail,
            'skill' => $skill,
            'discript' => $discript,
            'cate' => $cate,
            'classify' => $classify
        ]);
    }

    /**
     * @return string
     */
    public function showmanagePF()
    {
        $port = PortFolioModel::where('user_id', Auth::user()->id)->get();


       return view('noom.managePortfolio',['port'=>$port]);
    }
}
