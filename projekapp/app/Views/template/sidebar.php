        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate">
                    <i class="fas fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-auto">Tugas Akhir</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Profile
            </div>

            <!-- Nav Item - My Profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>

            <!-- Nav Item - Edit My Profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('detailprofile'); ?>">
                    <i class="fas fa-id-card"></i>
                    <span>Detail Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Toko Komik dan Novel
            </div>

            <!-- Nav Item - Users -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('komiknovel'); ?>">
                    <i class=" fas fa-fw fa-book"></i>
                    <span>Komik dan Novel</span>
                </a>
            </li>

            <?php if (in_groups('admin')) : ?>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Management
                </div>

                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <i class=" fas fa-fw fa-users"></i>
                        <span>User List</span>
                    </a>
                </li>
                <!-- Nav Item - logout -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">
                        <i class="fas far fa-id-badge"></i> <span>Contact Us</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (in_groups('super_admin')) : ?>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Management
                </div>

                <!-- Nav Item - Users -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <i class=" fas fa-fw fa-users"></i>
                        <span>User List</span>
                    </a>
                </li>
                <!-- Nav Item - logout -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">
                        <i class="fas far fa-id-badge"></i> <span>Contact Us</span>
                    </a>
                </li>
            <?php endif; ?>


            <?php if (in_groups('user')) : ?>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Management
                </div>
                <!-- Nav Item - logout -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">
                        <i class="fas far fa-id-badge"></i> <span>Contact Us</span>
                    </a>
                </li>
            <?php endif; ?>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - logout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                </a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->