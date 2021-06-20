@extends('layouts.admin')

@section('title')

<h4 class="text-light text-uppercase mb-0">Users</h4>

@endsection

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

  

                <div class="col-12">

                @if(session('deleted_user'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('deleted_user') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                @if(session('create_user'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('create_user') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                <div class="table-responsive">
                    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="{{route('users.create')}}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>                
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                @if($users)

                            @foreach($users as $user)

                                <tr>
                                    <td> {{$user->id}} </td>
                                    <td> <img class="avatar" src="{{ $user->photo ? $user->photo->file : '/images/default.png' }}">{{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->role->name}} </td>
                                    <td> {{$user->is_active == 1 ? 'Active' : 'Not Active'}} </td>
                                    <!-- <td><span class="status text-success">&bull;</span> Active</td> -->
                                    <td> {{$user->created_at->diffForHumans()}} </td>
                                    <td> {{$user->updated_at->diffForHumans()}} </td>

            

                                    <td class="actions"><a href="{{route('users.edit', $user->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">edit</i></a>

                                   <a> {!! Form::open(['method' => 'DELETE', 'action' =>[ 'App\Http\Controllers\AdminUsersController@destroy', $user->id], ]) !!}
                                   
                                        <!-- {{ Form::submit('Delete', ['class'=>'btn btn-danger'])}} -->
                                        {{ Form::button('<i class="material-icons">close</i>', ['type' => 'submit', 'class' => 'delete-btn'] )  }}
                                        <!-- <a href="#" class="delete" title="Delete" data-toggle="tooltip"><input type='submit'><i class="material-icons" type="submit">close</i></input></a> -->
                                  
                                    {!! Form::close() !!}</a>
                                    </td>
                                </tr>
                            @endforeach

                        @endif
              
              
                 
                
                  
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

                </div>
          </div>
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection

@section('scripts')

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

@stop