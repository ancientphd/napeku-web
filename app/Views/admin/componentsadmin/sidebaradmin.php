<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'dashboard') ? "" : "collapsed" ?>" href="<?= base_url('dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '/admin/order') ? "" : "collapsed" ?>" href="/admin/order">
                <i class="bi bi-cart-check"></i>
                <span>Kelola Order</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'pesan') ? "" : "collapsed" ?>" href="/admin/pesan">
                <i class="bi bi-chat-dots"></i>
                <span>Kelola Pesan</span>
            </a>
        </li>
    
    </ul>

</aside><!-- End Sidebar-->