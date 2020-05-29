<?php echo csrf_field(); ?>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="result">Result</label>
            <input class="form-control" type="text" placeholder="Type analysis result" name="result" value="<?php echo e(old('result', $analysis->result)); ?>">
        </div>
    </div>    
    <div class="col-md-9">
        <div class="form-group">
            <label for="observations">Observations</label>
            <textarea class="form-control" name="observations" rows="10"><?php echo e(old('observations', $analysis->observations)); ?></textarea>
        </div>
    </div>   
</div>

<button type="submit" class="btn btn-primary">Submit</button><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/analyses/partials/form.blade.php ENDPATH**/ ?>