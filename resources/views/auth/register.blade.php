@include('includes.header')



@include('includes.nav_alter')



                  <!-- Login Page -->
                  <div class="login-page">
            <div class="login-page-content">
                <h1 class="contact-heading">Log In</h1>
                <form class="login-page-form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter name" required autocomplete="name" autofocus>
                        @error('name') <span class="text-danger"> {{$message}}</span>@enderror
               
   
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email') <span class="text-danger"> {{$message}}</span>@enderror
                   


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">
                          @error('password') <span class="text-danger"> {{$message}}</span>@enderror
                      

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm passowrd" required autocomplete="new-password">
                        
                            <select name='role_id' class="form-control">
                            <option value="2">shipper</option>
                            <option value="3">carrier</option>
                                <option value="4">broker</option>
                        
                            </select>

                    <input type="submit" class="form-login-btn" value="Log In">
              
                    <span>or</span>
                  
                  <input name='login' type="button" class="form-signup-btn signup" value=" {{ __('Login') }}">
                </form>
            </div>
        </div>
        <!-- End of Login Page -->



        
        @include('includes.footer')






