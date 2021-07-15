<?php $__env->startSection('main-content'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Pengguna</h1>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit User
                    </h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('pengguna.update', $pengguna->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group">
                            <label for="" class="mb-1">Nama Depan</label>
                            <input type="text" class="form-control py-4" value="<?php echo e($pengguna->name); ?>" name="name" placeholder="Masukkan Nama Depan" required autofocus>
                        </div>

                        <div class="form-group">
                                <label for="" class="mb-1">Nama Belakang</label>
                                <input type="text" class="form-control py-4" value="<?php echo e($pengguna->last_name); ?>" name="last_name" placeholder="Masukkan Nama Belakang" required>
                        </div>

                        <div class="form-group">
                                <label for="" class="mb-1">Email</label>
                                <input type="email" class="form-control py-4" value="<?php echo e($pengguna->email); ?>" name="email" placeholder="Masukkan Email" required>
                        </div>

                        <div class="form-group">
                                <label for="" class="mb-1">Password</label>
                                <input type="password" class="form-control py-4" value="<?php echo e(old('password')); ?>" name="password" placeholder="Masukkan Password" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">SIMPAN</button>
                            <a href="<?php echo e(route('pengguna.index')); ?>" class="btn btn-sm btn-danger">KEMBALI</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin'
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpusb\resources\views/user/edit.blade.php ENDPATH**/ ?>