@extends('layouts.dashboard')

@section('content')

<div class="card">
    <h2 class="card-header"><i class="fas fa-users-cog"></i> Role Management <a href="{{ route ('roles.create') }}"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>  Add role</button></a></h2>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Permissions</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</td>
              </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->description }}</td>
                    <td>
                      @foreach($role->permissions->pluck('name') as $permission)
                      <span class="badge badge-info">{{ $permission }}</span>
                      @endforeach
                    </td>
                    <td>{{ $role->created_at->format('d-m-Y H:m') }}</td>
                    <td>{{ $role->updated_at->format('d-m-Y H:m') }}</td>
                    <td>
                        <a href="{{ route ('roles.edit', $role->id) }}"><button type="button" class="btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                        <button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $role->id }}"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
      </div>

        
          {{-- Delete Modal --}}
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
                    <p>Are you sure you want to delete the selected role?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form id="formDelete" action="#" data-action="{{ route('roles.destroy', 0) }}" method="POST">
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
    modal.find('.modal-title').text('You are going to delete the role: ' + id)
    })
  };
</script>