<?php $__env->startSection('main-content'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Dashboard')); ?></h1>

    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        Hallo <?php echo e(Auth::user()->name); ?>, Selamat Datang di Aplikasi Perpustakaan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <?php if(session('status')): ?>
        <div class="alert alert-success border-left-success" role="alert">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>



    <div class="row">


        <div class="col-lg-12 mb-4">

            <!-- Illustrations -->


            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                </div>
                <div class="card-body">
                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                    <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpusb\resources\views/home.blade.php ENDPATH**/ ?>