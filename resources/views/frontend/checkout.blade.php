@extends('frontend.master')
@section('content')
<!-- wpf loader Two -->
<style type="text/css">
button#order {
    width: 100%;
    line-height: 27px;
    background-color: #e0ce93;
    border: 1px solid #e0ce93;
    color: #4a4040;
    font-weight: bold;
}

.btn-group>.btn:first-child {
    margin-left: 0;
    margin-top: 5px;
}

.btn-default {
    color: #333;
    border-radius: 0px;
    line-height: 25px;
    background-color: #f1f1f1;
    border-color: #ccc;
}
</style>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                @if(session()->has('order_placed'))
                <div align="center" style="color: #000000;background-color:#a7de91d9; " class="alert alert-success"
                    role="alert" id="place_order">
                    {{session()->get('order_placed')}}
                </div>
                @endif
                @if(session()->has('register'))
                <div align="center" style="color: #000000;background-color:#a7de91d9;" class="alert alert-success"
                    role="alert" id="place_order">
                    {{session()->get('register')}}
                </div>
                @endif

                @if(session()->has('register_already'))
                <div align="center" style="color: white;background-color:#f37d37;" class="alert alert-success"
                    role="alert" id="place_order">
                    {{session()->get('register_already')}}
                </div>
                @endif

                @if(session()->has('no_account'))
                <div align="center" style="color: white;background-color:#f37d37;" class="alert alert-success"
                    role="alert" id="place_order">
                    {{session()->get('no_account')}}
                </div>
                @endif
                <div class="checkout-area">
                    <form action="{{ url('registor_account')}}" method="get">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="checkout-right">
                                    <h4>Order Summary</h4>
                                    <div class="aa-order-summary-area">
                                        <table class="table table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(session('cart'))
                                                <?php $total=0; ?>
                                                @foreach(session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity'] ?>

                                                <tr>
                                                    <td>{{$details['title']}} &nbsp&nbsp&nbsp&nbsp|<strong>&nbsp&nbsp
                                                            {{$details['price']}} x {{$details['quantity']}}</strong>
                                                    </td>
                                                    <td>{{$details['price'] * $details['quantity']}}</td>
                                                </tr>
                                                @endforeach
                                                @else
                                                <tr>
                                                    <td>Product Title | 1<span style="margin-left:6px">x</span><span
                                                            style="margin-left:6px">100</span></td>
                                                    <td>100 </td>
                                                </tr>
                                                @endif

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td>@if(session('cart'))
                                                        {{$total}}
                                                        @else
                                                        100
                                                        @endif</td>
                                                </tr>
                                                <!-- <tr>
                          <th>Delivery Charges</th>
                          <td>$35</td>
                        </tr> -->
                                                <tr>
                                                    <th style="font-size: 25px;font-weight: bold;">Total PKR </th>
                                                    <td style="font-size: 25px;font-weight: bold;">@if(session('cart'))
                                                        {{$total}}
                                                        @else
                                                        100
                                                        @endif</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <h4 style="color:black; font-weight: bold;margin-top: 25px;">Delivery Charges
                                        </h4>
                                        <ul>
                                            <li style="color:#ea3a3a; font-weight: bold;margin-top: 25px">In City
                                                Delivery Charges : PKR = 150</li>
                                            <li style="color:#ea3a3a; font-weight: bold;">Out City Delivery Charges :
                                                PKR = 250</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="checkout-left">
                                    <div class="panel-group" id="accordion">
                                        <!-- Coupon section -->

                                        <!-- Login section -->

                                        <!-- Billing Details -->
                                        <div class="panel panel-default aa-checkout-billaddress">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <span style="color:black;font-weight:bold;font-size: 22px;">
                                                        Customer Details
                                                    </span>
                                                </h4>
                                            </div>
                                            <div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="Customer Name*"
                                                                    name="name" required="">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="email" placeholder="Email Address*"
                                                                    name="email" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="tel" placeholder="Phone*" name="contact"
                                                                    required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="aa-checkout-single-bill">
                                                                <textarea type="text" cols="8" rows="2" name="address"
                                                                    placeholder="Address*" required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">

                                                                <select class="selectpicker countrypicker form-control"
                                                                    data-live-search="true" data-default="Pakistan"
                                                                    name="city" required=""></select>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="text" placeholder="City / Town*"
                                                                    name="town" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <select class="form-control" name="district" required="">
                                                                <option value="">--Select Provines--</option>
                                                                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa
                                                                </option>
                                                                <option value="Panjab">Panjab</option>
                                                                <option value="Sindh">Sindh</option>
                                                                <option value="Balochistan">Balochistan</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="aa-checkout-single-bill">
                                                                <input type="number" placeholder="Postcode / ZIP*"
                                                                    name="post_code" required="">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="btn btn-primary" type="submit"
                                                            id="order">Registor </button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="button" class="btn btn-primary"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            id="order">Sign In ?</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Shipping Address -->

                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center" id="exampleModalLabel">Sign In Account for Place Order</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('place_order')}}" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Enter Your Name" name="name" required=""
                                    class="form-control">
                            </div>
                            <div class="col-md-12">
                                <input type="email" placeholder="Enter Your Email" name="email" required=""
                                    class="form-control">
                            </div>
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-primary" id="order">Sing In</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
setTimeout(function() {
    $('#place_order').hide();
}, 4000);
</script>
@endsection