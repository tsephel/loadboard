<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/admin.css')}}">


    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-md navbar-light">
        
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!----side bar --->
              <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                  <a class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 botton-border" href="../index.php">Load Max</a>

                  <div class="bottom-border pb-3 ">
                    <img src="images/person-1.jpg" width="50" class="rounded-circle mr-3">
                    <a href="" class="text-white">{{ Auth::user()->name }}</a>  
                  </div>
                    <ul class="navbar-nav flex-column mt-4">
                    
                      <li class="nav-item"><a href="/admin" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3 "></i>Dashboard</a></li>

                      <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3 "></i>Users</a></li>

                      <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3 "></i>Create User</a></li>

                      <li class="nav-item"><a href="profile.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3 "></i>Profile</a></li>

                      <li class="nav-item"><a href="{{route('truck.index')}}" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3 "></i>Truck List</a></li>

                      <li class="nav-item"><a href="{{route('truck.create')}}" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-plus text-light fa-lg mr-3 "></i>Post Trucks</a></li>

                      <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-search text-light fa-lg mr-3 "></i>Search Loads</a></li>

                      <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-plus text-light fa-lg mr-3 "></i>Post Loads</a></li>

                      <li class="nav-item"><a href="truck.php?source=searchtruck" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-search text-light fa-lg mr-3 "></i>Search Trucks</a></li>

                  </ul>

              </div>
            <!----end sidebar -->

            <!----top navbar --->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">

                <div class="row align-item-center">
                  
                  <div class="col-md-8">
                    <h4 class="text-light text-uppercase mb-0">Post Loads</h4>
                  </div>


                  <div class="col-md-3">
                    <ul class="navbar-nav">                    

                      <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#signout"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                    </ul>

                  </div>

                </div>
                
              </div>
            <!----end top nav bar -->

          </div>
        </div>
       
      </div>
  </nav>
    <!----end nav bar --->

    <!---model --->
    <div class="modal" id="signout">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal--title">You sure you wanna leave</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div><!---header end--->

          <div class="modal-body">
            Please logout to leave..  
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
          </div>

        </div><!--content end-->
      </div><!---dialog end-->
    </div><!---modal class end--->

    <!---end model -->

    <!----cards---->
    <section>
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-12 col-lg-9 col-md-8 ml-auto">

          @yield('content')

          </div>
        </div><!---end row--->

      </div><!---end container fluid--->

    </section>







<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('js/app.js')}}"></script>



@yield('footer')





</body>

</html>
