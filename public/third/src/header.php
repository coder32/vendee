<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title"><i class="fa fa-shopping-cart"></i> <span>POS</span></a>
            </div>

            <div class="clearfix"></div>
			
	
            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="home.php">Dashboard</a></li>
                     
                    </ul>
                  </li>
               	  <li><a><i class="fa fa-calculator"></i> Sale <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="sale.php">Add Sale</a></li>
                      <li><a href="sale_view.php">View Sale</a></li>
                   
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cubes"></i> Product <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="product.php">View Data</a></li>
                      <li><a href="product_add.php">Add Data</a></li>
                   
                    </ul>
                  </li>
                  <li><a><i class="fa fa-cube"></i> Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="category.php">View Data</a></li>
                      <li><a href="category_add.php">Add Data</a></li>
                   
                    </ul>
                  </li>
                  <li><a><i class="fa fa-group"></i> Employee <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="employee.php">View Data</a></li>
                      <li><a href="employee_add.php">Add Data</a></li>
                   
                    </ul>
                  </li>
                   <li><a><i class="fa fa-bars"></i> Customer <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="customer.php">View Data</a></li>
                      <li><a href="customer_add.php">Add Data</a></li>
                   
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="profile.php">View Data</a></li>
                      <li><a href="profile_edit.php">Update Data</a></li>
                   
                    </ul>
                  </li>
                   <li><a><i class="fa fa-search-plus"></i> Report <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="report.php">View Data</a></li>
                      
                    </ul>
                  </li>
                  
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
             
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="signout.php"  style="float:right">
                <span class="glyphicon glyphicon-off" aria-hidden="true"  ></span>
              </a>
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
                    <img src="images" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                   
                    <li><a href="signout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->