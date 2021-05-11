@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

  

                <div class="col-12">

                @if(session('deleted_verify'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('deleted_verify') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                @if(session('update_verify'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('update_verify') }}</strong>
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
                        <h2>Business <b>Verification</b></h2>
                    </div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
              
                        <th scope="col">Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Company Liscense</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                  
                </thead>
                <tbody>

                @if($verify)

                        @foreach($verify as $v)

                            <tr>
                           
                                <td><a href="{{route('users.edit', $v->user->id)}}"> {{$v->user->name}} </a></td>
                                <td> {{$v->name}} </td>
                                <td> <img height="100px" src="{{ $v->photo ? $v->photo->file : '/images/default.png' }}"></td>
                                <td> @if($v->status == 0) 
                                {!! Form::open(['method' => 'PATCH', 'action' =>[ 'App\Http\Controllers\VerifyController@destroy', $v->id], ]) !!}
                                            
                                            <input type="hidden" name='status' value='1'>

                                            <div class="form-group">
                                                {{ Form::submit('Un-Approved', ['class'=>'btn btn-danger'])}}
                                            </div>

                                        {!! Form::close() !!}

                                    @else
                                    {!! Form::open(['method' => 'PATCH', 'action' =>[ 'App\Http\Controllers\VerifyController@destroy', $v->id], ]) !!}
                                            
                                                <input type="hidden" name='status' value='0'>

                                                <div class="form-group">
                                                    {{ Form::submit('Approved', ['class'=>'btn btn-success'])}}
                                                </div>

                                        {!! Form::close() !!}
                                    @endif
                                </td>

                            
                                <td>
                                
                                <a>{!! Form::open(['method' => 'DELETE', 'action' =>[ 'App\Http\Controllers\VerifyController@destroy', $v->id], ]) !!}
                                
                                {{ Form::button('<i class="material-icons">close</i>', ['type' => 'submit', 'class' => 'delete-btn'] )  }}
                               
                                {!! Form::close() !!}</a>
                                </td>
                              


                            
                            </tr>
                        @endforeach

                        @endif
            
                  
                </tbody>
            </table>
         
        </div>
    </div><!---end table responsive div---->


                </div>
          </div>
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection