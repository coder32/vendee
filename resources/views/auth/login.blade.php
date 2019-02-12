

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
<body class="bg_signup">
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
                                <a href="home">
                                   <h3><img alt="vendee.com" src="front/images/logo.png"></h3>
                                </a>
                            </div>
                            <div class="social-right">
                                <div class="social-link">
                                    <div class="loginWithtw"> <button data-gapiattached="true"><b><img src="front/images/Twitter-Icon.png" width="20" alt="vendee"></b>Log in with Twitter</button></div>
                                    <div class="loginWithGg"> <button id="customBtn" data-gapiattached="true"><b><img src="front/images/google.png" width="25" alt="vendee"></b>Log in with Google</button></div>
                                    <div class="loginWithFb"><a onclick="facebook_signup();" href="javascript:void(0);" class="fl"><b>f</b>Log in with Facebook</a></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="reg_sec">
                                    <h4>Member Sign In</h4>
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning">
                                            {{ session('warning') }}
                                        </div>
                                    @endif


                                    <form role="form" method="POST" action="{{ url('/login') }}" id="login-form">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                        <div  class="icon-addon addon-lg{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                                            <i class="icon-material-baseline-mail-outline"></i>
                                            <input type="Email" id="inp" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                                        </div>
                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block mb-3 d-inline-block text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                        <div class="form-group">
                                        <div class="icon-addon addon-lg{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                                            <i class="icon-material-outline-lock"></i>
                                            <input type="password" id="inp" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        </div>

                                        @if ($errors->has('password'))
                                            <span class="help-block mb-3 d-inline-block text-danger">{{ $errors->first('password') }}</span>
                                        @endif

                                        <div class="clearfix"></div>
                                        <div class="form-group">
                                            <div class="icon-addon addon-lg">
                                                <img src="front/images/input.png">
                                            </div>
                                        </div>
                                        <div class="checkbox m-b-tx">
                                            <input id="checkbo" type="checkbox" style="margin-left: 0px;">
                                            <label for="checkbo">
                                                Stay automatically logged in for 7 days.
                                            </label>
                                        </div>



                                        <div class="text-center">
                                        <!-- Button -->
                                        <button class="btn_pink_1" style="display: block; margin-bottom: 10px;" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="signup_right">
                                    <h4>New to Vendee</h4>
                                    <p>Get started now. It's fast and easy!</p>
                                    <a href="register" class="btn-danger btn_pink_1 m-b-tx" style="display: block; margin-bottom: 10px;">Register</a>
                                </div>
                            </div>
                        </div>
                        <div class="hr m-0">
                            <div class="signup_footer">
                                <div class="col-sm-7">
                                    <p>Copyrights 2018 vendee Vendee.com. All Rights Reserved.</p>
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

