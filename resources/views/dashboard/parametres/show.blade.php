@extends('layouts.dashboard')

@section('content')
    
    <div class="row justify-content-left">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Parametre</h2>
                <div class="card-body">

                    <form action="{{ route('parametres.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input readonly class="form-control" type="text" name="name" value="{{ $parametre->name }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="unit">Unit</label>
                                    <input readonly class="form-control" type="text" name="unit" value="{{ $parametre->unit }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="limit">Limit</label>
                                    <input readonly class="form-control" type="text" name="limit" value="{{ $parametre->limit }}">
                                </div>
                            </div>
                         </div>
                        <div class="form-group">
                            <label for="observations">Observations</label>
                            <textarea readonly class="form-control" cols="10" rows="10" type="text" name="observations">{{ $parametre->observations }}</textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ URL::previous() }}" class="btn btn-outline-dark">Back</a>
@endsection
