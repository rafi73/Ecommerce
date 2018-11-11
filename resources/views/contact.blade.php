@extends('frontend')
@section('content')

@include('partials.breadcrumb', ['pageName' => 'Contact'])

<!-- checkout area start -->
<div class="checkout-area mt-40">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- client address start -->
                <div class="client-address">
                    <!-- section title start -->
                    <div class="section-small-title">
                        <h3>billing details</h3>
                    </div>
                    <!-- section title start -->
                    <!-- client address form -->
                    <div class="client-address-form">
                        <form action="#">
                            <!-- input name -->
                            <input type="text" placeholder="your name here">
                            <!--input email address-->
                            <input type="email" placeholder="your email address">
                            <!-- input phone number -->
                            <input type="text" placeholder="Phone number here">
                            <!-- input company name -->
                            <input type="text" placeholder="company name here">
                            <!-- input country name -->
                            <input type="text" placeholder="country">
                            <!-- input state -->
                            <input type="text" placeholder="state">
                            <!-- input town/city -->
                            <input type="text" placeholder="town/city">
                            <!-- input your details address -->
                            <textarea cols="3" rows="5" placeholder="Your address here"></textarea>
                        </form>
                    </div>
                </div>
                <!-- client address end -->
            </div>
            <div class="col-md-6 sm-mt-40 xs-mt-40">
                <!-- total cart area start -->
                <div class="cart-total">
                    <!-- section title start -->
                    <div class="section-small-title">
                        <h3>your order</h3>
                    </div>
                    <!-- section title end -->
                    <!-- single item -->
                    <p v-bind:key="product.id" v-for="product in cartProducts">
                        @{{product.name}} x @{{product.quantity}}
                        <span class="pull-right">
                            @{{ product.quantity * product.price}}
                        </span>
                    </p>
                    <!-- vat cost -->
                    <p class="no-border">vat <span class="pull-right">$00.00</span> </p>
                    <!-- grand total -->
                    <p class="total-price">grand total <span class="pull-right">@{{cartProducts.reduce((a, b) => +a + +b.price, 0)}}</span> </p>
                </div>
                <!-- total cart area end -->
                <!-- payment method start -->
                <div class="payment-method">
                    <!-- section title start -->
                    <div class="section-small-title">
                        <h3>payment method</h3>
                    </div>
                    <!-- section title end -->
                    <!--payment system start -->
                    <div class="payment-methods">
                        <p>Please select the preferred payment method to use on this order.</p>
                        <div class="payment-method-box pull-left">
                            <select name="transfer">
                                <option value="bank-transfer-1" selected>direct bank transfer</option>
                                <option value="bank-transfer-2">bikash transfer</option>
                                <option value="bank-transfer-3"> datch bangla mobile transfer</option>
                                <option value="bank-transfer-4"> ATM booth transfer</option>
                            </select>
                        </div>
                        <div class="payment-method-box pull-right">
                            <select name="transfer">
                                <option value="bank-transfer" selected>paypal</option>
                                <option value="bank-transfer">visa</option>
                                <option value="bank-transfer"> payoneer</option>
                                <option value="bank-transfer"> american express</option>
                            </select>
                        </div>
                    </div>
                    <!--payment system end -->
                    <!-- terms start -->
                    <div class="terms-text">
                        <div class="checkbox">
                            <input type="checkbox" name="newsletter">I wish to subscribe to the Malias1 newsletter.
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" checked="" name="shipping-address">My delivery and billing addresses
                            are the same.
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" checked="" name="shipping-address">
                            I have read and agree to the <a href="#"> Privacy Policy</a>
                        </div>
                    </div>
                    <!-- terms end -->
                </div>
                <!-- payment method start -->
                <!-- shopping button start -->
                <div class="shopping-button">
                    <a href="#">place order</a>
                </div>
                <!-- shopping button end -->
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->
@endsection