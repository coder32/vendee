@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>  Roles setting</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <form method="post" enctype="multipart/form-data" name="Form">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Testimonial <small>Information</small></h2>

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        {!! Form::open([
                                'action' => ['RoleController@update'],
                                'files' => false
                            ])
                        !!}
                        <div class="x_content">

                            <table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Role</th>
                                    @foreach($roles as $role)
                                        <th scope="col">{{$role->name}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr scope="row">
                                        <td><b>{{$permission->name}}</b></td>
                                        @foreach($roles as $role)

                                            <td>
                                                <input class="checkbox checkbox-sm checkbox-inline" <?php /*if($role->name=='admin'){echo 'disabled="disabled"';} */?> name="role_permission[]" type="checkbox" value="{{$role->id}}.{{$permission->id}}" <?php if($role->Permissions->contains($permission->id)){echo 'checked';}?>/>
                                            </td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-sm-12 center-block padding-top">
                                <input type="submit" class="btn btn-success center-block custom" value="Update"/>
                            </div>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@include('admin.footer')






