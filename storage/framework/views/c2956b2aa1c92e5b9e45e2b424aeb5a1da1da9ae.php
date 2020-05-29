

<?php $__env->startSection('content'); ?>

<div class="row justify-content-left">
    <div class="col-md-6">
        <?php echo $__env->make('dashboard.partials.validate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <h2 class="card-header">Edit Analysis</h2>
            <div class="card-body">
                
                <form action="<?php echo e(route('analyses.update', $analysis->id)); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>

                    <?php echo $__env->make('dashboard.analyses.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
                </form>
            </div>
        </div>
    </div>
</div>
<a href="<?php echo e(URL::previous()); ?>" class="btn btn-outline-dark">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/analyses/edit.blade.php ENDPATH**/ ?>