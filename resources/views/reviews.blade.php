@include('includes/header')

<!--Header /-->
<!--Header /-->
<div class="clearfix"></div>
<!--Content body-->
<div class="columns-container">
    <div class="container-fluid" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix"> <a class="home" href="#" title="Return to Home">Home</a> <span class="navigation-pipe">&nbsp;</span> <a href="#" title="Return to Home">My account</a> <span class="navigation-pipe">&nbsp;</span> <span class="navigation_page">My wishlist</span> </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-2" id="left_column">
                <!-- block best sellers -->
                <div class="block left-details" style="height:auto;"> <a href="my-profile.html">
                        <h5>My Profile</h5>
                    </a>
                    <div class="accordion">
                        <h4 class="accordion-toggle"><img src="front/images/community.png" width="15px"align="icon">Buy</h4>
                        <div class="accordion-content">
                            <ul>
                                <li><a href="my-profile.html"><img src="front/images/user.png" width="15px"> My Profile </a></li>
                                <li class="active"><a href="wishlist.html"><img src="front/images/like.png" width="15px"> My Wishlist </a></li>
                                <li><a href="order.html"><img src="front/images/shopping-basket.png" width="15px"> My Orders </a></li>
                                <li><a href="referral-earning.html"><img src="front/images/pocket.png" width="15px"> Referral Earning </a></li>
                                <li><a href="my-store.html"><img src="front/images/shop.png" width="15px"> My Fav Stores </a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <h4 class="accordion-toggle"><img src="front/images/settings.png" width="15px" align="icon">Sell</h4>
                        <div class="accordion-content">
                            <ul>
                                <li><a href="my-profile.html"><img src="front/images/user.png" width="15px" align="icon">All Selling</a></li>
                                <li class="active"><a href="wishlist.html"><img src="front/images/like.png" width="15px" align="icon">Scheduled</a></li>
                                <li><a href="order.html"><img src="front/images/shopping-basket.png" width="15px" align="icon">Active</a></li>
                                <li><a href="my-store.html"><img src="front/images/shop.png" width="15px" align="icon">Sold</a></li>
                                <li><a href="my-profile.html"><img src="front/images/user.png" width="15px" align="icon">Unsold </a></li>
                                <li class="active"><a href="wishlist.html"><img src="front/images/like.png" width="15px" align="icon"> Shipping Labels</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <h4 class="accordion-toggle"><img src="front/images/community.png" width="15px">Community</h4>
                        <div class="accordion-content">
                            <ul>
                                <li><a href="my-post.html"> My Posts </a></li>
                                <li><a href="private-msg.html"> Private Messages </a></li>
                                <li><a href="reviews"> Review </a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <h4 class="accordion-toggle"><img src="front/images/settings.png" width="15px" align="icon">Setting</h4>
                        <div class="accordion-content">
                            <ul>
                                <li><a href="account-settings.html"> Account Settings </a></li>
                                <li><a href="address-book.html"> Address Book </a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </> </div>
            <div class="banner-boder-zoom mb-1x"> <a href="#"><img alt="ads" class="img-responsive" src="front/images/sidebar-add.jpg" /></a> </div>
            <div class="block left-module premium_product">
                <p class="title_block">Feature products</p>
                <div class="block_content">
                    <ul class="products-block best-sell">
                        <li>
                            <div class="products-block-left"> <a href="#"> <img src="front/images/shoes.jpg" alt="SPECIAL PRODUCTS"> </a> </div>
                            <div class="products-block-right">
                                <p class="product-name"> <a href="#">Woman Within Plus Size Flared</a> </p>
                            </div>
                        </li>
                        <li>
                            <div class="products-block-left"> <a href="#"> <img src="front/data/product-100x122.jpg" alt="SPECIAL PRODUCTS"> </a> </div>
                            <div class="products-block-right">
                                <p class="product-name"> <a href="#">Woman Within Plus Size Flared</a> </p>
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
            <div class="shadow">
                <!-- page heading-->
                <!-- ../page heading-->

                <div class="main-tabs">
                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">My Wishlist (0)</label>
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">Share my wishlist (0)</label>
                    <section id="content1">
                        <div class="hrow mb-2x">
                            <div class="wish_tag">
                                <div class="add-tag">
                                    <input class="form-control" type="text" name="">
                                    <button class="btn btn-red"><i class="fa fa-check"></i></button>
                                    <i id="empty-tag" class="fa fa-trash"></i> </div>
                                <a id="addtag" href="#."><i class="fa fa-plus-square text-red"></i> Add a new tag</a> </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="page-content page-order">
                            <div class="hr">
                                <div class="col-sm-2 col-xs-3 m-t-5">Sort By:</div>
                                <div class="col-sm-2 col-xs-3">
                                    <select class="form-control">
                                        <option value="1">Date Addes</option>
                                        <option value="2">Low Price</option>
                                        <option value="3">High Price</option>
                                    </select>
                                </div>
                                <div class="col-sm-2 col-xs-3">
                                    <select class="form-control">
                                        <option value="1">All Categories</option>
                                        <option value="2">Mobile Accessories</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-3 pull-right">
                                    <div class="input-group stylish-input-group">
                                        <input type="text" class="form-control"  placeholder="Search" >
                                        <span class="input-group-addon">
                      <button type="submit"> <span class="glyphicon glyphicon-search"></span> </button>
                      </span> </div>
                                </div>
                            </div>
                            <div class="order-detail-content m-t-2x">
                                <table class="table table-responsive" style="background: #fff;border: solid 1px #ddd;">
                                    <thead>
                                    <tr style="background: #f4f4f4;">
                                        <th width="4%"><input type="checkbox" name=""></th>
                                        <th width="35%" class="cart_product">Product</th>
                                        <th width="10%" style="text-align: center;">Price</th>
                                        <th width="10%" style="text-align: center;" class="action">Options</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input type="checkbox" name=""></td>
                                        <td class="cart_product cart_description"><a href="#" class="img_table"><img src="front/images/table_item.jpg" alt="Product"></a>
                                            <p class="product-name"><a href="#"> Xiaomi Redmi 5 Plus Global Version 5.99 inch 4GB RAM 64GB Snapdragon 625 Octa core 4G Smartphone</a></p>
                                            <p class="date">Added : Mar 22, 2018</p>
                                            <p class="share"><a href="#."><i class="fa fa-gift"></i> Share</a></p></td>
                                        <td class="price" align="center"><strong>61,19 €</strong></td>
                                        <td class="action" align="center"><a href="#" class="btn_pink">Add To Cart</a> <a href="#">Remove</a></td>
                                    </tr>
                                    <tr style="background: #f4f4f4;">
                                        <td colspan="2"><input type="checkbox" name="" style="margin-right: 5px;">
                                            remove</td>
                                        <td colspan="2" style="text-align: right;">Your wishlist has <b>1</b> Products</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section id="content2">
                        <p> No Contacts Available </p>
                    </section>
                </div>
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
                                                <div class="img_cont"><img alt="icon" src="front/images/perfume.jpg" /></div>
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
                                                <div class="img_cont"><img alt="icon" src="front/images/lapi.jpg" /></div>
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
                                                <div class="img_cont"><img alt="icon" src="front/images/watches.jpg" /></div>
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
                                                <div class="img_cont"><img alt="icon" src="front/images/pigeon.jpg" /></div>
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
</div>
<!--Content body /-->

<!--Footer-->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <h5>Information</h5>
                <ul>
                    <li><a href="#.">Home</a></li>
                    <li><a href="#.">Search</a></li>
                    <li><a href="#.">About Us</a></li>
                    <li><a href="#.">Blog</a></li>
                    <li><a href="#.">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>Collections</h5>
                <ul>
                    <li><a href="#.">Computiong</a></li>
                    <li><a href="#.">Household items</a></li>
                    <li><a href="#.">Kitchen Appliances</a></li>
                    <li><a href="#.">Mobile</a></li>
                    <li><a href="#.">TV &amp; Video</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>My Account</h5>
                <ul>
                    <li><a href="#.">My account</a></li>
                    <li><a href="#.">My Address</a></li>
                    <li><a href="#.">My Cart</a></li>
                    <li><a href="#.">Wishlist</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>Follow Us</h5>
                <ul>
                    <li><a href="#."><i class=" fa fa-twitter"></i> Twitter</a></li>
                    <li><a href="#."><i class="fa fa-rss"></i></a>RSS</li>
                    <li><a href="#."><i class=" fa fa-rss"></i> RSS Feeds</a></li>
                    <li><a href="#."><i class=" fa fa-google-plus"></i> Google Plus</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="copyright">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <p> Copyrights 2018 Vendee. All Rights Reserved. </p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--Footer /-->

<!--Modal-->
<div class="modal fade" id="product_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close p-15" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="clearfix"></div>
            <div class="modal-body">
                <div class="hr">
                    <div class="col-sm-8">
                        <div class="modal_img"> <img src="front/images/img_preview.jpg" alt="image"> </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product_view_text">
                            <h5>Fragrance</h5>
                            <h2>Froomer Women Short Sleeves Crop T-Shirt Top Aliens Printed...</h2>
                            <div class="rating-block">
                                <button type="button" class="btn btn-link btn-sm text-red p-0" aria-label="Left Align"> <span class="fa fa-star active" aria-hidden="true"></span> </button>
                                <button type="button" class="btn btn-link btn-sm text-red p-0" aria-label="Left Align"> <span class="fa fa-star active" aria-hidden="true"></span> </button>
                                <button type="button" class="btn btn-link btn-sm text-red p-0" aria-label="Left Align"> <span class="fa fa-star active" aria-hidden="true"></span> </button>
                                <button type="button" class="btn btn-link btn-grey btn-sm p-0" aria-label="Left Align"> <span class="fa fa-star" aria-hidden="true"></span> </button>
                                <button type="button" class="btn btn-link btn-grey btn-sm p-0" aria-label="Left Align"> <span class="fa fa-star" aria-hidden="true"></span> </button>
                            </div>
                            <h6>$9.99</h6>
                            <button type="button" class="btn_price">See product details</button>
                        </div>
                        <div class="hrow">
                            <ul class="refer">
                                <li> <a href="#."> <i class="fa fa-heart"></i> Add to Wish List</a></li>
                                <li> <a href="#."> <i class="fa fa-envelope"></i> Email</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- Script-->
<script type="text/javascript" src="front/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="front/js/bootstrap.min.js"></script>
<script type="text/javascript" src="front/js/flex.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 10000
        })
    });
    $(".sb-container").scrollBox();
</script>
<script type="text/javascript">
    var $flexslider = $('.flexslider');
    $flexslider.flexslider({
        animation: "slide",
        manualControls: ".flex-control-nav li",
        useCSS: false /* Chrome fix*/
    });



</script>
<script>
    jQuery(document).ready(function($) {
        var owl = $('.owl-carousel');
        owl.on('initialize.owl.carousel initialized.owl.carousel ' +
            'initialize.owl.carousel initialize.owl.carousel ' +
            'resize.owl.carousel resized.owl.carousel ' +
            'refresh.owl.carousel refreshed.owl.carousel ' +
            'update.owl.carousel updated.owl.carousel ' +
            'drag.owl.carousel dragged.owl.carousel ' +
            'translate.owl.carousel translated.owl.carousel ' +
            'to.owl.carousel changed.owl.carousel',
            function(e) {
                $('.' + e.type)
                    .removeClass('secondary')
                    .addClass('success');
                window.setTimeout(function() {
                    $('.' + e.type)
                        .removeClass('success')
                        .addClass('secondary');
                }, 500);
            });
        owl.owlCarousel({
            loop: true,
            nav: true,
            lazyLoad: true,
            margin: 2,
            video: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 4
                },
                960: {
                    items: 4,
                },
                1200: {
                    items: 5
                }
            }
        });
    });
</script>
<script>
    jQuery(document).ready(function($) {
        var owl = $('.owl-carousel');
        owl.on('initialize.owl.carousel initialized.owl.carousel ' +
            'initialize.owl.carousel initialize.owl.carousel ' +
            'resize.owl.carousel resized.owl.carousel ' +
            'refresh.owl.carousel refreshed.owl.carousel ' +
            'update.owl.carousel updated.owl.carousel ' +
            'drag.owl.carousel dragged.owl.carousel ' +
            'translate.owl.carousel translated.owl.carousel ' +
            'to.owl.carousel changed.owl.carousel',
            function(e) {
                $('.' + e.type)
                    .removeClass('secondary')
                    .addClass('success');
                window.setTimeout(function() {
                    $('.' + e.type)
                        .removeClass('success')
                        .addClass('secondary');
                }, 500);
            });
        $('#carousel02').owlCarousel({
            loop: true,
            nav: true,
            lazyLoad: true,
            margin: 2,
            video: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                960: {
                    items: 4,
                },
                1200: {
                    items: 4
                }
            }
        });
    });
</script>
<script type="text/javascript" src="front/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="front/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="front/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="front/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="front/js/theme-script.js"></script>
<script type="text/javascript" src="front/js/jquery.menu-aim.js"></script>
<script type="text/javascript" src="front/js/main.js"></script>
<script type="text/javascript" src="front/js/jquery.easyResponsiveTabs.js"></script>
<script type="text/javascript" src="front/js/owl.carousel.js"></script>
</body>
</html>
