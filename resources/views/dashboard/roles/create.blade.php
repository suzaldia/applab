@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-left">
    <div class="col-md-8">
        @include('dashboard.partials.validate')
        <div class="card">
            <h2 class="card-header">Add Role</h2>
            <div class="card-body">    
    
                <form action="{{ route('roles.store') }}" method="POST">
            
                    @include('dashboard.roles.partials.form')
            
                </form>
            </div>
        </div>
    </div>
</div>

@endsection