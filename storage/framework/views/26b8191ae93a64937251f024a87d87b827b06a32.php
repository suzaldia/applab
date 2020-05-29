<?php echo csrf_field(); ?>
<div class="form-group">
    <label for="description">Name</label>
    <input class="form-control" type="text" name="name" value="<?php echo e(old('name', $permission->name)); ?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/permissions/partials/form.blade.php ENDPATH**/ ?>