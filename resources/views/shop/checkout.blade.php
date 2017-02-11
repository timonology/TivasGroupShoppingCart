@extends('layouts.master')

@section('title')
    Check Out
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total: {{ $total }}</h4>

            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="cardname">Card Name</label>
                            <input type="text" id="cardname" name="cardname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="cardnumber">Card Number</label>
                            <input type="text" id="cardnumber" name="cardnumber" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="exmonth">Expiration Month</label>
                            <input type="text" id="exmonth" name="exmonth" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <input type="text" id="cvc" name="cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button class="btn btn-primary" type="submit">Buy Now</button>
            </form>
        </div>
    </div>
@endsection
