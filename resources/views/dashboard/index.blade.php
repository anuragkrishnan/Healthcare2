@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<div class="row g-4">

    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Total Patients</h6>
            <h2>12,450</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Appointments</h6>
            <h2>356</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Revenue</h6>
            <h2>$125,000</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="dashboard-card">
            <h6>Inventory</h6>
            <h2>3,450</h2>
        </div>
    </div>

</div>

<div class="row mt-4">

    <div class="col-md-8">

        <div class="dashboard-card chart-box">
            Revenue Chart Area
        </div>

    </div>

    <div class="col-md-4">

        <div class="dashboard-card chart-box">
            Patient Growth
        </div>

    </div>

</div>

@endsection