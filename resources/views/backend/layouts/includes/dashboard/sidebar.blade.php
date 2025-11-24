@php
    // All routes that belong to "Settings" submenu
    $settingsRoutes = [
        'admin.settings.system-settings',
        'admin.settings.page-settings',
        'admin.settings.services',
        'admin.settings.projects',
        'admin.settings.industry-focus',
        'admin.settings.social-media',
        'admin.settings.blogs',
        'admin.settings.careers',
        'admin.settings.testimonials',
        'admin.settings.partners',
        'admin.settings.team-members',
    ];

    $isSettingsActive = in_array(Route::currentRouteName(), $settingsRoutes);
@endphp
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
                <a href="javascript:void(0);" class="{{ $isSettingsActive ? 'subdrop' : '' }}">
                    <img src="{{ asset('assets/images/icons/settings.svg') }}" alt="img">
                    <span> Settings</span>
                    <span class="menu-arrow"></span>
                </a>

                <ul style="{{ $isSettingsActive ? 'display: flex;' : '' }}">
                    <li class="{{ Route::currentRouteName() == 'admin.settings.system-settings' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.system-settings') }}">System Settings</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'admin.settings.page-settings' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.page-settings') }}">Page Settings</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'admin.settings.services' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.services') }}">Service</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'admin.settings.projects' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.projects') }}">Projects</a>
                    </li>

                    <li class="{{ Route::currentRouteName() == 'admin.settings.industry-focus' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.industry-focus') }}">Industry Focus</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'admin.settings.partners' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.partners') }}">Partners</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'admin.settings.testimonials' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.testimonials') }}">Testimonials</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'admin.settings.team-members' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.team-members') }}">Team Members</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'admin.settings.careers.index' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.careers.index') }}">Careers</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'admin.settings.social-media' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.social-media') }}">Social Media</a>
                    </li>
                    <li class="{{ Route::currentRouteName() == 'admin.settings.blogs' ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.blogs') }}">Blogs</a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>
