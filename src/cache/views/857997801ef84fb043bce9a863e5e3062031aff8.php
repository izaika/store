<?php $__env->startSection('content'); ?>
    <h1>This is view</h1>
    <h2><?php echo e($variable); ?></h2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>