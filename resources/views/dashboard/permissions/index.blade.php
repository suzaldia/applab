@extends('layouts.dashboard')

@section('content')

<div class="card">
    <h2 class="card-header"><i class="fas fa-user-lock"></i> Permission Management <a href="{{ route ('permissions.create') }}"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>  Add permission</button></a></h2>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</td>
              </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <a href="{{ route ('permissions.edit', $permission->id) }}"><button type="button" class="btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                        <button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $permission->id }}"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

      </div>
      {{-- Pagination links --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $permissions->links() }}
        </div>

        {{-- Delete Modal --}}
        <div class="modal fade" id="deleteModal" tabindex="-1" permission="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" permission="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="deleteModalLabel"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the selected permission?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form id="formDelete" action="#" data-action="{{ route('permissions.destroy', 0) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>        
</div>

@endsection

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
    modal.find('.modal-title').text('You are going to delete the permission: ' + id)
    })
  };
</script>