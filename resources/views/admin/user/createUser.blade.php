@extends('layouts.admin')


@section('content')


 <!----cards---->
 <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          <h1 class="mt-5">Create User</h1>

          {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\AdminUsersController@store', 'files' => true]) !!}


          

                <div class="form-group">
                    {{ Form::label('name', 'Name:')}}
                    {{ Form::text('name', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email:')}}
                    {{ Form::email('email', null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('is_active', 'Status:')}}
                    {{ Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], '0',(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('role_id', 'Role:')}}
                    {{ Form::select('role_id', [''=>'--Select--'] + $roles, null,(['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('photo_id', 'Image:')}}
                    {{ Form::file('photo_id', (['class' => 'form-control'])) }}
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password:')}}
                    {{ Form::password('password', (['class' => 'form-control'])) }}
                </div>



                <div class="form-group">
                    {{ Form::submit('Create User', ['class'=>'btn btn-primary'])}}
                </div>
             
          {!! Form::close() !!}


    @include('includes.form_error')
             


        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>


@endsection