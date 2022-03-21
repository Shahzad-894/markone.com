<header id="aa-header">


    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <a href="{{url('/')}}"><img src="{{ URL::asset('public/asset/img/logo.jpeg')}}"
                                    alt="logo img" width="160px" height="120px"></a>
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="{{url('cart')}}">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">SHOPPING CART</span>
                                <span class="aa-cart-notify" id="cart" style="color:black">0</span>
                            </a>

                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box" style="margin-top: 40px;">
                            <form action="{{url('search_product')}}" method="get">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <input type="text" name="search" placeholder="Search Products Here... " required="">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->
<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>

                        <li><a href="{{ url('contact') }}">Contact</a></li>
                        <li><a href="#">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('all_products') }}">All Products</a></li>
                                <li><a href="{{ url('product404') }}">404 Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu