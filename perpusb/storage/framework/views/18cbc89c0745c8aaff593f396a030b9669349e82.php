<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PERPUSKU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo e(Nav::isRoute('home')); ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><?php echo e(__('Dashboard')); ?></span></a>
    </li>
    <li class="nav-item <?php echo e(Nav::isRoute('buku.*')); ?>">
        <a class="nav-link" href="<?php echo e(route('buku.index')); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku</span></a>
    </li>
    <li class="nav-item <?php echo e(Nav::isRoute('member.*')); ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Member</span></a>
    </li>
    <li class="nav-item <?php echo e(Nav::isRoute('transaksi.*')); ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
            <i class="fas fa-chart-line"></i>
            <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        <?php echo e(__('Settings')); ?>

    </div>

    <!-- Nav Item - Profile -->
    <li class="nav-item <?php echo e(Nav::isRoute('profile')); ?>">
        <a class="nav-link" href="<?php echo e(route('profile')); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span><?php echo e(__('Profile')); ?></span>
        </a>
    </li>

    <li class="nav-item <?php echo e(Nav::isRoute('pengguna.*')); ?>">
        <a class="nav-link" href="<?php echo e(route('pengguna.index')); ?>">
            <i class="fas fa-user-cog"></i>
            <span>Akun</span>
        </a>
    </li>

    <!-- Nav Item - About -->
    <li class="nav-item <?php echo e(Nav::isRoute('about')); ?>">
        <a class="nav-link" href="<?php echo e(route('about')); ?>">
            <i class="fas fa-fw fa-hands-helping"></i>
            <span><?php echo e(__('About')); ?></span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php /**PATH C:\xampp\htdocs\perpusb\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>