<aside class="sidebar">
    <h2 class="sidebar-title">Admin Panel</h2>
    <ul class="sidebar-menu">
        <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a></li>
        <li><a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users') ? 'active' : '' }}">Users</a></li>
        <li><a href="{{ route('admin.projects') }}" class="{{ request()->routeIs('admin.projects') ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ route('admin.skills') }}" class="{{ request()->routeIs('admin.skills') ? 'active' : '' }}">Skills</a></li>
        <li><a href="{{ route('admin.education') }}" class="{{ request()->routeIs('admin.education') ? 'active' : '' }}">Education</a></li>
        <li><a href="{{ route('admin.achievements') }}" class="{{ request()->routeIs('admin.achievements') ? 'active' : '' }}">Achievements</a></li>
        <li><a href="{{ route('admin.experiences') }}" class="{{ request()->routeIs('admin.experiences') ? 'active' : '' }}">Experiences</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</aside>
