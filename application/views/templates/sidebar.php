<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-10">
        <i class="fas fa-hospital"></i>
    </div>
    <div class="sidebar-brand-text mx-3">
        Rumah Sakit
    </div>
</a>

<hr class="sidebar-divider my-0">

<li class="nav-item active">
    <a class="nav-link" href="<?= site_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('pasien') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Data Pasien</span>
    </a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('dokter') ?>">
        <i class="fas fa-fw fa-user-md"></i>
        <span>Data Dokter</span>
    </a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('pendaftaran') ?>">
        <i class="fas fa-fw fa-notes-medical"></i>
        <span>Pendaftaran</span>
    </a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan/pasien'); ?>">
        <i class="fas fa-fw fa-file"></i>
        <span>Laporan Pasien</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan/dokter'); ?>">
        <i class="fas fa-fw fa-file-medical"></i>
        <span>Laporan Dokter</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan/pendaftaran'); ?>">
        <i class="fas fa-file-alt"></i>
        <span>Laporan Pendaftaran</span>
    </a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('auth/logout') ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
    </a>
</li>

<hr class="sidebar-divider d-none d-md-block">

</ul>

<div id="content-wrapper" class="d-flex flex-column">
<div id="content">