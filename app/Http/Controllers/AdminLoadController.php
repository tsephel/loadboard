<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\LoadCreateRequest;
use Illuminate\Http\Request;
use App\Models\Loads;
use App\Models\Type;

class AdminLoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loads = Loads::all();

        return view('admin.postLoad.index', compact('loads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::pluck('name', 'id')->all();

        return view('admin.postLoad.addLoad', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //assignig input
        $input = $request->all();

        //getting logged in user
        $user = Auth::user();

        $user->truck;

        $user->loads()->create($input);

        Session::flash('create_load', 'Truck has been added');

        return redirect('/admin/load');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $load = Loads::findOrFail($id);

        $types = Type::pluck('name', 'id')->all();

        return view('admin.postLoad.editLoad', compact('load', 'types'));
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
        $input = $request->all();

        Auth::user()->loads()->whereId($id)->first()->update($input);

        return redirect('/admin/load');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Loads::findOrFail($id)->delete();

       Session::flash('deleted_load', 'Truck has been deleted');

       return redirect('/admin/load');
    }
}
