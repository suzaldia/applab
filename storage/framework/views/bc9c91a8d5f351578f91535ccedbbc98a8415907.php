<?php echo csrf_field(); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" value="<?php echo e(old('name', $category->name)); ?>">
</div>
<div class="form-group">
    <label for="description">Description</label>
    <input class="form-control" type="text" name="description" value="<?php echo e(old('description', $category->description)); ?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/categories/partials/form.blade.php ENDPATH**/ ?>