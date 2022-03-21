@extends('frontend.master')
@section('content')
<!-- wpf loader Two -->

<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                        <?php $single_item_total = $details['price'] * $details['quantity'] ?>
                                        <input type="hidden" name="" value="{{$details['product_id']}}" required="">
                                        <tr>
                                            <td><a class="aa-cart-title" href="#">{{$details['title']}}</a></td>
                                            <td><a href="#"><img
                                                        src="{{asset('public/images/product/'.$details['image'])}}"
                                                        alt="img"></a></td>
                                            <td>PKR : {{$details['price']}}</td>
                                            <td><input class="aa-cart-quantity qty" data-id={{$id}} type="number"
                                                    value="{{$details['quantity']}}" name="quantity" required=""></td>
                                            <td class="total_price">PKR : <?php echo $single_item_total;?></td>
                                            <td><a class="remove" href="{{ URL('delet_item/'.$id)}}">
                                                    <fa class="fa fa-close"></fa>
                                                </a></td>
                                        </tr>
                                        @endforeach()
                                        @endif

                                        @if(session('cart'))
                                        <?php $ful=0; ?>
                                        @foreach(session('cart') as $id => $details)
                                        <?php $ful += $details['price'] * $details['quantity'] ?>
                                        <input type="hidden" name="" value="<?php echo $ful; ?>" id="full_total" required="">
                                        @endforeach()
                                        @endif
                                        <!-- <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          
                          <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                        </td>
                      </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Cart Totals</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                    <tr>
                                        <th>Total</th>
                                        <td>@if(session('cart'))
                                            <?php echo '<span style="font-size:20px;font-weight:bold">PKR : '.$ful.'</span>' ?>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{url('checkout')}}" class="aa-cart-view-btn">Proced to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(document).ready(function() {
    $('.qty').on('change', function(e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ url('
            update_item ') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.attr("data-id"),
                quantity: ele.parents("tr").find(".qty").val()
            },
            success: function(response) {
                window.location.reload();
            }
        });
    });

});
</script>
@endsection