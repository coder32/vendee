@include('includes/header')
<!-- END MANIN HEADER -->

<div class="clearfix"></div>
<!--Banner-->
<div class="banner-wrap">
    <div class="banner">
        <div class="container-fluid">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="#."><div class="img-left"><img src="front/images/banner-lft.jpg"  alt="..."></div></a>
                        <div class="img-right"><img src="front/images/banner-rgt.jpg" alt="..."></div>
                    </div>
                    <div class="item">
                        <a href="#."><div class="img-left"><img src="front/images/banner-lft.jpg" alt="..."></div></a>
                        <div class="img-right"><img src="front/images/banner-rgt-2.jpg" alt="banner-rgt-2"></div>
                    </div>
                    <div class="item">
                        <a href="#."><div class="img-left"><img src="front/images/banner-lft.jpg" alt="..."></div></a>
                        <div class="img-right"><img src="front/images/banner-rgt-2.jpg" alt="banner-rgt-2"></div>
                    </div>

                    <!--<div class="item">
                <img src="..." alt="...">
                <div class="carousel-caption">
                  ...
                </div>
              </div>-->
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="fa fa-angle-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="fa fa-angle-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!--Banner /-->

<!--Content body-->
<div class="adds">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-xs-12"><a href=""><img height="200px" src="{{ url('../storage/app/public/images', $cone[0]->image1)}}" alt="add-1"></a></div>
            <div class="col-md-4 col-xs-12"><a href=""><img height="200px" src="{{ url('../storage/app/public/images', $ctwo[0]->image1)}}" alt="add-2"></a></div>
            <div class="col-md-4 col-xs-12"><a href=""><img height="200px" src="{{ url('../storage/app/public/images', $cthree[0]->image1)}}" alt="add-3"></a></div>
        </div>
    </div>
</div>
<div class="white-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="hr">
                    <h3>Featured Products</h3>
                </div>
                <div class=" tabbing">
                    <div>
                        <div class="owl-carousel f-products owl-theme mt-2x mb-2x">
                            @foreach ($pro  as $prod)
                                <div class="item">
                                    <div class="f-product-cont">
                                        <div class="f-product">
                                            <div class="p-thumb"><a href="{{ url("detailProduct/$prod->id") }}"><img height="200px" src="{{ url('../storage/app/public/images', $prod->image1)}}" alt="fp-1"></a></div>
                                            <div class="fp-detail">
                                                <p class="text-center"> <a href="" title="Wish list"><i class="fa fa-heart-o"></i></a> <a href="#." title="Quick View"><i class="fa fa-search-plus"></i></a></p>
                                                <!--<button class="btn btn-block btn-default btn-blank">Add to Cart</button>-->
                                            </div>
                                        </div>
                                        <div class="hr">
                                            <p>{{ $prod->name }}  US <strike>${{ $prod->dumy_price }}</strike></p>
                                            <h6 class="font-bold text-red">US ${{ $prod->cost }}</h6>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="banner-bottom">
                <div class="features_ads">
                    <div class="col-sm-4">
                        <div class="banner-boder-zoom"> <a href="#"><img height="200px" alt="ads" class="img-responsive" src="{{ url('../storage/app/public/images', $cfour[0]->image1)}}" /></a> </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="banner-boder-zoom"> <a href="#"><img height="200px" alt="ads" class="img-responsive" src="{{ url('../storage/app/public/images', $cfive[0]->image1)}}" /></a> </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="banner-boder-zoom"> <a href="#"><img height="200px" alt="ads" class="img-responsive" src="{{ url('../storage/app/public/images', $csix[0]->image1)}}" /></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <div class="hr">
                <h3>Bestselling Products</h3>
            </div>
            <div class=" tabbing">
                <div>
                    <div class="owl-carousel owl-theme mt-2x mb-2x">
                        @foreach ($pfour  as $pfo)
                            <div class="item box-shadow">
                                <div class="product_cont">
                                    <ul>
                                        <li>
                                            <div class="img_cont">
                                                <div class="view_ad"> <a href="{{ url("detailProduct/$pfo->id") }}" data-toggle="modal" data-target="#product_view"><i class="fa fa-search-plus"></i></a> </div>
                                                <img height="200px" src="{{ url('../storage/app/public/images', $pfo->image1)}}" alt="fp-2"></div>
                                        </li>
                                        <li>
                                            <h4 >{{ $pfo->name }}  US <strike>${{ $pfo->dumy_price }}</strike></h4>
                                            <h1>US ${{ $pfo->name }}</h1>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mw-clothing">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class=" hr bdr-btm mb-1x">
                    <div class="pull-left">
                        <h3>Mens Clothing</h3>
                    </div>
                    <div class="pull-right mt-1x"><a href="{{ url("products") }}">View more products <i class="fa fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
        <div class="row mt-2x">
            <div class="col-xs-12 col-sm-3">
                <div class="img-responsive"><a href="{{ url("detailProduct/$ceight[0]->id") }}"><img height="200px" src="{{ url('../storage/app/public/images', $ceight[0]->image1)}}"/></a></div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="row">
                    @foreach ($ptwo  as $ptw)
                        <div class="col-xs-12 col-sm-3">
                            <div class="mwc-product">
                                <div class="mwc-product-thumb"><a href="{{ url("detailProduct/$ptw->id") }}"><img height="200px" src="{{ url('../storage/app/public/images', $ptw->image1)}}" alt="mnc-4.jpg"/></a></div>
                                <p>Receive up to 10% OFF </p>
                                <h6>{{ $ptw->name }}<span>${{ $ptw->dumy_price }}</span></h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="mw-clothing">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class=" hr bdr-btm mb-1x">
                    <div class="pull-left">
                        <h3>Womens Clothing</h3>
                    </div>
                    <div class="pull-right mt-1x"><a href="{{ url("products") }}">View more products <i class="fa fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
        <div class="row mt-2x">
            <div class="col-xs-12 col-sm-3">
                <div class="img-responsive"><a href="{{ url("detailProduct/$cseven[0]->id") }}"><img  height="200px" src="{{ url('../storage/app/public/images', $cseven[0]->image1)}}"/></a></div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="row">
                    @foreach ($pfive  as $pfiv)
                        <div class="col-xs-12 col-sm-3">
                            <div class="mwc-product">
                                <div class="mwc-product-thumb"><a href="{{ url("detailProduct/$pfiv->id") }}"><img height="200px" src="{{ url('../storage/app/public/images', $pfiv->image1)}}" alt="mnc-4.jpg"/></a></div>
                                <p>Receive up to 10% OFF </p>
                                <h6>{{ $pfiv->name }}<span>${{ $pfiv->dumy_price }}</span></h6>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="updat-sec">
    <div class="container-sm">
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <h5>Receive Vendee Updates</h5>
            </div>
            <div class="col-md-5 col-xs-12">
                <input type="text" placeholder="Enter Email" class="form-control">
            </div>
            <div class="col-md-2 col-xs-12">
                <button type="button" class="btn btn-red btn-block">SUBSCRIBE</button>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="hr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="brand-logos">
                    <ul>
                        <li> <a href="#."><img  src="front/images/gul-ahmad.png" alt="gul-ahmad"></a> <a href="#."><img  src="front/images/khaadi.png" alt="khaadi"></a> <a href="#."><img src="front/images/stoneage.png" alt="stoneage"></a> <a href="#."><img src="front/images/kayseria.png" alt="kayseria"></a> <a href="#."><img src="front/images/brands-pak.png" alt="brands-pak"></a> <a href="#."><img src="front/images/sana-safinaz.png" alt="sana-safinaz"></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="user-suport-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <ul>
                    <li> <a href="#."><img  src="front/images/shipping.png" alt="shipping"> Free Shipping</a> <a href="#."><img  src="front/images/sgift-card.png" alt="sgift-card"> Special Gift Card</a> <a href="#."><img src="front/images/new-product.png" alt="new-product"> New product every day</a> <a href="#."><img src="front/images/we-work.png" alt="we-work"> We work 24/7</a> <a href="#."><img src="front/images/try-before.png" alt="try-before"> Trying on before buying</a> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>

<!--Content body /-->
@include('includes/footer')
<!--Footer-->
