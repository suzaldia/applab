<?php echo csrf_field(); ?>
<div class="form-group">
    <label for="tag">TAG</label>
    <input class="form-control" type="text" name="tag" value="<?php echo e(old('tag', $sample->tag)); ?>">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input class="form-control" type="text" name="description" value="<?php echo e(old('description', $sample->description)); ?>">
</div>
<div class="form-group">
    <label for="collected_at">Collected at</label>
    <input class="form-control" type="date" name="collected_at" value="<?php echo e(old('collected_at', $sample->collected_at)); ?>">
</div>
<div class="form-group">
    <label for="type_id">Type</label>
    <select class="form-control" name="type_id" id="type_id">
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php echo e($sample->type_id == $id ? 'selected="selected"' : ''); ?> value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<div class="form-group">
    <label for="parametre_id">Parametre</label>
    <select class="form-control" name="parametre_id" id="parametre_id">
        <?php $__currentLoopData = $parametres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php echo e($sample->parametre_id == $id ? 'selected="selected"' : ''); ?> value="<?php echo e($id); ?>"><?php echo e($name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php if($stat): ?>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status" id="status">
            <?php echo $__env->make('dashboard.samples.partials.status', ['value' => $sample->status], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </select>
    </div>
<?php endif; ?>

<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/samples/partials/form.blade.php ENDPATH**/ ?>