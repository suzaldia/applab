@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-left">
    <div class="col-md-8">
        @include('dashboard.partials.validate')
        <div class="card">
            <h2 class="card-header">Edit Type</h2>
            <div class="card-body">
                
                <form action="{{ route('types.update', $type->id) }}" method="POST">
                    @method('PUT')
            
                    @include('dashboard.types.partials.form')
            
                </form>
            </div>
        </div>
    </div>
</div>
<a href="{{ URL::previous() }}" class="btn btn-outline-dark">Back</a>
@endsection