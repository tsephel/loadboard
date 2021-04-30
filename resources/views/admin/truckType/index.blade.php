@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          @if(session('deleted_type'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('deleted_type') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                @if(session('create_type'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('create_type') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                <h3 class="text-muted text-center mt-5 mb-3">Truck Types</h3>

                {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\AdminTypeController@store']) !!}

                <div class="form-group">
                    {{ Form::label('name', 'Truck Type:')}}
                    {{ Form::text('name', null,(['class' => 'form-control col-md-8'])) }}
                </div>

                <div class="form-group">
                    {{ Form::submit('Add Truck Type', ['class'=>'btn btn-primary'])}}
                </div>
             
          {!! Form::close() !!}


    @include('includes.form_error')

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if($types)

                            @foreach($types as $type)

                                <tr>
                                    <td> {{$type->id}} </td>
                                    <td> {{$type->name}} </td>                              
                                    <td><a href="{{route('type.edit', $type->id)}}"><button class="btn btn-primary">Edit</button> </a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'action' =>[ 'App\Http\Controllers\AdminTypeController@destroy', $type->id], ]) !!}
                                    <div class="form-group">
                                        {{ Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                    </div>
                                    {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach

                        @endif


                    </tbody>
                    </table>
            
          </div><!--end div col-xl-10-->
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection