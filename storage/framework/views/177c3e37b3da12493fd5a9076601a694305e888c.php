<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.heading{
    text-align: center;
    text-decoration: underline;
}
</style>
</head>
<body>

<h2 class="heading">DATA BUKU</h2>

<table>
  <tr>
    <th>JUDUL</th>
    <th>ISBN</th>
    <th>PENERBIT</th>
    <th>TAHUN TERBIT</th>
    <th>JUMLAH</th>
    <th>DESKRIPSI</th>
    <th>LOKASI</th>
    <th>COVER</th>
  </tr>
  <?php
    $no = 1;
  ?>
  <?php $__empty_1 = true; $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <tr>
      <td><?php echo e($no++); ?></td>
      <td><?php echo e($b->judul); ?></td>
      <td><?php echo e($b->isbn); ?></td>
      <td><?php echo e($b->penerbit); ?></td>
      <td><?php echo e($b->tahun_terbit); ?></td>
      <td><?php echo e($b->jumlah); ?></td>
      <td><?php echo e($b->deskripsi); ?></td>
      <td><?php echo e($b->lokasi); ?></td>
      <td><img src="<?php echo e(asset('cover/'.$b->cover)); ?>" alt="" width="100" height="100"></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <tr>
      <td colspan="9">TIDAK ADA DATA YANG DAPAT DICETAK</td>
  </tr>
  <?php endif; ?>
</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\perpusb\resources\views/buku/cetak.blade.php ENDPATH**/ ?>