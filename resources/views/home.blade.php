@extends('layouts.app')

@section('content')
<div class="row justify-content-between">
                            <div class="col-lg-auto">
                               
                            </div>

                            <div class="col-lg-6 mx-auto mt-6 mt-lg-2">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" class="form-control border-dark" placeholder="Search..." required>
                                            <button class="btn btn-outline-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                              </svg>
                                            </button>
                                            
                                        </div> 
                                        
                                              
                                    </div>
                                    
                                </form>

                                </div>
                                <div class="col-lg-2">
                                <form action="{{ route('panier') }}">
                                    
                        
                                    <button class="btn btn-outline-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                   </button>
                                        
                                  </form>

                                  </div>
                                </div>
                        </div>
                        

                        <!-- Nav -->
                        <div class="row">
                            <nav class="navbar navbar-expand-lg navbar-light bg-white col-12">
                                <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="mainNav">
                                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="electronics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronics</a>
                                            <div class="dropdown-menu" aria-labelledby="electronics">
                                                <a class="dropdown-item" href="category.html">Computers</a>
                                                <a class="dropdown-item" href="category.html">Mobile Phones</a>
                                                <a class="dropdown-item" href="category.html">Television Sets</a>
                                                <a class="dropdown-item" href="category.html">DSLR Cameras</a>
                                                <a class="dropdown-item" href="category.html">Projectors</a>
                                            </div>
                                        </li>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="fashion" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion</a>
                                            <div class="dropdown-menu" aria-labelledby="fashion">
                                                <a class="dropdown-item" href="category.html">Men's</a>
                                                <a class="dropdown-item" href="category.html">Women's</a>
                                                <a class="dropdown-item" href="category.html">Children's</a>
                                                <a class="dropdown-item" href="category.html">Accessories</a>
                                                <a class="dropdown-item" href="category.html">Footwear</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="books" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
                                            <div class="dropdown-menu" aria-labelledby="books">
                                                <a class="dropdown-item" href="category.html">Adventure</a>
                                                <a class="dropdown-item" href="category.html">Horror</a>
                                                <a class="dropdown-item" href="category.html">Romantic</a>
                                                <a class="dropdown-item" href="category.html">Children's</a>
                                                <a class="dropdown-item" href="category.html">Non-Fiction</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- Nav -->
            <div class="product_section_2 layout_padding" style="background-color:white";>
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty Bursh</h4>
                        <p class="lorem_text">Cet ensemble est Essential de 8 pièces . </p>
                        <img src="images/img-1.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">80 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Blush</h4>
                        <p class="lorem_text"> Un blush léger et longue </p>
                        <img src="images/img-2.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text"> 60 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Maskara</h4>
                        <p class="lorem_text">Maskara pour un good look </p>
                        <img src="images/img-3.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">100 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">makup collection</h4>
                        <p class="lorem_text">makup collection</p>
                        <img src="images/img-4.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">300 DH</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Vitamin C</h4>
                        <p class="lorem_text">Vitamin C pour healthy corps</p>
                        <img src="images/img-5.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">100 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">lipstick</h4>
                        <p class="lorem_text">lipstick rouge </p>
                        <img src="images/img-6.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">180 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Beauty makeup</h4>
                        <p class="lorem_text">makeup </p>
                        <img src="images/img-7.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text"> 150 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Powder</h4>
                        <p class="lorem_text">Powder for the skin </p>
                        <img src="images/img-8.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">90 DH</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Makeup bag</h4>
                        <p class="lorem_text"> Makeup bag</p>
                        <img src="images/img-9.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">300 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Makeup</h4>
                        <p class="lorem_text">Makeup Makeup  </p>
                        <img src="images/img-10.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">90 DH</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Makeup </h4>
                        <p class="lorem_text">Makeup  </p>
                        <img src="images/img-11.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">Price $30</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="product_box">
                        <h4 class="bursh_text">Makeup</h4>
                        <p class="lorem_text">Makeup  </p>
                        <img src="images/img-12.png" class="image_1">
                        <div class="btn_main">
                           <div class="buy_bt">
                              <ul>
                                 <li class="active"><a href="#">Buy Now</a></li>
                                 <li><a href="#">add to cart</a></li>
                              </ul>
                           </div>
                           <h3 class="price_text">100 DH</h3>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="seemore_bt"><a href="#">See More</a></div>
            </div>
         </div>
      </div>
      <!-- product section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="images/footer-logo.png"></a></div>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <h3 class="address_text">Contact Us</h3>
                     <div class="address_bt">
                        <ul>
                           <li>
                              <a href="#">
                              <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left10">Address : Loram Ipusm</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +01 1234567890</span>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : demo@gmail.com</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="footer_logo_1"><a href="index.html"><img src="images/footer-logo.png"></a></div>
                     <p class="dummy_text">commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
                  </div>
                  <div class="col-sm-4">
                     <div class="main">
                        <h3 class="address_text">Best Products</h3>
                        <p class="ipsum_text">dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="social_icon">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
      <!--script src="js/popper.min.js"></script-->
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
      <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
       >
     </script>
            
        </main>
    </div>

    <!-- Scripts -->
   <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"> </script>
</body>
@endsection
