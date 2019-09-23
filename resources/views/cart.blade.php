@extends('layouts.master_other')

@section('content')
    <!--Content-->
    @if(Session::has('cart'))
        <div class="cart-section container">
            <div>
                <h2>Shopping Cart</h2>

                <div class="cart-table">
                    @foreach($meals as $meal)
                        <div class="cart-table-row">
                            <div class="cart-table-row-left">
                                <!-- <a href="#"><img src="/images/meals/me.jpg" alt="item" class="cart-table-img"></a> -->
                                <div class="cart-item-details">
                                    <div class="cart-table-item"><a href="/">{{$meal['item']['meal_name']}}</a></div>
                                    <div class="cart-table-description">{{$meal['item']['meal_description']}}</div>
                                </div>
                            </div>
                            <div class="cart-table-row-right">
                                <div class="cart-table-actions">
                                    <form action="#" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <div class="dropdown" disabled>
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" disabled> Remove
                                            </button>
                                            <ul class="dropdown-menu" disabled>
                                                <li><a href="#">Remove 1 Meal</a></li>
                                                <li><a href="#">Remove All Meals</a></li>
                                            </ul>
                                        </div>
                                        <!-- cart-options -->
                                    </form>
                                </div>
                                <div>
                                    <select class="form-control quantity" disabled>
                                        <option selected="">{{$meal['qty']}}</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div><b>{{$meal['price']}} Ksh</b></div>
                            </div>
                        </div> <!-- end cart-table-row -->
                    @endforeach
                </div> <!-- end cart-table -->

                <div class="cart-totals">
                    <div class="cart-totals-right">
                        <div>
                            <span class="cart-totals-total">Total Price:</span>
                        </div>
                        <div class="cart-totals-subtotal">
                            <span class="cart-totals-total">{{$totalPrice}} Ksh</span>
                        </div>
                    </div>
                </div> <!-- end cart-totals -->

                <div class="cart-buttons">
                    <a href="/" class="button btn btn-warning">Continue Shopping</a>
                    <a href="/checkout" class="button-primary btn btn-success">Proceed to Checkout</a>
                </div>
            </div>

        </div> <!-- end cart-section -->
    @else
    <div class="cart-section container">
            <div>
                <h2>Shopping Cart</h2>

                <div class="cart-table">
                    <div class="cart-table-row">
                        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                            <h2>No Items in Cart!</h2>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @endif
    <!-- // Content -->
@endsection
