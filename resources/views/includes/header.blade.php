<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ URL::asset('front/images/favicon.ico" type="image/x-icon') }}"/>
    <title>Vendee</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('front/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- Font Awesome CSS -->
    <link href="{{ URL::asset('front/css/font-awesome.css') }}" rel="stylesheet" media="screen">
    <!-- Including Fonts CSS -->
    <link href="{{ URL::asset('front/css/fonts.css') }}" rel="stylesheet" media="screen">
    <!-- Custom styles -->
    <link href="{{ URL::asset('front/css/custom-style.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/menu.css') }}" />
    <!--Search bar style-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/lib/select2/css/select2.min.css') }}" />
    <!-- Custom styles -->
    <link href="{{ URL::asset('front/css/responsive-style.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/lib/jquery.bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/lib/owl.carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/lib/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/easy-responsive-tabs.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('front/css/owl.theme.default.min.css') }}" />





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body>

<!--Header-->
<div class="top-bar">
  <div class="row">
    <div class="col-md-2 col-xs-3">
      <div class="language">
        <div class="dropdown pt-3"> <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"> <span>English</span> </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><img alt="email" src="assets/images/en.jpg" />English</a></li>
            <li><a href="#"><img alt="email" src="assets/images/fr.jpg" />French</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-xs-9">
      <div class="top-s-links">
        <ul>
          <li><a href="#."><i class="fa fa-facebook"></i></a></li>
          <li><a href="#."><i class="fa fa-twitter"></i></a></li>
          <li><a href="#."><i class="fa fa-youtube"></i></a></li>
          <li><a href="#."><i class="fa fa-rss"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
<!--/.top-header --> 
<!-- MAIN HEADER -->
<div class=" main-header">
  <div class="row">
    <div class="col-md-2 col-sm-2 col-xs-12 logo"> <a href="index.html"><img alt="Vendee" src="assets/images/logo.jpg"/></a> </div>
    <div class="col-md-7 col-sm-6 col-xs-12 header-search-box">
      <form class="form-inline">
        <div class="form-group input-serach">
          <input type="text"  placeholder="Search Product...">
        </div>
        <div class="form-group form-categorys">
          <select class="select-category">
            <option value="0">Search product 1</option>
            <option value="1">Search product 2</option>
            <option value="2">Search product 3</option>
          </select>
        </div>
        <button type="submit" class="pull-right btn-search"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-12 p-sm-0">
      <div class="group-button-header">
        <div class="hr">
          <div class="user-links user-links2">
            <ul>
              <li><a href="#.">Sell with Us</a></li>
              <li><a href="#.">Open Store</a></li>
              <li><a href="#.">Download App</a></li>
            </ul>
          </div>
        </div>
        <div class="hr m-0">
          <div class="pull-right"><div class="col-lft">
            <div class="hr m-0">
              <div class="user-links pull-left">
                <ul class="pull-left">
                  <li><a href="login.html">Login</a></li>
                  <li><a href="signup.html">Signup</a></li>
                </ul>
              </div>
            </div>
            <div class="language">
              <div class="dropdown"> <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"> <span class="font-lg font-bold"> My Account</span> </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Login</a></li>
                  <li><a href="#">New Customer Signup</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-rgt">
            <div class="favorite"><a href="wishlist.html">0</a></div>
            <div class="cart"><a href="cart.html">5</a></div>
          </div></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MANIN HEADER -->
<div class="clearfix"></div>
<div id="nav-top-menu" class="nav-top-menu">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-3 m-t-1x">
        <div class="cd-dropdown-wrapper"> <a class="cd-dropdown-trigger" href="#0"><i class="fa fa-bars"></i> Categories</a>
          <nav class="cd-dropdown">
            <h2>Categories</h2>
            <a href="#0" class="cd-close">Close</a>
            <ul class="cd-dropdown-content">
              <li class="has-children"> <a href="#.">Clothing</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="categories.html">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-0"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Electronics</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-1"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Sports & equipments</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-2"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Mobile Phones</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-3"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Clothing</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-0"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Electronics</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-1"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Sports & equipments</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-2"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Mobile Phones</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-3"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Clothing</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-0"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Electronics</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-1"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Sports & equipments</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-2"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Mobile Phones</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-3"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Clothing</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-0"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Electronics</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-1"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Sports & equipments</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-2"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Mobile Phones</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-3"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Clothing</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-0"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Electronics</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-1"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Sports & equipments</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-2"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li class="has-children"> <a href="#.">Mobile Phones</a>
                <ul class="cd-secondary-dropdown bg_1 is-hidden">
                  <li class="go-back"><a href="#0">Menu</a></li>
                  <li class="has-children"> <a href="#.">Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">Televisions</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Accessories</a></li>
                      <li><a href="#.">Glasses</a></li>
                      <li><a href="#.">Gloves</a></li>
                      <li><a href="#.">Jewellery</a></li>
                      <li><a href="#.">Scarves</a></li>
                    </ul>
                    <a href="#.">All Books</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Car Accessories</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children"> <a href="#.">Home Entertainment</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                    <a href="#.">Printers & Cartridges</a>
                    <ul class="is-hidden">
                      <li><a href="#0">Clothing</a></li>
                      <li><a href="#.">All Bottoms</a></li>
                      <li><a href="#.">Casual Trousers</a></li>
                      <li><a href="#0">Leggings</a></li>
                      <li><a href="#0">Shorts</a></li>
                    </ul>
                  </li>
                  <li class="has-children img-3"> </li>
                </ul>
                <!-- .cd-secondary-dropdown --> 
              </li>
              <!-- .has-children -->
              
              <li> <a href="all-categories.html" class="text-active">All categories </a> </li>
              <!-- .has-children -->
            </ul>
            <!-- .cd-dropdown-content --> 
          </nav>
          <!-- .cd-dropdown --> 
        </div>
        <!-- .cd-dropdown-wrapper --> 
      </div>
      <div id="main-menu" class="col-md-10 col-sm-9 main-menu m-t-1x">
        <nav class="navbar navbar-default">
          <div class="nav-row">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <i class="fa fa-bars"></i> </button>
              <a class="navbar-brand" href="#">MENU</a> </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown"><a href="#." class="dropdown-toggle" data-toggle="dropdown">Supper Market </a>
                  <ul class="dropdown-menu container-fluid">
                    <li class="block-container">
                      <ul class="block">
                        <li class="link_container"><a href="#">Mobile</a></li>
                        <li class="link_container"><a href="#">Tablets</a></li>
                        <li class="link_container"><a href="#">Laptop</a></li>
                        <li class="link_container"><a href="#">Memory Cards</a></li>
                        <li class="link_container"><a href="#">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Electronics</a>
                  <ul class="dropdown-menu container-fluid">
                    <li class="block-container">
                      <ul class="block">
                        <li class="link_container"><a href="#">Mobile</a></li>
                        <li class="link_container"><a href="#">Tablets</a></li>
                        <li class="link_container"><a href="#">Laptop</a></li>
                        <li class="link_container"><a href="#">Memory Cards</a></li>
                        <li class="link_container"><a href="#">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Perfumes &amp; Beauty </a>
                  <ul class="dropdown-menu container-fluid">
                    <li class="block-container">
                      <ul class="block">
                        <li class="link_container"><a href="#">Mobile</a></li>
                        <li class="link_container"><a href="#">Tablets</a></li>
                        <li class="link_container"><a href="#">Laptop</a></li>
                        <li class="link_container"><a href="#">Memory Cards</a></li>
                        <li class="link_container"><a href="#">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Home &amp; Kitchen</a>
                  <ul class="dropdown-menu container-fluid">
                    <li class="block-container">
                      <ul class="block">
                        <li class="link_container"><a href="#">Mobile</a></li>
                        <li class="link_container"><a href="#">Tablets</a></li>
                        <li class="link_container"><a href="#">Laptop</a></li>
                        <li class="link_container"><a href="#">Memory Cards</a></li>
                        <li class="link_container"><a href="#">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"> <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                  <ul class="dropdown-menu container-fluid">
                    <li class="block-container">
                      <ul class="block">
                        <li class="link_container"><a href="#">Mobile</a></li>
                        <li class="link_container"><a href="#">Tablets</a></li>
                        <li class="link_container"><a href="#">Laptop</a></li>
                        <li class="link_container"><a href="#">Memory Cards</a></li>
                        <li class="link_container"><a href="#">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <!--/.nav-collapse --> 
          </div>
        </nav>
      </div>
    </div>
    <!-- userinfo on top-->
    <div id="form-search-opntop"> </div>
    <!-- userinfo on top--> 
    <!-- CART ICON ON MMENU -->
    <div id="shopping-cart-box-ontop"> <i class="fa fa-shopping-cart"></i>
      <div class="shopping-cart-box-ontop-content"></div>
    </div>
  </div>
</div>
<!--Header /-->