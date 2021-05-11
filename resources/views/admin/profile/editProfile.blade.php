@extends('layouts.admin')


@section('content')


 <!----cards---->
 <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          <h1 class="mt-5">Edit User</h1>


          <div class="row">

            <div class="col-md-3">
            
                <img src="{{$user->photo ? $user->photo->file : '/images/default.png'}}" alt="" class="img-fluid img-rounded">

            </div>

            <div class="col-md-9">

                    {!! Form::model($user, ['method' => 'PATCH', 'action' =>[ 'App\Http\Controllers\ProfileController@update', $user->id], 'files' => true]) !!}


                    

                            <div class="form-group">
                                {{ Form::label('name', 'Name:')}}
                                {{ Form::text('name', null,(['class' => 'form-control'])) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'Email:')}}
                                {{ Form::email('email', null,(['class' => 'form-control'])) }}
                            </div>


                            <div class="form-group">
                                {{ Form::label('photo_id', 'Image:')}}
                                {{ Form::file('photo_id', (['class' => 'form-control'])) }}
                            </div>


                            <div class="form-group">
                                {{ Form::submit('Update User', ['class'=>'btn btn-primary'])}}
                            </div>
                        
                    {!! Form::close() !!}
            </div>

          </div>



          @include('includes.form_error')

             


        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>


@endsection