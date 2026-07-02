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
            <h6>Consultants</h6>
            <h5>3,450</h5>
        </div>
    </div>

</div>

<div class="row mt-4">

    <div class="col-md-8">

        <div class="card dashboard-card">
            <h6 class="mb-0">Revenue Overview</h6>
            <div class="card-body">
                <div class="chart-canvas-wrap">
                    <canvas id="revenueChart" role="img"
                        aria-label="Line chart of monthly list of new registrations from January to June"></canvas>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-4">

        <div class="card dashboard-card">
            <h6>Patient Growth</h6>
            <div class="doughnut-canvas-wrap">
                <canvas id="patientChart" role="img"
                    aria-label="Doughnut chart of patient growth breakdown: new registrations, returning patients, referrals, and others"></canvas>
            </div>
            <div class="doughnut-legend" id="patientLegend"></div>
        </div>

    </div>

</div>
