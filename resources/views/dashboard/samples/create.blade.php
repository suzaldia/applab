@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-left">
    <div class="col-md-8">
        @include('dashboard.partials.validate')
        <div class="card">
            <h2 class="card-header">Add Sample</h2>
            <div class="card-body">    
    
                <form action="{{ route('samples.store') }}" method="POST">
            
                    @include('dashboard.samples.partials.form', ['stat' => false])
            
                </form>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('samples.index') }}" class="btn btn-outline-dark">Back</a>
@endsection