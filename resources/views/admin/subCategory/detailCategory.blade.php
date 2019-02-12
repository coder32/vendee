@include('admin.adminlayout')



<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Detail Category </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Category<small>Information</small></h2>

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @foreach ( $Detail as $fb )

                                <div class="col-md-12 profile_details" align="center">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            <h4 class="brief"><i>Category Detail</i></h4>
                                            <div class="left col-xs-7">
                                                <h2><strong>ID # </strong>M - {{ $fb->id}}</h2>
                                                <ul class="list-unstyled" style="text-align:left">
                                                    <li ><i class="fa fa-circle-o-notch"></i><strong>  Name : {{ $fb->name }}</strong></li>
                                                    <li ><i class="fa fa-circle-o-notch"></i><strong> Name : {{ $fb->name }}</strong></li>
                                                    <li><i class="fa fa-circle-o-notch"></i><strong> Slug : {{ $fb->slug }}</strong></li>


                                                    <li ><i class="fa fa-circle-o-notch"></i><strong> Status : {{ $fb->status }}</strong></li>
                                                    <li ><i class="fa fa-circle-o-notch"></i><strong> Description : {{ $fb->description }}</strong></li>
                                                    <li><i class="fa fa-circle-o-notch"></i><strong> Created At : {{ $fb->created_at }}</strong></li>
                                                    <li ><i class="fa fa-circle-o-notch"></i><strong> Updated At : {{ $fb->updated_at }}</strong></li>


                                                </ul>
                                            </div>
                                            <div class="right col-xs-5 text-center">
                                                @if($fb->image1 == null)
                                                    <img src="{{asset('img/avatar0.png')}}" class="img img-thumbnail img-responsive" style="height:300px">
                                                @else

                                                    <img src="{{ URL::asset('../storage/app/public/images') }}/{{$fb->image1}}" class="img img-thumbnail img-responsive" style="height:300px">
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-xs-12 bottom text-center">
                                            <div class="col-xs-12 col-sm-6 emphasis">
                                                <p class="ratings">
                                                    <a>4.0</a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star"></span></a>
                                                    <a href="#"><span class="fa fa-star-o"></span></a>
                                                </p>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 emphasis">
                                                <button type="submit" class="btn btn-success btn-xs">
                                                    <i class="fa fa-beer"></i> Category </button>
                                                <button type="submit" class="btn btn-primary btn-xs" >
                                                    <i class="fa fa-database"> </i> All Detail
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

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







