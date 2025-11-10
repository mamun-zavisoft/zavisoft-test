<div class="sidebar-inner slimscroll w-full">
    <div id="sidebar-menu" class="sidebar-menu ">
        <ul>
            <li>
                <a href="index.html">
                    <img src="{{ asset('assets/images/icons/dashboard.svg') }}" alt="img">
                    <span> Dashboard</span>
                </a>
            </li>

            <li class="submenu">
                <a href="javascript:void(0);">
                    <img src="{{ asset('assets/images/icons/settings.svg') }}" alt="img">
                    <span> Settings</span>
                    <span class="menu-arrow"></span>
                </a>
                <ul>
                    <li><a href="{{ route('admin.system-settings') }}">System Settings</a></li>
                    <li><a href="{{ route('admin.page-settings') }}">Page Settings</a></li>
                    <li><a href="addproduct.html">Service</a></li>
                    <li><a href="addproduct.html">Projects</a></li>
                    <li><a href="categorylist.html">Blogs</a></li>
                    <li><a href="addcategory.html">Careers</a></li>
                    <li><a href="subcategorylist.html">Patners</a></li>
                    <li><a href="subaddcategory.html">Testimonials</a></li>
                    <li><a href="brandlist.html">Team Members</a></li>
                    <li><a href="addbrand.html">Social Media</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
