@extends ('Admin.Authentication.layoutauth')

@section ('content')

    <div class="container-fluid">
        <div class="row-fluid" >       
            <div class="col-md-offset-4 col-md-4" id="box">
                <h2 class="style_10">Set Password</h2>
                <hr>               
                <form class="form-horizontal" action="" method="post" id="contact_form" enctype="multipart/form-data">
                        <fieldset>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                        <input name="r_password" placeholder="Password" class="form-control" type="password" required="true">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group">                              
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                        <input name="r_conf_password" placeholder="Confirm Password" class="form-control" type="password" required="true">
                                    </div>
                                </div>
                            </div>                                                        
                            <div class="form-group">
                                <div class="col-md-12 btn-adjust">
                                    <button type="submit" name="register" id="register" class="btn btn-md btn-danger pull-right">Set Password</button>
                                    <div class="signup-link">
                                        <small>Already have admin account. please</small> <a href="/adminlogin">Login</a> <small> here</small>
                                    </div>
                                </div> 
                                
                            </div>

                        </fieldset>
                    </form>
            </div>
        </div>        
    </div>

@endsection