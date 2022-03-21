@extends('frontend.master')
@section('content')
<style type="text/css">
span#price {
    FONT-SIZE: 24px;
    color: black;
    font-weight: bold;
}
</style>
<!-- wpf loader Two -->
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!-- product category -->

<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span id="session_data">
                    @if(session()->has('success_cart'))
                    <div style="color: #000;background-color:#62c756a6; font-weight: bold;text-align: center; margin-top: 20px;"
                        class="alert alert-warning" role="alert">
                        {{session()->get('success_cart')}}
                    </div>
                    @endif
                </span>
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">



                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="aa-product-view-slider">
                                    <div id="demo-1" class="simpleLens-gallery-container">
                                        <div class="simpleLens-container">
                                            <div class="simpleLens-big-image-container">
                                                <!-- <a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"> -->
                                                <img
                                                    src="{{asset('public/images/product/'.$product_detail->image)}}"></a>
                                            </div>
                                        </div>
                                        <div class="simpleLens-thumbnails-container">
                                            <a data-big-image="{{asset('public/images/product/'.$product_detail->image)}}"
                                                data-lens-image="{{asset('public/images/product/'.$product_detail->image)}}"
                                                class="simpleLens-thumbnail-wrapper" href="#">
                                                <img src="{{asset('public/images/product/'.$product_detail->image)}}">
                                                @foreach (explode('|', $product_detail->related_images) as $image)
                                                <a data-big-image="{{asset('public/images/product/'.$image)}}"
                                                    data-lens-image="{{asset('public/images/product/'.$image)}}"
                                                    class="simpleLens-thumbnail-wrapper" href="#">
                                                    <img src="{{asset('public/images/product/'.$image)}}">
                                                    @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal view content -->
                            <form role="form" action="{{ url('add_to_cart') }}/{{$product_detail->id}}" method="post"
                                enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div class="aa-product-view-content">
                                        <h3>{{$product_detail->title}}</h3>
                                        <div class="aa-price-block">
                                            <span class="aa-product-view-price" id="price">PKR :
                                                {{ $product_detail->price }}</span>
                                            <input type="hidden" name="item_price" value="{{ $product_detail->price }}"
                                                id="item_price" required="">
                                            <input type="hidden" name="total_price" value="{{ $product_detail->price }}"
                                                id="total_price" required="">
                                            <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                        </div>
                                        <p>
                                            <!-- {{ $product_detail->description }} -->
                                        </p>
                                        <!-- <h4>Size</h4> -->
                                        <!--  <div class="aa-prod-view-size">
                      <a href="#">S</a>
                      <a href="#">M</a>
                      <a href="#">L</a>
                      <a href="#">XL</a>
                    </div> -->
                                        <!-- <h4>Color</h4>
                    <div class="aa-color-tag">
                      <a href="#" class="aa-color-green"></a>
                      <a href="#" class="aa-color-yellow"></a>
                      <a href="#" class="aa-color-pink"></a>                      
                      <a href="#" class="aa-color-black"></a>
                      <a href="#" class="aa-color-white"></a>                      
                    </div> -->
                                        <div class="aa-prod-quantity">


                                            <select id="quantity" name="quantity">
                                                <option selected="1" value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>

                                            <p class="aa-prod-category">
                                                Category: <a href="#">{{ $product_detail->product_cat }}</a>
                                            </p>
                                        </div>
                                        <div class="aa-prod-view-bottom ">

                                            <div>
                                                <p><i class="fa fa-truck"
                                                        style="margin-right:12px;font-size:22px"></i><span>NationWide
                                                        Delivery</span></p>
                                                <p><i class="fa fa-exchange"
                                                        style="margin-right:12px;font-size:22px"></i><span>7 days
                                                        Replacement Warranty</span></p>
                                                <p><i class="fa fa-phone"
                                                        style="margin-right:12px;font-size:22px"></i><span>+92 300
                                                        8532323</span></p>

                                            </div>

                                        </div>
                                        <div class="aa-prod-view-bottom">

                                            <button type="submit" class="aa-add-to-cart-btn" id="addToCart">Add To
                                                Cart</button>
                                            <a class="aa-add-to-cart-btn" href="{{url('cart')}}">Check Out Now</a>
                                        </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="aa-product-details-bottom">
                <ul class="nav nav-tabs" id="myTab2">
                    <li><a href="#description" data-toggle="tab">Description</a></li>
                    <!-- <li><a href="#review" data-toggle="tab">Reviews</a></li>                 -->
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="description">
                        <p>{{ $product_detail->description }}</p>
                    </div>
                    <!--  <div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>2 Reviews for T-Shirt</h4> 
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="{{asset('public/images/product/male.JPEG')}}" alt="image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   review form -->
                    <!-- <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>  
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div>

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div> -->
                </div>
            </div>
            <!-- Related product -->
            <div class="aa-product-related-item">
                <h3>Related Products</h3>
                <ul class="aa-product-catg aa-related-item-slider">
                    <!-- start single product item -->
                    @foreach($related_products as $product)
                    <li>
                        <figure>
                            <a class="aa-product-img" href="{{url('product_detail')}}/{{$product->id}}"><img
                                    src="{{ asset('public/images/product/'.$product->image)}}"
                                    alt="{{$product->title}}"></a>
                            <a class="aa-add-card-btn" href="{{ url('product_detail')}}/{{$product->id}}"><span
                                    class="fa fa-shopping-cart"></span>View Product</a>
                            <figcaption>
                                <h4 class="aa-product-title"><a
                                        href="{{url('product_detail')}}/{{$product->id}}">{{$product->title}}</a></h4>
                                <span class="aa-product-price">PKR {{$product->price}}</span>
                            </figcaption>
                        </figure>

                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#"
                            style="background-color:#dfce93; color:black ;">SALE!</span>
                    </li>
                    @endforeach()
                    <!-- start single product item -->


                </ul>
                <!-- quick view modal -->

                <!-- / quick view modal -->
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
<!-- / product category -->
<script type="text/javascript">
$('select').on('change', function() {
    var quantity = this.value;
    var price = $('#item_price').val();
    var total = quantity * price;
    $('#price').text('');
    $('#price').text('PKR : ' + total);
    $('#total_price').val(total);

});
setTimeout(function() {
    $('#session_data').hide();
}, 4000);
</script>
@endsection