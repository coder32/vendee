@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>View Customer Order </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Customer Order<small>Information</small></h2>

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Store</th>
                                <th>Amount</th>
                                <th class='bool '>Created At</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach ($Detail as $item)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ $item->product_id }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->store_id }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}   </td>

                                </tr>
                                <?php  $i++; ?>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@section('js')
    <script>
        (function($) {

            var table = $('.data-tables').DataTable({
                "columnDefs": [{
                    "targets": 'no-sort',
                    "orderable": false,
                }],
            });
            //replace bool column to checkbox
            renderBoolColumn('#tbl','bool');
        })(jQuery);
    </script>
@stop
@include('admin.footer')







