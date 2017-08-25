<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .style_10{
            color: white;
            text-shadow: 2px 2px 4px #000000; 
            font-size: 25px; 
            font-weight: 500; 
            padding: 5px; 
            font-family: 'Kaushan Script', cursive;
        }
        body{
            background:url(img/mxcpGProxpt.jpg);
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover; 
        }

        #box{
            border: 1px solid rgb(200, 200, 200);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
            background: rgba(200, 200, 200, 0.1);
            border-radius: 4px;
            top:100px;
        }
        
        h2{
            text-align:center;
            color:#fff;
        }
/*        .btn-adjust{
            margin-left: -15px;
        }
        .signup-link{
            margin-left: -15px;
            padding-top: 15px;
        }*/
    </style>
</head>
<body>

        @yield('content')
        

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>