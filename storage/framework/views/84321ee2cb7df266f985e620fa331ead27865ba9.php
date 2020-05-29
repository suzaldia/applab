

<?php $__env->startSection('content'); ?>

<div class="row justify-content-left">
    <div class="col-md-8">
        <?php echo $__env->make('dashboard.partials.validate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <h2 class="card-header">Edit Sample</h2>
            <div class="card-body">
                
                <form action="<?php echo e(route('samples.update', $sample->id)); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>

                    <?php echo $__env->make('dashboard.samples.partials.form', ['stat' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
                </form>
            </div>
        </div>
    </div>
</div>
<a href="<?php echo e(route('samples.index')); ?>" class="btn btn-outline-dark">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/samples/edit.blade.php ENDPATH**/ ?>