<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\PicPortFolioModel;
use App\PortFolioModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ManagePortFolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categrory = CategoryModel::all();

        return view('noom/addPortfolio', ['cate' => $categrory]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $port = new PortFolioModel();
        $port->pf_name = $request->pf_name;
        $port->pf_detail = $request->pf_detail;
        $port->c_id = $request->cate;
        $port->user_id = Auth::user()->id;
        $port->save();

        $portdata = PortFolioModel::all()->max('pf_id');
        foreach ($request->image as $value) {
            $pic_port = new PicPortFolioModel();
            $imageName = time() . '.' . $value->getClientOriginalExtension();
            $pic_port->pfpic_name = $imageName;
            $pic_port->pf_id = $portdata;
            $pic_port->save();
            $value->move(public_path('images'), $imageName);
        }

        return redirect('managePortfolio');

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
        echo "edit";
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
        echo "update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "del";
    }
}
