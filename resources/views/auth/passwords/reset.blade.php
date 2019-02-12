@include('includes/header2')



@include('../includes/main-nav')
<div id="titlebar" class="gradient">
    <div class="container-fluid inner-banner" >
        <div class="container-fluid inner-banner" >
            <div class="container" >
                <div class="row">
                    <div class="col-md-8 col-xs-12 col-sm-12 col-lg-7 h-color min-caption">
                        <h2 data-qa="title" class="display-3 m-lg-bottom text-color h-color" >Discover The New Era Of Freelancing</h2>
                        <p data-qa="subtitle" class="clearfix m-sm-top p-0-left-right text-color h-color">Reshaping the way freelancers connect while also offering Blockchain courses, trainings and certification by top professionals and experts</p>

                    </div>

                </div>
            </div>
            <div class="clear30"></div>
        </div>
        <div class="clear30"></div>
    </div>
</div>


<!-- Page Content
================================================== -->


<div class="container">
    <div class="row">
        <div class="col-xl-5 offset-xl-3">


            <div class="login-register-page">
                <!-- Welcome Text -->
                <div class="welcome-text">
                    <h3>We're glad to see you again!</h3>
                    <span>Don't have an account? <a href="register">Sign Up!</a></span>
                </div>
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

            <!-- Form -->
                <form role="form" method="POST" action="{{ url('/password/reset') }}" id="login-form">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-with-icon-left{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                        <i class="icon-material-baseline-mail-outline"></i>
                        <input type="email" id="inp" class="input-text with-border" placeholder="Email Address" name="email" value="{{ $email or old('email') }}">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif




                    <div class="input-with-icon-left{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" id="inp" class="input-text with-border" name="password" placeholder="Password">
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif


                    <div class="input-with-icon-left{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                        <i class="icon-material-outline-lock"></i>
                        <input type="password" id="inp" class="input-text with-border" name="password_confirmation" placeholder="Password">
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                    @endif




                    <div class="clearfix"></div>



                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form"> Reset Password <i class="icon-material-outline-arrow-right-alt"></i></button>

                </form>

                <!-- Social Login -->

            </div>

        </div>
    </div>
</div>


<div class="margin-top-70"></div>

@include('../includes/footer')