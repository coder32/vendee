@include('admin.adminlayout')

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top" ><i class="fa fa-hand-peace-o"></i> Users </span>
            <div class="count green ">7</div>
            <span class="count_bottom"><a href="{{url('/admin/users/all')}}"><i class="green"> Total</i> Users</a></span>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top" ><i class="fa fa-hand-peace-o"></i> Stores</span>
            <div class="count red">6</div>
            <span class="count_bottom"><a href="{{url('/admin/users/pending/all')}}"><i class="green"> Total</i> Pending User Requests</a></span>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-empire"></i> Products</span>
            <div class="count red">5</div>
            <span class="count_bottom"><a href=""><i class="green"><i class=""></i>All </i>Disabled Users</a></span>
        </div>

    </div>

    <!-- /top tiles -->
    @include('admin.commun.flash-message')
    <div class="row">
        <!-- start of weather widget -->
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Vendee<small>Online Shopping Store</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>

                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content ">
                    <div class="row">
                        @if(auth()->user()->role->hasPermission('Logs'))
                        <div class="col-lg-offset-2  col-md-8 well">
                            <div class="box-header">
                                <i class="fa fa-sticky-note-o"></i>
                                <span class="pull-right"><a href="{{url('/admin/logs')}}" class="btn btn-sm btn-success">Show Activity history</a> </span>
                                <h3 class="box-title">Recient Activities</h3><hr>
                            </div>
                            <!-- chat item -->
                            @foreach($recientActivities as $activity)
                                <div class="item">
                                    <img src="{{ asset($activity->User->image_path) }}" alt="">
                                    <p class="message">
                                        <span class="name">
                                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{$activity->created_at}}</small>
                                            {{$activity->User->name}}
                                        </span>&nbsp;&nbsp;&nbsp;
                                    {{$activity->action}}
                                    @if($activity->type== 'verifyProfile' || $activity->type == 'disableUser' || $activity->type == 'deposit')
                                        @if($activity->type!= 'deleteUser'&& $activity->Perfomee != null)
                                            {{$activity->Perfomee->name}} {{--<img src="{{asset('img')}}/{{$activity->Perfomee->image}}" height="50px">--}}
                                        @endif
                                        <hr>
                                        @elseif($activity->type== 'Project')
                                        @if($activity->project!='ProjectDelete')
                                        {{-- {{$activity->Project->title}}--}}
                                        @endif
                                        @endif
                                        </p><hr>
                                </div>
                        @endforeach

                        <!-- /.chat -->

                        </div>
                            @endif



                    </div>


                </div>
                <!-- end of weather widget -->
            </div>
        </div>
    </div>
</div>



<script>
    sendEmail = function(url){
        $senderId = $('#sender_mail').val();
        $subject = $('#subject_mail').val();
        $message = $('#message_mail').val();

        jQuery.ajax({
            url: url,
            method: 'post',
            data: {
                '_token': "{{ csrf_token() }}",
                senderId: $senderId,
                subject: $subject,
                message: $message
            },
            success: function(result){

            }
        });
    }
</script>


@include('admin.footer')