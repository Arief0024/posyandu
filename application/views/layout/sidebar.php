<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="<?= base_url('dashboard'); ?>" class="logo d-flex align-items-center" data-target="#sidebarMenu">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Posyandu Melati</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->
        </ul>
    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(1) == 'dashboard' ? ' active' : '' ?>"
                href="<?= base_url('dashboard'); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-heading">Data Master</li>
        <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(2) == 'users' ? ' active' : '' ?>"
                href="<?= base_url('admin/users'); ?>">
                <i class="bi bi-person"></i><span>Data Users</span></i>
            </a>
        </li>
        <!-- End data user Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(2) == 'petugas' ? ' active' : '' ?>"
                href="<?= base_url('admin/petugas'); ?>">
                <i class="bi bi-journal-text"></i><span>Data Petugas</span></i>
            </a>
        </li>
        <!-- End data petugas Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(2) == 'bayi' ? ' active' : '' ?>"
                href="<?= base_url('admin/bayi'); ?>">
                <i class="bi bi-people"></i><span>Data Bayi</span></i>
            </a>
        </li>
        <!-- End data bayi Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(2) == 'ibu' ? ' active' : '' ?>"
                href="<?= base_url('admin/ibu'); ?>">
                <i class="bi bi-people"></i><span>Data Ibu</span></i>
            </a>
        </li>
        <!-- End data ibu Nav -->
        <!-- <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(2) == 'imunisasi' ? ' active' : '' ?>"
                href="<?= base_url('admin/imunisasi'); ?>">
                <i class="bi bi-journal-text"></i>
                <span>Data Imunisasi</span>
            </a>
        </li>
        End data imunisasi Nav -->
        <li class="nav-heading">Layanan</li>

        <!-- <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(2) == 'kunjungan' ? ' active' : '' ?>"
                href="<?= base_url('admin/penimbangan'); ?>">
                <i class="bi bi-file-medical"></i>
                <span>Data Penimbangan</span>
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link collapsed <?= $this->uri->segment(2) == 'kunjungan' ? ' active' : '' ?>"
                href="<?= base_url('admin/kunjungan'); ?>">
                <i class="bi bi-file-medical"></i>
                <span>Kunjungan Imunisasi</span>
            </a>
        </li>
        <!-- End tindakan medis Nav -->

        <li class="nav-heading">Cetak Laporan</li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journals"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <!-- <li>
                    <a href="<?= base_url('laporan/petugas'); ?>" target="_blank">
                        <i class="bi bi-circle"></i><span>Laporan Petugas</span>
                    </a>
                </li> -->
                <li>
                    <a href="<?= base_url('laporan/bayi'); ?>" target="_blank">
                        <i class="bi bi-circle"></i><span>Laporan Bayi</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('laporan/ibu'); ?>" target="_blank">
                        <i class="bi bi-circle"></i><span>Laporan Ibu</span>
                    </a>
                </li>
                <!-- <li>
                    <a href=" <?= base_url('laporan/imunisasi'); ?>" target="_blank">
                        <i class="bi bi-circle"></i><span>Laporan Imunisasi</span>
                    </a>
                </li> -->
                <li>
                    <a href=" <?= base_url('laporan/kunjungan'); ?>" target="_blank">
                        <i class="bi bi-circle"></i><span>Laporan Medis</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Icons Nav -->
        <li class="nav-heading">Log out</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('auth/logout'); ?>">
                <i class="bi bi-box-arrow-in-left"></i>
                <span>Keluar</span>
            </a>
        </li>
        <!-- End Login Page Nav -->
    </ul>
</aside>
<!-- End Sidebar-->
<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $title; ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
</main>
<!-- End #main -->