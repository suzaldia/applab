@extends('layouts.dashboard')

@section('content')
    
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Sample</h2>
                <div class="card-body">

                    <form action="{{ route('samples.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tag">TAG</label>
                                    <input readonly class="form-control" type="text" name="tag" value="{{ $sample->tag }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="collected_at">Collected at</label>
                                    <input readonly class="form-control" type="date" name="collected_at" value="{{ $sample->collected_at }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="created_at">Created at</label>
                                    <input readonly class="form-control" type="datetime" name="created_at" value="{{ $sample->created_at->format('d/m/Y H:i') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="updated_at">Updated at</label>
                                    <input readonly class="form-control" type="datetime" name="updated_at" value="{{ $sample->updated_at->format('d/m/Y H:i') }}">
                                </div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input readonly class="form-control" type="text" name="description" value="{{ $sample->description }}">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input readonly class="form-control" type="text" name="type"  value="{{ $sample->type->name }}">
                        </div>
                        <div class="form-group">
                            <label for="parametre">Parametre</label>
                            <input readonly class="form-control" type="text" name="parametre"  value="{{ $sample->parametre->name }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input readonly class="form-control" type="text" name="status" value="{{ $sample->status }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ URL::previous() }}" class="btn btn-outline-dark">Back</a>
@endsection
