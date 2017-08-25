@extends ('User.userlayouts')


@section ('content')

            <section class="intro-section-result">
                 <div class="container">
                     <div class="row">
                         
                        <div class="col-lg-12" style="color: white; padding: 5px; background-color:rgba(192,192,192,0.2); border-radius: 3px; border: 1px solid white;">
                            <h1 align="center" style="font-weight: bold;">Order from restaurants</h1>
                            <h4 align="center" style="color: black; font-weight: bold; background-color:rgba(192,192,192,0.2);">Delivering to your door</h4>
                            <h2 class="col-lg-offset-4 col-lg-4"align="center" style="color: white;  padding: 8px; background-color:rgba(192,192,192,0.4); border: 1px solid white; border-radius: 3px;">
                             <i class="fa fa-map-marker" aria-hidden="true"></i> Location
                             <button class="btn btn-default">Change Location</button>
                            </h2>
                        </div>
                                                  
                     </div>
                 </div>
            </section>

            <section class="content-section-result">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-3" style="padding: 5px; background-color:rgba(192,192,192,0.2); border-radius: 5px; border: 1px solid white;">
                             <h5 align="center" style="color: black; font-family: monospace;"><a href="index.php">Home</a> > Restaurants</h5>
                             
                             <div class="col-lg-12 col-xs-12 input-group" style="padding: 0px;">
                                <select class=" form-control" style="width: 100%;">
                                    <option>Sort By :</option>
                                    <option>Popularity</option>
                                    <option>Ratings</option>
                                    <option>Minimum order value</option>
                                    <option>Delivery fee</option>
                                    <option>Fastest delivery</option>
                                </select>
                            </div>
                             <div class="col-lg-12" align="center" style="padding: 5px;">
                                 <h3 style="color: #269abc; font-family: monospace; background-color: white; padding: 5px;"><i class="fa fa-filter" aria-hidden="true"></i> Filter</h3><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;"> Filter Restaurants</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Preorder Available</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Deals</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Online Payment Available</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">People's Choice</a>
                             </div>
                             <div class="col-lg-12" align="center" style="padding: 5px;">
                                 <h3 style="color: #269abc; font-family: monospace; background-color: white; padding: 5px;"><i class="fa fa-cutlery" aria-hidden="true"></i> Cuisines</h3><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Chinese</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">North India</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Biryani</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Kebab</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Italian</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Sandwiches</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Seafood</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Thai</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Snacks</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Continental</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Salads</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">South India</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Burgers</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Fast Food</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Regional</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Pizza</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Punjabi</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Wraps</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">American</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Bengali</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Mughlai</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Snacks and Smoothies</a><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;">Tibetan</a><br>
                             </div>
                         </div>
                         <div class="col-lg-9">
                             <div class="col-lg-12" style="background-color:rgba(192,192,192,0.2); padding: 10px; margin-top: 10px; margin-bottom: 10px; border-radius: 4px;">
                                    <div class="col-lg-2" style="border: 2px solid rgba(192,192,192,0.5); padding: 0px; border-radius: 4px;">
                                        <img src="img/ma.jpg" style=" width: 100%; height: 100px; ">
                                    </div>
                                    <div class="col-lg-4">
                                        <h3 style="color: #269abc; font-family: monospace;">Hungry Hub</h3>
                                        <h5>Burger, Snakes, Sandwiches</h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-lg-offset-1 col-lg-4">
                                        <h4 style="color: #269abc; font-family: monospace; padding-top: 30px;">Delivering in 60 Min </h4>
                                    </div>
                                    <div class="col-lg-1">
                                        <i class="fa fa-angle-right fa-5x" aria-hidden="true" style=" margin-top: 12px; color: #269abc;"></i>
                                    </div>
                             </div>   
                             <div class="col-lg-12" style="background-color:rgba(192,192,192,0.2); padding: 10px; margin-top: 10px; margin-bottom: 10px; border-radius: 4px;">
                                    <div class="col-lg-2" style="border: 2px solid rgba(192,192,192,0.5); padding: 0px; border-radius: 4px;">
                                        <img src="img/ma.jpg" style=" width: 100%; height: 100px; ">
                                    </div>
                                    <div class="col-lg-4">
                                        <h3 style="color: #269abc; font-family: monospace;">Hungry Hub</h3>
                                        <h5>Burger, Snakes, Sandwiches</h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-lg-offset-1 col-lg-4">
                                        <h4 style="color: #269abc; font-family: monospace; padding-top: 30px;">Delivering in 60 Min </h4>
                                    </div>
                                    <div class="col-lg-1">
                                        <i class="fa fa-angle-right fa-5x" aria-hidden="true" style=" margin-top: 12px; color: #269abc;"></i>
                                    </div>
                             </div> 
                             <div class="col-lg-12" style="background-color:rgba(192,192,192,0.2); padding: 10px; margin-top: 10px; margin-bottom: 10px; border-radius: 4px;">
                                    <div class="col-lg-2" style="border: 2px solid rgba(192,192,192,0.5); padding: 0px; border-radius: 4px;">
                                        <img src="img/ma.jpg" style=" width: 100%; height: 100px; ">
                                    </div>
                                    <div class="col-lg-4">
                                        <h3 style="color: #269abc; font-family: monospace;">Hungry Hub</h3>
                                        <h5>Burger, Snakes, Sandwiches</h5>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-lg-offset-1 col-lg-4">
                                        <h4 style="color: #269abc; font-family: monospace; padding-top: 30px;">Delivering in 60 Min </h4>
                                    </div>
                                    <div class="col-lg-1">
                                        <i class="fa fa-angle-right fa-5x" aria-hidden="true" style=" margin-top: 12px; color: #269abc;"></i>
                                    </div>
                             </div> 
                             
                         </div>
                     </div>
                 </div>
            </section>


@endsection