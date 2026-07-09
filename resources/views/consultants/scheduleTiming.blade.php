
<div class="add-consultant-page">
<div class="modal fade"
     id="scheduleTimingModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">
                    Schedule Timing
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="card-section">

                    <div class="form-container">

                        <!-- Schedule I / II / III -->
                        <div class="row g-4">

                            <!-- Schedule I -->
                            <div class="col-lg-4 border-end pe-4">

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="schedule1Check" checked>
                                    <label class="form-check-label fw-bold" for="schedule1Check">Schedule I</label>
                                </div>

                                <div class="row g-2 mb-2">
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">From</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" value="08:00 AM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">To</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" value="02:00 PM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <label class="d-block small fw-semibold mb-1">SAP Code</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Search SAP">

                            </div>

                            <!-- Schedule II -->
                            <div class="col-lg-4 border-end pe-4">

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="schedule2Check" checked>
                                    <label class="form-check-label fw-bold" for="schedule2Check">Schedule II</label>
                                </div>

                                <div class="row g-2 mb-2">
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">From</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" value="04:00 PM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">To</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" value="6:00 PM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <label class="d-block small fw-semibold mb-1">SAP Code</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Search SAP">

                            </div>

                            <!-- Schedule III -->
                            <div class="col-lg-4">

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="schedule3Check">
                                    <label class="form-check-label fw-bold" for="schedule3Check">Schedule III</label>
                                </div>

                                <div class="row g-2 mb-2">
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">From</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="7:00 PM" disabled style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">To</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" placeholder="10:00 PM" disabled style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <label class="d-block small fw-semibold mb-1">SAP Code</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Search SAP" disabled>

                            </div>

                        </div>

                        <hr class="my-4">

                        <!-- Apply Options -->
                        <div class="row g-4">

                            <!-- Weeks/Days -->
                            <div class="col-lg-6 border-end pe-4">

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="scheduleApplyType" id="applyWeekDays" checked>
                                    <label class="form-check-label fw-bold" for="applyWeekDays">
                                        Above Schedule Apply on following Weeks/Days
                                    </label>
                                </div>

                                <div class="form-check mb-2 ms-4">
                                    <input class="form-check-input" type="checkbox" id="selectAllDays">
                                    <label class="form-check-label" for="selectAllDays">Select All</label>
                                </div>

                                <div class="row ms-4">

                                    <div class="col-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="daySunday">
                                            <label class="form-check-label" for="daySunday">Sunday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="dayMonday">
                                            <label class="form-check-label" for="dayMonday">Monday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="dayTuesday">
                                            <label class="form-check-label" for="dayTuesday">Tuesday</label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="dayWednesday">
                                            <label class="form-check-label" for="dayWednesday">Wednesday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="dayThursday">
                                            <label class="form-check-label" for="dayThursday">Thursday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="dayFriday">
                                            <label class="form-check-label" for="dayFriday">Friday</label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="daySaturday">
                                            <label class="form-check-label" for="daySaturday">Saturday</label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                           
                            <div class="col-lg-6 ps-4">

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="scheduleApplyType" id="applyPeriod">
                                    <label class="form-check-label fw-bold" for="applyPeriod">
                                        Above Schedule Apply on following Period Only
                                    </label>
                                </div>

                                <div class="form-group ms-4">
                                    <label>From Date</label>
                                    <input type="text" placeholder="" disabled>
                                </div>

                                <div class="form-group ms-4">
                                    <label>To Date</label>
                                    <input type="text" placeholder="" disabled>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

           

        </div>

    </div>

</div>
</div>
