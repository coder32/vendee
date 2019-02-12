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
                <div class="banner-boder-zoom m-t-1x"> <a href="#"><img alt="ads" class="img-responsive" src="{{ URL::asset('front/images') }}/fr.jpg" /></a> </div>
                <div class="block left-module premium_product mt-1x mb-2x pb-2x">
                    <p class="title_block">Feature products</p>
                    <div class="block_content">
                        <ul class="products-block best-sell">
                            <li>
                                <div class="products-block-left"> <a href="#"> <img src="{{ URL::asset('front/images') }}/shoes-mini.jpg" alt="SPECIAL PRODUCTS"> </a> </div>
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
                    <div class="profile-data">
                        <div class="col-sm-7 col-xs-12 ">
                            <div class="img">
                                @if($Detail[0]->image1 == null)
                                    <img src="{{asset('img/avatar0.png')}}" class="img img-thumbnail img-responsive" style="height:100px">
                                @else

                                    <img src="{{ URL::asset('../storage/app/public/images') }}/{{$Detail[0]->image1}}" class="img img-thumbnail img-responsive" style="height:100px">
                                @endif
                            </div>
                            <div class="details_list">
                                <h4>User Profile <a href="#.">Pro</a></h4>
                            </div>
                            @foreach ( $Detail as $fb )
                            <ul class="list-unstyled" style="text-align:left">
                                <li ><i class="fa fa-circle-o-notch"></i><strong>  Brand ID : {{ $bran[1]->braName }}</strong></li>
                                <li ><i class="fa fa-circle-o-notch"></i><strong>  Category ID : {{ $Categ[1]->catName }}</strong></li>


                                <li ><i class="fa fa-circle-o-notch"></i><strong>  Attribute ID : {{ $attri[1]->attName }}</strong></li>
                                <li ><i class="fa fa-circle-o-notch"></i><strong> Name : {{ $fb->name }}</strong></li>
                                <li><i class="fa fa-circle-o-notch"></i><strong> Quantity : {{ $fb->quantity }}</strong></li>

                                <li ><i class="fa fa-circle-o-notch"></i><strong>  Size : {{ $fb->size }}</strong></li>
                                <li ><i class="fa fa-circle-o-notch"></i><strong>  Colour : {{ $fb->colour }}</strong></li>
                                <li ><i class="fa fa-circle-o-notch"></i><strong> Dumy Price : {{ $fb->dumy_price }}</strong></li>


                                <li ><i class="fa fa-circle-o-notch"></i><strong>  Price : {{ $fb->cost }}</strong></li>
                                <li><i class="fa fa-circle-o-notch"></i><strong>  Sale Price : {{ $fb->sale_cost }}</strong></li>
                                <li><i class="fa fa-circle-o-notch"></i><strong> Status : {{ $fb->status }}</strong></li>

                                <li ><i class="fa fa-circle-o-notch"></i><strong>  Distance Unit : {{ $fb->distance_unit }}</strong></li>
                                <li><i class="fa fa-circle-o-notch"></i><strong>  Weight : {{ $fb->weight }}</strong></li>
                                <li ><i class="fa fa-circle-o-notch"></i><strong> Mass Unit : {{ $fb->mass_unit }}</strong></li>
                                <li ><i class="fa fa-circle-o-notch"></i><strong> Description : {{ $fb->description }}</strong></li>
                                <li><i class="fa fa-circle-o-notch"></i><strong> Created At : {{ $fb->created_at }}</strong></li>
                                <li ><i class="fa fa-circle-o-notch"></i><strong> Updated At : {{ $fb->updated_at }}</strong></li>


                            </ul>
                            @endforeach
                        </div>
                        <div class="col-sm-5 col-xs-12">
                            <div class="num_box"> <span><a href="#."> Points<strong>0</strong></a></span> <span><a href="#."> Coupons<strong>0</strong></a></span> <span><a href="#."> Wishlists<strong>1</strong></a></span> <span><a href="#."> Coins<strong>0</strong></a></span> </div>
                        </div>
                    </div>
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
                                                    <div class="img_cont"><img alt="icon" src="{{ URL::asset('front/images') }}/products/bsp-1.png" /></div>
                                                </li>
                                                <li>
                                                    <h4 onclick="location.href='products'">Touch Screen display</h4>
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
                                                    <div class="img_cont"><img alt="icon" src="{{ URL::asset('front/images') }}/products/bsp-2.png" /></div>
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
                                                    <div class="img_cont"><img alt="icon" src="{{ URL::asset('front/images') }}/products/bsp-3.png" /></div>
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
                                                    <div class="img_cont"><img alt="icon" src="{{ URL::asset('front/images') }}/pigeon.jpg" /></div>
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

