 <!-- footer -->
 <footer id="aa-footer">
     <!-- footer bottom -->
     <div class="aa-footer-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="aa-footer-top-area">
                         <div class="row">
                             <div class="col-md-3 col-sm-6">
                                 <div class="aa-footer-widget">
                                     <div class="aa-logo">
                                         <a href="{{url('/')}}"><img src="{{ URL::asset('public/asset/img/logo.jpeg')}}"
                                                 alt="logo img" width="210px" height="190px"></a>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6">
                                 <div class="aa-footer-widget">
                                     <div class="aa-footer-widget">
                                         <h3>Main Menu</h3>
                                         <ul class="aa-footer-nav">
                                             <li><a href="{{ url('/')}}">Home</a></li>
                                             <li><a href="{{ url('/all_products')}}">Products Page</a></li>
                                             <li><a href="{{ url('/contact')}}">Contact Us</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-3 col-sm-6">
                                 <div class="aa-footer-widget">
                                     <div class="aa-footer-widget">
                                         <h3>Knowledge Base</h3>
                                         <ul class="aa-footer-nav">
                                             <li><a href="#">Delivery</a></li>
                                             <li><a href="#">Returns</a></li>
                                             <li><a href="#">Services</a></li>
                                             <li><a href="#">Discount</a></li>
                                             <li><a href="#">Special Offer</a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>

                             <div class="col-md-3 col-sm-6">
                                 <div class="aa-footer-widget">
                                     <div class="aa-footer-widget">
                                         <h3>Contact Us</h3>
                                         <address>
                                             <p>Butt Pull Mansehra</p>
                                             <p><span class="fa fa-phone"></span>+92 300 8532323</p>
                                             <p><span class="fa fa-envelope"></span>markone@gmail.com</p>
                                         </address>
                                         <div class="aa-footer-social">
                                             <a href="https://www.facebook.com/104316908235837/posts/157679792899548/"><span
                                                     class="fa fa-facebook"></span></a>
                                             <a href="#"><span class="fa fa-twitter"></span></a>
                                             <a href="#"><span class="fa fa-google-plus"></span></a>
                                             <a href="#"><span class="fa fa-youtube"></span></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- footer-bottom -->
     <div class="aa-footer-bottom">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="aa-footer-bottom-area">
                         <p>Designed by <a href="http://www.markups.io/">TechTrack</a></p>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <script>
$(document).ready(function() {
    $.ajax({
        'type': 'Get',
        'url': "{{ url('cartcount') }}",
        success: function(response) {
            $('#cart').text('');
            $('#cart').text(response);
            // alert(response);
        }
    });
});
 </script>
 <!-- / footer -->