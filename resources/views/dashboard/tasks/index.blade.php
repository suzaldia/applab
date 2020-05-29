@extends('layouts.dashboard')

@section('content')


<div class="row justify-content-left">
    <div class="col-md-12">
        @include('dashboard.partials.validate')
        <div class="card card-outline card-primary">
            <h2 class="card-header"><i class="fas fa-calendar-alt"></i> Maintenance tasks</h2>
            <div class="card-body"> 
                <task-component></task-component>
            </div>
        </div>
    </div>
</div>

@endsection