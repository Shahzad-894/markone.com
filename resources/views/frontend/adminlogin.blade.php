@extends('frontend.masterlogin')
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
<!-- popular section -->
<section id="aa-popular-category">
    <div class="col-md-12">
        <div class="col-md-6 col-md-offset-3">
            @if(session()->has('msg'))
            <div style="color: #fff;background-color:#ff2f00a6; font-weight: bold;text-align: center;"
                class="alert alert-warning" role="alert">
                {{session()->get('msg')}}
            </div>
            @endif
            <form action="{{ url('admin_login') }}" method="post">
                {{ csrf_field() }}
                <h1 style="text-align: center;">Admin Login</h1>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Your Email" name="u_email" id="email" required="">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Your Password" name="password" id="psw" required="">
                <hr>
                <button type="submit" class="registerbtn">Login</button>
            </form>
        </div>
    </div>
</section>
@endsection