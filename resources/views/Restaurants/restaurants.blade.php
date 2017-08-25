@extends ('User.userlayouts')


@section ('content')

<style>
    .restaurants {
   height: 350px;
    width: 100%;
    padding-top: 100px;
    background:url('img/mxcppizza_tomatoes_olives_mushrooms_cheese_dish_leaves_food_93326_1920x1080.jpg') no-repeat center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; 
}
</style>
            <section class="restaurants">
                 <div class="container">
                     <div class="row">
                         
                        <div class="col-lg-offset-3 col-lg-6  col-md-offset-3 col-md-6 col-xs-12" style="color: white; padding: 5px; border-radius: 3px; border: 1px solid #b92c28; background-color:rgba(255,255,255,0.5);">
                            <div class="col-lg-offset-5 col-lg-2 col-md-offset-4 col-md-4 col-xs-offset-4 col-xs-4" style="border: 3px solid #b92c28; padding: 0px; border-radius: 5px; position: relative; bottom: 50px;">
                                <img src="img/ma.jpg" style=" width: 100%; height: 90px; ">
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-xs-12" style="position: relative; bottom:60px;">
                                    <h1 align="center" style="color: #b92c28; font-family: 'Kaushan Script', cursive;">Pizza Hut</h1>
                                    <h4 align="center" style="color: black; font-family: monospace;">Italian, Pizza</h4>
                                <div  align="center" style=" color:  #b92c28; font-weight: bold;">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>       
                            </div>                         
                        </div>
                                                  
                     </div>
                 </div>
            </section>

            <section class="main_content">
                <div class="container">
                    <div class="row">  
                        
                        <div class="col-lg-3" style="padding: 5px; background-color:rgba(192,192,192,0.4); border-radius: 5px;">
                             <h5 align="center" style="color: black; font-family: monospace;"><a href="index.php">Home</a> > Restaurants</h5>

                             <div class="col-lg-12" align="center" style="padding: 5px;">
                                 <h3 style="color: #269abc; font-family: monospace; background-color: white; padding: 5px;"><i class="fa fa-ticket" aria-hidden="true"></i> Offers</h3><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;"> Special Offer On Medium</a><br>                                            
                             </div>

                             <div class="col-lg-12" align="center" style="padding: 5px;">
                                 <h3 style="color: #269abc; font-family: monospace; background-color: white; padding: 5px;"><i class="fa fa-bars" aria-hidden="true"></i> Menu</h3><br>
                                 <a href="#" style="color: #269abc; font-family: monospace;"> Popular Products</a><br>                                             
                             </div>
                        </div> 
                        
                        <div class="col-lg-6">
                            <div class="col-lg-12">                              
                                <ul class="nav navbar-nav">
                                    <li style="margin-left: 50px; margin-right: 50px;">
                                        <a href="#Menu" data-toggle="tab" style="font-family: 'Kaushan Script', cursive; color: #000000;">Menu</a>
                                    </li>
                                    <li style="margin-left: 50px; margin-right: 50px;">
                                        <a href="#Reviews" data-toggle="tab" style="font-family: 'Kaushan Script', cursive; color: #000000;">Reviews</a>
                                    </li>
                                    <li style="margin-left: 50px; margin-right: 50px;">
                                        <a href="#Info" data-toggle="tab" style="font-family: 'Kaushan Script', cursive; color: #000000;">Info</a>
                                    </li>
                                </ul>                   
                            </div>

                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="Menu" style="padding-top: 50px;">
                                    <h3 align="center" style="color: #e38d13; font-family: 'Kaushan Script', cursive;">Popular Products</h3> 
                                    <div class="col-lg-5" style=" margin: 22px;padding: 0px; box-shadow: 1px 1px 12px #000000; border-radius: 4px;">
                                        <img src="img/4369279474_d3536a504d_b.jpg" style="width: 100%; height: 180px;">
                                        <h4 style="font-family: 'Kaushan Script', cursive; margin-left: 10px;"><i class="fa fa-square-o" aria-hidden="true" style="color: red;"></i> Biriyani</h4>
                                        <h5 style="font-family: 'Kaushan Script', cursive; margin-left: 10px;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>
                                    </div>
                                    <div class="col-lg-5" style=" margin: 22px;padding: 0px; box-shadow: 1px 1px 12px #000000; border-radius: 4px;">
                                        <img src="img/Biryani (1).jpg" style="width: 100%; height: 180px;">
                                        <h4 style="font-family: 'Kaushan Script', cursive; margin-left: 10px;"><i class="fa fa-square-o" aria-hidden="true" style="color: green;"></i> Biriyani</h4>
                                        <h5 style="font-family: 'Kaushan Script', cursive; margin-left: 10px;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>
                                    </div> 
                                    <h5 style="font-family: monospace; color: #e38d13;">Quick Bites</h5>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Mochar Chop (2 Pcs)</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a> 
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Biriyani</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a>  
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                    <h5 style="font-family: monospace; color: #e38d13;">Starters › Non-Veg</h5>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Bhetki Rongpuri Fry</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a>  
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Mini Jumbo Elish Maach Bhaja</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a>  
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                    <h5 style="font-family: monospace; color: #e38d13;">Main Course › Veg Main Course</h5>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Bhetki Rongpuri Fry</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a>  
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Mini Jumbo Elish Maach Bhaja</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a>  
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                    <h5 style="font-family: monospace; color: #e38d13;">Main Course › Chicken Main Course</h5>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Murgir Jhol</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a>  
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                        <h6 style="font-family: monospace;"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color: green;"></i> Chicken Curry</h6>  
                                        </div>
                                        <div class="col-lg-offset-3 col-lg-1">
                                        <a href="#"><i class="fa fa-plus-square-o" aria-hidden="true" style=" padding: 10px; color: red;"></i></a>  
                                        </div>
                                        <div class="col-lg-offset-0 col-lg-2">
                                        <h5 style="font-family: 'Kaushan Script', cursive;"><i class="fa fa-inr" aria-hidden="true"></i> 120</h5>  
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Reviews" style="padding-top: 50px;">                                 
                                        <h3 style="color: #e38d13; padding-left: 30px; padding-bottom: 10px; font-family: 'Kaushan Script', cursive;">Reviews</h3>                                       
                                        <div class="col-lg-12" style=" background-color: white; margin-bottom: 10px; border-bottom: 1px solid #000000;">
                                            <div class="col-lg-6">
                                                <h5 style="color: #269abc; font-family: monospace;">
                                                    May 10,2017<br>
                                                    <i style="color:black;"> by Monish</i>
                                                </h5> 
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 style="color: #000000; font-family: monospace;">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </h5> 
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12" style=" background-color: white; margin-bottom: 10px; border-bottom: 1px solid #000000;">
                                            <div class="col-lg-6">
                                                <h5 style="color: #269abc; font-family: monospace;">
                                                    May 10,2017<br>
                                                    <i style="color:black;"> by Subho</i>
                                                </h5> 
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 style="color: #000000; font-family: monospace;">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </h5> 
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12" style=" background-color: white; margin-bottom: 10px; border-bottom: 1px solid #000000;">
                                            <div class="col-lg-6">
                                                <h5 style="color: #269abc; font-family: monospace;">
                                                    May 10,2017<br>
                                                    <i style="color:black;"> by Krishnandu</i>
                                                </h5> 
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 style="color: #000000; font-family: monospace;">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                </h5> 
                                            </div>
                                        </div>

                                </div>
                                
                                <div class="tab-pane fade" id="Info" style="padding-top: 50px;">
      
                                    <h3 style="color:#e38d13; padding-left: 22px; padding-bottom: 10px; font-family: 'Kaushan Script', cursive;">Restaurants Info</h3>
                                    <h4 style="color: #e38d13; font-family: monospace;"><i class="fa fa-cutlery" aria-hidden="true"></i> Cuisines</h4>
                                    <h5 style="color: #000000; font-family: monospace;">Food,Place and Location</h5>
                                    <legend style="border-bottom: 1px dashed #e38d13;"></legend>

                                    <div class=" col-lg-12" style="padding-bottom: 10px; padding: 0px;">                                              
                                            <h4 style="color: #e38d13; font-family: monospace;"><i class="fa fa-clock-o" aria-hidden="true"></i> Delivery hours</h4>
                                            <div class="col-lg-5">
                                                <div class="col-lg-12 input-group" style="padding: 0px;">
                                                    <select class=" form-control" style="width: 100%;">
                                                        <option>Delivery Days</option>
                                                        <option> Monday</option>
                                                        <option> Tuesday</option>
                                                        <option> Wednesday</option>
                                                        <option> Thursday</option>
                                                        <option> Friday</option>
                                                        <option> Saturday</option>
                                                        <option> Sunday</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="col-lg-12 input-group" style="padding: 0px;">
                                                    <select class=" form-control" style="width: 100%;">
                                                        <option>Time of Delivery</option>
                                                        <option>10:00 A.M</option>
                                                        <option>12:00 P.M</option>
                                                        <option>09:30 P.M</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12" style="margin-bottom:5px; border-bottom: 1px dashed #e38d13 ">
                                                <h4 style="color: #e38d13; font-family: monospace;"><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h4>
                                                <h5 style="color: #000000; font-family: monospace;">Place, Location of Resturents and Address</h5>
                                            </div>   

                                            <div class=" col-lg-6" style="background-color:#269abc; margin-bottom:20px; border:1px dashed #FFFFFF;">                                                           
                                                <h4 style="color: #000000; font-family: 'Kaushan Script', cursive;"><i class="fa fa-car" aria-hidden="true"></i> Delivery Fee</h4>
                                                <h6 style="color: #FFFFFF; font-family: monospace;">From Rs.0.00</h6>                                                      
                                                <h4 style="color: #000000; font-family: 'Kaushan Script', cursive;"><i class="fa fa-clock-o" aria-hidden="true"></i> Delivery Time</h4>
                                                <h6 style="color: #FFFFFF; font-family: monospace;">30 Mins</h6>                                                        
                                                <h4 style="color: #000000; font-family: 'Kaushan Script', cursive;"><i class="fa fa-money" aria-hidden="true"></i> Payment Types</h4>
                                                <h6 style="color: #FFFFFF; font-family: monospace;">Pay Online</h6>
                                                <h6 style="color: #FFFFFF; font-family: monospace;">Freecharge</h6>
                                                <h6 style="color: #FFFFFF; font-family: monospace;">Paytm, Paypal</h6>
                                                <h6 style="color: #FFFFFF; font-family: monospace;">Cash Payment</h6>  
                                            </div>
                                    </div>                                            
                                            
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-3" style="padding: 5px; background-color:rgba(192,192,192,0.4); border-radius: 5px;">
                            <div class="col-lg-12">
                                <h4  align="center" style="color: black;font-family: 'Kaushan Script', cursive;">Estimated Delivery Time</h4>                               
                                <h4 align="center" style="color: #269abc; font-family: monospace; background-color: white; padding: 5px;">
                                <i class="fa fa-clock-o" aria-hidden="true"></i> 30 Mins</h4>
                                
                                <div class="col-lg-12">    
                                    <h4  align="center" style="color: black; font-family: 'Kaushan Script', cursive;">Your Order</h4>
                                    <legend></legend>
                                    <a href="#" data-toggle="modal" data-target="#myModal">
                                    <img src="img/mxcpbag-icon.png" style=" width: 100%; height: 200px; margin-bottom: 5px;">
                                    <h6 align="center" style="color: #269abc; font-family: monospace;">Add menu items into your basket</h6>
                                    </a>
                                </div>                              
                            </div>
                            <div class="col-lg-12" style=" background-color: #269abc; border:1px dashed #FFFFFF;">
                                <h6 style="color: white; font-family: monospace;">Online payment avaliable</h6>
                                <h6 style="color: white; font-family: monospace;">Delivery minimum:</h6>
                                <h6 style="color: white; font-family: monospace;">Rr. 100/-</h6>
                                <h6 style="color: white; font-family: monospace;">Accepts Vouchers</h6>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <div class="col-lg-12" style="border-top: 1px dashed #FFFFFF; width: 100%; height: 100px; background-color: #269abc; padding-top: 25px; ">
                <div class="col-lg-offset-5 col-lg-2" style=" border: 1px dashed #FFFFFF;">
                    <i class="fa fa-facebook-official fa-2x" aria-hidden="true" style=" padding: 11px;"></i>
                    <i class="fa fa-youtube-square fa-2x" aria-hidden="true" style=" padding: 11px;"></i>
                    <i class="fa fa-instagram fa-2x" aria-hidden="true" style=" padding: 11px;"></i>
                    <i class="fa fa-twitter-square fa-2x" aria-hidden="true" style=" padding: 11px;"></i>
                </div>
            </div>

@endsection            