<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-atlas"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Pengaduan</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($title === "Dashboard") echo "active"; ?>">
            <a class="nav-link" href="../user/dashboard.php">
                <i class="fas fa-users"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Fiture
        </div>


        <!-- Nav Item - Buat Laporan -->
        <li class="nav-item <?php if ($title === "Buat Laporan") echo "active"; ?>">
            <a class="nav-link" href="../user/buatLaporan.php">
                <i class="fas fa-edit"></i>
                <span>Buat Laporan</span></a>
        </li>

        <!-- Nav Item - Laporan masyarakat -->
        <li class="nav-item <?php if ($title === "Laporan") echo "active"; ?>">
            <a class="nav-link" href="../user/lihatLaporan.php">
                <i class="fas fa-book-open"></i>
                <span>Laporan masyarakat</span></a>
        </li>

        <!-- Nav Item - Tanggapan -->
        <li class="nav-item <?php if ($title === "Tanggapan") echo "active"; ?>">
            <a class="nav-link" href="../user/tanggapan.php">
                <i class="fas fa-bookmark"></i>
                <span>Tanggapan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->



    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none ">
                    <i class="fa fa-bars"></i>
                </button>

                <h3 class="text-gray-800 ml-3"><?= $title; ?></h3>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle text-gray-900" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-users fa-sm fa-fw mr-2 text-gray-900"></i>
                            <span>Masyarakat</span>
                        </a>

                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-user-tie fa-sm fa-fw mr-2 text-gray-400"></i>
                                Login Petugas
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout Account
                            </a>
                        </div>

                    </li>

                </ul>

            </nav>

            <div class="container">

                <!-- End of Topbar -->