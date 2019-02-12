<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('assets/img') }}/icon2.png" type="image/ico" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Vendee </title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('fifth/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('fifth/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('fifth/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::asset('fifth/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <link href="{{ URL::asset('fifth/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('fifth/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('fifth/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('fifth/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('fifth/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ URL::asset('fifth/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ URL::asset('fifth/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ URL::asset('fifth/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ URL::asset('fifth/build/css/custom.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>




</head>
<script>
    function limitText(field, maxChar){
        $(field).attr('maxlength',maxChar);
    }

</script>

<!--header-->

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url(ADMIN . '/') }}" class="site_title"><img src="{{ URL::asset('assets/img') }}/icon4.png" height="60px"> <span>Vendee</span></a>
                </div>

                <div class="clearfix"></div>
                @if (Auth::guest())
                    <h1>no user found ...!</h1>
                @else
                <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="{{ URL::asset('../storage/app/public/img') }}/{{ auth()->user()->image }}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome</span>
                            <h2>{{ auth()->user()->name }}</h2>
                        </div>
                    </div>
                @endif
            <!-- /menu profile quick info -->

                <br />

                <?php $r = \Route::current()->getAction() ?>
                <?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">

                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
                                        <a href="{{ route(ADMIN.'.dash') }}">
                                            <i class="fa fa-dashboard"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @if (auth()->user()->role->hasPermission('viewManager'))
                                <li><a><i class="fa fa-user-plus"></i>Managers<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.manager.index') }}"><i class="fa fa-circle-o"></i>List Managers</a></li>
                                    </ul>
                                </li>
                            @endif
                            @if (auth()->user()->role->hasPermission('viewModerator'))
                                <li><a><i class="fa fa-user"></i> Moderators <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.moderator.index') }}"><i class="fa fa-circle-o"></i>List Moderator</a></li>

                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('OwnerView'))
                                <li><a><i class="fa fa-arrow-circle-o-left"></i>Store Owner<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.owner.index') }}"><i class="fa fa-circle-o"></i>List Owner</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('OwnerView'))
                                <li><a><i class="fa fa-user"></i>Customer<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.customer.index') }}"><i class="fa fa-circle-o"></i>List Customer</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('Store'))
                                <li><a><i class="fa fa-stack-overflow"></i>Stores<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.store.index') }}"><i class="fa fa-circle-o"></i>List Store</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('Product'))
                                <li><a><i class="fa fa-book"></i>Products<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.product.index') }}"><i class="fa fa-circle-o"></i>List Products</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('Category'))
                                <li><a><i class="fa fa-angle-double-up"></i>Category<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.category.index') }}"><i class="fa fa-circle-o"></i>List Category</a></li>
                                    </ul>
                                </li>
                            @endif
                            @if (auth()->user()->role->hasPermission('SubCategory'))
                                <li><a><i class="fa fa-angle-double-up"></i>Sub Category<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.subCategory.index') }}"><i class="fa fa-circle-o"></i>List SubCategory</a></li>
                                    </ul>
                                </li>
                            @endif
                            @if (auth()->user()->role->hasPermission('childCategory'))
                                <li><a><i class="fa fa-angle-double-up"></i>List childCategory<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.childCategory.index') }}"><i class="fa fa-circle-o"></i>List childCategory</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('Attribute'))
                                <li><a><i class="fa fa-angle-down"></i>Attribute<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.attribute.index') }}"><i class="fa fa-circle-o"></i>List Attribute</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('Brand'))
                                <li><a><i class="fa fa-arrow-circle-o-left"></i>Brand<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.brand.index') }}"><i class="fa fa-circle-o"></i>List Brand</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if (auth()->user()->role->hasPermission('Bill'))
                                <li><a><i class="fa fa-arrow-circle-o-left"></i>Customer Bill<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route(ADMIN.'.UserBill.index') }}"><i class="fa fa-circle-o"></i>List Bill</a></li>
                                    </ul>
                                </li>
                            @endif







                            @if (auth()->user()->hasRole('Admin') || auth()->user()->hasRole('Manager'))
                                <li><a><i class="fa fa-dashboard"></i> Tools <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                         @if(auth()->user()->role->hasPermission('Roles'))
                                            <li><a href="{{ route(ADMIN.'.roles') }}"><i class="fa fa-circle-o"></i>Roles</a></li>
                                        @endif
                                        @if(auth()->user()->role->hasPermission('Logs'))
                                            <li><a href="{{ route(ADMIN.'.logs') }}"><i class="fa fa-circle-o"></i>Logs</a></li>
                                        @endif

                                        <li><a href="{{ route(ADMIN.'.contactus') }}"><i class="fa fa-circle-o"></i>Contact Us</a></li>
                                        <li><a href="{{ route(ADMIN.'.feedback') }}"><i class="fa fa-circle-o"></i>Feedback</a></li>
                                    </ul>
                                </li>
                            @endif



                        </ul>
                    </div>


                </div>

                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">

                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" style="float:right">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"  ></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="../storage/app/public/images/{{ Auth::user()->image }}" alt="">
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">

                                <li><a href="{{ url('admin\updatePassword') }}" >Change Password</a></li>
                                <li> <a href="{{ url('admin\profileedit', auth()->id()) }}" >Profile</a></li>

                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>
                                        Logout
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->