@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>View Products </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Products<small>Information</small></h2>

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p class="text-muted font-13 m-b-30">
                            <a class="btn btn-info" href="{{ url('admin/product/addProduct') }}" title="Add Item" style="float:right">
                                <i class="fa fa-plus" style="vertical-align:middle" > </i> &nbsp;Add Products
                            </a>
                        </p>
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Sr No.</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th class='bool '>Created At</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach ($product as $item)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->cost }}</td>
                                    <td>{{ $item->sale_cost }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}   </td>
                                    <td>
                                        <a href='{{ url("/admin/product/detailProduct/$item->id") }}' class="btn btn-default">Detail</a>
                                        <a href='{{ url("/admin/product/updateProduct/$item->id") }}' class="btn btn-success">Update</a>
                                        <a href='{{ url("/admin/product/deletePr/{$item->id}") }}' class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')">Delete</a>
                                    </td>
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







