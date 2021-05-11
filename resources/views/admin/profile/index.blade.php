@extends('layouts.admin')

@section('content')

   <!----cards---->
   <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          @if(session('verify_user'))
                <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('verify_user') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif



            <div class="row py-md-5 px-md-4 p-0">
                <div class="col-md-12 mx-auto">
                    <!-- Profile widget -->
                    <div class="bg-white shadow rounded overflow-hidden">
                        <div class="px-4 pt-0 pb-4 cover">
                            <div class="media align-items-end profile-head">
                                <div class="profile mr-3">
                                  <img src=" {{Auth::user()->photo ? Auth::user()->photo->file : '/images/default.png'}} ">
                                  <a href="{{route('profile.edit', $user->id)}}" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a>
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

            @if($user->is_active == 1)


            <div class="table-responsive">
                    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                    @if($user->role->name == 'shipper')
                        <h2>Truck <b>List</b></h2>
                    @elseif($user->role->name == 'carrier')
                         <h2>Load <b>List</b></h2>
                    
                    @endif
                    </div>

                  
                    <div class="col-sm-7">
                    @if($user->role->name == 'shipper')

                        <a href="{{route('truck.create')}}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Trucks</span></a>   

                        @elseif($user->role->name == 'carrier') 

                        <a href="{{route('load.create')}}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Loads</span></a>   


                                @endif            
                    </div>
               
                </div>
            </div>
            <table class="table table-striped table-hover">

            @if($trucks && $user->role->name == 'shipper')
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

                      
                  
                </tbody>

                @elseif($loads && $user->role->name == 'carrier')

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
                  
                </tbody>

                @endif
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
    @else

   

    <div class="container py-5 verify">

    <!-- For demo purpose -->
    <header class="text-center text-white">
        <h1 class="display-4">Business Verification</h1>
        <p class="lead mb-0">Please upload your business liscense for verification purpose.</p>

    </header>


    <div class="row py-4">
        <div class="col-lg-6 mx-auto">
        {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\ProfileController@store', 'files' => true]) !!}

        <div class="form-group">
            <input type="name" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Company name">
            <small id="emailHelp" class="form-text text-muted">Enter name of your company</small>
        </div>

            <!-- Upload image input-->
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" name="photo_id" type="file" onchange="readURL(this);" class="form-control border-0">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                </div>
            </div>

            <!-- Uploaded image area-->
            <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary mt-4 p-2">Upload</button>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
</div>

    @endif

             
                    </div>

                </div>
            </div><!----end row---->




        
          </div>
        </div><!---end row--->

      </div><!---end container fluid--->

    </section>


    @endsection


@section('scripts')


<script>
/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>

@stop