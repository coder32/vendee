@include('admin.adminlayout')



<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Moderator's </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Update<small>Information</small></h2>

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

                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" name="form" enctype="multipart/form-data" action="{{ url('admin/manager/managerUpdates') }}" >
                                    {{csrf_field()}}
                                    <input type="hidden" name="uderid" value="{{$update[0]->id}}}">
                                <div class="form-group" name="txt_ctoken">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" name="name" value="{{$update[0]->name}}" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Email<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" value="{{$update[0]->email}}" required class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Password<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password"  name="password" value="{{$update[0]->password}}" required class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Phone<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number"  name="phone" value="{{$update[0]->phone}}"  maxlength="15"    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required class="form-control col-md-7 col-xs-12" >
                                    </div>
                                </div><br>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Address<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea   name="address"  required class="form-control col-md-7 col-xs-12" >{{$update[0]->address}}</textarea>
                                    </div>
                                </div><br>





                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="reset">Reset</button>
                                        <button type="submit" name="btnAdd" class="btn btn-success">Submit</button>
                                        <a href="./" class="btn btn-danger"  onclick="return confirm('Are you sure?')">Back</a>
                                    </div>
                                </div>

                                </form>
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







