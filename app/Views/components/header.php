
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">NAPEKU</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a class="nav-link <?= (uri_string() == '') ? 'active' : '' ?>" href="<?= base_url('/') ?>">Beranda</a> 
                <a class="nav-link <?= (uri_string() == 'layanan') ? 'active' : '' ?>" href="<?= base_url('layanan') ?>">Layanan</a>
                <a class="nav-link <?= (uri_string() == 'tarif') ? 'active' : '' ?>" href="<?= base_url('tarif') ?>">Tarif</a>
                <a class="nav-link <?= (uri_string() == 'tracking') ? 'active' : '' ?>" href="<?= base_url('tracking') ?>">Tracking</a>
                <a class="nav-link <?= (uri_string() == 'testimoni') ? 'active' : '' ?>" href="<?= base_url('testimoni') ?>">Testimoni</a>
                <a class="nav-link <?= (uri_string() == 'kontak') ? 'active' : '' ?>" href="<?= base_url('kontak') ?>">Kontak</a>
                
                <!-- Login/User Dropdown -->
<div class="nav-item dropdown ms-lg-3" id="authDropdown">
    <?php if (session()->get('isLoggedIn')): ?>
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton">
            <i class="bi bi-person-circle me-1"></i>
            <?= session()->get('username'); ?> (<?= session()->get('role'); ?>)
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
        <?php
            if (session()->get('role') == 'admin') {
        ?>
            <a class="dropdown-item" href="<?= base_url('dashboard') ?>">
                <i class="bi bi-person-lines-fill me-2"></i>Admin
            </a>
        <?php
        }
        ?>
            <a class="dropdown-item" href="<?= base_url('history') ?>">
                <i class="bi bi-clock-history"></i> Histori Pemesanan
            </a>


            <a class="dropdown-item" href="<?= base_url('logout') ?>">
                <i class="bi bi-box-arrow-right me-2"></i>Keluar
            </a>
        </div>
    <?php else: ?>
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuButton">
            <i class="bi bi-person-circle me-1"></i> MASUK
        </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="<?= base_url('login') ?>">
                <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
            </a>
            <a class="dropdown-item" href="<?= base_url('register') ?>">
                <i class="bi bi-person-plus me-2"></i>Daftar
            </a>
        </div>
    <?php endif; ?>
</div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

   