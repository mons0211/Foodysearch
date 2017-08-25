@extends ('User.userlayouts')


@section ('content')

<section class="intro-section">
            <div class="container">
                <div class="row">
                    
                    <h1 align="center" class="style_4">Order delicious foods online</h1>
                    <h5 align="center" class="style_5">Order food online from the best restaurants near you</h5>
                    <form class="col-lg-offset-1 col-lg-10 col-xs-12 form-inline style_6">
                            <div class="col-lg-2 col-xs-12 input-group" style="padding: 5px;">
                                <select class=" form-control" style="width: 100%;">
                                    <option>Place</option>
                                    <option>Kolkata</option>
                                    <option>Delhi</option>
                                    <option>Chennai</option>
                                    <option>Mumbai</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-xs-12 input-group" style="padding: 0px;">
                                <select class=" form-control" style="width: 100%;">
                                    <option>Time of Delivery</option>
                                    <option>10:00 A.M</option>
                                    <option>12:00 P.M</option>
                                    <option>09:30 P.M</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-xs-12 input-group" style="padding: 0px;">
                                <input type="location" class="form-control" id="exampleInputEmail1" placeholder="Location"style="width: 100%;">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form> 

                </div>
            </div>
        </section>
        
        <section class="img-section">
            <div class="container">
                <div class="row">
                        
                    <div class="col-md-12 style_1">
                        <div id="Carousel" class="carousel slide">

                                <ol class="carousel-indicators">
                                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#Carousel" data-slide-to="1"></li>
                                    <li data-target="#Carousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                <div class="item active">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp1.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp254718_pizza_z_serem_i_warzywami.jpg" class="thumbnail" alt="Image" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp26478.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp2665YmY.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                        </div><!--.row-->
                                </div><!--.item-->

                                <div class="item">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp2833045640593701045.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp30.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp320d5bfff12abd0fec1a8bb981a1cf3d.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp4137453-chinese-food-wallpapers.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                        </div><!--.row-->
                                </div><!--.item-->

                                <div class="item">
                                        <div class="row">
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcpFood+HD+Wallpapers+(4).jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcp84.jpg" alt="Image" class="thumbnail" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcpBarbecue-High-Definition-Wallpapers.jpg" class="thumbnail"alt="Image" style="width:100%; height: 160px;"></a>
                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-6">
                                              <a href="#"><img src="img/mxcpDepositphotos_23796179_m-2015.jpg" class="thumbnail" alt="Image" style="width:100%; height: 160px;"></a>
                                          </div>
                                        </div><!--.row-->
                                </div><!--.item-->

                                </div><!--.carousel-inner-->
                            <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                            <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                        </div><!--.Carousel-->
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 style_9">
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/category_1.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Delivery</h6></a>
                        </div>
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/category_8.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Breakfast</h6></a>
                        </div>
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/category_9.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Lunch</h6></a>
                        </div>
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/category_10.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Dinner</h6></a>
                        </div>
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/category_3.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Drinks & Nightlife</h6></a>
                        </div>
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/category_6.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Cafes</h6></a>
                        </div>
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/category_13.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Pocket-Friendly Delivery</h6></a>
                        </div>
                        <div align="center" class=" col-lg-1 col-md-1 col-sm-1 col-xs-12 style_8">
                            <a href="#" style="text-decoration: none;"><img class="style_7" src="img/icons/special_10.png">
                            <h6 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Desserts & Bakes</h6></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="about-section">
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-6">
                        <div class="col-lg-12" style="border: 1px solid white; background-color:rgba(192,192,192,0.5); margin-bottom: 5px;">
                            <h2 style="color: #000000; font-family: 'Kaushan Script', cursive;">About Us</h2>  
                            <h5>
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. 
                                Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.
                                when an unknown printer took a galley of type and scrambled 
                                it to make a type specimen book.
                                Proin ultricies vestibulum velit.Lorem ipsum dolor sit amet.
                                when an unknown printer took Proin ultricies vestibulum velit.
                                Lorem ipsum dolor sit amet
                            </h5>                       
                        </div>
                        <div class="col-lg-6" style="border: 1px solid white; background-color:rgba(192,192,192,0.5); margin: 5px;">
                            <h2 style="color: #000000; font-family: 'Kaushan Script', cursive;">Handling Your Needs With Care</h2>  
                            <h5>
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. 
                                Proin ultricies vestibulum velit. 
                                a galley of type and scrambled it to make a type specimen book. 
                                Proin ultricies vestibulum velit.
                            </h5>
                        </div>
                        <div class="col-lg-6" style="border: 1px solid white; background-color:rgba(192,192,192,0.5); margin: 5px;">
                            <h2 style="color: #000000; font-family: 'Kaushan Script', cursive;">Best Recipes With Best Ingredients</h2>  
                            <h5>
                                Lorem ipsum dolor sit amet, consectetur adipisc elit. 
                                Proin ultricies vestibulum velit., 
                                a galley of type and scrambled it to make a type specimen book.
                                Proin ultricies vestibulum velit.
                            </h5>
                        </div>
                    </div>    
                    
                </div>
            </div>
        </section> 
        <section class="footer-section">
            <div class="container">
                <div class="row">
                          
                    <div class="col-md-4">
                        <div class="style_2">
                            <form class="form-horizontal" action="" method="post">
                                <fieldset>
                                  <h2 align="center" style="color: #000000; font-family: 'Kaushan Script', cursive;">Contact us</h2>

                                  <!-- Name input-->
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                      </div>
                                    </div>

                                  <!-- Email input-->
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                      </div>
                                    </div>

                                  <!-- Message body -->
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                      </div>
                                    </div>

                                  <!-- Form actions -->
                                    <div class="form-group">
                                      <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-default btn-sm" style="color: #000000; font-family: 'Kaushan Script', cursive;">Submit</button>
                                      </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                            
                </div>
            </div>
        </section>
        <section class="footer-section_2">
            <div class="container">
                <div class="row">
                    <h2 style="color: #fff; font-family: 'Kaushan Script', cursive;">FoodySearch</h2>
                    <legend></legend>
                    <div class="col-lg-2">
                       <h4 style="color: #fff; font-family: 'Kaushan Script', cursive;">About FoodySearch</h4>
                       <h5 style="color: white;">About Us</h5>
                       <h5 style="color: white;">Culture</h5>
                       <h5 style="color: white;">Blog</h5>
                       <h5 style="color: white;">Careers</h5>
                       <h5 style="color: white;">Contact</h5>
                    </div>
                    <div class="col-lg-offset-1 col-lg-2">
                       <h4 style="color: #fff; font-family: 'Kaushan Script', cursive;">For Foodies</h4>
                       <h5 style="color: white;">Code of Conduct</h5>
                       <h5 style="color: white;">Community</h5>
                       <h5 style="color: white;">Verified Users</h5>
                       <h5 style="color: white;">Blogger Help</h5>
                       <h5 style="color: white;">Developers</h5>
                       <h5 style="color: white;">Mobile Apps</h5>
                    </div>
                    <div class="col-lg-offset-2 col-lg-3">
                       <h4 style="color: #fff; font-family: 'Kaushan Script', cursive;">For Restaurants</h4>
                       <h5 style="color: white;">Add a Restaurant</h5>
                       <h5 style="color: white;">Claim your Listing</h5>
                       <h5 style="color: white;">Business App</h5>
                       <h5 style="color: white;">Business Owner Guidelines</h5>
                       <h5 style="color: white;">Business Blog</h5>
                       <h5 style="color: white;">Restaurant Widgets</h5>
                       <h5 style="color: white;">Products for Businesses</h5>
                    </div>
                    <div class="col-lg-2" style="margin-top: 30px;">
                       <h5 style="color: white;">Advertise</h5>
                       <h5 style="color: white;">Order</h5>
                       <h5 style="color: white;">Book</h5>
                       <h5 style="color: white;">Base</h5>
                       <h5 style="color: white;">Trace</h5>
                    </div>
                    <legend></legend>
                    <div class="col-lg-3">
                       <h4 style="color: #fff; font-family: 'Kaushan Script', cursive;">Countries</h4>
                       <h5 style="color: white;">India</h5>
                    </div>
                    <legend></legend>
                        <div class="col-lg-1">
                            <h5 style="color: white;">Privacy</h5>
                        </div>
                        <div class="col-lg-1">
                            <h5 style="color: white;">Terms</h5>
                        </div>
                        <div class="col-lg-1">
                            <h5 style="color: white;">API Policy</h5>
                        </div>
                        <div class="col-lg-1">
                            <h5 style="color: white;">CSR</h5>
                        </div>
                        <div class="col-lg-1">
                            <h5 style="color: white;">Security</h5>
                        </div>
                        <div class="col-lg-1">
                            <h5 style="color: white;">Sitemap</h5>
                        </div>
                        <div class="col-lg-offset-4 col-lg-2">
                            <i class="fa fa-youtube-square fa-2x" aria-hidden="true" style="color: white; margin-left: 5px;"></i>
                            <i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="color: white; margin-left: 5px;"></i>
                            <i class="fa fa-twitter fa-2x" aria-hidden="true" style="color: white; margin-left: 5px;"></i>
                            <i class="fa fa-instagram fa-2x" aria-hidden="true" style="color: white; margin-left: 5px;"></i>
                        </div>
                    <legend></legend>
                </div>
            </div>
        </section>

@endsection