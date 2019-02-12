@include('includes/header')
<script type="text/javascript">

    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
            success: function (response) {
                window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
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
                @include('includes/inner-nav2')
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
                <td><a href="{{ url("home") }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" name="form" enctype="multipart/form-data" action="{{ url('customer/cart') }}" >
                    {{csrf_field()}}
                <table class="table table-bordered table-hover" border="1" cellpadding="0" cellspacing="0" >
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%">Action</th>
                    </tr>
                    <?php $i = 1; ?>

                        <tbody>

                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                <?php $total += $details['cost'] * $details['quantity'] ?>

                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs"><img  src="{{ url('../storage/app/public/images')}}/{{ $details['image1'] }}" width="100" height="100" class="img-responsive"/></div>
                                            <div class="col-sm-9">
                                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                                                <input type="hidden" name="product_id" value="{{ $details['name'] }}">

                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="price">${{ $details['cost'] }}</td>
                                    <td data-th="Quantity">
                                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                        <input type="hidden" name="quantity" value="{{ $details['quantity'] }}">
                                        <input type="hidden" name="user_id" value="{{ $details['user_id'] }}">
                                        <input type="hidden" name="cost" value="{{ $details['cost'] }}">
                                    </td>
                                    <td data-th="Subtotal" class="text-center">${{ $details['cost'] * $details['quantity'] }}</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>

                    <?php  $i++; ?>
                    <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong>Total {{ $total }}</strong></td>
                    </tr>
                    <tr>
                        <td><a href="{{ url("home") }}" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <input type="hidden" name="total_bill" value="{{ $total }}">
                        <td class="hidden-xs text-center"><p>{{ $total }}</p></td>
                        <td class="hidden-xs text-center"><input type="submit" value="Save" class="btn btn-success"> </td>
                    </tr>
                    </tfoot>
            </table>
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
</div>
    <script type="text/javascript">

        $(".update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ url('update-cart') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@include('includes/footer')

