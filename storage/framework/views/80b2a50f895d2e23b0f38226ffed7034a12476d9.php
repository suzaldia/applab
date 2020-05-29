

<?php $__env->startSection('content'); ?>
    
    <div class="row justify-content-left">
        <div class="col-md-4">
            <div class="card">
                <h2 class="card-header">Analysis</h2>
                <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 ml-3">
                                <div class="form-group">
                                    <label for="tag">ID</label>
                                    <input readonly class="form-control" type="text" name="id" value="<?php echo e($analysis->id); ?>">
                                </div>
                            </div>
                            <div class="col-md-6 ml-4">
                                <div class="form-group">
                                    <label for="user">User</label>
                                    <input readonly class="form-control" type="text" name="user" value="<?php echo e($analysis->user->name); ?> <?php echo e($analysis->user->surname); ?>">
                                </div>
                            </div>
                            <div class="col-md-4 ml-3">
                                <div class="form-group">
                                    <label for="result">Result</label>
                                    <input readonly class="form-control" type="text" name="result" value="<?php echo e($analysis->result); ?>">
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="observations">Observations</label>
                                    <textarea readonly class="form-control" name="observations" id="observations" cols="30" rows="10"><?php echo e($analysis->observations); ?></textarea>
                                </div>
                            </div>
  
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/analyses/show.blade.php ENDPATH**/ ?>