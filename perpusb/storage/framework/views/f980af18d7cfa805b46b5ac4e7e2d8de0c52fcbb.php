<div class="btn-group" role="group">
    <?php echo Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message]); ?>

        <a href="<?php echo e($edit_url); ?>" class="btn btn-xs btn-warning"> <i class="fa fa-edit"></i> </a>
        <button type="submit" onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i></button>
    <?php echo Form::close(); ?>

</div>
<?php /**PATH C:\xampp\htdocs\perpusb\resources\views/partials/_action.blade.php ENDPATH**/ ?>