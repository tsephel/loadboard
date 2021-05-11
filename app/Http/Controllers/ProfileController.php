<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trucks;
use App\Models\Loads;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;
use App\Models\BusinessVerify;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(){

        $user = Auth::user();

        $trucks = Trucks::where('user_id', $user->id)->get();
        $loads = Loads::where('user_id', $user->id)->get();

        $truck = Trucks::count();

        return view('admin.profile.index', compact('user', 'trucks', 'truck', 'loads'));
    }

    public function create()
    {

        return view('admin.profile.index');
    }


    public function store(Request $request)
    {

        $input = $request->all();

        $user = Auth::user();

        //checking if there is a file
        if($file = $request->file('photo_id')){

            //if the file exist than we get original name
            $name = time(). $file->getClientOriginalName();

            //move file to public/image/folder
            $file->move('images', $name);

            //create picture
            $photo = Photo::create(['file' => $name]);

            //insert id to user 
            $input['photo_id'] = $photo->id;
            

        }

        $user->verify()->create($input);


        Session::flash('verify_user', 'The file has been sent for verification.');

        return redirect('/profile');
    }


    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('admin.profile.editProfile', compact('user'));

    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $user = User::findOrFail($id);

        if($file = $request->file('photo_id')){

            $name = time(). $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        
        }


            $user->update($input);

            Session::flash('update_profile', 'The profile has been updated');

            return redirect('/profile');

            
        }

  
}
