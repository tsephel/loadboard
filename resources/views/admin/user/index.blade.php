@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

                <div class="col-12">

                <h3 class="text-muted text-center mt-5 mb-3">Latest Load List</h3>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if($users)

                            @foreach($users as $user)

                                <tr>
                                    <td> {{$user->id}} </td>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->role->name}} </td>
                                    <td> {{$user->is_active == 1 ? 'Active' : 'Not Active'}} </td>
                                    <td> {{$user->created_at->diffForHumans()}} </td>
                                    <td> {{$user->updated_at->diffForHumans()}} </td>
                                </tr>
                            @endforeach

                        @endif


                    </tbody>
                    </table>
                </div>
          </div>
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection