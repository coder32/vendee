@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>  News Add</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Newsletter <small>index</small></h2>
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


                        <div class="row">
                            <div class="col-sm-12">
                                {!! Form::open([
                                        'class'=>'post',
                                        'url'  => route(ADMIN . '.feeds.index'),
                                        'method' => 'POST',
                                        'enctype' => 'multipart/form-data',
                                    ])
                                !!}
                                <div class="form-group" name="txt_ctoken">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required"></span>
                                        </label>
                                        <input type="text" name="title" class="form-control" placeholder="News Title" required/>
                                </div>
                                <div class="form-group" name="txt_ctoken">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required"></span>
                                        </label>
                                        <input type="text" name="description" class="form-control" placeholder="News Description" required/>
                                </div>
                                <div class="form-group" name="txt_ctoken">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">File<span class="required"></span>
                                        </label>
                                        <input type="file"  name="file" required class="form-control"   />
                                </div>
                                <div class="form-group" name="txt_ctoken">
                                    <input type="submit" class="btn btn-success" value="submit"/>
                                    <a href="history" class="btn btn-danger" onclick="return confirm('Are you sure?')">Back</a>
                                </div>
                                {!! Form::close() !!}
                            </div>
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









