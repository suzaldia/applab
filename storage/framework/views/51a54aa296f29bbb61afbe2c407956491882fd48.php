

<?php $__env->startSection('content'); ?>

<div class="row justify-content-left">
    <div class="col-md-8">
        <?php echo $__env->make('dashboard.partials.validate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <h2 class="card-header">Add Permission</h2>
            <div class="card-body">    
    
                <form action="<?php echo e(route('permissions.store')); ?>" method="POST">
            
                    <?php echo $__env->make('dashboard.permissions.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/permissions/create.blade.php ENDPATH**/ ?>