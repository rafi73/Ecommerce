@extends('frontend')
@section('content')

@include('partials.breadcrumb', ['pageName' => 'Quotation'])

<!-- authentication content start -->
<div class="mt-40">
    <div class="container">
        <div class="row">
            <div class="col-md-10  col-sm-offset-1">
                <div class="authentication">
                    <div class="border-title">
                        <h3>REQUEST FOR QUOTE</h3>
                    </div>
                    <label for="name" class="mt-10">Name</label>
                    <input type="text" v-model="quoteRequest.name"  name="name">

                    <label for="email" class="mt-10">Email </label>
                    <input type="email" v-model="quoteRequest.email"   name="email">

                    <label for="company_name" class="mt-10">Company Name</label>
                    <input type="text" v-model="quoteRequest.company_name"  name="company_name">

                    <label for="company_reg_number" class="mt-10">Company Registration No.</label>
                    <input type="text" v-model="quoteRequest.company_reg_number"   name="company_reg_number">

                    <label for="company_address" class="mt-10">Company Address </label>
                    <input type="text" v-model="quoteRequest.company_address"   name="company_address">

                    <label for="contact" class="mt-10">Contact Number</label>
                    <input type="text" v-model="quoteRequest.contact"  name="contact">

                    <label for="additional_message" class="mt-10">Additional Information / Message</label>
                    <textarea class="quote" rows="9" name="additional_message"></textarea>

                    <button type="submit" @click.prevent="sendQuoteRequest(quoteRequest)">Request</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- authentication content end -->
@endsection