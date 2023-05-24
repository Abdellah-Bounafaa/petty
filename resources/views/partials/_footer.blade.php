 <footer class="footer">
     <div class="container">
         <div class="row">
             <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                 <h2 class="footer-heading">Petsitting</h2>
                 <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                 <ul class="ftco-footer-social p-0">
                     <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                             title="Twitter"><span class="fa fa-twitter"></span></a></li>
                     <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                             title="Facebook"><span class="fa fa-facebook"></span></a></li>
                     <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                             title="Instagram"><span class="fa fa-instagram"></span></a></li>
                 </ul>
             </div>

             <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                 <h2 class="footer-heading">Quick Links</h2>
                 <ul class="list-unstyled">
                     <li><a href="/" class="py-2 d-block">Home</a></li>
                     <li><a href="{{ route('donations') }}" class="py-2 d-block">Donations</a></li>
                     <li><a href="{{ route('blogs') }}" class="py-2 d-block">Blogs</a></li>
                     <li><a href="{{ route('orders') }}" class="py-2 d-block">Orders</a></li>
                     <li><a href="{{ route('contact') }}" class="py-2 d-block">Contact Us</a></li>
                 </ul>
             </div>
             <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                 <h2 class="footer-heading">Have a Questions?</h2>
                 <div class="block-23 mb-3">
                     <ul>
                         <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San
                                 Francisco, California, USA</span></li>
                         <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929
                                     210</span></a></li>
                         <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                     class="text">info@yourdomain.com</span></a></li>
                     </ul>
                 </div>
             </div>
         </div>

     </div>
 </footer>




 <!-- loader -->
 <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
         <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
             stroke="#eeeeee" />
         <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
             stroke-miterlimit="10" stroke="#F96D00" />
     </svg></div>

 <script src="{{ asset('ijaboCropTool/ijaboCropTool.min.js') }}"></script>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
 <script src="{{ asset('js/popper.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
 <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
 <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
 <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
 <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
 <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
 <script src="{{ asset('js/scrollax.min.js') }}"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
 <script src="{{ asset('js/google-map.js') }}"></script>
 <script src="{{ asset('js/main.js') }}"></script>


 <script src="{{ asset('js/scripts/core.js') }}"></script>
 <script src="{{ asset('js/scripts/script.min.js') }}"></script>
 <script src="{{ asset('js/scripts/process.js') }}"></script>
 <script src="{{ asset('js/scripts/layout-settings.js') }}"></script>
 <script src="{{ asset('src/plugins/jquery-steps/jquery.steps.js') }}"></script>
 <script src="{{ asset('js/steps-setting.js') }}"></script>
 {{-- ijaboCropTool --}}
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <script>
     $('#avatar').ijaboCropTool({
         preview: '.image-previewer',
         setRatio: 1,
         hideAfterCrop: true,

         allowedExtensions: ['jpg', 'jpeg', 'png'],
         buttonsText: ['CROP', 'QUIT'],
         buttonsColor: ['#30bf7d', '#ee5155', -15],
         processUrl: '{{ route('crop') }}',
         processModal: '#modal-id',
         withCSRF: ['_token', '{{ csrf_token() }}'],
         onAfterImgCrop: function() {
             $('#modal-id').modal('hide');
         }

     });
 </script>
 <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
 {{-- <script src="admin/vendors/datatables.net/jquery.dataTables.js"></script> --}}
 {{-- <script src="admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> --}}
 <script src="{{ asset('admin/js/dataTables.select.min.js') }}"></script>

 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
 <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
 <script src="{{ asset('admin/js/template.js') }}"></script>
 <script src="{{ asset('admin/js/settings.js') }}"></script>
 <script src="{{ asset('admin/js/todolist.js') }}"></script>
 <!-- endinject -->
 <!-- Custom js for this page-->
 <script src="{{ asset('admin/js/dashboard.js') }}"></script>
 <script src="{{ asset('admin/js/Chart.roundedBarCharts.js') }}"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
 </script>
 <!-- Include jQuery JS file via CDN -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- Font Awesome JS (optional, for advanced features like SVG icons) -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
     integrity="sha384-iL1vpBS4d4Cpwr/Ot0CA7VOSv2Ub/fD7V60S5OjXTdbV5v/odRf5h5+jH8N3lfTsM" crossorigin="anonymous">
 </script>
 <!-- Display flash message using Noty -->
 <script>
     $(document).ready(function() {
         // Check for the presence of flash message
         @if (session('success'))
             // Display success flash message using Noty
             new Noty({
                 type: 'success',
                 text: '{{ session('success') }}',
                 timeout: 3000, // Adjust the timeout value as needed
                 progressBar: true,
                 theme: 'nest',
             }).show();
         @endif
     });
     $(document).ready(function() {
         // Check for the presence of flash message
         @if (session('error'))
             // Display success flash message using Noty
             new Noty({
                 type: 'error',
                 text: '{{ session('error') }}',
                 timeout: 3000, // Adjust the timeout value as needed
                 progressBar: true,
                 theme: 'nest',
             }).show();
         @endif
     });
 </script>

 </body>

 </html>
