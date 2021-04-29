<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Role;
use App\Models\Photo;

use App\Http\Requests\UsersRequest;
use App\Http\Requests\UserEditRequest;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::pluck('name', 'id')->all();


        return view('admin.user.createUser', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {

        if(trim($request->password) == ''){
            $input = $request->except('password');
            
        }else{
            $input = $request->all();

             //encrypt password
            $input['password'] = bcrypt($request->password);

            
        }


        if($file = $request->file('photo_id')){

            $name = time(). $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
            

        }

       


        User::create($input);

        Session::flash('create_user', 'The user has been created');

        return redirect('/admin/users');

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

        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id')->all();

        return view('admin.user.editUser', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserEditRequest $request, $id)
    {

        $user = User::findOrFail($id);

        if(trim($request->password) == ''){
            $input = $request->except('password');
            
        }else{
            $input = $request->all();

             //encrypt password
            $input['password'] = bcrypt($request->password);

            
        }


        if($file = $request->file('photo_id')){

            $name = time(). $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        
        }


            $user->update($input);

            Session::flash('update_user', 'The user has been updated');

            return redirect('/admin/users');

            
        }


    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
      $user = User::findOrFail($id);

      if($request->file('photo_id')){

        unlink(public_path() . $user->photo->file);

        $user->delete();
      }

      $user->delete();


        Session::flash('deleted_user', 'The user has been deleted');

       return redirect('/admin/users');
    }
}
