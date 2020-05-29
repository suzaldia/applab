<?php echo csrf_field(); ?>
<div class="form-group">
    <label for="name">Name</label>
<input class="form-control" type="text" name="name" value="<?php echo e(old('name', $user->name)); ?>">
</div>
<div class="form-group">
    <label for="surname">Surname</label>
<input class="form-control" type="text" name="surname" value="<?php echo e(old('surname', $user->surname)); ?>">
</div>
<div class="form-group">
    <label for="email">Email</label>
<input class="form-control" type="email" name="email" value="<?php echo e(old('email', $user->email)); ?>">
</div>
<div class="form-group <?php echo e($errors->has('roles') ? 'has-error' : ''); ?>">
    <label for="roles">Roles
        <span class="btn btn-info btn-xs select-all">Select all</span>
        <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
    <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($id); ?>" <?php echo e(in_array($id, old('roles', [])) ? 'selected' : ''); ?>><?php echo e($roles); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php if($errors->has('roles')): ?>
        <em class="invalid-feedback">
            <?php echo e($errors->first('roles')); ?>

        </em>
    <?php endif; ?>
</div>
<?php if($pass): ?>
    <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" value="<?php echo e(old('password', $user->password)); ?>">
    </div> 
<?php endif; ?>

<button type="submit" class="btn btn-primary">Submit</button>
<?php /**PATH C:\laragon\www\applab\resources\views/dashboard/users/partials/form.blade.php ENDPATH**/ ?>