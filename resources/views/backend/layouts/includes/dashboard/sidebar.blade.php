<div class="sidebar-inner slimscroll w-full">
    <div id="sidebar-menu" class="sidebar-menu ">
        <ul>
            <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/images/icons/dashboard.svg') }}" alt="img">
                    <span> Dashboard</span>
                </a>
            </li>

            <li class="submenu">
                <a href="javascript:void(0);" class="">
                    <img src="{{ asset('assets/images/icons/settings.svg') }}" alt="img">
                    <span> Settings</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul>
                    <li class="{{ Route::currentRouteName() == 'admin.settings.system-settings' ? 'active' : '' }}"><a
                            href="{{ route('admin.settings.system-settings') }}" class="">System
                            Settings</a></li>
                    <li><a href="{{ route('admin.settings.page-settings') }}">Page Settings</a></li>
                    <li><a href="{{ route('admin.settings.services') }}">Service</a></li>
                    <li><a href="{{ route('admin.settings.projects') }}">Projects</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Patners</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Team Members</a></li>
                    <li><a href="#">Social Media</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
