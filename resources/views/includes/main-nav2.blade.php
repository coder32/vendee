<header class="site-header">
    <div class="spr spr-gr-S-GB-1"></div>
    <nav class="navbar navbar-theme">
        <div class="container-fluid">
            <div class="col-xs-1"></div>
            <div class="col-xs-2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand-wrap">
                        <a class="navbar-brand" href="#">
                            <img src="assets/img/site-header-logo.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-9">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="./">Home</a></li>
                                <li><a href="{{ URL::asset('/users') }}">Dashboard</a></li>
                                <li><a href="{{ URL::asset('/skills') }}">Skill</a></li>
                                <li><a href="{{ URL::asset('/testimonial') }}">Testimonial</a></li>
                                <li><a href="{{ URL::asset('/jobs') }}">Find Work</a></li>
                                <li class="audio-toggle"><a href="#"><i class="fa fa-volume-up"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 pull-right">
                        <a href="login" class="btn btn-md btn-SG-outline buttonDistance" ><i class="fa fa-key" aria-hidden="true"></i> Login</a>
                        <a href="register" class="btn btn-md btn-SB"><i class="fa fa-lock" aria-hidden="true"></i> Signup</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="spr spr-SG"></div>
    @include('../includes/trending-nav')
</header>