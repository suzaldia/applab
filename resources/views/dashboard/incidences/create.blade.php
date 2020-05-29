@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-left">
    <div class="col-md-8">
        @include('dashboard.partials.validate')
        <div class="card">
            <h2 class="card-header">Add Incidence</h2>
            <div class="card-body">    
    
                <form action="{{ route('incidences.store') }}" method="POST">
            
                    @include('dashboard.incidences.partials.form')
            
                </form>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('home') }}" class="btn btn-outline-dark">Back</a>
@endsection