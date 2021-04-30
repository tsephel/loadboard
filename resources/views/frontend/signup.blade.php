@extends('layouts.front')


@section('content')

    
                    <!-- Signup Page -->
                    <div class="login-page">
            <div class="login-page-content">
   
                <h1 class="contact-heading">Sign Up</h1>
                <form class="login-page-form" method="post">
                    <input type="text" class="form-login-input" placeholder="Enter username" name='username'>
  
                    <input type="password" class="form-login-input" name="password" placeholder="Enter Password" >
                    <input type="password" class="form-login-input" name="cpassword" placeholder="Confirm password" >

                    <input type="submit" class="form-login-btn" value="Sign Up">
                    <a href="#" class="form-login-link">Having trouble logging in?</a>
                    <span>or</span>
                    <a href="login.html"><input type="button" class="form-signup-btn signup" value="Log In"></a>
                </form>
            </div>
        </div>
        <!-- End of Signup Page -->
@stop