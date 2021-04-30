@extends('layouts.admin')


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
                              <h3>100</h3>
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
                              <h3>100</h3>
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
                              <h3>200</h3>
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

          </div>
        </div><!---end row--->

 

    <!---end chart area--->






    <!-----table ---->
    <section>
      <div class="container-fluid">

        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">

            <div class="row text-align-center">
             
            <div class="col-12">

<h3 class="text-muted text-center mb-3">Latest Load List</h3>
<div class="table">
<table class="table table-dark table-hover text-center">
 <thead>
   <tr class="text-muted">
     <th>#</th>
     <th>Origin</th>
     <th>Destination</th>
     <th>Truck Type</th>
     <th>Weight</th>
     <th>Length</th>
     <th>Available From</th>
     <th>Available To</th> 
     <th>Contact</th>                   
   </tr>
 </thead>

 <tbody>
   <tr>
     <th>1</th>
     <td>Nepal</td>
     <td>Bhutan</td>
     <td>Hotshot</td>
     <td>14000</td>
     <td>44</td>
     <td>12/12/2021</td>
     <td>15/12/2021</td>
     <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
   </tr>

   <tr>
     <th>2</th>
     <td>Nepal</td>
     <td>Bhutan</td>
     <td>Hotshot</td>
     <td>14000</td>
     <td>44</td>
     <td>12/12/2021</td>
     <td>15/12/2021</td>
     <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
   </tr>

   <tr>
     <th>3</th>
     <td>Nepal</td>
     <td>Bhutan</td>
     <td>Hotshot</td>
     <td>14000</td>
     <td>44</td>
     <td>12/12/2021</td>
     <td>15/12/2021</td>
     <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
   </tr>

   <tr>
     <th>4</th>
     <td>Nepal</td>
     <td>Bhutan</td>
     <td>Hotshot</td>
     <td>14000</td>
     <td>44</td>
     <td>12/12/2021</td>
     <td>15/12/2021</td>
     <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
   </tr>
 </tbody>
 
</table>
</div>



                <!---pagination---->
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&laquo</span>
                      </a>
                    </li>

                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>

                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>

                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>

                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&raquo</span>
                      </a>
                    </li>

                  </ul>
                </nav>

                <!----end pagination --->

              </div>

              <div class="col-12">

                 <h3 class="text-muted text-center mb-3">Latest Load List</h3>
                 <div class="table">
                 <table class="table table-dark table-hover text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Origin</th>
                      <th>Destination</th>
                      <th>Truck Type</th>
                      <th>Weight</th>
                      <th>Length</th>
                      <th>Available From</th>
                      <th>Available To</th> 
                      <th>Contact</th>                   
                    </tr>
                  </thead>

                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>Nepal</td>
                      <td>Bhutan</td>
                      <td>Hotshot</td>
                      <td>14000</td>
                      <td>44</td>
                      <td>12/12/2021</td>
                      <td>15/12/2021</td>
                      <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
                    </tr>

                    <tr>
                      <th>2</th>
                      <td>Nepal</td>
                      <td>Bhutan</td>
                      <td>Hotshot</td>
                      <td>14000</td>
                      <td>44</td>
                      <td>12/12/2021</td>
                      <td>15/12/2021</td>
                      <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
                    </tr>

                    <tr>
                      <th>3</th>
                      <td>Nepal</td>
                      <td>Bhutan</td>
                      <td>Hotshot</td>
                      <td>14000</td>
                      <td>44</td>
                      <td>12/12/2021</td>
                      <td>15/12/2021</td>
                      <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
                    </tr>

                    <tr>
                      <th>4</th>
                      <td>Nepal</td>
                      <td>Bhutan</td>
                      <td>Hotshot</td>
                      <td>14000</td>
                      <td>44</td>
                      <td>12/12/2021</td>
                      <td>15/12/2021</td>
                      <td><button type="button" class="btn btn-primary btn-sm">Call</button></td>
                    </tr>
                  </tbody>
                  
                </table>
              </div>

                    <!---pagination---->
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&laquo</span>
                      </a>
                    </li>

                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>

                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>

                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>

                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&raquo</span>
                      </a>
                    </li>

                  </ul>
                </nav>

                <!----end pagination --->



              </div>
            </div><!---end row--->

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
        labels: ['Truck', 'Type'],
        datasets: [{
            label: 'Data Overview',
            data: [ {{$truck}}, {{$type}}],
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




