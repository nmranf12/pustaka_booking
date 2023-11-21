<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-light">Pustaka Booking</div>
    </a>
    <!-- Divider -->
   

    <!-- Heading -->
    <div class="sidebar-heading text-light ">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
        <a class="nav-link pb-0 text-light " href="<?= base_url('buku/index'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span>Data Buku</span></a>
    </li>
    <li class="nav-item ">
        <a class="nav-link pb-0 text-light " href="<?= base_url('buku/kategori'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span>Kategori</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0 text-light" href="<?= base_url('user/anggota'); ?>">
            <i class="fa fa-fw fa-book"></i>
            <span>Data Anggota</span></a>
    </li>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -- > 