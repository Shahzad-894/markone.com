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



<!-- product category -->
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="aa-product-catg-content">
                    <div class="aa-product-catg-head">
                        <div class="aa-product-catg-head-left">
                            <!-- <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form> -->
                            <label for="">List Style View</label>
                        </div>
                        <div class="aa-product-catg-head-right">
                            <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                            <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                        </div>
                    </div>
                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg">

                            <!-- start single product item -->
                            @forelse($result as $product)
                            <li>
                                <figure>
                                    <a class="aa-product-img" href="{{ url('product_detail')}}/{{$product->id }}"><img
                                            src="{{asset('public/images/product/'.$product->image)}}"
                                            alt="{{$product->title}}"></a>
                                    <a class="aa-add-card-btn" href="{{ url('product_detail')}}/{{$product->id }}"><span
                                            class="fa fa-shopping-cart"></span>Add To Cart</a>
                                    <figcaption>
                                        <h4 class="aa-product-title"><a
                                                href="{{ url('product_detail')}}/{{$product->id }}">This is Title</a>
                                        </h4>
                                        <span class="aa-product-price">PKR {{$product->price}}</span>
                                        <p class="aa-product-descrip">{{$product->title}}.</p>
                                    </figcaption>
                                </figure>

                                <!-- product badge -->
                                <span class="aa-badge aa-sale" href="#"
                                    style="background-color:#dfce93; color:black ;">SALE!</span>
                            </li>
                            @empty
                            <h3 class="text-center ">Sorry Result Not Found </h3>
                            <br><br>
                            @endforelse
                            <!-- start single product item -->

                        </ul>

                    </div>
                    @if(count($result) > 0)
                    <div class="text-center">
                        {{$result->links('pagination::bootstrap-4')}}
                        <!-- <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->
                    </div>
                    @endif
                </div>
            </div>


        </div>
    </div>
</section>
<!-- / product category -->

@endsection