

<?php $__env->startSection('content'); ?>

<div class="row justify-content-left">
    <div class="col-md-12">
        <?php echo $__env->make('dashboard.partials.validate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="card">
            <h2 class="card-header">Edit Incidence</h2>
            <div class="card-body">
                
                <form action="<?php echo e(route('incidences.update', $incidence->id)); ?>" method="POST">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input readonly class="form-control" type="text" name="id" value="<?php echo e($incidence->id); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="submit_by">Submit by</label>
                                <input readonly class="form-control" type="text" name="user_id" value="<?php echo e($incidence->user->name); ?> <?php echo e($incidence->user->surname); ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <select class="form-control" name="priority" id="priority">
                                    <?php echo $__env->make('dashboard.incidences.partials.priority', ['value' => $incidence->priority], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="assigned_to">Assigned to</label>
                                <select class="form-control" name="support_id" id="support_id">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $surname => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($incidence->support_id == $id ? 'selected="selected"' : ''); ?> value="<?php echo e($id); ?>"><?php echo e($surname); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input readonly class="form-control" type="text" name="title" value="<?php echo e($incidence->title); ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($incidence->category_id == $id ? 'selected="selected"' : ''); ?> value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea readonly class="form-control" name="description" id="description" cols="20" rows="10"><?php echo e($incidence->description); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="actions">Actions</label>
                                <textarea class="form-control" name="actions" id="actions" cols="20" rows="10"><?php echo e($incidence->actions); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <?php echo $__env->make('dashboard.incidences.partials.status', ['value' => $incidence->status], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="resolved_at">Resolved at</label>
                                <input class="form-control" type="date" name="resolved_at" value="<?php echo e($incidence->resolved_at); ?>">
                            </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="<?php echo e(route('incidences.index')); ?>" class="btn btn-outline-dark">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/incidences/edit.blade.php ENDPATH**/ ?>