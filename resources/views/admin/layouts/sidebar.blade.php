<div class="sidebar-menu light-sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('admin.dashboard')}}"><img src="{{asset('assets/img/logo/logo2.png')}}" style="max-width:120px; !important" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner" id="sidebar_menu">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                        <a href="/admin/dashboard">
                            <i class="feather ft-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
 

                    <li class="{{ Request::routeIs('admin.blog') ? 'active' : '' }}">
                        <a href="/admin/blog">
                            <i class="feather ft-message-square"></i>
                            <span>Blogs</span>
                        </a>
                    </li>
 
                    </li>


                    <li class="{{ Request::routeIs('admin.logout') ? 'active' : '' }}">
                        <a href="/admin/logout">
                            <i class="feather ft-log-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>


                   
                </ul>
            </nav>
        </div>
    </div>
</div>