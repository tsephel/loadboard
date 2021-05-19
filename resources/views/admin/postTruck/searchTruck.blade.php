@extends('layouts.admin')


@section('content')


 <!----cards---->
 <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          <h1 class="mt-5 title">Search Trucks</h1>

          <section class="searchForm">

          <form action="{{ route('searchTruck') }}" method="GET">
              <div class="row">
                <div class="form-group col-lg-3">
                        <label>Origin</label>
                        <input class="form-control" type="text" name="origin" placeholder="City/State/Zones">
                    
                        </div>
               

                <div class="form-group col-lg-3">
                        <label>Destination</label>
                        <input class="form-control" type="text" name="destination" placeholder="City/State/Zones">
                    
                        </div>
                
                <div class="form-group col-lg-2">
                            <label>Truck Type</label>
                                <select class="form-control" name="type_id">
                                    <option value="">Select</option>
                                    @foreach($types as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                  
                            </select>
                </div>
                

                <div class="form-group col-lg-2">
                        <label>Weight</label>
                        <input class="form-control" type="text" name="weight" placeholder="lbs">
                    
                        </div>

                        <div class="form-group col-lg-2">
                        <label>Length</label>
                        <input class="form-control" type="text" name="length" placeholder="feet">
                    
                        </div>
                    
                </div>

             

                <div class="row">

         

                        <div class="form-group col-lg-3">
                            <label>Full/Partial</label>
                                <select class="form-control" name="full">
                                <option value="">Select</option>
                                <option value="full">Full</option>
                                <option value="partial">Partial</option>
                            </select>
                        </div>


                <div class="form-group col-lg-3">
                             <label class="label">Available From</label>
                            <input class="form-control" type="date" name="startDate">
                            
                        </div>
                        
                        <div class="form-group col-lg-3">
                        <label class="label">Available To</label>
                            <input class="form-control" type="date" name="endDate">
                            
                        </div>

                        <div class="form-group col-lg-3">
                        <button type="submit" class="btn btn-primary mt-4 p-2">Search for Trucks</button>
                        </div>

                </div>

        </form>

        </section>


        <div class="table-responsive">
                    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Search Results for <b>Trucks</b></h2>
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

                            
                            </tr>
                        @endforeach

                        @endif
            
                  
                </tbody>
            </table>

         
        </div>
    </div><!---end table responsive div---->

        </div><!---end col-10-->
      </div><!---end row-->
      </div><!---end container fluid--->
 </section>


@endsection