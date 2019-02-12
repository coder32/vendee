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
                    <li><a href="#."><i class=" fa fa-facebook"></i> Facebook</a></li>
                    <li><a href="#."><i class=" fa fa-youtube"></i> Twitter</a></li>
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
<script type="text/javascript" src="{{ URL::asset('front/js/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/flex.js') }}"></script>
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
{{--

<script type="text/javascript" src="{{ URL::asset('assets/lib/jquery/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/select2/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/jquery.bxslider/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/jquery.countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.menu-aim.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/theme-script.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.easyResponsiveTabs.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>--}}

<script type="text/javascript" src="{{ URL::asset('front/lib/select2/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/lib/jquery.bxslider/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/lib/jquery.countdown/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/theme-script.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/jquery.menu-aim.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/main.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/jquery.easyResponsiveTabs.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('front/js/owl.carousel.js') }}"></script>
</body>
</html>
