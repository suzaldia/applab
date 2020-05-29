<?php echo csrf_field(); ?>

<div class="form-group">
    <label for="title">Title</label>
    <input class="form-control" type="text" name="title" value="<?php echo e(old('title', $incidence->title)); ?>">
</div>

<div class="form-group">
    <label for="priority">Priority</label>
    <select class="form-control" name="priority" id="priority">
        <?php echo $__env->make('dashboard.incidences.partials.priority', ['value' => $incidence->priority], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </select>
</div>
<div class="form-group">
    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" id="category_id">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option <?php echo e($incidence->category_id == $id ? 'selected="selected"' : ''); ?> value="<?php echo e($id); ?>"><?php echo e($name); ?> </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10"><?php echo e(old('description', $incidence->description)); ?></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/incidences/partials/form.blade.php ENDPATH**/ ?>