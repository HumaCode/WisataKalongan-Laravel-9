<aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link bg-cyan">
        <img src="{{ asset('backend') }}/img/4.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Wisata Kalongan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ (!empty($adminData->photo)) ? url('backend/img/' . $adminData->photo) : url('backend/img/user.png')}}"
                    class="img-circle elevation-2" alt="{{ $adminData->name }}">
            </div>
            <div class="info">
                <a href="{{ route('admin.profile') }}" class="d-block">{{ $adminData->name }}</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Menu Utama</li>

                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ ($submenu == 'dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/kategori') }}"
                        class="nav-link {{ ($submenu == 'sub_kategori') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-th"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>


                <li class="nav-item {{ ($menu == 'destinasi') ? 'menu-open' : '' }}"">
                    <a href=" #" class="nav-link {{ ($menu == 'destinasi') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-map-marker"></i>
                    <p>
                        Wisata
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('destinasi') }}"
                                class="nav-link {{ ($submenu == 'sub_destinasi') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Destinasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('budaya') }}"
                                class="nav-link {{ ($submenu == 'sub_budaya') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cagar Budaya</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('event') }}"
                                class="nav-link {{ ($submenu == 'sub_event') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Even</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <div class="user-panel  pb-3  d-flex">

                </div>
                <li class="nav-header">Pengaturan</li>

                <li class="nav-item {{ ($menu == 'profile') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ ($menu == 'profile') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('admin.profile') }}"
                                class="nav-link {{ ($submenu == 'sub_profile') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Edit Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('ubah.password') }}"
                                class="nav-link {{ ($submenu == 'sub_ubah_password') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reset Password</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">

                    <a href="#" class="nav-link mt-2" data-toggle="modal" data-target="#exampleModal">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>