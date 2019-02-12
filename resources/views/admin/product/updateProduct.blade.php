@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Update Product</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Update<small>Product</small></h2>
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
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" name="form" enctype="multipart/form-data" action="{{ url('admin/product/updateProduct') }}" >

                            {{csrf_field()}}
                            <input type="hidden" name="uderid" value="{{$update[0]->id}}}">


                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product Name<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="name" name="name" value="{{ $update[0]->name }}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select required class="form-control col-md-7 col-xs-12" name="category">
                                        <option value="{{ $Categ[1]->catId }}">{{ $Categ[1]->catName }}</option>
                                        <option value="0">Select one . . . ! </option>
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
                                        <option value="{{ $SubCategIt[0]->id }}">{{ $SubCategIt[0]->SubName }} </option>
                                        <option value="0">Select one </option>
                                        @foreach ($SUBcategory as $item)
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
                                        <option value="{{ $childIte[0]->id }}">{{ $childIte[0]->childName }} </option>
                                        <option value="0">Select one . . . ! </option>
                                        @foreach ($CHILDcategory as $Chiltitem)
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
                                        <option value="{{ $attri[1]->attId }}">{{ $attri[1]->attName }}</option>
                                        <option value="0">Select one . . . ! </option>
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
                                        <option value="{{ $bran[1]->braId }}">{{ $bran[1]->braName }}</option>
                                        <option value="0">Select one . . . ! </option>
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
                                    <input type="number" id="name" name="cost" value="{{ $update[0]->cost }}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sale Price<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="sale_price" value="{{ $update[0]->sale_cost }}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>


                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Code<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="code" value="{{ $update[0]->code }}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file"  name="image1"   class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quantity<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="quantity" value="{{ $update[0]->quantity }}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mass Unit<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="mass_unit" value="{{ $update[0]->mass_unit }}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>

                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Weight<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="name" name="weight" value="{{ $update[0]->weight }}" required class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><br>


                            <div class="form-group" name="txt_ctoken">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea  name="description"  required placeholder="Enter Description" class="form-control col-md-7 col-xs-12">{{ $update[0]->description }}</textarea>
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