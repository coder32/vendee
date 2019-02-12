@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Add Product</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add<small>Product</small></h2>
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
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" name="form" enctype="multipart/form-data" action="{{ url('admin/product/addProduct') }}" >

                        {{csrf_field()}}


                        <div class="form-group" name="txt_ctoken">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" name="name" placeholder="Enter Name" required class="form-control col-md-7 col-xs-12">
                            </div>
                        </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="category">
                                        <option value="0">Select one </option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sub Category<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="sub_id">
                                        <option value="0">Select one </option>
                                        @foreach ($SubcatItem as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div><br>
                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Child Category<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="child_id">
                                        <option value="0">Select one </option>
                                        @foreach ($ChildcatItem as $Chiltitem)
                                            <option value="{{ $Chiltitem->id }}">{{ $Chiltitem->name }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Brand<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="brand">
                                        <option value="0">Select one </option>
                                        @foreach ($attribute as $attri)
                                            <option value="{{ $attri->id }}">{{ $attri->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Attribute<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="attribute">
                                        <option value="0">Select one </option>
                                        @foreach ($brand as $bran)
                                            <option value="{{ $bran->id }}">{{ $bran->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="cost" placeholder="Enter Price" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sale Price<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="sale_price" placeholder="Enter Price" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dumy Price<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="dumy_price" placeholder="Enter Dumy Price" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>


                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Code<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="code" placeholder="Enter Code" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>
                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Colour<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="colour" placeholder="Enter Colour" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Size<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="size" placeholder="Enter Size" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file"  name="image1"  required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantity<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="quantity" placeholder="Enter Quantity" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mass Unit<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="mass_unit" placeholder="Enter Mass Unit" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Weight<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="weight" placeholder="Enter Weight" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>


                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  name="description"  required placeholder="Enter Description" class="form-control col-md-7 col-xs-12"></textarea>
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