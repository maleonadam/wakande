@extends('layouts.master')

@section('content')
    <!-- Content -->
    <div class="content" id="content-down">
        <!-- Menu -->
        <div class="menu">
            <div class="container">
                <div class="menu-top">
                    <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <h3>Menu</h3>
                        <label><i class="glyphicon glyphicon-menu-up"></i></label>
                        <span>Here is our menu.</span>
                    </div>
                    <div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <p>Our menu is made up of healthy, affordable and tasty dishes that are delivered in a timely manner right at your office. Feel free to order from us today and relish the experience.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @foreach($meals->chunk(3) as $mealChunk)
                    <div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        @foreach($mealChunk as $meal)
                            <div class="col-md-4 menu-bottom1">                               
                                <img src="{{ asset('images/meals/'.$meal->image.'.jpg')}}" alt="" class="img-responsive">
                                <div class="captn">
                                    <h4>{{$meal->meal_name}}</h4>
                                    <div class="details">
                                        <p>{{$meal->meal_price}} Ksh</p>
                                        <a href="/add-to-cart/{{$meal->id}}" class="btn btn-md btn-success text-uppercase">Buy</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- // Menu -->
    </div>
    <!-- // Content -->
@endsection
