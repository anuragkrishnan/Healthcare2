
<div class="add-consultant-page consultant-schedule-page">

    <!-- Toolbar -->
    <div class="page-header bg-white border border-light-subtle rounded-3 p-2 mb-3 shadow-sm d-flex flex-wrap gap-2 justify-content-between align-items-center">
        <div class="d-flex gap-1">
            <button class="btn btn-sm btn-outline-success px-3"><i class="bi bi-save2 me-1"></i> Save</button>
            <button class="btn btn-sm btn-outline-success px-3" data-bs-toggle="modal"
                        data-bs-target="#scheduleTimingModal" ><i class="bi bi-clock me-1"></i> Time</button>
            <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-x-circle me-1"></i> Cancel</button>
            <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-printer me-1"></i> Print</button>
        </div>
        <div class="d-flex align-items-center gap-2">
        </div>
    </div>

    <!-- Main Section -->
    <div class="card-section">

        <div class="form-container">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
                <div class="tabs mt-0">
                    <div class="tab active">Consultant Schedule</div>
                </div>

                <button class="btn btn-sm btn-outline-primary px-3">
                    <i class="bi bi-journal-arrow-up me-1"></i> Copy Schedule To
                </button>
            </div>

            <!-- Filter Row -->
<div class="row align-items-end g-2 mb-3">

    <!-- Consultant -->
    <div class="col-lg-5">
        <div class="form-group" style="grid-template-columns:110px 1fr;">
            <label>Consultant</label>
            <input type="text" class="form-control" placeholder="🔍 Select Consultant">
        </div>
    </div>

    <!-- From Date -->
    <div class="col-lg-3">
        <div class="form-group" style="grid-template-columns:80px 1fr;">
            <label>From Date</label>
            <input type="text" class="form-control" value="20/04/2026">
        </div>
    </div>

    <!-- To Date -->
    <div class="col-lg-3">
        <div class="form-group" style="grid-template-columns:70px 1fr;">
            <label>To Date</label>
            <input type="text" class="form-control" value="30/04/2026">
        </div>
    </div>

    <!-- Load Button -->
    <div class="col-auto">
        <button class="btn btn-primary px-4" style="height:38px; margin-bottom:2px;">
            <i class="bi bi-arrow-repeat me-1"></i> Load
        </button>
    </div>

</div>



            <!-- Schedule Table -->
            <div class="table-responsive table-wrapper">
                <table class="table table-dark table-bordered table-sm align-middle text-center mb-0 schedule-table">

                    <thead>
                        <tr>
                            <th rowspan="2">S.NO</th>
                            <th rowspan="2">Date</th>
                            <th rowspan="2">Day</th>
                            <th colspan="3">Schedule I</th>
                            <th colspan="3">Schedule II</th>
                            <th colspan="3">Schedule III</th>
                        </tr>
                        <tr>
                            <th>From</th>
                            <th>To</th>
                            <th>SAP 1</th>
                            <th>From</th>
                            <th>To</th>
                            <th>SAP 2</th>
                            <th>From</th>
                            <th>To</th>
                            <th>SAP 3</th>
                        </tr>
                    </thead>

                    <tbody id="scheduleTable">

                        <tr>
                            <td>1</td>
                            <td>20/04/2026</td>
                            <td>Monday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>21/04/2026</td>
                            <td>Tuesday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>22/04/2026</td>
                            <td>Wednesday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>23/04/2026</td>
                            <td>Thursday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>24/04/2026</td>
                            <td>Friday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>25/04/2026</td>
                            <td>Saturday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>26/04/2026</td>
                            <td>Sunday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>27/04/2026</td>
                            <td>Monday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>28/04/2026</td>
                            <td>Tuesday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>29/04/2026</td>
                            <td>Wednesday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>30/04/2026</td>
                            <td>Thursday</td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                            <td><input type="text" class="form-control form-control-sm"></td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>

    </div>

</div>
{{-- INCLUDE MODAL HERE --}}
@include('consultants.scheduleTiming')
