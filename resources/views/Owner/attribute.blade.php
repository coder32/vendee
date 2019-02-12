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

                            <h4>Brand Detail <small>( {{ Auth::user()->name }} )</small></h4>
                <a href="{{ url('Owner/addAttribute') }}" class="btn btn-success-outline" style="float: right">Add Attribute</a>

                <table class="table table-bordered table-hover" border="1" cellpadding="0" cellspacing="0" >
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                    <?php $i = 1; ?>
                    @foreach ($attri as $comments)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{ $comments->name }}</td>
                    <td>{{ $comments->description }}</td>
                    <td>{{ $comments->created_at }}</td>
                    <td>
                        <a href='{{ url("/Owner/deleteAttri/{$comments->id}") }}' class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')">Delete</a>
                    </td>
                </tr>

                    @endforeach
                    <?php  $i++; ?>
            </table>
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

