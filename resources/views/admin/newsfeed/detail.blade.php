@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> News Detail</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>News <small>Detail</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>

                    </div>
                    <div class="x_content">
                       <div class="row">
                            <div class="col-lg-8">
                                <img src="{{asset('uploads/newsfeed/')}}/{{$item->image}}" class="img img-thumbnail" style="height: 200px" />
                            </div>
                           <div class="col-lg-4">
                               Created at: </b>{{$item->created_at}}</br>
                               Posted by: </b>{{$item->User->name}}

                               @if(auth()->user()->role->hasPermission('deleteFeed'))
                                   <a href="{{ url('admin\feeds\delete', $item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')">Delete</a>
                               @endif
                               @if(auth()->user()->role->hasPermission('disable'))
                                   @if($item->status != "disable")
                                       <a href="{{ url('admin\feeds\disable', $item->id) }}" class="btn btn-warning">Disable</a>
                                   @endif
                                   @if($item->status != "active")
                                       <a href="{{ url('admin\feeds\active', $item->id) }}" class="btn btn-success">Active</a>
                                   @endif
                               @endif
                           </div>
                       </div>
                        <br>
                        <b>
                            Title : {{$item->title}}
                        </b>
                        <scan class="pull-right">

                        </scan>
                    </div>
                    <div class="box-body">
                        <b>Description: </b><span>{{$item->description}}</span><br/><span class="pull-right text-center"><b><b></span>
                        <b>Image: </b>
                    </div>
                    <div class="box-footer">
                    </div>
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









