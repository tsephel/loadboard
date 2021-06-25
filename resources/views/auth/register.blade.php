@include('includes.header')



@include('includes.nav_alter')



                  <!-- Login Page -->
                  <div class="login-page">
            <div class="login-page-content">
                <h1 class="contact-heading">Sign Up</h1>
                <form class="login-page-form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter name" required autocomplete="name" autofocus>
                        @error('name') 
                        <div class="alert error">
                                    <input type="checkbox" id="alert1"/>
                                <label class="close" title="close" for="alert1">
                                <i class="icon-remove"></i>
                                </label>
                                    <p class="inner">
                                        <strong>Warning!</strong> {{ $message }}
                                    </p>
                                </div>
                        @enderror
               
   
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <div class="alert error">
                                    <input type="checkbox" id="alert1"/>
                                <label class="close" title="close" for="alert1">
                                <i class="icon-remove"></i>
                                </label>
                                    <p class="inner">
                                        <strong>Warning!</strong> {{ $message }}
                                    </p>
                                </div>
                        
                        @enderror
                   


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
                          @error('password') 
                          <!-- <span class="text-danger"> {{$message}}</span> -->
                          <div class="alert error">
                                    <input type="checkbox" id="alert1"/>
                                <label class="close" title="close" for="alert1">
                                <i class="icon-remove"></i>
                                </label>
                                    <p class="inner">
                                        <strong>Warning!</strong> {{ $message }}
                                    </p>
                                </div>
                          @enderror
                      

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm passowrd" required autocomplete="new-password">
                        
                            <select name='role_id' class="form-control">
                            <option value="2">shipper</option>
                            <option value="3">carrier</option>
                                <option value="4">broker</option>
                        
                            </select>

                    <input type="submit" class="form-login-btn" value="Sign Up">
              
                    <span>or</span>
                  
                  <input name='login' type="button" class="form-signup-btn signup" value=" {{ __('Login') }}">
                </form>
            </div>
        </div>
        <!-- End of Login Page -->



        
        @include('includes.footer')






