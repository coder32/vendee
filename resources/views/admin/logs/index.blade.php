@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Logs</h3>
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
                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th class='bool text-center'>Logs</th>
                                    <th class="no-sort">Date</th>
                                </tr>
                                </thead>

                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th class="actions"></th>
                                </tr>
                                </tfoot>

                                <tbody>
                                <?php $i =1; ?>
                                @foreach ($logs as $item)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td class="">{{$item->action}}
                                            <b>
                                                @if($item->type== 'verifyProfile' || $item->type == 'disableUser' || $item->type == 'deposit')
                                                    @if($item->type!= 'deleteUser')
                                                        @if($item->Perfomee != null)
                                                        {{$item->Perfomee->name}}
                                                        @endif

                                                    @endif
                                                @elseif($item->type== 'Project')
                                                    @if($item->project!='ProjectDelete')
                                                        @if($item->project != null)
                                                            {{$item->Project->title}}
                                                        @endif
                                                    @endif

                                                @endif
                                            </b>
                                        </td>
                                        <td>{{$item->created_at}}</td>
                                    </tr>
                                    <?php $i++; ?>
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


