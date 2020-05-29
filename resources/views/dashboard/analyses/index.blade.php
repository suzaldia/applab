@extends('layouts.dashboard')

@section('content')


<div class="card">
    <h2 class="card-header"><i class="fas fa-flask"></i> Analyses Management<a href="{{ route ('analyses.create') }}"><button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i>  Add analysis</button></a></h2>
    <div class="card-body">
        <div class="col-6 mb-3">
            <form action="{{ route('analyses.index',1) }}" id="filterForm">
                <div class="form-row">
                    <div class="col-8">
                        <select id="filterSample" class="form-control">
                            @foreach ($samples as $s)
                            <option value="{{ $s->id }}" {{ $sample->id == $s->id ? 'selected' : '' }}>
                                {{ $s->tag  }} : {{ $s->description  }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-success" type="submit">Show analyses</button>
                    </div>
                </div>
            </form>
        </div>

    @if (count($analyses) > 0)
    <a class="btn btn-primary mt-3 mb-3 float-right" href="{{ route('analyses.export') }}">
        <i class="fa fa-file-excel"></i> Export
    </a>
 
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Result</th>
                <th>Label</th>
                <th>Limit</th>
                <th>User</th>
                <th>Observations</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</td>
            </tr>
            </thead>
            <tbody>
                @foreach ($analyses as $analysis)
                <tr>
                    <td>{{ $analysis->id }}</td>
                    <td>{{ $analysis->result }} </td>
                    <td>
                        @if ( $analysis->result <= $sample->parametre->limit) 
                        <span class="mt-1 badge badge-success">OK</span>
                                            
                        @else
                        <span class="mt-1 badge badge-danger">FAILED</span>
                        @endif
                    </td>

                    <td>{{ $sample->parametre->limit }}</td>
                    <td>{{ $analysis->user->name }} {{ $analysis->user->surname }}</td>
                    <td>{{ Str::limit($analysis->observations, 40) }}</td>
                    <td>{{ $analysis->created_at->format('d-m-Y') }}</td>
                    <td>{{ $analysis->updated_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route ('analyses.show', $analysis->id) }}"><button type="button" class="btn-sm btn-secondary"><i class="fas fa-eye"></i></button></a>
                        <a href="{{ route ('analyses.edit', $analysis->id) }}"><button type="button" class="btn-sm btn-success"><i class="fas fa-edit"></i></button></a>
                        <button type="button" class="btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $analysis->id }}"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

        {{-- Pagination links --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $analyses->links() }}
        </div>

    </div>
</div>
</div>
@else
<div class="ml-3 py-3">
<h5> <i class="fas fa-info-circle text-primary"></i> The selected sample has not any analysis</h5>
</div>
@endif

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
                <p>Are you sure you want to delete the selected analysis?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form id="formDelete" action="#" data-action="{{ route('analyses.destroy', 0) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <a href="{{ route('samples.index') }}" class="btn btn-outline-dark ml-2">Back</a>
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
      modal.find('.modal-title').text('You are going to delete the analysis: ' + id)
      })

      $("#filterForm").submit(function(){
            //console.log($(this).val())

            var action = $(this).attr('action');
            action = action.replace(/[0-9]/g,$("#filterSample").val());
            console.log(action)
            $(this).attr('action',action)

        });
    };
  </script>