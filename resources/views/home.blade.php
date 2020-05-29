@extends('layouts.dashboard')

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
        <div class="inner">
            <?php use App\Sample; $samples_count = Sample::where('status', 'in progress')->get()->count(); ?>
            <h3>{{ $samples_count ?? '0' }}</h3>

            <p>New Samples</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{ route('samples.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
        <div class="inner">
            <?php $analyses_perc = Sample::where('status', 'completed')->get()->count()/Sample::all()->count()*100; ?>
            <h3>{{ number_format($analyses_perc, 0) ?? '0' }}<sup style="font-size: 20px">%</sup></h3>

            <p>Samples analyzed</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="dashboard/analyses" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
        <div class="inner">
            <?php use App\User; $users_count = User::all()->count(); ?>
            <h3>{{ $users_count ?? '0' }}</h3>
            <p>Users</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
        <div class="inner">
            <?php use App\Incidence; $incidences_count = Incidence::where('status', '!=', 'closed')->get()->count(); ?>
            <h3>{{ $incidences_count ?? '0' }}</h3>
            <p>Incidences pending</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        <a href="{{ route('incidences.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    </div>
    <!-- /.row -->
@endsection
