@include('includes.header')



@include('includes.nav_alter')



                  <!-- Login Page -->
                  <div class="login-page">
            <div class="login-page-content">
                <h1 class="contact-heading">Log In</h1>
                <form class="login-page-form" method="POST" action="{{ route('login') }}">
                        @csrf
   
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                    <input type="submit" class="form-login-btn" value="Log In">

                    @if (Route::has('password.request'))
                                    <a class="form-login-link" href="{{ route('password.request') }}">
                                    Having trouble logging in?
                                    </a>
                                @endif
              
                    <span>or</span>
                  
                  <input name='login' type="button" class="form-signup-btn signup" value=" {{ __('Login') }}">
                </form>
            </div>
        </div>
        <!-- End of Login Page -->

        
        @include('includes.footer')
