@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-left">
    <div class="col-md-8">
        @include('dashboard.partials.validate')
        <div class="card">
            <h2 class="card-header">Add User</h2>
            <div class="card-body">    
    
                <form action="{{ route('users.store') }}" method="POST">
            
                    @include('dashboard.users.partials.form', ['pass' => true])
            
                </form>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('users.index') }}" class="btn btn-outline-dark">Back</a>
@endsection