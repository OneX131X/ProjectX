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

<h2 class="heading">DATA PENGGUNA</h2>

<table>
  <tr>
    <th>NO</th>
    <th>NAMA LENGKAP</th>
    <th>EMAIL</th>
    <th>TGL. REGISTRASI</th>
  </tr>
  <?php
    $no = 1;
  ?>
  <?php $__currentLoopData = $pengguna; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
      <td><?php echo e($no++); ?></td>
      <td><?php echo e($p->name.' '. $p->last_name); ?></td>
      <td><?php echo e($p->email); ?></td>
      <td><?php echo e($p->created_at); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\perpusb\resources\views/user/cetak.blade.php ENDPATH**/ ?>