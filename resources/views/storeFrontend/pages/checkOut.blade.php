@extends('storeFrontend.layouts.main')
@section('content')
<section class="cart-total-page spad py-5">
    <div class="container">
        <form action="{{route('payment')}}" class="checkout-form" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <h3>Your Information</h3>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Name*</p>
                        </div>
                        <div class="col-lg-5">
                            <input type="text" placeholder="First Name" name="fname">
                        </div>
                        <div class="col-lg-5">
                            <input type="text" placeholder="Last Name" name="lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Phone*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Street Address*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="add1">
                            <input type="text" name="add2">
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">Country*</p>
                        </div>
                        <div class="col-lg-10">
                            <select class="cart-select country-ind" name="country">
                                <option value="ind">IND</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">City*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="city">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-2">
                            <p class="in-name">ZIP Code*</p>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" name="zip">
                        </div>
                    </div>
                   
                    <!-- <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="diff-addr">
                                <input type="radio" id="one">
                                <label for="one">Ship to different address</label>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-3">
                    <div class="order-table">
                        <div class="cart-item">
                            <span>Product</span>
                            <p class="product-name">Blue Dotted Shirt</p>
                        </div>
                        <div class="cart-item">
                            <span>Price</span>
                            <p>$29</p>
                        </div>
                        <div class="cart-item">
                            <span>Quantity</span>
                            <p>1</p>
                        </div>
                        <div class="cart-item">
                            <span>Shipping</span>
                            <p>$10</p>
                        </div>

                        <div class="cart-total">
                            <span>Total</span>
                            <p>$39</p>
                            <input type="hidden" name="price" value="39">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="payment-method">
                        <h3>Payment</h3>
                        <ul>
                            <li>
                                <label for="one">Paytm <img src="img/paypal.jpg" alt=""></label>
                                <input type="radio" name="payment_type" value="paytm" id="one">
                            </li>
                            <li>
                                <label for="two">Pay when you get the package</label>
                                <input type="radio" name="payment_type" value="cod" id="two">
                            </li>
                        </ul>
                        <button type="submit">Place your order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection