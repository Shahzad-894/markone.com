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
<!-- start contact section -->
<section id="aa-contact">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="aa-contact-area">
                    @if(session()->has('contact'))
                    <div style="color: #fff;background-color:#66bb6a; font-weight: bold;text-align: center;"
                        class="alert alert-success" role="alert">
                        {{session()->get('contact')}}

                    </div>
                    @endif
                    <!-- contact map -->
                    <div class="aa-contact-map">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.4496677128063!2d73.19410541522258!3d34.33903218052889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38de3c305d1a0d21%3A0x34d70e363e17e938!2sStylo%20Shoes!5e0!3m2!1sen!2s!4v1625661479812!5m2!1sen!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- Contact address -->
                    <div class="aa-contact-address">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="aa-contact-address-left">
                                    <form class="comments-form contact-form" action="{{ url('contact_message')}}"
                                        method="post">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Your Name"
                                                        class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Email"
                                                        class="form-control" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Subject" name="subject"
                                                        class="form-control" required="">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <textarea type="text" class="form-control" rows="3" style="width:100%"
                                                placeholder="Message" name="message" required="" ></textarea>
                                        </div>
                                        <button class="aa-secondary-btn" type="submit">Send</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="aa-contact-address-right">
                                    <address>
                                        <h4>Markone</h4>
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi dolor facilis! Nihil error, eius.</p> -->
                                        <p><span class="fa fa-home"></span>Butt Pull Mansehra</p>
                                        <p><span class="fa fa-phone"></span>+ 92 333-58-33-347</p>
                                        <p><span class="fa fa-envelope"></span>Email: markone@gmail.com</p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection