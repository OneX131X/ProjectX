<?php $__env->startSection('main-content'); ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Buku</h1>

    <div class="row">

        <div class="col-lg-12 mb-4">

            <!-- Approach -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Buku
                    </h6>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('buku.update', $buku->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <?php echo $__env->make('pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="form-group">
                            <label for="" class="mb-1">Judul</label>
                            <input type="text" class="form-control py-4" value="<?php echo e(is_null($buku) ? old('judul') : $buku->judul); ?>" name="judul" placeholder="Masukkan Judul" required autofocus>
                        </div>

                        <div class="form-group">
                                <label for="" class="mb-1">ISBN</label>
                                <input type="text" class="form-control py-4" value="<?php echo e(is_null($buku) ? old('isbn') : $buku->isbn); ?>" name="isbn" placeholder="Masukkan ISBN" required>
                        </div>

                        <div class="form-group">
                                <label for="" class="mb-1">Penerbit</label>
                                <input type="text" class="form-control py-4" value="<?php echo e(is_null($buku) ? old('penerbit') : $buku->penerbit); ?>" name="penerbit" placeholder="Masukkan Penerbit" required>
                        </div>

                        <div class="form-group">
                                <label for="" class="mb-1">Tahun Terbit</label>
                                <input type="number" class="form-control py-4" value="<?php echo e(is_null($buku) ? old('tahun_terbit') : $buku->tahun_terbit); ?>" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="mb-1">Jumlah</label>
                            <input type="number" class="form-control py-4" value="<?php echo e(is_null($buku) ? old('jumlah') : $buku->jumlah); ?>" name="jumlah" placeholder="Masukkan Jumlah" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="mb-1">Deskripsi</label>
                            <textarea class="form-control py-4" placeholder="Isikan Deskripsi" name="deskripsi"><?php echo e(is_null($buku) ? old('deskripsi') : $buku->deskripsi); ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="" class="mb-1">Lokasi</label>
                            <select name="lokasi" class="form-control">
                                <option value="rak1"<?php echo e($buku->lokasi == 'rak1' ? 'selected' : ''); ?>>RAK 1</option>
                                <option value="rak2"<?php echo e($buku->lokasi == 'rak2' ? 'selected' : ''); ?>>RAK 2</option>
                                <option value="rak3"<?php echo e($buku->lokasi == 'rak3' ? 'selected' : ''); ?>>RAK 3</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="" class="mb-1">Upload Cover Buku</label>
                            <input type="file" name="cover" class="form-control" id="cover">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">SIMPAN</button>
                            <a href="<?php echo e(route('buku.index')); ?>" class="btn btn-sm btn-danger">KEMBALI</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin'
, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpusb\resources\views/buku/edit.blade.php ENDPATH**/ ?>