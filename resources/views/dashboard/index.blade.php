@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="row g-4">

        <div class="col-md-3">
            <div class="dashboard-card">
                <h6>Total Patients</h6>
                <h5>12,450</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card">
                <h6>Appointments</h6>
                <h5>356</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card">
                <h6>Revenue</h6>
                <h5>$125,000</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="dashboard-card">
                <h6>Inventory</h6>
                <h5>3,450</h5>
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
