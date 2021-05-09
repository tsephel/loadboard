<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Requests\TruckCreateRequest;
use App\Models\Trucks;
use App\Models\Type;

class AdminTruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks = Trucks::paginate(10);

       return view('admin.postTruck.index', compact('trucks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::pluck('name', 'id')->all();

        return view('admin.postTruck.addTruck', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TruckCreateRequest $request)
    {   
        //assignig input
        $input = $request->all();

        //getting logged in user
        $user = Auth::user();

        $user->truck;

        $user->trucks()->create($input);

        Session::flash('create_truck', 'Truck has been added');

        return redirect('/admin/truck');
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
        $truck = Trucks::findOrFail($id);

        $types = Type::pluck('name', 'id')->all();

        return view('admin.postTruck.editTruck', compact('truck', 'types'));
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

        Auth::user()->trucks()->whereId($id)->first()->update($input);

        return redirect('/admin/truck');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Trucks::findOrFail($id)->delete();

       Session::flash('deleted_truck', 'Truck has been deleted');

       return redirect('/admin/truck');

    }


    public function searchTruck(Request $request){
        $types = Type::all();

        // Get the search value from the request
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $type = $request->input('type_id');
        $length = $request->input('length');
        $weight = $request->input('weight');
        $full = $request->input('full');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
    
        // Search in the title and body columns from the posts table
        $trucks = Trucks::query()
            ->where('origin', 'LIKE', "%{$origin}%")
            ->Where('destination', 'LIKE', "%{$destination}%")
            ->Where('type_id', 'LIKE', "%{$type}%")
            ->Where('length', 'LIKE', "%{$length}%")
            ->Where('weight', 'LIKE', "%{$weight}%")
            ->Where('full', 'LIKE', "%{$full}%")
            ->Where('startDate', 'LIKE', "%{$startDate}%")
            ->Where('endDate', 'LIKE', "%{$endDate}%")
            ->get();

    
        // Return the search view with the resluts compacted
        return view('admin.postTruck.searchTruck', compact('trucks', 'types'));
    }


}
