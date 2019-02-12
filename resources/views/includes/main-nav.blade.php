<!-- Wrapper -->
<div id="wrapper" class="fullwidth">
    <!-- Header Container
    ================================================== -->
    <header id="header-container">
        <!-- Header -->
        @if (Route::has('login'))
        <div id="header">
            @if (Auth::check())
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                       {{-- <a href="{{ URL::asset('/home') }}"><img src="{{ URL::asset('assets/img/site-header-logo.png') }}" data-sticky-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" data-transparent-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" alt=""></a>
--}}
                        <a class="hidden-xs" href="{{ URL::asset('/home') }}"><img src="{{ URL::asset('assets/img/site-header-logo.png') }}" data-sticky-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" data-transparent-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" alt=""></a>
                        <a class="hidden-lg hidden-md hidden-sm" href="{{ URL::asset('/home') }}"><img src="{{ URL::asset('assets/img/logo-res.png') }}" data-sticky-logo="{{ URL::asset('assets/img/logo-res.png') }}" data-transparent-logo="{{ URL::asset('assets/img/logo-res.png') }}" alt=""></a>
                    </div>

                    <!-- Main Navigation -->

                    <nav id="navigation">

                        <ul id="responsive">

                            <li><a href="{{ URL::asset('/about') }}">About</a></li>
                            <li><a href="{{ URL::asset('/jobs') }}">Find Work</a></li>
                            <li><a href="{{ URL::asset('/skills') }}">Skills</a></li>
                            <li><a href="{{ URL::asset('/testimonial') }}">Testimonial</a></li>
                            <li><a href="{{ URL::asset('/courses') }}">Courses</a></li>


                        </ul>
                    </nav>
                    <?php  $notifications  = (Session::get('notifications')); ?>
                    <div class="right-side" >
                        <div class="header-widget hide-on-mobile">
                            <div class="header-notifications">
                                <div class="header-notifications-trigger"> <a href="#" id="notification_a"><i class="icon-feather-bell" ></i>@if(is_array($notifications) && count($notifications) > 0)<span id="notificationSpinner">{{count($notifications)}}</span>@endif</a> </div>
                                <div class="header-notifications-dropdown">
                                    <div class="header-notifications-headline">
                                        <h4>Notifications</h4>
                                    </div>
                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul id="top_notification_list">

                                                @if(is_array($notifications))
                                                    @foreach($notifications as $notification)
                                                        <li class="notifications-not-read"> <a href="{{url('/users/notification', $notification->id)}}"> <span class="notification-icon"><i class="icon-material-outline-group"></i></span> <span class="notification-text">  {{$notification->title}} <span class="color">{{$notification->description}}</span> </span> </a> </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{url('users/notification', 0)}}" class="header-notifications-button ripple-effect button-sliding-icon">View All Notifications<i class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                            </div>
                            <div class="header-notifications">

                                <?php $messages  = (Session::get('messages'));?>
                                <div class="header-notifications-trigger"> <a href="#" id="message_a"><i class="icon-feather-mail"></i>@if(is_array($messages) && count($messages) > 0 )<span id="messageSpinner"> {{count($messages)}}</span> @endif </a> </div>
                                    <div class="header-notifications-dropdown">
                                    <div class="header-notifications-headline">
                                        <h4>Messages</h4>
                                    </div>
                                    <div class="header-notifications-content">
                                        <div class="header-notifications-scroll" data-simplebar>
                                            <ul id="top_message_list">

                                                    @if(is_array($messages))
                                                    @foreach($messages as $message)
                                                        <li class="notifications-not-read"> <a href="{{ route(USERS.'.message.index', $message->id) }}"> <span class="notification-avatar status-online"><img src="{{ URL::asset('assets/img/site-header-logo.png') }}" alt=""></span>
                                                                <div class="notification-text">
                                                                    <p class="notification-msg-text">{{$message->text}}</p>
                                                                    <span class="color">{{$message->created_at}}</span> </div>
                                                            </a> </li>
                                                    @endforeach
                                                   @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{{url('users/messages')}}" class="header-notifications-button ripple-effect button-sliding-icon">View All Messages<i class="icon-material-outline-arrow-right-alt"></i></a> </div>
                                </div>
                            </div>
                        <div class="header-widget">
                            <div class="header-notifications user-menu">
                                <div class="header-notifications-trigger"> <a href="#">
                                        <div id="useronline_0" class="user-avatar status-online"><img src="@if(auth()->user()->image != null){{ url('uploads/profile', auth()->user()->image)}}@else{{ url('uploads/profile/avatar0.png')}}@endif"  style="height: 40px;" class="img img-thumbnail"></div>
                                   {{ Auth::user()->name }} </div>  </a>
                                <div class="header-notifications-dropdown">
                                    <div class="user-status">
                                        <div class="user-details">
                                            <div id="useronline_1" class="user-avatar @if(auth()->user()->is_online)status-online @endif"><img src="@if(auth()->user()->image != null){{ url('uploads/profile', auth()->user()->image)}}@else{{ url('uploads/profile/avatar0.png')}}@endif" style="height: 40px" class="img img-thumbnail"></div>
                                            <div class="user-name"> <span>{{auth()->user()->role->name}}</span> {{ Auth::user()->name }}<br/>
                                                <small>Available Balance :- </small> <br> <p class="note-priority outline-red high">@if(auth()->user()->account != null){{auth()->user()->account->amount}} $ @else 0.0 $ @endif</p>
                                            </div>
                                        </div>
                                        <div class="status-switch" id="snackbar-user-status">
                                            <label id="online_status" class="user-online @if(auth()->user()->is_online) current-status @endif"> &nbsp;Online</label>
                                            <label id="onffline_status" class="user-invisible @if(!auth()->user()->is_online) current-status @endif"> &nbsp;&nbsp;Invisible</label>
                                            <span class="status-indicator" aria-hidden="true"></span> </div>
                                    </div>
                                    <ul class="user-menu-small-nav">
                                        <li><a href="{{ URL::asset('/users') }}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                        <li><a href="{{ route(USERS.'.profile') }}"><i class="icon-material-outline-account-circle"></i> Profile</a></li>
                                        <li><a href="{{ route(USERS.'.portfolio') }}"><i class=" icon-material-outline-folder"></i> Portfolio</a></li>
                                        <li><a href="{{ route(USERS.'.setting') }}"><i class=" icon-material-outline-settings"></i> Settings</a></li>
                                        <li><a href="{{ URL::asset('/logout') }}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <span class="mmenu-trigger">
        <button class="hamburger hamburger--collapse" type="button"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </button>
        </span> </div>

                    <div class="clearfix"></div>
                </div>
                {{--<div class="right-side">

                    <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>
                </div>--}}
                <!-- Right Side Content / End -->

            </div>
            @else
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="left-side">

                        <!-- Logo -->
                        <div id="logo">
                           {{-- <a href="{{ URL::asset('/') }}"><img src="{{ URL::asset('assets/img/site-header-logo.png') }}" data-sticky-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" data-transparent-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" alt=""></a>--}}
                            <a class="hidden-xs" href="{{ URL::asset('/home') }}"><img src="{{ URL::asset('assets/img/site-header-logo.png') }}" data-sticky-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" data-transparent-logo="{{ URL::asset('assets/img/site-header-logo.png') }}" alt=""></a>
                            <a class="hidden-lg hidden-md hidden-sm" href="{{ URL::asset('/home') }}"><img src="{{ URL::asset('assets/img/logo-res.png') }}" data-sticky-logo="{{ URL::asset('assets/img/logo-res.png') }}" data-transparent-logo="{{ URL::asset('assets/img/logo-res.png') }}" alt=""></a>
                        </div>

                        <!-- Main Navigation -->

                        <nav id="navigation">

                            <ul id="responsive">

                                <li><a href="{{ URL::asset('/about') }}">About</a></li>
                                <li><a href="{{ URL::asset('/jobs') }}">Find Work</a></li>
                                <li><a href="{{ URL::asset('/skills') }}">Skills</a></li>
                                <li><a href="{{ URL::asset('/testimonial') }}">Testimonial</a></li>
                                <li><a href="{{ URL::asset('/courses') }}">Courses</a></li>

                            </ul>
                        </nav>

                        <div class="clearfix"></div>
                    </div>
                    <div class="right-side">
                        <nav id="navigation">
                            <ul id="responsive">
                                <li><a class="btn btn-danger ripple-effect" href="{{ URL::asset('/login') }}" ><i class="fa fa-key"></i>LOG IN</a></li>
                                <li><a class="btn btn-dark ripple-effect" href="{{ URL::asset('/register') }}" ><i class="fa fa-lock"></i>SIGN UP</a></li>

                            </ul>
                        </nav>
                        <span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>
                    </div>
                    </div>
                    <!-- Right Side Content / End -->

            @endif
        </div>
        <!-- Header / End -->
        @endif
    </header>
    <div class="clearfix"></div>

   {{-- <script>
        alert(document.getElementById('messageSpinner').innerText);
    </script>--}}
