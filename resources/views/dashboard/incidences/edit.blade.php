@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-left">
    <div class="col-md-12">
        @include('dashboard.partials.validate')
        <div class="card">
            <h2 class="card-header">Edit Incidence</h2>
            <div class="card-body">
                
                <form action="{{ route('incidences.update', $incidence->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input readonly class="form-control" type="text" name="id" value="{{ $incidence->id }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="submit_by">Submit by</label>
                                <input readonly class="form-control" type="text" name="user_id" value="{{ $incidence->user->name }} {{ $incidence->user->surname }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <select class="form-control" name="priority" id="priority">
                                    @include('dashboard.incidences.partials.priority', ['value' => $incidence->priority])
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="assigned_to">Assigned to</label>
                                <select class="form-control" name="support_id" id="support_id">
                                    @foreach ($users as $surname => $id)
                                    <option {{ $incidence->support_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $surname}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input readonly class="form-control" type="text" name="title" value="{{ $incidence->title }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach ($categories as $name => $id)
                                        <option {{ $incidence->category_id == $id ? 'selected="selected"' : '' }} value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea readonly class="form-control" name="description" id="description" cols="20" rows="10">{{ $incidence->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="actions">Actions</label>
                                <textarea class="form-control" name="actions" id="actions" cols="20" rows="10">{{ $incidence->actions }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    @include('dashboard.incidences.partials.status', ['value' => $incidence->status])
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="resolved_at">Resolved at</label>
                                <input class="form-control" type="date" name="resolved_at" value="{{ $incidence->resolved_at }}">
                            </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('incidences.index') }}" class="btn btn-outline-dark">Back</a>
@endsection