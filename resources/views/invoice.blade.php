@extends('frontend')
@section('content')

@include('partials.breadcrumb', ['pageName' => 'Invoice'])

<!-- checkout area start -->
<div class="invoice container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <a href="{{ URL::route('home') }}"> <img src="{{asset('themes/frontend/img/logo.jpg')}}" alt=""></a>
                        </div>

                        <div class="col-md-6 text-right">
                        <p class="font-weight-bold mb-1">Invoice #@{{order.id}}</p>
                            <p class="text-muted">@{{order.created_at}}</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1">@{{order.customer.name}}</p>
                            <p>Acme Inc</p>
                            <p class="mb-1">Berlin, Germany</p>
                            <p class="mb-1">6781 45P</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                            <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr >
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="orderDetail in order.orderDetails">
                                        <td>@{{orderDetail.product_id}}</td>
                                        <td>@{{orderDetail.product.name}}</td>
                                        <td>@{{orderDetail.product.description}}</td>
                                        <td>@{{orderDetail.quantity}}</td>
                                        <td>@{{orderDetail.product.price}}</td>
                                        <td>@{{parseFloat(orderDetail.product.price * orderDetail.quantity).toFixed(2)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                        <div class="h2 font-weight-light">@{{order.total}}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h2 font-weight-light">0%</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Sub - Total amount</div>
                            <div class="h2 font-weight-light">@{{order.total}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://www.clicknet.com.my/en/">clicknet.com.my/en/</a></div>

</div>
<!-- checkout area end -->
@endsection