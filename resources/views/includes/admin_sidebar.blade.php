{{-- @include('layouts.menu') --}}
<li class="app-sidebar__heading">Welcome To The Admin Panel</li>
<li class="">
    <a href="{{route('admin.dashboard')}}" class="{{ Request::is('rt-admin/dashboard*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-box2"></i>
        Dashboard
    </a>
</li>
{{-- Admin --}}
@if(Auth::user()->super_admin == 1)
<li class="{{ Request::is('rt-admin/admins*') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-user"></i>
        Admins
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/admins*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/admins/create') ? 'mm-active' : '' }}"
                href="{{route('admin.admins.create')}}">
                <i class="metismenu-icon"></i>
                Create
            </a>
        <li>
            <a class="{{ Request::is('rt-admin/admins') ? 'mm-active' : '' }}" href="{{route('admin.admins.index')}}">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
    </ul>
</li>
@endif
{{-- User --}}
{{-- @if(Route::has('admin.users.index')) --}}
<li class="{{ Request::is('rt-admin/user*') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-users"></i>
        Students
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/users*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/user-account') ? 'mm-active' : '' }}"
                href="{{route('admin.userAccount.create')}}">
                <i class="metismenu-icon"></i>
                Create Account
            </a>
        </li>
        <li>
            <a class="{{ Request::is('rt-admin/users/create') ? 'mm-active' : '' }}"
                href="{{route('admin.users.create')}}">
                <i class="metismenu-icon"></i>
                Create Profile
            </a>
        </li>
        <li>
            <a class="{{ Request::is('rt-admin/users') ? 'mm-active' : '' }}" href="{{route('admin.users.index')}}">
                <i class="metismenu-icon">
                </i>Manage Profile
            </a>
        </li>
        <li>
            <a class="{{ Request::is('rt-admin/users-requests') ? 'mm-active' : '' }}"
                href="{{route('admin.users.requests')}}">
                <i class="metismenu-icon">
                </i>Manage Requests
            </a>
        </li>
    </ul>
</li>
{{-- @endif --}}
{{-- Blog --}}
@if(Route::has('admin.blogs.index'))
<li class="{{ Request::is('rt-admin/blog*') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-albums"></i>
        Blogs
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/blogs*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/blogs/create') ? 'mm-active' : '' }}"
                href="{{route('admin.blogs.create')}}">
                <i class="metismenu-icon"></i>
                Create
            </a>
        <li>
            <a class="{{ Request::is('rt-admin/blogs') ? 'mm-active' : '' }}" href="{{route('admin.blogs.index')}}">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
        <li>
            <a class="{{ Request::is('rt-admin/requests') ? 'mm-active' : '' }}"
                href="{{route('admin.blogs.requests')}}">
                <i class="metismenu-icon">
                </i>Requests
            </a>
        </li>
    </ul>
</li>
@endif
{{-- Gallery --}}
@if(Route::has('admin.galleries.index'))
<li class="{{ Request::is('rt-admin/galleries*') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-video"></i>
        Galleries
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/galleries*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/galleries/create') ? 'mm-active' : '' }}"
                href="{{route('admin.galleries.create')}}">
                <i class="metismenu-icon"></i>
                Create
            </a>
        <li>
            <a class="{{ Request::is('rt-admin/gallery') ? 'mm-active' : '' }}"
                href="{{route('admin.galleries.index')}}">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
    </ul>
</li>
@endif
{{-- Project --}}
@if(Route::has('admin.programs.index'))
<li class="@isset($category) 
                            @if($category == 'Project') mm-active @endif @endisset">
    <a href="#">
        <i class="metismenu-icon pe-7s-diamond"></i>
        Projects
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="@isset($category) 
                            @if($category == 'Project') mm-show @endif @endisset">
        <li>
            <form id="add-form-project" style="display: none" action="{{route('admin.programs.create')}}">
                <input type="hidden" name="category" value="Project">
            </form>
            <a class="" onclick="document.getElementById('add-form-project').submit();" href="#">
                <i class="metismenu-icon"></i>
                Create
            </a>
        <li>
            <form id="manage-form-project" style="display: none" action="{{route('admin.programs.index')}}">
                <input type="hidden" name="category" value="Project">
            </form>
            <a class="" onclick="document.getElementById('manage-form-project').submit();" href="#">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
    </ul>
</li>
@endif
{{-- Event --}}
{{-- <li class="@isset($category) 
                            @if($category == 'Event') mm-active @endif @endisset">
        <a href="#">
            <i class="metismenu-icon pe-7s-diamond"></i>
            Events
            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
        </a>
        <ul class="@isset($category) 
                            @if($category == 'Event') mm-show @endif @endisset">
            <li>
                <form id="add-form-event" style="display: none" action="{{route('admin.program.create')}}">
<input type="hidden" name="category" value="Event">
</form>
<a class="" onclick="document.getElementById('add-form-event').submit();" href="#">
    <i class="metismenu-icon"></i>
    Create
</a>
<li>
    <form id="manage-form-event" style="display: none" action="{{route('admin.program.index')}}">
        <input type="hidden" name="category" value="Event">
    </form>
    <a class="" onclick="document.getElementById('manage-form-event').submit();" href="#">
        <i class="metismenu-icon">
        </i>Manage
    </a>
</li>
</ul>
</li> --}}


{{-- Feedbacks --}}
@if(Route::has('admin.feedbacks'))
<li class="">
    <a href="{{route('admin.feedbacks')}}" class="{{ Request::is('rt-admin/feedback*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-note2"></i>
        Feedbacks
    </a>
</li>
@endif

<li class="{{ Request::is('rt-admin/jobDetails**') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-wallet"></i>
        Jobs
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/jobDetails*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/jobDetails/create') ? 'mm-active' : '' }}"
                href="{{route('admin.jobDetails.create')}}">
                <i class="metismenu-icon"></i>
                Create Job
            </a>
        <li>
            <a class="{{ Request::is('rt-admin/jobDetails') ? 'mm-active' : '' }}"
                href="{{route('admin.jobDetails.index')}}">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
        <li>
            <a class="{{ Request::is('rt-admin/jobDetails-requests') ? 'mm-active' : '' }}"
                href="{{route('admin.jobDetails.requests')}}">
                <i class="metismenu-icon">
                </i>Requests
            </a>
        </li>
    </ul>
</li>



<li class="{{ Request::is('rt-admin/seminars**') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-wristwatch"></i>
        Seminar Or Events
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/seminars*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/seminars/create') ? 'mm-active' : '' }}"
                href="{{route('admin.seminars.create')}}">
                <i class="metismenu-icon"></i>
                Create
            </a>
        <li>
            <a class="{{ Request::is('rt-admin/seminars') ? 'mm-active' : '' }}"
                href="{{route('admin.seminars.index')}}">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
    </ul>
</li>


<li class="{{ Request::is('rt-admin/scholarships**') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-magic-wand"></i>
        Scholarships
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/scholarships*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/scholarships/create') ? 'mm-active' : '' }}"
                href="{{route('admin.scholarships.create')}}">
                <i class="metismenu-icon"></i>
                Create
            </a>
        <li>
            <a class="{{ Request::is('rt-admin/scholarships') ? 'mm-active' : '' }}"
                href="{{route('admin.scholarships.index')}}">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('rt-admin/zooms**') ? 'mm-active' : '' }}">
    <a href="#">
        <i class="metismenu-icon pe-7s-menu"></i>
        Zoom Meeting
        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
    </a>
    <ul class="{{ Request::is('rt-admin/zooms*') ? 'mm-show' : '' }}">
        <li>
            <a class="{{ Request::is('rt-admin/zooms/create') ? 'mm-active' : '' }}"
                href="{{route('admin.zooms.create')}}">
                <i class="metismenu-icon"></i>
                Create
            </a>
        <li>
            <a class="{{ Request::is('rt-admin/zooms') ? 'mm-active' : '' }}" href="{{route('admin.zooms.index')}}">
                <i class="metismenu-icon">
                </i>Manage
            </a>
        </li>
    </ul>
</li>

{{-- Contacts --}}
@if(Route::has('admin.contacts'))
<li class="">
    <a href="{{route('admin.contacts')}}" class="{{ Request::is('rt-admin/contact*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-network"></i>
        Contacts
    </a>
</li>
@endif
<li class="">
    <a href="{{route('admin.backups.index')}}" class="{{ Request::is('rt-admin/backups*') ? 'mm-active' : '' }}">
        <i class="metismenu-icon pe-7s-cloud"></i>
        Backup
    </a>
</li>