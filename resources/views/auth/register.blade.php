<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="front/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="front/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="front/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="front/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="front/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="front/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="front/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="front/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="front/css/style.css" />
    <link rel="stylesheet" type="text/css" href="front/css/easy-responsive-tabs.css" />
    <link rel="stylesheet" type="text/css" href="front/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="front/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="front/css/responsive.css" />
    <title>Fiffli</title>
</head>
<script type="text/javascript">
    onWantToWork = function(){
        $('#userType').val("freeLancer");
    }

    onWantToHire = function(){
        $('#userType').val("employer");
    }

</script>
<body class="bg_signup1">
<!-- end header -->
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <div class="page-content">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="signup_box">
                        <div class="hr m-0">
                            <div class="title3">
                                <h3><img alt="Vendee" src="front/images/logo.png" width="80"></h3>
                            </div>
                            <div class="social-right">
                                <div class="social-link">
                                    <div class="loginWithtw"> <button data-gapiattached="true"><b><img src="front/images/Twitter-Icon.png" alt="fiffli" width="24" height="24"></b>Log in with Twitter</button></div>
                                    <div class="loginWithGg"> <button id="customBtn" data-gapiattached="true"><b><img src="front/images/google.png" alt="fiffli" width="32" height="32"></b>Log in with Google</button></div>
                                    <div class="loginWithFb"><a onclick="facebook_signup();" href="javascript:void(0);" class="fl"><b>f</b>Log in with Facebook</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                         <form role="form" id="register-account-form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row" style="margin-top: 5%;">
                                    <div class="col-sm-6">
                                        <div class="form-group " style="margin-left: 30%; width:100%">
                                            <label for="freelancer-radio" class="btn btn-success" >
                                                 <input type="radio" onclick="onWantToWork()" name="account-type-radio" id="freelancer-radio" class="btn btn-lg btn-success" checked/>
                                           <i class="icon-material-outline-account-circle"></i> Customer</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div  class="form-group">
                                            <label for="employer-radio" class="btn btn-danger">
                                                    <input type="radio"  onclick="onWantToHire()" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
                                            <i class="icon-material-outline-business-center" ></i> Owner</label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="userType" name="userType">


                                <div class="reg_sec" style="margin-top: -10%">

                                    <div class="form-group">
                                        <div class="icon-addon addon-lg{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                                            <input type="text" class="form-control" name="name" required value="@if(isset($user) && $user->name != null){{$user->name}}@else{{old('name')}}@endif"  placeholder="Name">

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            <label class="fa fa-user" rel="tooltip" title="email"></label>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="icon-addon addon-lg{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                            <input type="email" class="form-control" name="email" value="@if(isset($user) && $user->email != null) {{$user->email}} @else {{ old('email') }}@endif" id="inp" placeholder="Email Address" required/>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <label class="fa fa-user" rel="tooltip" title="email"></label>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback" title="Should be at least 8 characters long" data-tippy-placement="bottom">
                                        <div class="icon-addon addon-lg">
                                            <input type="password" class="form-control"  name="password"  id="inp" placeholder="Password" required/>
                                            <label class="fa fa-lock" rel="tooltip" title="email"></label>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                                        <div class="icon-addon addon-lg">
                                            <input type="password" class="form-control" name="password_confirmation"  id="inp" placeholder="Repeat Password" required/>
                                            <label class="fa fa-lock" rel="tooltip" title="email"></label>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="checkbox m-t-2x">
                                        <label class="mib-checkBoxLabel"><input type="checkbox" class="mib-checkBox" required="required" >
                                            <span><a href="{{url('/terms')}}"> Accept Terms and conditions and Privacy Policy</a></span></label>
                                    </div>



                                    <button class="btn_pink_1" type="submit">Register <i class="icon-material-outline-arrow-right-alt"></i></button>


                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="signup_right">
                                    <h4>Return to Login</h4>
                                    <p>Already have an account?</p>
                                    <a href="login" class="btn_pink_1">Sign In</a>
                                </div>
                            </div>
                        </div>
                        </form>





                    <!-- Social Login -->
                        <div class="hr m-0">
                            <div class="signup_footer">
                                <div class="col-sm-7">
                                    <p>Copyrights 2019 fiffli pvt Ltd Fiffli.com. All Rights Reserved.</p>
                                </div>
                                <div class="col-sm-5">
                                    <div class="text-right">
                                        <a href="#"><img src="front/images/android.png" width="120" alt="Android"></a>
                                        <a href="#"><img src="front/images/apple.png" width="120" alt="App Store"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./page wapper-->
<!-- Footer -->
<!-- Footer -->

<!-- Script-->
<script type="text/javascript" src="front/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="front/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="front/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="front/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="front/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="front/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="front/js/theme-script.js"></script>
<script type="text/javascript" src="front/js/jquery.easyResponsiveTabs.js"></script>
<script type="text/javascript" src="front/js/owl.carousel.js"></script>

</body>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Please Login</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-6">
                    <div class="left_signin">
                        <h2>What is your email address?</h2>
                        <input type="text" class="form-control" name="">
                        <button type="button" class="btn btn_pink">Proceed</button>
                        <div class="checkbox">
                            <input id="checkbox1" type="checkbox">
                            <label for="checkbox1">
                                Keep me logged in
                            </label>
                        </div>
                        <h5 class="text-center"><a href="login.html">New to Fiffli? Sign-up now!</a></h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right_signin">
                        <h2>Sign in with your social account</h2>
                        <h4>No posts on your behalf, promise!</h4>
                        <button type="button" class="btn btn_fb">Facebook</button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</html>



