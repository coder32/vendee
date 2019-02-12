@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> News History</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Notification <small>index</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">
                        <br />

                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Posted by</th>
                                <th>Description</th>
                                <th>status</th>
                                <th>Created At</th>
                                <th class="no-sort">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($news as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->User->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }} </td>
                                    <td>
                                        <a href="{{ url('admin\feeds\detail', $item->id) }}" class="btn btn-success">View Details</a>
                                    </td>
                                </tr>
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

        function populateNewImage() {
            var div = document.getElementById('files');
            div.innerHTML += "<input type=\"file\" name=\"images[]\"  style=\"display: inline\"/>";
            div.innerHTML += "\n<br />";
        }


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







