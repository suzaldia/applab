<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="<?php echo e(old('name', $parametre->name)); ?>">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="unit">Unit</label>
            <input class="form-control" type="text" name="unit" value="<?php echo e(old('unit',$parametre->unit)); ?>">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label for="limit">Limit</label>
            <input class="form-control" type="text" name="limit" value="<?php echo e(old('limit', $parametre->limit)); ?>">
        </div>
    </div>
 </div>
<div class="form-group">
    <label for="observations">Observations</label>
    <textarea class="form-control" name="observations" id="observations" rows="5"><?php echo e(old('observations', $parametre->observations)); ?></textarea>
</div>



<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/parametres/partials/form.blade.php ENDPATH**/ ?>