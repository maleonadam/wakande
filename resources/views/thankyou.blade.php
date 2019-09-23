@extends('layouts.master_other')

@section('content')
    <!-- Content -->
    <div class="cart-section container">
        <div>
            <div class="cart-table">
                <div class="row cart-table-row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header bg-success" style="color: white; text-align:center"><h3>Order Confirmation</h3></div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-3" style="text-align: center">
                                        <h4>Thanks for Your Order!</h4>
                                        <p>You'll receive a Confirmation SMS.</p>
                                        <a href="/" class="btn btn-md btn-warning text-uppercase">
                                            Back to Meals
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
