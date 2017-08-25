 <!DOCTYPE html">
    <html lang="en">
    <head>
	    <title>Foody Search</title>
	    <!--font css-->
	    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans" rel="stylesheet">
	    <!--bootstrap css-->
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	    <link rel="stylesheet" type="text/css" href="css/mycss/userHome.css">
	    <!--My responsive-->
	    <link rel="stylesheet" type="text/css" href="css/mycss/Responsive.css">
	    <!--Front awasom-->
	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#services">Services</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user" aria-hidden="true"></i> <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> View Profile</a></li>
                    <li><a href="logout.php?logout=true"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
                  </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div> 
    </nav>


    <div class="clearfix"></div>

        <section class="upper">
            <div class="container">
                <div class="col-lg-2" style=" border: 3px solid white; margin-top: 197px; background-color: white; padding: 0px; border-radius: 3px;">
                    <img src="img/admin/mxcpGProxpt.jpg" style=" width: 100%; height: 150px;"> 
                    <h4 align="center" style="font-family: monospace; color: white; background-color: black;  padding: 2px;"> Edit <i class="fa fa-cog" aria-hidden="true"></i></h4>
                    <h4 align="center" style="font-family: monospace; color: black;">welcome : </h4>
                    <h5 align="center" style="font-family: monospace; color: black;">(+91) </h5>
                </div>
                
                    <div class="col-lg-offset-2 col-lg-4"align="center" style="margin-top: 110px; color: white;  padding: 8px; background-color:rgba(192,192,192,0.4); border: 1px solid black; border-radius: 3px;">
                        <i class="fa fa-map-marker fa-2x" aria-hidden="true" style=" color: black;"></i> 
                        <h4 style=" font-family: monospace; color: black;">14/1 Rishra, Hooghli - 712250</h4>
                        <button class="btn btn-default">Change Location</button>
                    </div>
                
            </div>
        </section>    

        <!--script--><!--script-->
	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!--script--><!--script-->
    </body>
</html>