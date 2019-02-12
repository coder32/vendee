@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Users Information</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <form method="post" enctype="multipart/form-data" name="Form">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Users<small>Information</small></h2>

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
                                <a class="btn btn-dark" href="{{ route(ADMIN . '.users.create') }}" title="Add Item" style="float:right">
                                    <i class="fa fa-plus" style="vertical-align:middle" ></i>
                                </a>
                            </p>
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th class='bool text-center'>Status</th>
                                        <th>Created At</th>
                                        <th class="no-sort">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td><a href="{{ route(ADMIN . '.users.edit', $item->id) }}">{{ $item->name }}</a></td>
                                            <td>{{ $item->email }}</td>
                                            <td><?php if($item->email_verified_at != null) {echo 'verified';} else {echo 'not verified';}  ?></td>
                                            <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }} </td>
                                            <td class="actions">

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>






            </div>
        </form>
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