@include('admin.adminlayout')



<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Detail Customer </h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Customer<small>Information</small></h2>

                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>

                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @foreach ( $cat as $fb )

                                <div class="col-md-12 profile_details" align="center">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            <h4 class="brief"><i>Customer Detail</i></h4>
                                            <div class="left col-xs-7">
                                                <h2><strong>ID # </strong>M - {{ $fb->id}}</h2>
                                                <ul class="list-unstyled" style="text-align:left">
                                                    <li ><i class="fa fa-circle-o-notch"></i><strong>  Name : {{ $fb->name }}</strong></li>
                                                    <li><i class="fa fa-circle-o-notch"></i><strong>  Email : {{ $fb->email }}</strong></li>
                                                    <li ><i class="fa fa-circle-o-notch"></i><strong> Address : {{ $fb->address }}</strong></li>
                                                    <li><i class="fa fa-circle-o-notch"></i><strong> Phone : {{ $fb->phone }}</strong></li>
                                                    <li ><i class="fa fa-circle-o-notch"></i><strong> Status : {{ $fb->status }}</strong></li>
                                                    <li><i class="fa fa-circle-o-notch"></i><strong> Date : {{ $fb->updated_at }}</strong></li>

                                                </ul>
                                            </div>
                                            <div class="right col-xs-5 text-center">
                                                @if($fb->image == null)
                                                    <img src="{{asset('img/avatar0.png')}}" class="img img-thumbnail img-responsive" style="height:300px">
                                                @else
                                                    <img src="../../../../storage/app/public/img/{{$fb->image}}" class="img img-thumbnail img-responsive" style="height:300px">
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
                                                    <i class="fa fa-beer"></i> Manager </button>
                                                <button type="submit" class="btn btn-primary btn-xs" >
                                                    <i class="fa fa-database"> </i> All Detail
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

<hr>
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Customer Order Detail </h3>
                            </div>
                        </div><hr>
                        <div class="clearfix"></div><br><br><br>
                        <div class="x_content">

                            <table id="datatable-buttons" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Order</th>
                                    <th>Store</th>
                                    <th>Total Bill</th>
                                    <th>Created At</th>

                                </tr>
                                </thead>


                                 <tbody>
                                 <?php $i = 1; ?>
                                 @foreach ($bran as $view)
                                     <tr>
                                         <td>{{$i}}</td>
                                         <td>{{ $view->order_id }}</td>
                                         <td>{{ $view->store_id }}</td>
                                         <td>{{ $view->total_bill }}</td>
                                         <td>{{ Carbon\Carbon::parse($view->created_at)->format('d-m-Y') }}   </td>

                                     </tr>
                                     <?php  $i++; ?>
                                 @endforeach
                                 </tbody>
                            </table>
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







