@extends ('Admin.Authentication.layoutauth')

@section ('content')

    <div class="container-fluid">
        <div class="row-fluid" >       
            <div class="col-md-offset-4 col-md-4" id="box">
                <h2 class="style_10">Admin Login</h2>
                <hr>
                <form class="form-horizontal" action="" method="post" id="contact_form">
                    <fieldset>
                        <!-- Form Name -->
                        <!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                    <input name="r_email" placeholder="Email" id="r_eamil" class="form-control" type="email">
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                    <input name="r_password" placeholder="Password" id="r_password" class="form-control" type="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 btn-adjust">
                                <button type="submit" name="login" id="login" class="btn btn-md btn-danger pull-right">Login</button>
                                <div class="signup-link">
                                    <small>don't have admin account. please</small> <a href="/register">Signup</a> <small> here</small>
                                </div>
                            </div> 
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>        
    </div>

@endsection