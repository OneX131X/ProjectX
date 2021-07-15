<?php $__env->startSection('main-content'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Buku</h1>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Buku</h6>

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="dark">
                                <tr>
                                    <th>Judul Buku</th>
                                    <td><?php echo e($buku->judul); ?></td>
                                </tr>
                                <tr>
                                    <th>ISBN</th>
                                    <td><?php echo e($buku->isbn); ?></td>
                                </tr>
                                <tr>
                                    <th>Penerbit</th>
                                    <td><?php echo e($buku->penerbit); ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun Terbit</th>
                                    <td><?php echo e($buku->tahun_terbit); ?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Tersedia</th>
                                    <td><?php echo e($buku->jumlah); ?></td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td><?php echo e($buku->deskripsi); ?></td>
                                </tr>
                                <tr>
                                    <th>Lokasi</th>
                                    <td><?php echo e($buku->lokasi); ?></td>
                                </tr>
                                <tr>
                                    <th>Cover</th>
                                    <td>
                                        <img src="<?php echo e(asset('cover/'.$buku->cover)); ?>" alt="" width="100" height="100">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <p>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin'
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpusb\resources\views/buku/show.blade.php ENDPATH**/ ?>