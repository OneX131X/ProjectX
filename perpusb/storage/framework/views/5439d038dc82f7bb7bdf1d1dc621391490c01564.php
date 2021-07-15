<?php $__env->startSection('main-content'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Buku</h1>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Buku</h6>
                    <a href="<?php echo e(route('buku.create')); ?>" class="btn btn-sm btn-success float-right">Tambah Data</a> &nbsp;
                    <a href="<?php echo e(route('buku.cetak')); ?>" class="btn btn-sm btn-primary float-right">Cetak Buku</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <?php echo $html->table(['class' => 'table table-bordered table-striped table-hover dataTable']); ?>


                    </div>
                    <p>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php echo $html->scripts(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin'
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpusb\resources\views/buku/index.blade.php ENDPATH**/ ?>