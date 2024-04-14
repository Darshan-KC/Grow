<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('uploads/logo/icon.ico') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">GROW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('uploads\profile\default.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('user')}}" class="d-block">Sagar Timilsina</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
               {{-- dashboard sidebar --}}
                <li class="nav-item  {{ request()->is('admin') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ request()->is('admin') ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.home') }}"
                                class="nav-link  {{ request()->is('admin') ? 'active' : '' }} ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- course sidebar --}}
                <li class="nav-item {{ request()->is('admin/course*') ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ request()->is('admin/course*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Courses
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.course.create') }}"
                                class="nav-link {{ request()->is('admin/course/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create-courses</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.course.index') }}"
                                class="nav-link {{ request()->is('admin/course') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Main-courses</p>
                            </a>
                        </li>
                    </ul>

                </li>

                {{-- user sidebar  --}}
                <li class="nav-item  {{ request()->is('admin/admin_user*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/admin_user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user  "></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.admin_user.create') }}"
                                class="nav-link  {{ request()->is('admin/admin_user/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create user</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.admin_user.index') }}"
                                class="nav-link  {{ request()->is('admin/admin_user') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View user</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- contactUs sidebar --}}
                <li class="nav-item {{ request()->is('admin/contact') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-phone  "></i>
                        <p>
                            Contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.contact.index') }}"
                                class="nav-link  {{ request()->is('admin/contact') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View message</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{-- frontend_rendering sidebar --}}
                <div class="user-panel mt-3  d-flex">
                    <div class="info">
                        <a href="#" class="d-block pl-4">Frontend</a>
                    </div>
                </div>

                {{-- home sidebar --}}
                <li class="nav-item {{ request()->is('admin/home*') ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ request()->is('admin/home*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.home.create') }}"
                                class="nav-link {{ request()->is('admin/home/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.home.index') }}"
                                class="nav-link {{ request()->is('admin/home') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Home</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- About Frontend Starts --}}
                <li class="nav-item {{ request()->is('admin/about*') ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ request()->is('admin/about*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            About
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.about.create') }}"
                                class="nav-link {{ request()->is('admin/about/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create About</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.about.index') }}"
                                class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View About</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 {{-- Coursesinstructor starts --}}
                 {{-- <li class="nav-item {{ request()->is('admin/course_instructor*') ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ request()->is('admin/course_instructor*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            Courses & Instructor
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.course_instructor.create') }}"
                                class="nav-link {{ request()->is('admin/courses/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.course_instructor.index') }}"
                                class="nav-link {{ request()->is('admin/courses/index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- site contact starts  --}}
                <li class="nav-item  {{ request()->is('admin/site-contact*') ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ request()->is('admin/site-contact*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope "></i>
                        <p>
                            Site contact
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.site-contact.create') }}"
                                class="nav-link  {{ request()->is('admin/site-contact/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.site-contact.index') }}"
                                class="nav-link  {{ request()->is('admin/site-contact') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View site contacts</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- site config starts  --}}
                <li class="nav-item  {{ request()->is('admin/site-config*') ? 'menu-open' : '' }}">
                    <a href="" class="nav-link {{ request()->is('admin/site-config*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog  "></i>
                        <p>
                            Site Config
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.site-config.create') }}"
                                class="nav-link  {{ request()->is('admin/site-config/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('admin.site-config.index') }}"
                                class="nav-link  {{ request()->is('admin/site-config') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View site configs</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>

    </div>
</aside>

{{-- notes sidebar --}}
{{-- {{-- <li class="nav-item  {{ request()->is('admin/notes*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('admin/notes*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user  "></i>
                        <p>
                            Notes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.notes.index') }}"
                                class="nav-link  {{ request()->is('admin/notes') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Notes</p>
                            </a>
                        </li>

                    </ul> --}}
