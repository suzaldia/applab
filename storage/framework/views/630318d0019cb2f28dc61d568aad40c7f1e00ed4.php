<?php $__env->startSection('content'); ?>
    
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">User</h2>
                <div class="card-body">

                    <form action="<?php echo e(route('users.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="tag">ID</label>
                            <input readonly class="form-control" type="text" name="id" value="<?php echo e($user->id); ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input readonly class="form-control" type="text" name="name" value="<?php echo e($user->name); ?>">
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                        <input readonly class="form-control" type="text" name="surname" value="<?php echo e($user->surname); ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                        <input readonly class="form-control" type="email" name="email" value="<?php echo e($user->email); ?>">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <?php $__currentLoopData = $user->roles->pluck('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <input readonly class="form-control" type="text" name="role" value="<?php echo e($role); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="form-group">
                            <label for="created_at">Created at</label>
                            <input readonly class="form-control" type="text" name="created_at" value="<?php echo e($user->created_at->format('d-m-Y H:m')); ?>">
                        </div>
                        <div class="form-group">
                            <label for="updated_at">Updated at</label>
                            <input readonly class="form-control" type="text" name="updated_at" value="<?php echo e($user->updated_at->format('d-m-Y H:m')); ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-outline-dark">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/users/show.blade.php ENDPATH**/ ?>