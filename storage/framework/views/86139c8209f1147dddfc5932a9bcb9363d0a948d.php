<?php echo csrf_field(); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input class="form-control" type="text" name="name" value="<?php echo e(old('name', $type->name)); ?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/types/partials/form.blade.php ENDPATH**/ ?>