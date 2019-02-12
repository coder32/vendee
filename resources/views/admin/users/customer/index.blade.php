@include('admin.adminlayout')

<script>
    function validate(form) {

        if(confirm("Do you really want to do this action?"))
            return true;
        else
            return false;
    }
</script>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Customer View</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Customer<small>Information</small></h2>

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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Created At</th>
                                        <th class="no-sort">Actions</th>
                                    </tr>
                                </thead>


                                <tbody>
                                <?php $i = 1; ?>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}   </td>
                                        <td class="actions">

                                            <a href='{{ url("/admin/customer/detailCustomer/$item->id") }}' class="btn btn-dark">Detail</a>

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








