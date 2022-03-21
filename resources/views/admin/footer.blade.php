 <!-- Sticky Footer -->
 <footer class="sticky-footer">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright © TechTrack 2021</span>
         </div>
     </div>
 </footer>

 </div>
 <!-- /.content-wrapper -->

 </div>
 <!-- /#wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="{{url('/logoutuser')}}">Logout</a>
             </div>
         </div>
     </div>
 </div>

 <!-- Bootstrap core JavaScript-->

 <script src="{{asset('public/file/vendor/jquery/jquery.min.js')}}"></script>
 <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 <script src="{{asset('public/file/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

 <!-- Core plugin JavaScript-->
 <script src="{{asset('public/file/vendor/jquery-easing/jquery.easing.min.js')}}"></script>


 <!-- Custom scripts for all pages-->
 <script src="{{asset('public/file/js/sb-admin.min.js')}}"></script>
 <script type="text/javascript">
$.get("{{ url('pending_order_count') }}", function(response) {
    
    $('#pending_order_count').text(response);
});

$.get("{{ url('product_count') }}", function(response) {
    $('#product_count').text(response);
});

$.get("{{ url('deliverd_order') }}", function(response) {
    $('#deliverd_order').text(response);
});

$.get("{{ url('emails') }}", function(response) {
    $('#emails').text(response);
});


$(document).ready(function() {
    $('#example1').DataTable();
});
 </script>

 </body>

 </html>