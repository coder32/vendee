@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Contact Us</h3>

            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')

        <div class="row">
            <div class="col-xs-12">

                    <div class="-body table-responsive no-padding"  >
                        <table id="datatable-buttons" class="table table-striped table-bordered">

                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Created At</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($contact as $con)
                                <tr>
                                    <td>{{ $con->name }}</td>
                                    <td>{{ $con->email }}</td>
                                    <td>{{ $con->subject }}</td>
                                    <td>{{ $con->msg }}</td>
                                    <td>{{ $con->created_at }}</td>
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
