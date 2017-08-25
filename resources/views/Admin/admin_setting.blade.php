@extends ('Admin.adminlayouts')

@section ('content')
    <link rel="stylesheet" href="css/Mycss/side.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Mycss/settings.css" rel="stylesheet">
    <form action="" method="post" id="owner_info" enctype="multipart/form-data">
            <div class="row" id="holder">
                <h4 class="col-lg-offset-1 col-lg-11 style_10">Edit Owner's Info :</h4> 
                <div align="center" class="col-lg-offset-1 col-lg-1" id="left">
                    <i class="fa fa-adn fa-2x" aria-hidden="true"></i>
                    <h6 class="style_10">Owner's Name</h6>                    
                </div>
                <div class="col-lg-6" id="reight">
                    <div class="form-group"> 
                        <input type="text" class="form-control" class="owner_name" id="owner_name" placeholder="Owner's Name">                                            
                    </div>    
                </div>
            </div>
            <div class="row" id="holder">
                <div align="center" class="col-lg-offset-1 col-lg-1" id="left">
                    <i class="fa fa-mobile fa-2x" aria-hidden="true"></i>
                    <h6 class="style_10">Owner's Mobile No.</h6>                    
                </div>
                <div class="col-lg-6" id="reight">
                    <div class="form-group"> 
                        <input type="text" class="form-control" class="restauran_mobile" id="restauran_mobile" placeholder="+91">   
                    </div>    
                </div>
            </div>  
            <div class="row" id="holder">
                <div align="center" class="col-lg-offset-1 col-lg-1" id="left">
                    <i class="fa fa-unlock-alt fa-2x" aria-hidden="true"></i>
                    <h6 class="style_10">Owner's Password</h6>                    
                </div>
                <div class="col-lg-6" id="reight">
                    <div class="form-group"> 
                        <input type="text" class="form-control" class="restauran_password" id="restauran_password" placeholder="Password">   
                    </div>    
                </div>
            </div>
            <div class="row" id="holder">
                <div align="center" class="col-lg-offset-1 col-lg-1" id="left">
                    <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
                    <h6 class="style_10">Upload Owner's Photo</h6>                    
                </div>
                <div class="col-lg-6" id="reight">
                    <div class="form-group"> 
                        <input type="file" class="form-control" id="file" name="dp_path" required="true">
                    </div>    
                </div>
            </div>
            <div class="row" id="holder">
                <div class="col-lg-offset-2 col-lg-6">
                    <button type="button" class="btn btn-primary btn-md btn-block" style="font-family: monospace; font-weight: bold; font-size: larger; ">Edit Owner's Info</button>
                </div>
            </div>
        </form>

@endsection