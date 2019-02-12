@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>User New</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-sm-12">
                <div class="box" style="border:1px solid #d2d6de;">
                    {!! Form::open([
                            'action' => ['UsersController@store'],
                            'id'=> 'demo-form2',
                             'class'=>'form-horizontal form-label-left',
                            'files' => true
                        ])
                    !!}

                    <div class="box-body" style="margin:10px;">
                        @include('admin.users.form')
                    </div>

                    <div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
                        <button type="submit" class="btn btn-info" style="width:100px;">Save</button>
                        <a class="btn btn-warning " href="{{ route(ADMIN.'.users.index') }}" style="width:100px;"><i class="fa fa-btn fa-back"></i>Cancel</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>
</div>



@include('admin.footer')




