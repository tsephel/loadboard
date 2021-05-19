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



            <div class="table-responsive">
                    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Truck <b>List</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="{{route('truck.create')}}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Loads</span></a>                
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
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
                        <th scope="col"> Rate Per Mile</th>
                       
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
                                <td> {{$truck->offer}} </td>
                                <td> {{$truck->startDate}} </td>
                                <td> {{$truck->endDate}} </td>
                                <td class="action">
                                <a href="{{route('truck.edit', $truck->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">edit</i></a>
                                
                                <a>{!! Form::open(['method' => 'DELETE', 'action' =>[ 'App\Http\Controllers\AdminTruckController@destroy', $truck->id], ]) !!}
                                
                                {{ Form::button('<i class="material-icons">close</i>', ['type' => 'submit', 'class' => 'delete-btn'] )  }}
                               
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
    </div><!---end table responsive div---->


                </div>
          </div>
        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>

@endsection