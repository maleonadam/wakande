@extends('layouts.master_other')

@section('content')
    <!--Content-->
    <div class="contact">
		<div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>Sign In</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>Already a Member? Welcome Back!</span>
                </div>
                <div class="col-md-8 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h5>Login</h5>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Email</p>
                                <input type="text" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Password</p>
                                <input type="password" id="password" name="password" class="@error('password') is-invalid @enderror" required autocomplete="current-password">
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="grid-contact">
                            <div class="col-md-4 contact-grid">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="send">
                            <input type="submit" value="Login" >
                            <!-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif -->
                            <a class="btn btn-link" href="/register">
                                Don't have an account? Sign Up
                            </a>
                        </div>
                        @include('layouts.errors')
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
	    </div>
	</div>
    <!-- // Content -->

@endsection
