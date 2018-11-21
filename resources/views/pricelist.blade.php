@extends('frontend')
@section('content')

@include('partials.breadcrumb', ['pageName' => 'Download Pricelist'])

<!-- authentication content start -->
<div class="mt-40">
    <div class="container">
        <div v-if="!dealerAuth" class="row">
            <div class="col-md-6">
                <div class="authentication">
                    <div class="border-title">
                        <h3>create an account</h3>
                    </div>
                    <p>Please enter your email address to open an account</p>
                    <label for="name" class="mt-10">Name</label>
                    <input type="text" v-model="register.name" placeholder="name"  name="name">
                    <label for="email" class="mt-10">Email </label>
                    <input type="email" v-model="register.email" placeholder="email address"  name="email">
                    <label for="password">Password</label>
                    <input type="password" v-model="register.password" name="password" placeholder="password" >
                    <label for="password">Confirm Password</label>
                    <input type="password" v-model="register.confirmPassword" name="password" placeholder="password">
                    <button type="submit" @click.prevent="dealerRegistration()">create an account</button>
                </div>
            </div>
            <div class="col-md-6 sm-mt-40 xs-mt-40">
                <div class="authentication">
                    <div class="border-title">
                        <h3>already registered?</h3>
                    </div>
                    <label for="email">Email address</label>
                    <input type="email" placeholder="email address" v-model="login.email"  name="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" v-model="login.password" placeholder="password" >
                    <button type="submit" @click.prevent="dealerLogin()">sign in</button>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="authentication">
                <div class="border-title">
                    <h3>Download Price List</h3>
                </div>
                <button type="submit" @click.prevent="downloadPriceList()">Download</button>
            </div>
        </div>
    </div>
</div>
<!-- authentication content end -->
@endsection