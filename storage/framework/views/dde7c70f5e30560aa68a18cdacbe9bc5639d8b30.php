

<?php $__env->startSection('content'); ?>

<div class="row justify-content-left">
    <div class="col-md-8">
        <?php echo $__env->make('dashboard.partials.validate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <h2 class="card-header">Add Analytical parametre of sample</h2>
            <div class="card-body">    
    
                <form action="<?php echo e(route('parametres.store')); ?>" method="POST">
            
                    <?php echo $__env->make('dashboard.parametres.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
                </form>
            </div>
        </div>
    </div>
</div>
<a href="<?php echo e(route('parametres.index')); ?>" class="btn btn-outline-dark">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/parametres/create.blade.php ENDPATH**/ ?>