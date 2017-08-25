@extends ('Admin.Authentication.layoutauth')

@section ('content')

    <div class="container-fluid">
        <div class="row-fluid" >       
            <div class="col-md-offset-4 col-md-4" id="box">
                <h2 class="style_10">Admin OTP</h2>
                <hr>
                <form class="form-horizontal" action="" method="post" id="">
                    <fieldset>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-keyboard-o" aria-hidden="true"></i></span>
                                    <input name="otp" placeholder="OTP" id="otp" class="form-control" type="text">
                                </div>
                            </div>
                        </div>                       
                        <div class="form-group">
                            <div class="col-md-12 btn-adjust">
                                <button type="submit" name="login" id="login" class="btn btn-md btn-primary center-block">Send OTP</button>                              
                            </div> 
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>        
    </div>

@endsection