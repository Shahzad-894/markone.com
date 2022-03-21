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

<!-- 404 error section -->
<section id="aa-error">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-error-area">
                    <h2>404</h2>
                    <span>Sorry! Page Not Found</span>
                    <p>Sorry this content has been moved Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Earum, amet perferendis, nemo facere excepturi quis.</p>
                    <a href="{{ url('/')}}"> Go to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / 404 error section -->

@endsection