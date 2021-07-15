<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($u); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__env->startSection('main-content'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Dashboard')); ?></h1>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
                    <a href="<?php echo e(route('pengguna.create')); ?>" class="btn btn-sm btn-success float-right">Tambah Data</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>NO.</th>
                                <th>NAMA LENGKAP</th>
                                <th>EMAIL PENGGUNA</th>
                                <th>AKSI</th>
                            </tr>

                            <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                            <td><?php echo e($no++); ?>.</td>
                            <td><?php echo e($u->name.' '. $u->last_name); ?></td>
                            <td><?php echo e($u->email); ?></td>
                            <td>

                                <form action="<?php echo e(route('pengguna.destroy'. $u->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <a href="<?php echo e(route('pengguna.edit' $u->id)); ?>">Edit</a>
                                    <input class="btn btn-sm btn-danger" type="submit" value="Hapus">
                                </form>
                                <a href="javascipt:void(0);">Hapus</a>
                            </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4">Tidak Ada Data...</td>
                            </tr>
                            <?php endif; ?>
                        </table>
                    </div>
                    <p>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin'
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpusb\resources\views/layouts/user/index.blade.php ENDPATH**/ ?>