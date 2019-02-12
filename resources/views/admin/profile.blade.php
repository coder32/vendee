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
                        {!! Form::model($item, [
                                   'action' => ['ProfileController@update', $item->id],
                                   'method' => 'put',
                                   'id'=> 'demo-form2',
                                   'class'=>'form-horizontal form-label-left',
                                   'files' => true
                               ])
                        !!}
                            {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$item->id}}">

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Name<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name"  value="{{$item->name}}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Email<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" value="{{$item->email}}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Phone<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="phone" class="form-control col-md-7 col-xs-12" value="{{$item->phone}}">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="first-name">Image<span class="required"></span>
                                </label>
                                @if($item->image == null)
                                    <img src="{{asset('img/avatar0.png')}}" class="img img-thumbnail img-responsive" style="width: 70px">
                                @else
                                    <img src="../../../storage/app/public/img/{{$item->image}}" class="img img-thumbnail img-responsive" style="width: 70px">
                                @endif
                                <b>Role: {{$item->role_id}}</b>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file"  name="profile_image"  class="form-control col-md-7 col-xs-12">
                                </div>


                            </div><br>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" name="btnAdd" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@include('admin.footer')