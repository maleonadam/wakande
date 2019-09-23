@extends('layouts.master_other')

@section('content')
    <!--Content-->
        <div class="cart-section container">
            <div>
                <h2><b>Checkout</b></h2>
                <h4><b>Total Bill: {{$total}} Ksh</b></h4>

                <div class="cart-table">
                    <div class="cart-table-row">
                        <!-- <div class="row justify-content-center"> -->
                            <div class="col-md-8">
                                <!-- <div class="card"> -->
                                    <div class="card-body">
                                        <form class="form-horizontal" action="/checkout" method="post" id="checkout-form">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="address">Location</label>
                                                <input class="form-control" type="text" id="address" name="address" required>
                                            </div>
                                            <div class="cart-buttons">
                                                <a href="/cart" class="button btn btn-warning">Back to Cart</a>
                                                <button class="button-primary btn btn-success" type="submit">Place Order</button>
                                            </div>
                                        </form>
                                    </div>
                                <!-- </div> -->
                            </div>
                        <!-- </div> -->
                    </div> <!-- end cart-table-row -->
                </div> <!-- end cart-table -->

                <div class="cart-totals">
                    <p>1. Go to M-PESA Menu.</p><br>
                    <p>2. Go to "Lipa na M-PESA".</p><br>
                    <p>3. Go to "Buy Goods and Services".</p><br>
                    <p>4. Enter till no. Use "XXXXXX".</p><br>
                    <p>6. Enter Amount.</p><br>
                    <p>7. Enter your M-PESA Pin and Press "OK".</p><br>
                </div> <!--end cart-totals-->
            </div>

        </div> <!-- end cart-section -->
    <!-- // Content -->
@endsection
