@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-left">
    <div class="col-md-8">
        @include('dashboard.partials.validate')
        <div class="card">
            <h2 class="card-header">Add Permission</h2>
            <div class="card-body">    
    
                <form action="{{ route('permissions.store') }}" method="POST">
            
                    @include('dashboard.permissions.partials.form')
            
                </form>
            </div>
        </div>
    </div>
</div>

@endsection