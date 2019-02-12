@include('admin.adminlayout')
<div class="right_col" role="main">
    <script>
        updateQuestion = function(question, option1, option2, option3, option4, correctOption, id, url){
            $('#question_form').attr('action', url);
            $('#question_id').val(id);
            $('#questionStr').val(question);
            $('#option1').val(option1);
            $('#option2').val(option2);
            $('#option3').val(option3);
            $('#option4').val(option4);
            $('#correct_option').val(correctOption);
            $('#myModal').modal('show');
        }

        addQuestion = function(url){
            $('#question_form').attr('action', url);
            $('#question_id').val('');
            $('#questionStr').val('');
            $('#option1').val('');
            $('#option2').val('');
            $('#option3').val('');
            $('#option4').val('');
            $('#correct_option').val('');
            $('#myModal').modal('show');
        }
    </script>

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Website Settings</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel with-nav-tabs panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">Security Questions</a></li>
                                <li><a href="#tab2default" data-toggle="tab">Membership Plan</a></li>
                                <li><a href="#tab3default" data-toggle="tab">Payment Methods</a></li>
                                <li><a href="#tab4default" data-toggle="tab">Partners</a></li>
                                {{--<li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                        <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                    </ul>
                                </li>--}}
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">
                                    <span class="pull-right">
                                        <button class="btn-success btn" onclick="addQuestion('{{url('/admin/question/post')}}')">Add Question</button>
                                    </span>
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Question</th>
                                          {{--  <th>Option-1</th>
                                            <th>Option-2</th>
                                            <th>Option-3</th>
                                            <th>Option-4</th>--}}
                                            <th>Created_at</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; ?>
                                        @foreach($questions as $question)
                                            <tr>
                                            <td>{{$question->id}}</td>
                                            <td>{{$question->question}}</td>
                                            {{--<td @if($question->correct_option == '1') class="btn-success" @endif>{{$question->option_1}}</td>
                                            <td @if($question->correct_option == '2') class="btn-success" @endif>{{$question->option_2}}</td>
                                            <td @if($question->correct_option == '3') class="btn-success" @endif>{{$question->option_3}}</td>
                                            <td @if($question->correct_option == '4') class="btn-success" @endif>{{$question->option_4}}</td>--}}
                                            <td>{{$question->created_at}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-warning" onclick="updateQuestion('{{$question->question}}', '{{$question->option_1}}', '{{$question->option_2}}', '{{$question->option_3}}', '{{$question->option_4}}', '{{$question->correct_option}}', '{{$question->id}}', '{{url("/admin/question/update")}}')">Update</button>
                                                <a href="{{url('admin/question/destroy', $question->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                            </tr>
                                            <?php $i++; ?>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Question</th>
                                            {{--<th>Option-1</th>
                                            <th>Option-2</th>
                                            <th>Option-3</th>
                                            <th>Option-4</th>--}}
                                            <th>Created_at</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab2default">
                                        <div class="panel-heading">
                                            <b>MemberShip Plans</b>
                                        </div>
                                        <form method="post" action="{{url('/admin/membership/post')}}" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <h4 for="free">Free Plan</h4>


                                            <label class="control-label col-sm-2" for="free_bids">Bids</label>
                                            <div class="col-sm-10">
                                                <input required="required" type="number" class="form-control required" id="free_bids"  name="free_bids" value="@if(count($memberShip)> 0){{$memberShip[0]->bids}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="free_bids">Skills</label>
                                            <div class="col-sm-10">
                                                <input required="required" type="number" class="form-control required" id="free_skills"  name="free_skills" value="@if(count($memberShip)> 0){{$memberShip[0]->skills}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="free_project">Projects</label>
                                            <div class="col-sm-10">
                                                <input required="required" type="number" class="form-control required" id="free_project"  name="free_project" value="@if(count($memberShip)> 0){{$memberShip[0]->projects}}@endif">
                                            </div><br><br><br>


                                            {{--<label class="control-label col-sm-2" for="free_logo">Logo</label>
                                            <div class="col-sm-10">
                                                <input  type="file" class="form-control" id="free_logo"  name="free_logo">
                                            </div><br><br><br>--}}

                                            <label class="control-label col-sm-2" for="free_logo">Description</label>
                                            <div class="col-sm-10">
                                                <textarea  class="form-control" id="free_description" name="free_description" required >@if(count($memberShip)> 0){{$memberShip[0]->description}}@endif</textarea>
                                            </div><br><br><br><br>
<br><hr>

                                            <h4 for="intro">Intro Plan</h4>

                                            <label class="control-label col-sm-2" for="intro_rate">Rate (USD)</label>
                                            <div class="col-sm-10">
                                                <input type="number" required="required" class="form-control required" id="intro_rate" step="0.01"  name="intro_rate" value="@if(count($memberShip)> 0){{$memberShip[1]->rate}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="intro_bids">Bids</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="intro_bids"  name="intro_bids" value="@if(count($memberShip)> 0){{$memberShip[1]->bids}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="intro_bids">Skills</label>
                                            <div class="col-sm-10">
                                                <input required="required" type="number" class="form-control required" id="intro_skills"  name="intro_skills" value="@if(count($memberShip)> 0){{$memberShip[1]->skills}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="intro_project">Projects</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="intro_project"  name="intro_project" value="@if(count($memberShip)> 0){{$memberShip[1]->projects}}@endif">
                                            </div><br><br><br>

                                           {{-- <label class="control-label col-sm-2" for="intro_logo">Logo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="intro_logo"  name="intro_logo">
                                            </div><br><br><br>
--}}
                                            <label class="control-label col-sm-2" for="intro_logo">Description</label>
                                            <div class="col-sm-10">
                                                <textarea  class="form-control" id="intro_description" name="intro_description" required >@if(count($memberShip)> 0){{$memberShip[1]->description}}@endif</textarea>
                                            </div><br><br><br><br>
                                            <br><hr>

                                            <h4 for="premium">Basic Plan</h4>

                                            <label class="control-label col-sm-2" for="basic_rate">Rate (USD)</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="basic_rate" step="0.01"  name="basic_rate" value="@if(count($memberShip)> 0){{$memberShip[2]->rate}}@endif">
                                            </div><br><br><br>


                                            <label class="control-label col-sm-2" for="basic_bids">Bids</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="basic_bids"  name="basic_bids" value="@if(count($memberShip)> 0){{$memberShip[2]->bids}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="basic_bids">Skills</label>
                                            <div class="col-sm-10">
                                                <input required="required" type="number" class="form-control required" id="basic_skills"  name="basic_skills" value="@if(count($memberShip)> 0){{$memberShip[2]->skills}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="basic_project">Projects</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="basic_project"  name="basic_project" value="@if(count($memberShip)> 0){{$memberShip[2]->projects}}@endif">
                                            </div><br><br><br>

                                           {{-- <label class="control-label col-sm-2" for="basic_logo">Logo</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control"  id="basic_logo"  name="basic_logo">
                                            </div><br><br><br>--}}

                                            <label class="control-label col-sm-2" for="basic_logo">Description</label>
                                            <div class="col-sm-10">
                                                <textarea  class="form-control" id="basic_description" name="basic_description" required >@if(count($memberShip)> 0){{$memberShip[2]->description}}@endif</textarea>
                                            </div><br><br><br><br>
                                            <br><hr>



                                            <h4 for="premium">Plus Plan</h4>

                                            <label class="control-label col-sm-2" for="basic_rate">Rate (USD)</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="plus_rate"  step="0.01" name="plus_rate" value="@if(count($memberShip)> 0){{$memberShip[3]->rate}}@endif">
                                            </div><br><br><br>


                                            <label class="control-label col-sm-2" for="basic_bids">Bids</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="plus_bids"  name="plus_bids" value="@if(count($memberShip)> 0){{$memberShip[3]->bids}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="basic_bids">Skills</label>
                                            <div class="col-sm-10">
                                                <input required="required" type="number" class="form-control required" id="plus_skills"  name="plus_skills" value="@if(count($memberShip)> 0){{$memberShip[3]->skills}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="basic_project">Projects</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="plus_project"  name="plus_project" value="@if(count($memberShip)> 0){{$memberShip[3]->projects}}@endif">
                                            </div><br><br><br>

                                            {{-- <label class="control-label col-sm-2" for="basic_logo">Logo</label>
                                             <div class="col-sm-10">
                                                 <input type="file" class="form-control"  id="basic_logo"  name="basic_logo">
                                             </div><br><br><br>--}}

                                            <label class="control-label col-sm-2" for="basic_logo">Description</label>
                                            <div class="col-sm-10">
                                                <textarea  class="form-control" id="plus_description" name="plus_description" required >@if(count($memberShip)> 0){{$memberShip[3]->description}}@endif</textarea>
                                            </div><br><br><br><br>
                                            <br><hr>


                                            <h4 for="premium">Premium Plan</h4>

                                            <label class="control-label col-sm-2" for="premium_rate">Rate (USD)</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="premium_rate" step="0.01"  name="premium_rate" value="@if(count($memberShip)> 0){{$memberShip[4]->rate}}@endif">
                                            </div><br><br><br>


                                            <label class="control-label col-sm-2" for="premium_bids">Bids</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="premium_bids"  name="premium_bids" value="@if(count($memberShip)> 0){{$memberShip[4]->bids}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="premium_bids">Skills</label>
                                            <div class="col-sm-10">
                                                <input required="required" type="number" class="form-control required" id="premium_skills"  name="premium_skills" value="@if(count($memberShip)> 0){{$memberShip[4]->skills}}@endif">
                                            </div><br><br><br>

                                            <label class="control-label col-sm-2" for="premium_project">Projects</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control required" required="required" id="premium_project"  name="premium_project" value="@if(count($memberShip)> 0){{$memberShip[4]->projects}}@endif">
                                            </div><br><br><br>

                                            {{-- <label class="control-label col-sm-2" for="basic_logo">Logo</label>
                                             <div class="col-sm-10">
                                                 <input type="file" class="form-control"  id="basic_logo"  name="basic_logo">
                                             </div><br><br><br>--}}

                                            <label class="control-label col-sm-2" for="premium_logo">Description</label>
                                            <div class="col-sm-10">
                                                <textarea  class="form-control" id="premium_description" name="premium_description" required >@if(count($memberShip)> 0){{$memberShip[4]->description}}@endif</textarea>
                                            </div><br><br><br><br>
                                            <br><hr>


                                            <br/>
                                            <div class="col-sm-12 text-center">
                                                <br/>
                                                <input type="submit" class="btn btn-success" value="submit"/>
                                            </div>
                                        </form>
                                </div>
                                <div class="tab-pane fade" id="tab3default">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Account Name</th>
                                            <th>Account No.</th>
                                            <th>Has Ref</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; ?>
                                        @foreach($accounts as $account)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$account->bank_name}}</td>
                                                <td>{{$account->bank_account}}</td>
                                                <td>@if($account->has_ref_number) True @else False @endif</td>
                                                <td>
                                                    <a href="{{url('admin/account/destroy', $account->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <form action="{{url('/admin/post/bank')}}" method="post">
                                                <td>{{$i}}
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </td>
                                                <td><input type="text" name="bank_name" class="form-control" required /></td>
                                                <td><input type="text" name="bank_account" class="form-control" required /></td>
                                                <td>
                                                    <select name="hasRef" class="form-control" required>
                                                        <option value="0">False</option>
                                                        <option value="1">True</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="submit" class="btn btn-success" value="add"/>
                                                </td>
                                            </form>

                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="tab4default">
                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Url</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; ?>
                                        @foreach($partners as $partner)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$partner->name}}</td>
                                                <td><img src="{{ url('uploads/partners', $partner->logo)}}" width="30px" /></td>
                                                <td>{{ $partner->url }}</td>
                                                <td>
                                                    <a href="{{url('admin/partner/destroy', $partner->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete it?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <form action="{{url('/admin/post/partner')}}" method="post" enctype="multipart/form-data">
                                                <td>{{$i}}
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </td>
                                                <td><input  required type="text" name="partner_name" class="form-control"/></td>
                                                <td><input required type="file" name="partner_logo" class="form-control"/></td>
                                                <td><input required type="text" name="url" class="form-control"/></td>
                                                <td>
                                                    <input type="submit" class="btn btn-success" value="add"/>
                                                </td>
                                            </form>

                                        </tr>
                                        </tfoot>
                                    </table>


                                </div>
                                <div class="tab-pane fade" id="tab5default">Default 5</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Security Question</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post" id="question_form" action="{{url('/admin/question/post')}}" >
            <div class="modal-body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="question_id" id="question_id">
                <label for="question">Question</label>
                <input type="text" required  placeholder="Question" class="form-control" name="question" id="questionStr"/><br/>
                {{--<label for="option_1">Option 1</label>
                <input type="text" placeholder="Option 1" class="form-control" name="option1" id="option1"/><br/>

                <label for="option_2">Option 2</label>
                <input type="text" placeholder="Option 2" class="form-control" name="option2" id="option2"/><br/>

                <label for="option_3">Option 3</label>
                <input type="text" placeholder="Option 3" class="form-control" name="option3" id="option3"/><br/>

                <label for="option_4">Option 4</label>
                <input type="text" placeholder="Option 4" class="form-control" name="option4" id="option4"/><br/>

                <label for="correct_option">Correct option</label>
                <select id="correct_option" name="correct_option" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>--}}
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success"/>
            </div>

            </form>

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









