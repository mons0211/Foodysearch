@extends ('User.userlayouts')


@section ('content')
<div class="container" id="main-register">
        <div class="row main">
            <div class="col-lg-offset-4 col-lg-4">
                <div class="main-login main-center">
                   <h5 align="center" class="style_10">Sign up of free</h5>
                        <legend></legend>                       
                    <form method="POST" action="/registration">
                             {{ csrf_field() }}
                        <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="phone" id="phone"  placeholder="+91">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="conf_password" id="conf_password"  placeholder="Enter your Password">
                                </div>
                            </div>
                        </div>
                        <legend></legend>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                <button class="btn btn-primary btn-ms" type="submit" style="border-radius: 0; width: 250px">Register</button>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
                                <a href="/userlogin" button class="btn btn-info btn-ms pull-right" style="border-radius: 0; width: 80px">Login</button></a>
                            </div>          
                        </div>  

                    </form>
                </div>
            </div>    
        </div>
    </div>
@endsection