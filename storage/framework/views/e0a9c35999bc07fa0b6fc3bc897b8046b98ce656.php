

<?php $__env->startSection('content'); ?>
    
    <div class="row justify-content-left">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header">Incidence</h2>
                <div class="card-body">

                    <form action="<?php echo e(route('incidences.store')); ?>" method="POST">
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
                                    <label for="category_id">Category</label>
                                    <input readonly class="form-control" type="text" name="category_id" value="<?php echo e($incidence->category->name); ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="priority">Priority</label>
                                    <input readonly class="form-control" type="text" name="priority" value="<?php echo e($incidence->priority); ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="created_at">Created at</label>
                                    <input readonly class="form-control" type="datetime" name="created_at" value="<?php echo e($incidence->created_at->format('d/m/Y H:i')); ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="updated_at">Updated at</label>
                                    <input readonly class="form-control" type="datetime" name="updated_at" value="<?php echo e($incidence->updated_at->format('d/m/Y H:i')); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input readonly class="form-control" type="text" name="title" value="<?php echo e($incidence->title); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="submit_by">Submit by</label>
                                    <input readonly class="form-control" type="text" name="user_id" value="<?php echo e($incidence->user->name); ?> <?php echo e($incidence->user->surname); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="assigned_to">Assigned to</label>
                                    <input readonly class="form-control" type="text" name="support_id" value="<?php echo e($incidence->user->name); ?> <?php echo e($incidence->user->surname); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input readonly class="form-control" type="text" name="status" value="<?php echo e($incidence->status); ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="resolved_at">Resolved at</label>
                                    <input readonly class="form-control" type="date" name="resolved_at" value="<?php echo e($incidence->resolved_at); ?>">
                                </div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea readonly class="form-control" name="description" id="description" cols="20" rows="10"><?php echo e($incidence->description); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="actions">Actions</label>
                            <textarea readonly class="form-control" name="actions" id="actions" cols="20" rows="10"><?php echo e($incidence->actions); ?></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="<?php echo e(URL::previous()); ?>" class="btn btn-outline-dark">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/incidences/show.blade.php ENDPATH**/ ?>