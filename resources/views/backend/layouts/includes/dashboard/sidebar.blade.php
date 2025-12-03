<div class="sidebar-inner slimscroll w-full">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <img src="{{ asset('assets/images/icons/dashboard.svg') }}" alt="img">
                    <span> Dashboard</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.job-applications') ? 'active' : '' }}">
                <a href="{{ route('admin.job-applications') }}">
                    <i class="fa fa-file-signature text-gray-600 text-xl"></i>
                    <span>Job Applications</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.careers*') ? 'active' : '' }}">
                <a href="{{ route('admin.careers.index') }}">
                    <i class="fa fa-file-alt text-gray-600 text-xl"></i>
                    <span>Job Post</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.messages') ? 'active' : '' }}">
                <a href="{{ route('admin.messages') }}">
                    <i class="fa fa-bell text-gray-600 text-xl"></i>
                    <span> Messages </span>
                </a>
            </li>

            <li class="{{ Route::is('admin.service*') ? 'active' : '' }}">
                <a href="{{ route('admin.service.index') }}">
                    <i class="fa fa-tools text-gray-600 text-xl"></i>
                    <span>Services</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.project*') ? 'active' : '' }}">
                <a href="{{ route('admin.project.index') }}">
                    <i class="fa fa-diagram-project text-gray-600 text-xl"></i>
                    <span>Projects</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.industry-focus*') ? 'active' : '' }}">
                <a href="{{ route('admin.industry-focus') }}">
                    <i class="fa fa-industry text-gray-600 text-xl"></i>
                    <span>Industry Focus</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.partners*') ? 'active' : '' }}">
                <a href="{{ route('admin.partners') }}">
                    <i class="fa fa-handshake text-gray-600 text-xl"></i>
                    <span>Partners</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.testimonials*') ? 'active' : '' }}">
                <a href="{{ route('admin.testimonials') }}">
                    <i class="fa fa-comment-dots text-gray-600 text-xl"></i>
                    <span>Testimonials</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.team-members*') ? 'active' : '' }}">
                <a href="{{ route('admin.team-members') }}">
                    <i class="fa fa-users text-gray-600 text-xl"></i>
                    <span>Team Members</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.social-media*') ? 'active' : '' }}">
                <a href="{{ route('admin.social-media') }}">
                    <i class="fa fa-share-alt text-gray-600 text-xl"></i>
                    <span>Social Media</span>
                </a>
            </li>

            <li class="{{ Route::is('admin.blogs*') ? 'active' : '' }}">
                <a href="{{ route('admin.blogs') }}">
                    <i class="fa fa-blog text-gray-600 text-xl"></i>
                    <span>Blogs</span>
                </a>
            </li>

            <!-- Settings Submenu -->
            <li class="submenu">
                <a href="javascript:void(0);" class="{{ Route::is('admin.settings.*') ? 'subdrop' : '' }}">
                    <img src="{{ asset('assets/images/icons/settings.svg') }}" alt="img">
                    <span> Settings</span>
                    <span class="menu-arrow"></span>
                </a>

                <ul style="{{ Route::is('admin.settings.*') ? 'display: flex;' : '' }}">
                    <li class="{{ Route::is('admin.settings.system-settings') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.system-settings') }}">System Settings</a>
                    </li>

                    <li class="{{ Route::is('admin.settings.page-settings') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings.page-settings') }}">Page Settings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
