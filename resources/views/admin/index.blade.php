@extends('layouts.admin')

@section('title')

<h4 class="text-light text-uppercase mb-0">Dashboard</h4>

@endsection

@section('content')

  <!----cards---->
    <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

              <div class="row pt-md-5 mt-md-3 mb-5">
                  <div class="col-xl-4 col-sm-6 p-2">

                      <div class="card">

                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <i class="fas fa-truck fa-3x text-warning"></i>
                            <div class="text-right text-secondry">
                              <h5>Trucks</h5>
                              <h3>{{$truck}}</h3>
                            </div>
                          </div>
                        </div><!---end card body--->

                        <div class="card-footer text-secondry">
                          <i class="fas fa-sync"></i>
                          <span>Refresh</span>
                          
                        </div>

                      </div><!--end card--->


                  </div><!---end col---->

                  <div class="col-xl-4 col-sm-6 p-2">

                      <div class="card">

                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <i class="fas fa-user fa-3x text-warning"></i>
                            <div class="text-right text-secondry">
                              <h5>Users</h5>
                              <h3>{{$user}}</h3>
                            </div>
                          </div>
                        </div><!---end card body--->

                        <div class="card-footer text-secondry">
                          <i class="fas fa-sync"></i>
                          <span>Refresh</span>
                          
                        </div>

                      </div><!--end card--->


                  </div><!---end col---->

                  <div class="col-xl-4 col-sm-6 p-2">


                       <div class="card">

                        <div class="card-body">
                          <div class="d-flex justify-content-between">
                            <i class="fas fa-box fa-3x text-warning"></i>
                            <div class="text-right text-secondry">
                              <h5>Loads</h5>
                              <h3>{{$load}}</h3>
                            </div>
                          </div>
                        </div><!---end card body--->

                        <div class="card-footer text-secondry">
                          <i class="fas fa-sync"></i>
                          <span>Refresh</span>
                          
                        </div>

                      </div><!--end card--->
                    
                  </div><!---end col--->

              </div><!---end row--->

          </div>
        </div><!---end row--->

      </div><!---end container fluid--->

    </section>

    <!---end cards--->

    <!-----Chart Area---->
    <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

          <canvas id="myChart"></canvas>

              </div><!---end row--->

       
        </div><!---end row--->

 

    <!---end chart area--->






    <!-----table ---->
    <section>
      <div class="container-fluid">

        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

            <div class="table-responsive">
                    <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Truck <b>List</b></h2>
                        </div>
                        <!-- <div class="col-sm-7">
                            <a href="{{route('truck.create')}}" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>                
                        </div> -->
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

    <div class="table-responsive">
                    <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Load <b>List</b></h2>
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




          </div><!---end col-->
        </div><!---end row-->

      </div><!---end container-fluid-->
    </section>

    <!----end table---->

    

@endsection


@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.0/dist/chart.min.js"></script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Trucks', 'Loads', 'Users'],
        datasets: [{
            label: 'Number of data',
            data: [4, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
    

        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

@stop




