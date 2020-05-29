<?php echo csrf_field(); ?>
            <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($role) ? $role->name : '')); ?>" required>
                <?php if($errors->has('name')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('name')); ?>

                    </em>
                <?php endif; ?>
            </div>
            <div class="form-group <?php echo e($errors->has('permissions') ? 'has-error' : ''); ?>">
                <label for="permissions">Permissions
                    <span class="btn btn-info btn-xs select-all">Select all</span>
                    <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                <select name="permissions[]" id="permissions" class="form-control select2" multiple="multiple" required>
                    <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($id); ?>" <?php echo e(in_array($id, old('permissions', [])) ? 'selected' : ''); ?>><?php echo e($permissions); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('permissions')): ?>
                    <em class="invalid-feedback">
                        <?php echo e($errors->first('permissions')); ?>

                    </em>
                <?php endif; ?>
            </div>
            
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/roles/partials/form.blade.php ENDPATH**/ ?>