@include('includes.header')



                @if(session('cancle_subscription'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('cancle_subscription') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

                @if(session('try_subscription'))
                <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('try_subscription') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @endif

@include('includes.nav_alter')

 <!-- Bootstrap Core CSS -->
 

<section class="section-3 container">

    <form action="{{route('subscribe.store')}}" method="POST" id="paymentForm">
    @csrf

    <div class="main-container">
      <h2>Choose your subscription plan</h2>
      <div class="radio-buttons">
      @foreach ($plans as $plan)
        <label class="custom-radio">
          <input type="radio" name="plan" value="{{$plan->slug}}" checked />
          <span class="radio-btn"
            ><i class="fa fa-check"></i>
            <div class="hobbies-icon">
              <i class="fa fa-money"></i>
              <h3>{{$plan->slug}}</h3>
              <h3>${{$plan->price}}</h3>
              <span>per month</span>
                
            </div>
          </span>
        </label>
        @endforeach
 
      </div>
    </div>


    <div class="main-container">
      <h2>Choose your payment method</h2>
      <div class="radio-buttons">
      @foreach ($paymentPlatforms as $paymentPlatform)
        <label class="custom-radio">
          <input type="radio" name="payment_platform" value="{{$paymentPlatform->id}}" checked />
          <span class="radio-btn"
            ><i class="fa fa-check"></i>
            <div class="hobbies-icon">
              <i class="fa fa-paypal"></i>
              <h3>{{$paymentPlatform->name}}</h3>
                
            </div>
          </span>
        </label>
        @endforeach
 
      </div>
    </div>




            <!-- <div class='form-group'>
                <div class="btn-group btn-group-toggle" data-toggle='buttons'>
                    @foreach ($plans as $plan)
                    
                        <label class='btn btn-outline-secondary rounded m-2 p-1 subscription1'>
                            <input type="radio" name="plan" value="{{$plan->slug}}" require>

               
                                <h3>{{$plan->slug}}</h3>
                                <h2>$</h2>
                                <p >{{$plan->price}}</p>
                                <span>per month</span>
                  
                        </label>
                        
                    @endforeach

                </div>
            </div> -->
        <!-- </div>
    </div> -->

    <!-- <div class = 'row mt-3'>
        <div class='col-md-12'>
            <label>
                <h1 class="section-3-heading">Choose your payment method</h1>
            </label>

            <div class='form-group'>
                <div class="btn-group btn-group-toggle" data-toggle='buttons'>
                    @foreach ($paymentPlatforms as $paymentPlatform)

                    <label class='btn btn-outline-secondary rounded m-2 p-1'>

                    <input type="radio" name="payment_platform" value="{{$paymentPlatform->id}}" required> 
                    
                    <img src="images/paypal.jpg" class='img-thumbnail'>

                </label>
                        
                   
                    @endforeach             
					     
					         
					         
					        </div>        
						</div>

                </div>
            </div> -->

        <div class='blue-btn-pay'>
        <button type="submit" id="payButton">Subscribe</button>

        </div>
        

    
    </form>




</div>



</section>



@include('includes.footer')

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


