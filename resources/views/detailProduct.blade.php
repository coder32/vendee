@include('includes/header')

<div class="container">

</div>
<div class="clearfix"></div>
<!--Content body-->
<div class="columns-container">
    <div class="container-fluid" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix mt-1x"> <a class="home" href="#" title="Return to Home">Home</a> <span class="navigation-pipe">&nbsp;</span> <a href="#" title="Return to Home">My account</a> <span class="navigation-pipe">&nbsp;</span> <span class="navigation_page">Product</span> </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">

        @include('admin.commun.flash-message')
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-10" id="center_column">
                <!-- Product -->
                <div id="product" class="row">
                    <div class="primary-box bg-white bdr">
                        <div class="pb-left-column col-xs-12 col-sm-6 p-0">

                            <!-- default start -->
                            @foreach ($proDetail  as $prod)
                            <section id="default" class="padding-top0 product-gallery no-bdr">
                                <div class="row m-0">
                                    <div class="large-5 column">
                                        <div class="xzoom-container"> <img class="xzoom" id="xzoom-default" height="800px" src="{{ url('../storage/app/public/images', $prod->image1)}}" xoriginal="{{ url('../storage/app/public/images', $prod->image1)}}" />
                                            <div class="xzoom-thumbs"> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"  xpreview="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> </div>
                                            <div class="xzoom-thumbs"> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"  xpreview="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> <a href="{{ url('../storage/app/public/images', $prod->image1)}}"><img class="xzoom-gallery" width="80" src="{{ url('../storage/app/public/images', $prod->image1)}}"></a> </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </section>
                        @endforeach
                            <!-- default end -->

                        </div>
                        <div class="pb-right-column col-xs-12 col-sm-6">
                            <div class="prod-det">
                                <div class="hrow">
                                    <h4>{{ $proDetail[0]->name }}</h4>
                                    <p>{{ $proDetail[0]->description }}</p>
                                    <div class="product-comments m-t-1x">
                                        <div class="product-star" style="float: left; width: 15%;"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i> </div>
                                        <p class="small"> <a href="#." class="text-primary m-t-5">134 Review(s)</a> | <a href="#." class="text-primary m-t-5">417 Transactions</a></p>
                                        <div class="discountbox clearfix"> <span class="discountname"><span class="namebg"></span><span class="namec">Store-wide Discount</span></span> <span class="discount-cond"><span class="discountnum">50%</span> OFF, <span class="discountime">4 days</span> left!</span> </div>
                                    </div>
                                    <div class="row">
                                        <label class=" control-label text-grey col-xs-12 col-sm-3 pr-5 ">Discount Price:</label>
                                        <div class="col-xs-12 col-sm-5 m-t-1x">
                                            <h4><span class="text-red bold line-h3x">US ${{ $proDetail[0]->cost }}</span><span class="text-grey line-h3x"> / Piece</span></h4>
                                            <p class="discounted">US ${{ $proDetail[0]->dumy_price }} / Piece</p>
                                            <div class="hr">
                                                <p><a href="#."><i class=" fa fa-mobile-phone text-primary"></i> APP-only <span class="discountime">US ${{ $proDetail[0]->cost }}</span> <i class="caret"></i> </a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <div class="info-orther"> <span class="share toggleDiv"><i class="fa fa-share"></i> Share</span>
                                                <div class="share-box">
                                                    <ul>
                                                        <li>
                                                            <div class="icon"> <i class="fa fa-facebook"></i> </div>
                                                            <span>Facebook</span> </li>
                                                        <li>
                                                            <div class="icon"> <i class="fa fa-twitter"></i> </div>
                                                            <span>Twitter</span> </li>
                                                        <li>
                                                            <div class="icon"> <a href="#." class="m-t-5"> <img src="{{ url('front/images/google-plus.png')}}" width="25"></a> </div>
                                                            <span>Email</span> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" hrow bg-offWhite">
                                    <label class=" control-label text-grey col-xs-12 col-sm-3 m-t-1x ">Color:</label>
                                    <div class="col-xs-12 col-sm-9 m-t-1x">
                                        <div class="rgt-list">
                                            <div class="xzoom-container">
                                                <div class="xzoom-thumbs"> <a href="">{{ $proDetail[0]->colour }}</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="hr">
                                        <label class=" control-label text-grey col-xs-4 col-sm-3 m-t-1x">Size:</label>
                                        <div class="col-xs-8 col-sm-9 m-t-1x">
                                            <ul class="size">
                                                <li>
                                                    <input type="button" value="{{ $proDetail[0]->size }}"/>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hr">
                                        <label class=" control-label text-grey col-xs-4 col-sm-3 m-t-1x">Quantity Avalible :</label>
                                        <div class="col-xs-8 col-sm-9 m-t-1x">
                                            <ul class="qty">

                                                <li class="conditions">Avalible Piece ({{ $proDetail[0]->quantity }} pieces available)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=" hrow">
                                        <label class=" control-label text-grey col-xs-12 col-sm-3 pr-5 ">Shipping Cost:</label>
                                        <div class="col-xs-12 col-sm-9 m-t-1x"> <span class="text-green">Free Shipping</span> to <span class="bold"><a href="#." data-toggle="modal" data-target="#shippModal">Pakistan Via China Post Air Mail <i class="caret"></i></a></span>
                                            <p class="small">Estimated delivery time: Aug 10 and Sep 14, ships out within 3 business days <a href="#."><i class="fa fa-question-circle text-grey"></i></a></p>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="shippModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Shipping Cost</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row m-b-1x">
                                                            <label class="control-label col-md-3">Ship my order(s) to:</label>
                                                            <div class=" col-md-4">
                                                                <select class=" form-control">
                                                                    <option>Select country</option>
                                                                    <option>Pakistan</option>
                                                                    <option>Iran</option>
                                                                    <option>Turki</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row m-t-2x">
                                                            <div class=" col-md-12">
                                                                <h5>Choose Shipping Method</h5>
                                                                <div class="hrow">
                                                                    <div class="s-company-table-wrap">
                                                                        <table class="s-company-table" border="1">
                                                                            <thead>
                                                                            <tr>
                                                                                <td class="col-ope"></td>
                                                                                <td class="col-cam">Shipping Company</td>
                                                                                <td>Estimated Delivery Time</td>
                                                                                <td data-spm-anchor-id="2114.10010108.0.i7.5ab350213BSePs">Shipping Cost</td>
                                                                                <td>Tracking Information</td>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            <tr>
                                                                                <td class="col-ope"><input checked="checked" type="radio"></td>
                                                                                <td class="col-cam"><img src="https://ae01.alicdn.com/wimg/buyer/single/china-post-air-mail.jpg" alt="China Post Registered Air Mail"></td>
                                                                                <td>23-40 days</td>
                                                                                <td><span class="s-price">US $3.48</span></td>
                                                                                <td>Not available</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="col-ope"><input type="radio"></td>
                                                                                <td class="col-cam"><img src="https://ae01.alicdn.com/wimg/buyer/single/icon-ems.jpg" alt="EMS"></td>
                                                                                <td>19-35 days</td>
                                                                                <td><span class="s-price">US $28.61</span></td>
                                                                                <td>Available</td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hr">
                                        <label class=" control-label text-grey col-xs-12 col-sm-3">Total Price:</label>
                                        <div class="col-xs-12 col-sm-9 m-t-1x">
                                            <h5 class="small bold text-grey">The total price will depend on the final product features you select</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class=" control-label text-grey col-xs-12 col-sm-3"></label>
                                    <div class="col-xs-12 col-sm-9 m-t-1x">
                                        <div class="hr">
                                            @if(Auth::check())
                                            <p class="btn-holder"><a href="{{ url('add-to-cart/'.$proDetail[0]->id) }}" class="btn btn-warning" role="button">Add to cart</a> </p>
                                            @else
                                                <a href="{{ url('login') }}" class="btn btn-danger">Login/Signup <i class="icon-material-outline-arrow-right-alt"></i></a>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <div class="form-action">
                                            <div class="attribute-label" style="float: left; margin:10px 10px 10px 0;">Payment:</div>
                                            <div class="attribute-list"> <img src="../front/images/payment-terms.png" alt="image"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class=" control-label text-grey col-xs-12 col-sm-3">Store Promotion:</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="promotions"> <a href="javascript:;">Spend US $400.00, Get <strong>$20.00</strong> OFF <i class="caret"></i> </a> <a href="javascript:;">Get a US <strong>$22</strong> Coupon <i class="caret"></i> </a> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class=" control-label text-grey col-xs-12 col-sm-3">Seller Guarantee:</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="hr m-t-5">
                                            <p> <span><a href="#." class="text-primary"> <i class="fa fa-dollar"></i> Return policy </a></span> <span class="p-l-5"><a href="#."> <i class="fa fa-truck text-primary"></i> <span class="text-gery">On-time Delivery in</span> <span class="bold">60 </span> days</a></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab product -->
                    <div class="product-tab">
                        <ul class="nav-tab">
                            <li class="active"> <a aria-expanded="false" data-toggle="tab" href="#product-detail">Description</a> </li>
                            <li> <a aria-expanded="true" data-toggle="tab" href="#companyprofile">Reviews</a> </li>
                            <li> <a data-toggle="tab" href="#questions">Questions</a> </li>
                        </ul>
                        <div class="tab-container">
                            <div id="product-detail" class="tab-panel active">
                                <div class="details_overview">
                                    <ul>
                                        <h3>Specification</h3>
                                        <li>
                                            <label><strong>Color:</strong></label>
                                            <span>Grey/White</span></li>
                                        <li>
                                            <label><strong>Size:</strong></label>
                                            <span>S, M, L, XL</span></li>
                                    </ul>
                                    <h1>Wechip Hot selling i8 3 color mini keyboard 2.4g backlit mini wireless keyboard and mouse for ipad keyboard mouse combo </h1>
                                </div>
                                <div class="details_overview">
                                    <h1>Overview</h1>
                                    <ul>
                                        <li>
                                            <label>Brand Name:</label>
                                            <span>joinwe</span></li>
                                        <li>
                                            <label>Model Number:</label>
                                            <span>2.4g Wireless Keyboard</span></li>
                                        <li>
                                            <label>Use:</label>
                                            <span>Audio / Video Players</span></li>
                                        <li>
                                            <label>Place of Origin:</label>
                                            <span>Guangdong, China (Mainland)</span></li>
                                        <li>
                                            <label>Item:</label>
                                            <span>2.4 Mini Wireless Keyboard</span></li>
                                        <li>
                                            <label>Application:</label>
                                            <span>PC,Computer,Smart Tv,Internet Tv</span></li>
                                        <li>
                                            <label>Type:</label>
                                            <span>2.4Ghz Wireless, 2.4g wireless</span></li>
                                        <li>
                                            <label>Color:</label>
                                            <span>3color</span></li>
                                        <li>
                                            <label>Interface Type:</label>
                                            <span>USB</span></li>
                                        <li>
                                            <label>Battery:</label>
                                            <span>lithium-ion battery</span></li>
                                        <li>
                                            <label>Range:</label>
                                            <span>10M</span></li>
                                        <li>
                                            <label>Communication:</label>
                                            <span>2.4gh</span></li>
                                        <li>
                                            <label>Language:</label>
                                            <span>Multi Language</span></li>
                                        <li>
                                            <label>Material:</label>
                                            <span>TPU</span></li>
                                    </ul>
                                </div>
                                <div class="details_views">
                                    <h1><span>Size Chart</span></h1>
                                    <table width="100%">
                                        <tr>
                                            <td>Our Size</td>
                                            <td>Bust</td>
                                            <td>Waist</td>
                                            <td>Length</td>
                                        </tr>
                                        <tr>
                                            <td>S</td>
                                            <td>29.92</td>
                                            <td>25.59</td>
                                            <td>31.10</td>
                                        </tr>
                                        <tr>
                                            <td>M</td>
                                            <td>29.92</td>
                                            <td>25.59</td>
                                            <td>31.10</td>
                                        </tr>
                                        <tr>
                                            <td>L</td>
                                            <td>29.92</td>
                                            <td>25.59</td>
                                            <td>31.10</td>
                                        </tr>
                                        <tr>
                                            <td>XL</td>
                                            <td>29.92</td>
                                            <td>25.59</td>
                                            <td>31.10</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div id="companyprofile" class="tab-panel">
                                <div class="rating-block">
                                    <h4>Average user rating</h4>
                                    <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                    <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                    <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                </div>
                                <div class="review-block m-t-2x">
                                    <div class="row">
                                        <div class="col-sm-3"> <img src="../front/images/no-image.png" class="img-rounded">
                                            <div class="review-block-name"><a href="#">nktailor</a></div>
                                            <div class="review-block-date">January 29, 2016<br/>
                                                1 day ago</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="review-block-rate">
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                            </div>
                                            <div class="review-block-title">this was nice in buy</div>
                                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-3"> <img src="../front/images/no-image.png" class="img-rounded">
                                            <div class="review-block-name"><a href="#">nktailor</a></div>
                                            <div class="review-block-date">January 29, 2016<br/>
                                                1 day ago</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="review-block-rate">
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                            </div>
                                            <div class="review-block-title">this was nice in buy</div>
                                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-3"> <img src="../front/images/no-image.png" class="img-rounded">
                                            <div class="review-block-name"><a href="#">nktailor</a></div>
                                            <div class="review-block-date">January 29, 2016<br/>
                                                1 day ago</div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="review-block-rate">
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> </button>
                                            </div>
                                            <div class="review-block-title">this was nice in buy</div>
                                            <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="questions" class="tab-panel">
                                <p>There are no questions yet.</p>
                                <button type="button" class="btn_pink_1">Ask a Question</button>
                            </div>
                        </div>
                    </div>
                    <!-- ./tab product -->

                </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-2 p-0 mt-1x" id="left_column">
                <div class="thumbnail" style="    background-color: #f1f3f6;">
                    <h4 class="text-left">Sold By</h4>
                    <p><a href="#.">dodocool Official Store</a></p>
                    <h6>China (Guangdong) </h6>
                    <div class="supplier-dp"> <img src="../front/images/profile.png" alt="image"> </div>
                    <p>Open: <span class="text-danger">1 year(s)</span></p>
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="btn-group">
                                    <button class="btn btn-default btn-sm"> Visit Store</button>
                                    <button class="btn btn-default btn-sm"> Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thumbnail mt-1x" style="background-color:#f1f3f6;">
                    <h4 class="text-left">Contact Seller</h4>
                    <div class="feedback-swap-contact" style="margin:0px 0px;"> <span class="onlinechat" id="dhimtop"> <i class="fa fa-phone" style="font-size:15px;"> </i> <span onclick="clickchatbutton();">Call seller</span> </span> <span class="mseller pull-left" id="submitMsg"> <img src="../front/images/message.png" alt="" width="18" style="margin:3px 0 0 0;"> <span onclick="messageTo('ff8080815faf296501609607d6f31b71' , 'dp' , '');">Message Seller</span></span> </div>
                    <div class=" clearfix"></div>
                </div>

                <div class="thumbnail list_supplier m-t-1x" style="    background-color:#f1f3f6;">
                    <h4 class="text-left">This Seller's Categories</h4>
                    <div class="accordion-panel">
                        <div class="panel-group" id="accordion">
                            <h5>For iPhone 8 X</h5>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="panel-title expand">
                                        <div class="right-arrow pull-right">+</div>
                                        <a href="#">Mobile Phone Cable</a> </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="sub">-Micro USB Cable</li>
                                            <li class="sub">-For iPhone Cable</li>
                                            <li class="sub">-USB Type-C Cable</li>
                                            <li class="sub">-OTG Cable & Adapter</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-title expand">
                                        <div class="right-arrow pull-right">+</div>
                                        <a href="#">Screen Protector</a> </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="sub">-For iPhone</li>
                                            <li class="sub">-For Samsung</li>
                                            <li class="sub">-For Huawei</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-title expand">
                                        <div class="right-arrow pull-right">+</div>
                                        <a href="#">Multimedia Accessories</a> </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li class="sub">-USB Charger</li>
                                            <li class="sub">-Car Charger</li>
                                            <li class="sub">-Laptop Bag</li>
                                            <li class="sub">-HDMI Cable</li>
                                            <li class="sub">-HDMI Adapter</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- block best sellers -->
                <div class="block left-module premium_product" style="height:712px;">
                    <p class="title_block" style="font-size: 13px !important; background-color:#ddd;padding-left: 2px !important;">Top Selling products</p>
                    <div class="block_content">
                        <ul class="products-block best-sell">
                            <li>
                                <div class="products-block-left"> <a href="#"> <img src="../front/images/shoes-mini.jpg" alt="SPECIAL PRODUCTS"> </a> </div>
                                <div class="products-block-right">
                                    <p class="product-name"> <a href="#">Woman Within Plus Size Flared</a> </p>
                                </div>
                            </li>
                            <li>
                                <div class="products-block-left"> <a href="#"> <img src="../front/images/watches.jpg"  alt="SPECIAL PRODUCTS"> </a> </div>
                                <div class="products-block-right">
                                    <p class="product-name"> <a href="#">Woman Within Plus Size Flared</a> </p>
                                </div>
                            </li>
                            <li>
                                <div class="products-block-left"> <a href="#"> <img src="../front/images/pigeon.jpg" alt="SPECIAL PRODUCTS"> </a> </div>
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
        </div>
        <!-- ./row-->
    </div>
</div>
<!--Content body /-->

@include('includes/footer')