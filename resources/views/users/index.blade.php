@extends('layouts.admin')

@section('title')

<h4 class="text-light text-uppercase mb-0">Dashboard</h4>

@endsection

@section('content')

<section>
      
      <div class="container-fluid"> 

      <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">


   <div class="row mt-5 pt-3">
      <div class="col-md-6">

        <div class='col-md-12 text-center dash-header'>
            <h1>Trucks Post</h1>
        </div>

            <!-- begin profile-content -->
            <div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">
                  <!-- begin #profile-post tab -->
                  <div class="tab-pane fade active show" id="profile-post">
                     <!-- begin timeline -->
                     <ul class="timeline">

                     @if ($trucks)

                        @foreach ($trucks as $truck)

                        <li>
                           <!-- begin timeline-time -->
                           <div class="timeline-time">
                              <span class="date">{{$truck->created_at->diffForHumans(null, true)}}</span>
                     
                           </div>
                           <!-- end timeline-time -->
                           <!-- begin timeline-icon -->
                           <div class="timeline-icon">
                              <a href="javascript:;">&nbsp;</a>
                           </div>
                           <!-- end timeline-icon -->
                           <!-- begin timeline-body -->
                           <div class="timeline-body">
                              <div class="timeline-header">
                                 <span class="userimage"><img src="{{ $truck->user->photo ? $truck->user->photo->file : '/images/default.png' }}" alt=""></span>
                                 <span class="username"><a href="javascript:;">{{$truck->user->name}}</a> <small></small></span>
                                 <span class="text-muted float-right">{{$truck->user->role->name}}</span>
                              </div>
                              <div class="timeline-content">
                                  <div class="row">
                                      <div class='col-md-12'>
                                        <p><strong>Location:</strong> From {{$truck->origin}} -> To {{$truck->destination}} </p>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class='col-md-12'>
                                      <p><strong>Truck Type:</strong> {{$truck->type->name}} </p>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class='col-md-6'>
                                        <p><strong>Length:</strong> {{$truck->length}}</p>
                                      </div>

                                      <div class='col-md-6'>
                                        <p><strong>From:</strong>{{$truck->startDate}}</p>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class='col-md-6'>
                                      <p><strong>Weight:</strong> {{$truck->weight}} </p>
                                      </div>

                                      <div class='col-md-6'>
                                        <p><strong>To:</strong>{{$truck->endDate}}</p>
                                      </div>
                                  </div>
                                
                                
                              
                                
                              </div>
                       
                              <div class="timeline-footer">
                                 <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-phone fa-fw fa-sm m-r-3"></i>{{$truck->contact}}</a>
                 
                              </div>
                     
                           </div>
                           <!-- end timeline-body -->
                        </li>
                            
                        @endforeach

                     @endif

                     </ul>
                     <!-- end timeline -->
                  </div>
                  <!-- end #profile-post tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
         </div>

         <div class="col-md-6">

         <div class='col-md-12 text-center dash-header'>
            <h1>Loads Post</h1>
        </div>

<!-- begin profile-content -->
<div class="profile-content">
   <!-- begin tab-content -->
   <div class="tab-content p-0">
      <!-- begin #profile-post tab -->
      <div class="tab-pane fade active show" id="profile-post">
         <!-- begin timeline -->
         <ul class="timeline">

         @if ($loads)        

            @foreach ($loads as $load)

            <li>
            <!-- begin timeline-time -->
            <div class="timeline-time">
                <span class="date">{{$load->created_at->diffForHumans(null, true)}}</span>
            </div>
            <!-- end timeline-time -->
            <!-- begin timeline-icon -->
            <div class="timeline-icon">
                <a href="javascript:;">&nbsp;</a>
            </div>
            <!-- end timeline-icon -->
            <!-- begin timeline-body -->
            <div class="timeline-body">
                <div class="timeline-header">
                    <span class="userimage"><img src="{{ $load->user->photo ? $load->user->photo->file : '/images/default.png' }}" alt=""></span>
                    <span class="username"><a href="javascript:;">{{$load->user->name}}</a> <small></small></span>
                    <span class="text-muted float-right">{{$load->user->role->name}}</span>
                </div>
                <div class="timeline-content">
                <div class="row">
                                      <div class='col-md-12'>
                                        <p><strong>Location:</strong> <i class='far fa-circle' style="background-color: transparent;"></i> {{$load->origin}}</p><p> <i class='fa fa-map-marker ml-5'></i> {{$load->destination}} </p> 
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class='col-md-12'>
                                      <p><strong>Truck Type:</strong> {{$load->type->name}} </p>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class='col-md-6'>
                                        <p><strong>Length:</strong> {{$load->length}}</p>
                                      </div>

                                      <div class='col-md-6'>
                                        <p><strong>Pick Up:</strong>{{$load->startDate}}</p>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <div class='col-md-6'>
                                      <p><strong>Weight:</strong> {{$load->weight}} </p>
                                      </div>

                                      <div class='col-md-6'>
                                        <p><strong>Rate per mile:</strong>{{$load->offer}}</p>
                                      </div>
                                  </div>
                </div>

                <div class="timeline-footer">
                    <a href="#" class="m-r-15 text-inverse-lighter"><i class="fa fa-phone fa-fw fa-sm m-r-3"></i>{{$load->contact}}</a>

                </div>

            </div>
            <!-- end timeline-body -->
            </li>
                
            @endforeach


             
         @endif



      
    
         

         </ul>
         <!-- end timeline -->
      </div>
      <!-- end #profile-post tab -->
   </div>
   <!-- end tab-content -->
</div>
<!-- end profile-content -->
</div>


      </div><!----end of row---->
   </div>

          </div>
      </div>

</div>

<section>

    

@endsection


@section('scripts')


<script>

</script>

@stop




