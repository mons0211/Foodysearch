@extends ('Admin.adminlayouts')

@section ('content')
    <link rel="stylesheet" href="css/Mycss/side.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Mycss/profile.css" type="text/css">
    <div id="wrapper">        
        <!-- Main Content -->       
        <div class="container-fluid">
            <div class="row">
                <div class="panel_profile">  
                    <div class="relative">
                        <a href="#" data-toggle="modal" data-target="#myModal">
                        <h1 class="absolute-text"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></h1>
                        </a>
                        <img src="img/mxcpaaba61f697f6e3adgb.jpg" class="img-respons">
                    </div>    
                    <div class="bg_cover">             
                        <img src="img/mxcpGProxpt.jpg" class="" style="width: 120px; height:118px;"></br>
                        <a href="#" data-toggle="modal" data-target="#myModal" style="font-family: monospace; text-decoration: none; "><h5><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Krishnandu Sarkar</h5></a>
                    </div>
                </div>
            
                <div id="panel">	
                    <ul  class="nav nav-pills">
                        <li class="active">
                            <a href="#1a" data-toggle="tab">Personal Info</a>
                        </li>
                        <li><a href="#2a" data-toggle="tab">Address</a>
                        </li>
                        <li><a href="#3a" data-toggle="tab">Change Password</a>
                        </li>
                    </ul>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="1a">
                            <div class="account_details">
                                <a href="adminLogout.php?logout=true" class="pull-right"><i class="fa fa-sign-out" aria-hidden="true"></i>  SIGN OUT</a>
                                <p class="details">Name <span>Krishnandu Sarkar</span></p> 
                                <p class="details">Email ID <span>Krishnandu@outlook.com</span></p> 
                                <p class="details">Mobile Number <span>9609191390</span></p> 
                                <p class="details">Date Of Birth <span>09/12/1997</span></p> 
                                <p class="details">Gender <span>male</span></p> 
                            </div>
                        </div>
                        <div class="tab-pane" id="2a">
  
                        </div>
                        <div class="tab-pane" id="3a">

                        </div>   
                    </div>
                    <hr>
                </div>

            </div>
        </div>
       
    </div>

@endsection