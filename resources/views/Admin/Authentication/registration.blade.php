@extends ('Admin.Authentication.layoutauth')

@section ('content')

    <div class="container-fluid">
        <div class="row-fluid" >       
            <div class="col-md-offset-4 col-md-4" id="box">
                <h2 class="style_10">Admin Registration</h2>
                <hr>               
                <form class="form-horizontal" action="" method="post" id="contact_form" enctype="multipart/form-data">
                        <fieldset>
                            <!-- Form Name -->
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input name="r_name" placeholder="Name" class="form-control" type="text" required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                        <input name="r_email" placeholder="E-mail" class="form-control" type="email" required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                        <input name="r_phone" placeholder="+91" class="form-control" type="phone" required="true">
                                    </div>
                                </div>
                            </div>                                                        
                            <div class="form-group">
                                <div class="col-md-12 btn-adjust">
                                    <button type="submit" name="register" id="register" class="btn btn-md btn-danger pull-right">Registration</button>
                                    <div class="signup-link">
                                        <small>Already have admin account. please</small> <a href="/login">Login</a> <small> here</small>
                                    </div>
                                </div> 
                                
                            </div>

                        </fieldset>
                    </form>
            </div>
        </div>        
    </div>

@endsection