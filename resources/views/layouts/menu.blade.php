
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('courseRegistrations*') ? 'active' : '' }}">
    <a href="{!! route('courseRegistrations.index') !!}"><i class="fa fa-edit"></i><span>Course Registrations</span></a>
</li>

<li class="{{ Request::is('requestQuotes*') ? 'active' : '' }}">
    <a href="{!! route('requestQuotes.index') !!}"><i class="fa fa-edit"></i><span>Request Quotes</span></a>
</li>

