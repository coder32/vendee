<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>
<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.dash') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    @if (auth()->user()->role->hasPermission('viewManager'))
        <li class="treeview">
            <a href="#"><i class='fa fa-user'></i> <span>Managers</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route(ADMIN.'.manager.index') }}"><i class="fa fa-circle-o"></i>List Managers</a></li>
                <li><a href="{{ route(ADMIN.'.manager.pending') }}"><i class="fa fa-circle-o"></i>Pending Managers</a></li>
                <li><a href="{{ route(ADMIN.'.manager.trashed.index') }}"><i class="fa fa-circle-o"></i>Disabled Managers</a></li>
            </ul>
        </li>
    @endif
    @if (auth()->user()->role->hasPermission('viewModerator'))
        <li class="treeview">
            <a href="#"><i class='fa fa-user-o'></i> <span>Moderators</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route(ADMIN.'.moderator.index') }}"><i class="fa fa-circle-o"></i>List Moderator</a></li>
                <li><a href="{{ route(ADMIN.'.moderator.pending') }}"><i class="fa fa-circle-o"></i>Pending Moderator</a></li>
                <li><a href="{{ route(ADMIN.'.moderator.trashed.index') }}"><i class="fa fa-circle-o"></i>Disabled Moderator</a></li>
            </ul>
        </li>
    @endif
    @if (auth()->user()->role->hasPermission('viewFreelancer'))
        <li class="treeview">
            <a href="#"><i class='fa fa-user-circle-o'></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                    <li><a href="{{ route(ADMIN.'.employee.index') }}"><i class="fa fa-circle-o"></i>List Employee</a></li>
                    <li><a href="{{ route(ADMIN.'.employee.pending') }}"><i class="fa fa-circle-o"></i>Pending Requests</a></li>
                    <li><a href="{{ route(ADMIN.'.employee.trashed.index') }}"><i class="fa fa-circle-o"></i>Disabled Employee</a></li>

            </ul>
        </li>
    @endif
    @if (auth()->user()->role->hasPermission('viewEmployer'))
        <li class="treeview">
            <a href="#"><i class='fa fa-user-plus'></i> <span>Employer</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route(ADMIN.'.employer.index') }}"><i class="fa fa-circle-o"></i>List Employer</a></li>
                <li><a href="{{ route(ADMIN.'.employer.pending.index') }}"><i class="fa fa-circle-o"></i>Pending Requests</a></li>
                <li><a href="{{ route(ADMIN.'.employer.trashed.index') }}"><i class="fa fa-circle-o"></i>Disabled Employer</a></li>
            </ul>
        </li>
    @endif
    @if (auth()->user()->role->hasPermission('viewProject'))
        <li class="treeview">
            <a href="#"><i class='fa fa-product-hunt'></i> <span>Projects</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                @if (auth()->user()->hasRole('Admin'))
                    <li><a href="{{ route(ADMIN.'.projects.index') }}"><i class="fa fa-circle-o"></i>List Projects</a></li>
                @endif
                    <li><a href="{{ route(ADMIN.'.projects.dispute') }}"><i class="fa fa-circle-o"></i>Dispute Requests</a></li>
                <li><a href="{{ route(ADMIN.'.projects.pending') }}"><i class="fa fa-circle-o"></i>Pending Requests</a></li>
                <li><a href="{{ route(ADMIN.'.projects.trash') }}"><i class="fa fa-circle-o"></i>Disabled Projects</a></li>
            </ul>
        </li>
    @endif
    @if (auth()->user()->role->hasPermission('viewFeed'))
        <li class="treeview">
            <a href="#"><i class='fa fa-list'></i> <span>News Feeds</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                @if (auth()->user()->role->hasPermission('postFeed'))
                    <li><a href="{{ route(ADMIN.'.feeds.index') }}"><i class="fa fa-circle-o"></i>Post News Feed</a></li>
                @endif
                <li><a href="{{ route(ADMIN.'.feeds.history') }}"><i class="fa fa-circle-o"></i>News Feed History</a></li>
            </ul>
        </li>
    @endif
    @if (auth()->user()->role->hasPermission('viewSkill'))
        <li class="treeview">
            <a href="#"><i class='fa fa-scribd'></i> <span>Skills</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                    <li><a href="{{ route(ADMIN.'.skills.index') }}"><i class="fa fa-circle-o"></i>Available Skills</a></li>
            </ul>
        </li>
   @endif
    @if (auth()->user()->role->hasPermission('Notification'))
        <li class="treeview">
                <a href="#"><i class='fa fa-list'></i> <span>Notification</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                <li><a href="{{ route(ADMIN.'.notification.index') }}"><i class="fa fa-circle-o"></i>Send Notification</a></li>
                <li><a href="{{ route(ADMIN.'.notification.history') }}"><i class="fa fa-circle-o"></i>Notification History</a></li>
            </ul>
        </li>
@endif
@if (auth()->user()->role->hasPermission('Accounts'))
    <li class="treeview">
        <a href="#"><i class='fa fa-universal-access'></i> <span>Accounts</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route(ADMIN.'.accounts.index') }}"><i class="fa fa-circle-o"></i>Index</a></li>
            <li><a href="{{ route(ADMIN.'.accounts.request') }}"><i class="fa fa-circle-o"></i>Requests</a></li>
        </ul>
    </li>
@endif
@if (auth()->user()->hasRole('Admin') || auth()->user()->hasRole('Manager'))
<li class="treeview">
    <a href="#"><i class='fa fa-link'></i> <span>Tools</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
       {{-- <li><a href="#"><i class="fa fa-circle-o"></i>Settings</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Backups</a></li>--}}
        @if(auth()->user()->role->hasPermission('Roles'))
            <li><a href="{{ route(ADMIN.'.roles') }}"><i class="fa fa-circle-o"></i>Roles</a></li>
        @endif
        @if(auth()->user()->role->hasPermission('Logs'))
            <li><a href="{{ route(ADMIN.'.logs') }}"><i class="fa fa-circle-o"></i>Logs</a></li>
        @endif
        @if(auth()->user()->role->hasPermission('Testimonial'))
            <li><a href="{{ route(ADMIN.'.testimonial') }}"><i class="fa fa-circle-o"></i>Testimonial</a></li>
        @endif
        <li><a href="{{ route(ADMIN.'.category') }}"><i class="fa fa-circle-o"></i>Category</a></li>
    </ul>
</li>
@endif
</ul>
