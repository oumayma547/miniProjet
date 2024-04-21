 <!-- footer part start-->
 <footer class="footer-area">
     <div class="container">
         <div class="row justify-content-between">
             <div class="col-sm-6 col-md-4 col-xl-3">
                 <div class="single-footer-widget footer_1">
                     <a href="index.html"> <img src="{{asset('front/img')}}/logo.png" alt=""> </a>
                     <p> The Higher Institute of Applied Sciences and Technology of Sousse 
                        or ISSATS is a scientific establishment under the University of Sousse.</p>

                 </div>
             </div>
             <div class="col-sm-6 col-md-4 col-xl-4">
                 <div class="single-footer-widget footer_2">
                     <h4>Newsletter</h4>
                     <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                     </p>
                     <form action="#">
                         <div class="form-group">
                             <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder='Enter email address' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                                 <div class="input-group-append">
                                     <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                 </div>
                             </div>
                         </div>
                     </form>
                     <div class="social_icon">
                         <a href="#"> <i class="ti-facebook"></i> </a>
                         <a href="#"> <i class="ti-twitter-alt"></i> </a>
                         <a href="#"> <i class="ti-instagram"></i> </a>
                         <a href="#"> <i class="ti-skype"></i> </a>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-sm-6 col-md-4">
                 <div class="single-footer-widget footer_2">
                     <h4>Contact us</h4>
                     <div class="contact_info">
                         <p><span> Address :</span> Street Tahar Ben Achour, Sousse 4003 </p>
                         <p><span> Phone :</span> +216 92 164 876</p>
                         <p><span> Email : </span>issato@gmail.com </p>
                     </div>
                 </div>
             </div>
         </div>

     </div>
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="copyright_part_text text-center">
                     <div class="row">
                         <div class="col-lg-12">
                             <p class="footer-text m-0">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer part end-->

 <!-- jquery plugins here-->
 <!-- jquery -->
 <script src="{{asset('front/js')}}/jquery-1.12.1.min.js"></script>
 <!-- popper js -->
 <script src="js/popper.min.js"></script>
 <!-- bootstrap js -->
 <script src="js/bootstrap.min.js"></script>
 <!-- easing js -->
 <script src="js/jquery.magnific-popup.js"></script>
 <!-- swiper js -->
 <script src="js/swiper.min.js"></script>
 <!-- swiper js -->
 <script src="js/masonry.pkgd.js"></script>
 <!-- particles js -->
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/jquery.nice-select.min.js"></script>
 <!-- swiper js -->
 <script src="js/slick.min.js"></script>
 <script src="js/jquery.counterup.min.js"></script>
 <script src="js/waypoints.min.js"></script>
 <!-- custom js -->
 <script src="js/custom.js"></script>

 @yield('scripts')
 </body>

 </html>