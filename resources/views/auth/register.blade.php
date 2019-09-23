@extends('layouts.master_other')

@section('content')
    <!--Content-->
    <div class="contact">
		<div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>Sign Up</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>New to our Site? Welcome Home!</span>
                </div>
                <div class="col-md-8 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h5>Create Account</h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Name </p>
                                <input id="name" type="text" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Phone number</p>
                                <input id="phone_number" type="text" name="phone_number" value="{{ old('phone_number') }}" class="@error('phone_number') is-invalid @enderror"  required autocomplete="phone_number">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Email</p>
                                <input id="email" type="text" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror"  required autocomplete="email">
                            </div>
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Password</p>
                                <input id="password" type="Password" name="password" class="@error('password') is-invalid @enderror"  required autocomplete="new-password">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Confirm Password</p>
                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="send">
                            <input type="submit" value="Register" >
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
