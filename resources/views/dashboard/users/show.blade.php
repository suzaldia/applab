@extends('layouts.dashboard')

@section('content')
    
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">User</h2>
                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tag">ID</label>
                            <input readonly class="form-control" type="text" name="id" value="{{ $user->id }}">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input readonly class="form-control" type="text" name="name" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                        <input readonly class="form-control" type="text" name="surname" value="{{ $user->surname }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                        <input readonly class="form-control" type="email" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            @foreach($user->roles->pluck('name') as $role)
                            <input readonly class="form-control" type="text" name="role" value="{{ $role }}">
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="created_at">Created at</label>
                            <input readonly class="form-control" type="text" name="created_at" value="{{ $user->created_at->format('d-m-Y H:m') }}">
                        </div>
                        <div class="form-group">
                            <label for="updated_at">Updated at</label>
                            <input readonly class="form-control" type="text" name="updated_at" value="{{ $user->updated_at->format('d-m-Y H:m') }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ URL::previous() }}" class="btn btn-outline-dark">Back</a>
@endsection