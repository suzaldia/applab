

<?php $__env->startSection('content'); ?>
    
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Parametre</h2>
                <div class="card-body">

                    <form action="<?php echo e(route('parametres.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input readonly class="form-control" type="text" name="name" value="<?php echo e($parametre->name); ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="unit">Unit</label>
                                    <input readonly class="form-control" type="text" name="unit" value="<?php echo e($parametre->unit); ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="limit">Limit</label>
                                    <input readonly class="form-control" type="text" name="limit" value="<?php echo e($parametre->limit); ?>">
                                </div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label for="observations">Observations</label>
                            <textarea readonly class="form-control" cols="10" rows="10" type="text" name="observations"><?php echo e($parametre->observations); ?></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-outline-dark">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/parametres/show.blade.php ENDPATH**/ ?>