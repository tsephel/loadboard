@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

  

                <div class="col-12">

                @if(session('deleted_load'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('deleted_load') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                @if(session('create_load'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('create_load') }}</strong>
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
                        <h2>Load <b>List</b></h2>
                    </div>

                    <div class="col-sm-7">
                        <a href="{{route('load.create')}}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Loads</span></a>                
                    </div>
                 
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
              
                        <th scope="col">Ref_no</th>
                        <th scope="col">Load Owner</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Origin</th>                      
                        <th scope="col">Destination</th>
                        <th scope="col">Dock Hour</th>
                        <th scope="col">Truck Type</th>
                        <th scope="col">Length</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Full/Partial</th>
                        <th scope="col">Pick Up Date</th>
                        <th scope="col">Rate per mile</th>
                 
                        </tr>
                  
                </thead>
                <tbody>

                @if($loads)

                        @foreach($loads as $load)

                            <tr>
                                <td> {{$load->ref}} </td>
                                <td> {{$load->user->name}} </td>
                                <td> {{$load->contact}} </td>
                                <td> {{$load->origin}} </td>
                            
                                <td> {{$load->destination}} </td>
                                <td> {{$load->dock}} </td>
                            
                                <td> {{$load->type ? $load->type->name : 'No category'}} </td>
                                <td> {{$load->length}} </td>
                                <td> {{$load->weight}} </td>
                                <td> {{$load->full == 1 ? 'Partial' : 'Full'}} </td>
                                <td> {{$load->startDate}} </td>
                                <td> ${{$load->offer}} </td>

                                <td class="action">
                                <a href="{{route('load.edit', $load->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">edit</i></a>
                                
                                <a>{!! Form::open(['method' => 'DELETE', 'action' =>[ 'App\Http\Controllers\AdminLoadController@destroy', $load->id], ]) !!}
                                
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