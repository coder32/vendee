@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Update Child-Category</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update<small>Child-Category</small></h2>
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
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" name="form" enctype="multipart/form-data" action="{{ url('admin/childCategory/updateChildCategory') }}" >
                            {{csrf_field()}}
                            <input type="hidden" name="uderid" value="{{$update[0]->id}}">


                        <div class="form-group" name="txt_ctoken">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ChildCategory Name<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" value="{{$update[0]->name}}" required class="form-control col-md-7 col-xs-12">
                            </div>
                        </div><br>
                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="cat_id">

                                            <option value="{{ $UpCategT[0]->id }}">{{ $UpCategT[0]->catName }} </option>

                                        <option value="0">Select one . . . ! </option>
                                        @foreach ($Upcateg as $Catitem)
                                            <option value="{{ $Catitem->id }}">{{ $Catitem->name }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div><br>
                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub Category<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="sub_id">
                                        <option value="{{ $UpSubCateg[0]->id }}">{{ $UpSubCateg[0]->SubName }} </option>

                                        <option value="0">Select one . . . ! </option>
                                        @foreach ($UpcatItem as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div><br>
                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slug<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="slug" value="{{$update[0]->slug}}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cover<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file"  name="image1"   class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  name="description"  required  class="form-control col-md-7 col-xs-12">{{$update[0]->description}}</textarea>
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