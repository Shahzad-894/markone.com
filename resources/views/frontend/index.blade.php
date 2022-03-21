@extends('frontend.master')
@section('content')
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


<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ URL::asset('public/asset/img/slider/1.jpg')}}" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>Men Collection</h2>

                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ URL::asset('public/asset/img/slider/2.jpg') }}"
                                alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 40% Off</span>
                            <h2 data-seq>Wristwatch Collection</h2>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ URL::asset('public/asset/img/slider/3.png') }}"
                                alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>Jeans Collection</h2>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ URL::asset('public/asset/img/slider/4.jpg') }}"
                                alt="Shoes slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 75% Off</span>
                            <h2 data-seq>Exclusive Shoes</h2>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="{{ URL::asset('public/asset/img/slider/5.jpg')}}"
                                alt="Male Female slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Save Up to 50% Off</span>
                            <h2 data-seq>Best Collection</h2>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->

<!-- Products section -->
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#men" data-toggle="tab">Gents</a></li>
                                <li><a href="#kids" data-toggle="tab">Kids</a></li>
                                <li><a href="#ladies" data-toggle="tab">Ladies</a></li>
                                <li><a href="#cosmetics" data-toggle="tab">Cosmetics</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        @foreach($gents as $gent)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img"
                                                    href="{{ url('product_detail')}}/{{$gent->id }}"><img
                                                        src="{{asset('public/images/product/'.$gent->image)}}"
                                                        alt="{{$gent->title}}"></a>
                                                <a class="aa-add-card-btn"
                                                    href="{{ url('product_detail')}}/{{$gent->id }}"><span
                                                        class="fa fa-shopping-cart"></span>View Product</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$gent->title}}</a></h4>
                                                    <span class="aa-product-price">PKR {{$gent->price}}</span>
                                                </figcaption>
                                            </figure>

                                            <!-- product badge -->
                                            <span class="aa-badge " href="#"
                                                style="background-color:#dfce93; color: black;">SALE!</span>
                                        </li>
                                        @endforeach
                                        <!-- start single product item -->

                                    </ul>

                                </div>

                                <div class="tab-pane fade" id="ladies">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        @foreach($ladies as $ladie)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img"
                                                    href="{{ url('product_detail')}}/{{$ladie->id }}"><img
                                                        src="{{asset('public/images/product/'.$ladie->image)}}"
                                                        alt="{{$ladie->title}}"></a>
                                                <a class="aa-add-card-btn"
                                                    href="{{ url('product_detail')}}/{{$ladie->id }}"><span
                                                        class="fa fa-shopping-cart"></span>View Product</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$ladie->title}}</a></h4>
                                                    <span class="aa-product-price">PKR {{$ladie->price}}</span>
                                                </figcaption>
                                            </figure>

                                            <!-- product badge -->
                                            <span class="aa-badge " href="#"
                                                style="background-color:#dfce93; color: black;">SALE!</span>
                                        </li>
                                        @endforeach

                                    </ul>

                                </div>


                                <div class="tab-pane fade" id="cosmetics">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        @foreach($cosmatics as $cos)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img"
                                                    href="{{ url('product_detail')}}/{{$cos->id }}"><img
                                                        src="{{asset('public/images/product/'.$cos->image)}}"
                                                        alt="{{$cos->title}}"></a>
                                                <a class="aa-add-card-btn"
                                                    href="{{ url('product_detail')}}/{{$cos->id }}"><span
                                                        class="fa fa-shopping-cart"></span>View Product</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$cos->title}}</a></h4>
                                                    <span class="aa-product-price">PKR {{$cos->price}}</span>
                                                </figcaption>
                                            </figure>

                                            <!-- product badge -->
                                            <span class="aa-badge " href="#"
                                                style="background-color:#dfce93; color: black;">SALE!</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>


                                <div class="tab-pane fade" id="kids">
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        @foreach($kids as $kid)
                                        <li>
                                            <figure>
                                                <a class="aa-product-img"
                                                    href="{{ url('product_detail')}}/{{$kid->id }}"><img
                                                        src="{{asset('public/images/product/'.$kid->image)}}"
                                                        alt="{{$kid->title}}"></a>
                                                <a class="aa-add-card-btn"
                                                    href="{{ url('product_detail')}}/{{$kid->id }}"><span
                                                        class="fa fa-shopping-cart"></span>View Product</a>
                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">{{$kid->title}}</a></h4>
                                                    <span class="aa-product-price">PKR {{$kid->price}}</span>
                                                </figcaption>
                                            </figure>

                                            <!-- product badge -->
                                            <span class="aa-badge " href="#"
                                                style="background-color:#dfce93; color: black;">SALE!</span>
                                        </li>
                                        @endforeach

                                    </ul>

                                </div>

                            </div>
                            <!-- quick view modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Products section -->
<!-- banner section -->

<!-- popular section -->

<!-- / popular section -->
<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login or Register</h4>
                <form class="aa-login-form" action="">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me
                    </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="account.html">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection