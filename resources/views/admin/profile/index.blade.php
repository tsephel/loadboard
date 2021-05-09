@extends('layouts.admin')

@section('content')

   <!----cards---->
   <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">



            <div class="row py-md-5 px-md-4 p-0">
                <div class="col-md-12 mx-auto">
                    <!-- Profile widget -->
                    <div class="bg-white shadow rounded overflow-hidden">
                        <div class="px-4 pt-0 pb-4 cover">
                            <div class="media align-items-end profile-head">
                                <div class="profile mr-3">
                                  <img src=" {{Auth::user()->photo ? Auth::user()->photo->file : '/images/default.png'}} ">
                                  <a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a>
                                </div>
                                <div class="media-body mb-5 text-white">
                                    <h4 class="mt-0 mb-0"> {{$user->name}} </h4>
                                    <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>Nepal</p>
                                </div>
                            </div>
                        </div>


                        <div class="bg-light p-4 d-flex justify-content-end text-center">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <small class="font-weight-bold mb-0 d-block"> <i class="fas fa-phone mr-1"></i>Contact</small><h5 class="text-muted">980193833</h5>
                                </li>

                                <!-- <li class="list-inline-item mr-md-5">
                                    <small class="font-weight-bold mb-0 d-block"> <i class="fas fa-mail mr-1"></i>Email</small><h5 class="text-muted">ngawang@gmail.com</h5>
                                </li> -->

                                <li class="list-inline-item">
                                    <h5 class="font-weight-bold mb-0 d-block">{{$truck}}</h5><small class="text-muted"> <i class="fas fa-truck mr-1"></i>Trucks Added</small>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="px-4 py-3">
                            <h5 class="mb-0">About</h5>
                            <div class="p-4 rounded shadow-sm bg-light">
                                <p class="font-italic mb-0"> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


</p>
                                
                            </div>
                        </div>

                        
            <div class="table-responsive">
                    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Truck <b>Type</b></h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="{{route('truck.create')}}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>                
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
            </div><!----end row---->




        
          </div>
        </div><!---end row--->

      </div><!---end container fluid--->

    </section>


@stop