<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr id="product-bulk-delete">
  <td><input type="checkbox" class="bulk-item" value="<?php echo e($data->id); ?>"></td>
    <td>
        <?php echo e($data->user_email); ?>

    </td>
    <td>
        <?php echo e($data->name); ?>

    </td>
    <td>
        <?php echo e($data->amount); ?>

    </td>
    <td>
        <?php echo e($data->payment_method); ?>

    </td>
    <td>
        <?php echo e($data->transaction_type); ?>

    </td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/nzocgvvlkplb/public_html/auroraexperiences.gigvie.com/resources/views/back/donation/table.blade.php ENDPATH**/ ?>