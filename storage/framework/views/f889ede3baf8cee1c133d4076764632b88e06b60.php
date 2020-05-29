

<?php $__env->startSection('content'); ?>

<div class="card">
    <h2 class="card-header"><i class="fab fa-battle-net"></i> Types of samples <a href="<?php echo e(route ('types.create')); ?>"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>  Add type</button></a></h2>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created at</th>
                <th>Actions</td>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($type->id); ?></td>
                    <td><?php echo e($type->name); ?></td>
                    <td><?php echo e($type->created_at->format('d/m/Y H:i')); ?></td>
                    <td>
                        <a href="<?php echo e(route ('types.edit', $type->id)); ?>"><button type="button" class="btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                        <button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo e($type->id); ?>"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

        
          
        
          <div class="d-flex justify-content-center mt-3">
            <?php echo e($types->links()); ?>

      </div>

        
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the selected type?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form id="formDelete" action="#" data-action="<?php echo e(route('types.destroy', 0)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

</div>

<?php $__env->stopSection(); ?>

<script>
  window.onload = function() {
    $('#deleteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

    action = $('#formDelete').attr('data-action').slice(0,-1)  //The last token in the path is removed to display the id to be deleted
    action += id
    console.log(action)

    $('#formDelete').attr('action', action)

    var modal = $(this)
    modal.find('.modal-title').text('You are going to delete the type: ' + id)
    })
  };
</script>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/types/index.blade.php ENDPATH**/ ?>