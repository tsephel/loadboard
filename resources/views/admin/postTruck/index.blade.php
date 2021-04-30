@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

  

                <div class="col-12">

                @if(session('deleted_truck'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('deleted_truck') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                @if(session('create_truck'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('create_truck') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                <h3 class="text-muted text-center mt-5 mb-3">Latest Load List</h3>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Ref_no</th>
                        <th scope="col">Truck Owner</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Origin</th>
                       
                        <th scope="col">Destination</th>
                      
                        <th scope="col">Truck Type</th>
                        <th scope="col">Length</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Full/Partial</th>
                        <th scope="col">Available From</th>
                        <th scope="col">Available To</th>
                        <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if($trucks)

                            @foreach($trucks as $truck)

                                <tr>
                                    <td> {{$truck->ref}} </td>
                                    <td> {{$truck->user->name}} </td>
                                    <td> {{$truck->contact}} </td>
                                    <td> {{$truck->origin}} </td>
                                   
                                    <td> {{$truck->destination}} </td>
                                   
                                    <td> {{$truck->type ? $truck->type->name : 'No category'}} </td>
                                    <td> {{$truck->length}} </td>
                                    <td> {{$truck->weight}} </td>
                                    <td> {{$truck->full == 1 ? 'Partial' : 'Full'}} </td>
                                    <td> {{$truck->startDate}} </td>
                                    <td> {{$truck->endDate}} </td>
                                    <td><a href="{{route('truck.edit', $truck->id)}}"><button class="btn btn-primary">Edit</button> </a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'action' =>[ 'App\Http\Controllers\AdminTruckController@destroy', $truck->id], ]) !!}
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
                </div>
          </div>
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection