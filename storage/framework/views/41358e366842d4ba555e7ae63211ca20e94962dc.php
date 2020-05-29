

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        Change Password
    </div>

    <div class="card-body">
        <form action="<?php echo e(route("auth.change_password")); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <div class="form-group <?php echo e($errors->has('current_password') ? 'has-error' : ''); ?>">
                <label for="current_password">Current password*</label>
                <input type="password" id="current_password" name="current_password" class="form-control">
                <?php if($errors->has('current_password')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('current_password')); ?>

                    </em>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('new_password') ? 'has-error' : ''); ?>">
                <label for="new_password">New password*</label>
                <input type="password" id="new_password" name="new_password" class="form-control">
                <?php if($errors->has('new_password')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('new_password')); ?>

                    </em>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('new_password_confirmation') ? 'has-error' : ''); ?>">
                <label for="new_password_confirmation">New password confirmation*</label>
                <input type="password" id="new_password_confirmation" name="new_password_confirmation" class="form-control">
                <?php if($errors->has('new_password_confirmation')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('new_password_confirmation')); ?>

                    </em>
                <?php endif; ?>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="Change">
            </div>
        </form>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/auth/change_password.blade.php ENDPATH**/ ?>