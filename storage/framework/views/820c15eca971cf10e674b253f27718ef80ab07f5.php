

<?php $__env->startSection('content'); ?>

<div class="card">
    <h2 class="card-header"><i class="fas fa-vial"></i> Analytical parametres<a href="<?php echo e(route ('parametres.create')); ?>"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>  Add parametre</button></a></h2>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Unit</th>
                <th>Limit</th>
                <th>Actions</td>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $parametres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parametre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($parametre->id); ?></td>
                    <td><?php echo e($parametre->name); ?></td>
                    <td><?php echo e($parametre->unit); ?></td>
                    <td><?php echo e($parametre->limit); ?></td>
                    <td>
                        <a href="<?php echo e(route ('parametres.show', $parametre->id)); ?>"><button type="button" class="btn-sm btn-secondary"><i class="fas fa-eye"></i></button></a>
                        <a href="<?php echo e(route ('parametres.edit', $parametre->id)); ?>"><button type="button" class="btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                        <button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo e($parametre->id); ?>"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        
          
        <div class="d-flex justify-content-center mt-3">
            <?php echo e($parametres->links()); ?>

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
                    <p>Are you sure you want to delete the selected parametre?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form id="formDelete" action="#" data-action="<?php echo e(route('parametres.destroy', 0)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
  
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
            modal.find('.modal-title').text('You are going to delete the parametre: ' + id)
            })
          };
        </script>

        
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\applab\resources\views/dashboard/parametres/index.blade.php ENDPATH**/ ?>