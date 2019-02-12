@include('admin.adminlayout')


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update {{$item->name}}</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.commun.flash-message')
        <div class="row">
            <div class="col-sm-12">
                <div class="" >
                    <h1 id="msg"></h1>
                    <div class="col-sm-4">
                        <div class="">
                            <div class="box-header text-center btn-dark">
                                <h4><b class="text-white">Personal Data</b></h4>
                            </div>
                            <div class="">
                                <img src="{{asset('img/avatar0.png')}}" height="100px" class="right" alt="{{$item->name}}"/>
                                <br/>
                                <label for="name">Name</label>
                                <input id="name" value="{{$item->name}}" disabled="disabled" class="form-control">
                                <label for="name">Email</label>
                                <input id="name" value="{{$item->email}}" disabled="disabled" class="form-control">
                                <label for="name">Verification Time</label>
                                <input id="name" value="{{$item->email_verified_at}}" disabled="disabled" class="form-control">
                                <label for="name">Address</label>
                                <input id="name" value="{{$item->address}}" disabled="disabled"  class="form-control">
                            </div>
                            <br>
                            <div class="box-footer">
                                <div class="text-center">
                                    @if($item->email_verified_at == null)
                                        <button class=" btn btn-success">Verify Profile</button>
                                    @endif
                                    <button class="btn btn-danger">Trash User</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="">
                            <div class="box-header text-center btn-dark">
                                <h4><b>Professional Data</b></h4>
                            </div>
                            <div class="box-body">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="skills">Skills</label>
                                    <ol>
                                        @foreach($userSkills as $uSkill)
                                            <li>
                                                {{$uSkill->getSkills->name}}
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <label for="Projects">Projects</label>
                                    <ul class="listStyleNone">
                                        @foreach($userProjects as $userProject)
                                            <li class="hideOverflow">
                                                <button type="button" class="close" aria-label="Close" onclick="trashProject('{{$userProject->id}}')">
                                                    <span aria-hidden="true" class="btn-danger">&times;</span>
                                                </button>
                                                <div class="row well">
                                                    <div class = "col-xs-8 col-sm-8 borderRight">
                                                        <b>{{$userProject->title}}</b>
                                                        <p class="hideLongText">{{$userProject->description}}</p>
                                                        <div class="text-center">
                                                            <button class="btn btn-success">Activate Project</button>
                                                            <button class="btn btn-danger">Update Project</button>
                                                            <button class="btn btn-info">Project Info</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 text-center">
                                                        <img src="{{asset('img/avatar0.png')}}" alt="" height="150px"/>
                                                        <br/>
                                                        Budget: <b>{{$userProject->budget}}$</b>
                                                        <br/>
                                                        Bids: <b>00</b>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>



@include('admin.footer')

