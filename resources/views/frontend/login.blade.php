@extends('layouts.front')


@section('content')

    

                           <!-- Login Page -->
                           <div class="login-page">
            <div class="login-page-content">
                <h1 class="contact-heading">Log In</h1>
                <form class="login-page-form">
                    <input name='username' type="text" class="form-login-input" placeholder="Email or mobile number">
                    <input name='password' type="password" class="form-login-input" placeholder="Enter password" >
                    <input type="submit" class="form-login-btn" value="Log In">
                    <a href="#" class="form-login-link">Having trouble logging in?</a>
                    <span>or</span>
                    <a href="signup.html"><input name='login' type="button" class="form-signup-btn signup" value="Log In"></a>
                </form>
            </div>
        </div>
        <!-- End of Login Page -->

@stop