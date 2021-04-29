@extends('layouts.admin')

@section('content')

 <!----cards---->
 <section>
      
      <div class="container-fluid">

 

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

  

                <div class="col-12">

                <h3 class="text-muted text-center mt-5 mb-3">Latest Load List</h3>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Ref_no</th>
                        <th scope="col">Truck Owner</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Origin</th>
                        <th scope="col">DH_O</th>
                        <th scope="col">Destination</th>
                        <th scope="col">DH-D</th>
                        <th scope="col">Truck Type</th>
                        <th scope="col">Length</th>
                        <th scope="col">Weight</th>
                        <th scope="col">Full/Partial</th>
                        <th scope="col">Available From</th>
                        <th scope="col">Available To</th>
                        <th scope="col">Comments</th>
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
                                    <td> {{$truck->dh_o}} </td>
                                    <td> {{$truck->destination}} </td>
                                    <td> {{$truck->dh_d}} </td>
                                    <td> {{$truck->truckType_id}} </td>
                                    <td> {{$truck->length}} </td>
                                    <td> {{$truck->weight}} </td>
                                    <td> {{$truck->full == 1 ? 'Full' : 'Partial'}} </td>
                                    <td> {{$truck->startDate}} </td>
                                    <td> {{$truck->endDate}} </td>
                                    <td> {{$truck->comments}} </td>

        
                                  
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