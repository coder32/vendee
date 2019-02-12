@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Profile</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update<small>Profile</small></h2>
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
                        <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{{url('admin/updatePassword')}}" >
                        {{csrf_field()}}

                        <div class="form-group" name="txt_ctoken">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Current Password :<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password"  name="current_password" placeholder="Enter your previous password"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div><br>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">New Password :<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="password" name="new_password" placeholder="Enter your new password" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div><br>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Confirm Password :<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="confirm_password" placeholder="Confirm your password" class="form-control col-md-7 col-xs-12" >
                            </div>
                        </div><br>






                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" name="btnAdd" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@include('admin.footer')








