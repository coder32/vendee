@include('includes/header')

<div class="columns-container">
    <div class="container-fluid" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix"> <a class="home" href="#" title="Return to Home">Home</a> <span class="navigation-pipe">&nbsp;</span> <a href="#" title="Return to Home">My account</a> <span class="navigation-pipe">&nbsp;</span> <span class="navigation_page">My profile</span> </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-2" id="left_column">
                <!-- block best sellers -->
                @include('includes/inner-nav')
            <div class="banner-boder-zoom m-t-1x"> <a href="#"><img alt="ads" class="img-responsive" src="../front//images/fr.jpg" /></a> </div>
            <div class="block left-module premium_product mt-1x mb-2x pb-2x">
                <p class="title_block">Feature products</p>
                <div class="block_content">
                    <ul class="products-block best-sell">
                        <li>
                            <div class="products-block-left"> <a href="#"> <img src="../front//images/shoes-mini.jpg" alt="SPECIAL PRODUCTS"> </a> </div>
                            <div class="products-block-right">
                                <p class="product-name mb-2x"> <a href="#">Woman Within Plus Size Flared</a> </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./block best sellers  -->
        </div>
        <!-- ./left colunm -->
        <!-- Center colunm-->
        <div class="center_column col-xs-12 col-sm-10" id="center_column">
            <div class="profile-board">
                @include('admin.commun.flash-message')
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" name="form" enctype="multipart/form-data" action="{{ url('Owner/store') }}" >
                    {{csrf_field()}}
                    <input type="hidden" name="uderid" value="{{ Auth::user()->id}}">

                    <div class="profile-data">
                    <div class="col-sm-7 col-xs-12 ">
                        <div class="img"> <img src="../front//images/photo.jpg" alt="Profile Image"> </div>
                        <div class="details_list">
                            <h4>Store Detail <small>( {{ Auth::user()->name }} )</small></h4>
                        </div>
                       <input type="text" required name="store_name" class="form-control" placeholder="Enter Name" value="{{ $storeInfo[0]->store_name }}"><br>
                        <input type="number" required name="phone" class="form-control" placeholder="Enter Phone #" value="{{ $storeInfo[0]->phone }}"><br>
                        <textarea type="number" required name="location" class="form-control" placeholder="Enter Address" >{{ $storeInfo[0]->location }}</textarea><br>
                        <input type="submit" name="btnsave" class="form-control btn btn-danger" value="Save"><br>
                    </div>
                    <div class="col-sm-5 col-xs-12">
                        <div class="num_box"> <span><a href="#."> Points<strong>0</strong></a></span> <span><a href="#."> Coupons<strong>0</strong></a></span> <span><a href="#."> Wishlists<strong>1</strong></a></span> <span><a href="#."> Coins<strong>0</strong></a></span> </div>
                    </div>
                </div>

                </form>
                <div class="myaccount_msg">
                    <ul>
                        <li> <a href="#."> <span class="num">1</span> <span>All Orders</span> <i></i> </a> </li>
                        <li> <a href="#."> <span class="num">1</span> <span>Payment Pending</span> <i></i> </a> </li>
                        <li> <a href="#."> <span class="num">0</span> <span>Processing</span> <i></i> </a> </li>
                        <li> <a href="#."> <span class="num">0</span> <span>Shipped</span> <i></i> </a> </li>
                        <li> <a href="#."> <span class="num">0</span> <span>Awaiting Reviews</span> <i></i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--end-->

            <div class="shadow">
                <div class="main-tabs">
                    <input id="tab3" type="radio" name="tabs1" checked>
                    <label for="tab3">You Might Also Like</label>
                    <input id="tab4" type="radio" name="tabs1">
                    <label for="tab4">View history</label>
                    <input id="tab5" type="radio" name="tabs1">
                    <label for="tab5">Latest Wishlist</label>
                    <section id="content3">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="item box-shadow">
                                    <div class="product_cont">
                                        <ul>
                                            <li>
                                                <div class="img_cont"><img alt="icon" src="../front//images/products/bsp-1.png" /></div>
                                            </li>
                                            <li>
                                                <h4 onclick="location.href='products.html'">Touch Screen display</h4>
                                                <h1>US $100.00</h1>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item box-shadow">
                                    <div class="product_cont">
                                        <ul>
                                            <li>
                                                <div class="img_cont"><img alt="icon" src="../front//images/products/bsp-2.png" /></div>
                                            </li>
                                            <li>
                                                <h4 onclick="location.href='products.html'">Touch Screen display</h4>
                                                <h1>US $100.00</h1>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item box-shadow">
                                    <div class="product_cont">
                                        <ul>
                                            <li>
                                                <div class="img_cont"><img alt="icon" src="../front//images/products/bsp-3.png" /></div>
                                            </li>
                                            <li>
                                                <h4 onclick="location.href='products.html'">Touch Screen display</h4>
                                                <h1>US $100.00</h1>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="item box-shadow">
                                    <div class="product_cont">
                                        <ul>
                                            <li>
                                                <div class="img_cont"><img alt="icon" src="../front//images/pigeon.jpg" /></div>
                                            </li>
                                            <li>
                                                <h4 onclick="location.href='products.html'">Touch Screen display</h4>
                                                <h1>US $100.00</h1>
                                                <div class="clearfix"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="content4">
                        <p> You have no previously view products. </p>
                    </section>
                    <section id="content5">
                        <p> You have not added any products to your Wishlist. </p>
                    </section>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
    </div>
    <!-- ./row-->
    <div class="clearfix"></div>
</div>

@include('includes/footer')

