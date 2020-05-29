

<?php $__env->startSection('content'); ?>


<div class="row justify-content-left">
    <div class="col-md-12">
        <?php echo $__env->make('dashboard.partials.validate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card card-outline card-primary">
            <h2 class="card-header"><i class="fas fa-calendar-alt"></i> Maintenance tasks</h2>
            <div class="card-body"> 
                <task-component></task-component>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/tasks/index.blade.php ENDPATH**/ ?>