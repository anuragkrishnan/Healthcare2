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
                                            <input type="text" id="s1FromInput" class="form-control" value="08:00 AM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">To</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" id="s1ToInput" class="form-control" value="02:00 PM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <label class="d-block small fw-semibold mb-1">SAP Code</label>
                                <input type="text" id="s1SapInput" class="form-control form-control-sm" placeholder="Search SAP">

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
                                            <input type="text" id="s2FromInput" class="form-control" value="04:00 PM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">To</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" id="s2ToInput" class="form-control" value="6:00 PM" style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <label class="d-block small fw-semibold mb-1">SAP Code</label>
                                <input type="text" id="s2SapInput" class="form-control form-control-sm" placeholder="Search SAP">

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
                                            <input type="text" id="s3FromInput" class="form-control" placeholder="7:00 PM" disabled style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="d-block small fw-semibold mb-1">To</label>
                                        <div class="input-group input-group-sm">
                                            <input type="text" id="s3ToInput" class="form-control" placeholder="10:00 PM" disabled style="height: 32px;">
                                            <span class="input-group-text"><i class="bi bi-clock"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <label class="d-block small fw-semibold mb-1">SAP Code</label>
                                <input type="text" id="s3SapInput" class="form-control form-control-sm" placeholder="Search SAP" disabled>

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
                                            <input class="form-check-input day-checkbox" type="checkbox" id="daySunday">
                                            <label class="form-check-label" for="daySunday">Sunday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input day-checkbox" type="checkbox" id="dayMonday">
                                            <label class="form-check-label" for="dayMonday">Monday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input day-checkbox" type="checkbox" id="dayTuesday">
                                            <label class="form-check-label" for="dayTuesday">Tuesday</label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input day-checkbox" type="checkbox" id="dayWednesday">
                                            <label class="form-check-label" for="dayWednesday">Wednesday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input day-checkbox" type="checkbox" id="dayThursday">
                                            <label class="form-check-label" for="dayThursday">Thursday</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input day-checkbox" type="checkbox" id="dayFriday">
                                            <label class="form-check-label" for="dayFriday">Friday</label>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input day-checkbox" type="checkbox" id="daySaturday">
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
                                    <input type="date" id="periodFromDate" class="form-control" disabled>
                                </div>

                                <div class="form-group ms-4">
                                    <label>To Date</label>
                                    <input type="date" id="periodToDate" class="form-control" disabled>
                                </div>

                            </div>

                        </div>
                        <button id="btnSaveSchedule" class="btn btn-sm btn-outline-success px-3"><i class="bi bi-save2 me-1"></i> Save</button>
                    </div>

                </div>

            </div>



        </div>

    </div>

</div>
</div>

<script>


/* Enable/disable each schedule's inputs based on its checkbox */
function wireScheduleCheckbox(checkId, ids) {
    const check = document.getElementById(checkId);
    check.addEventListener('change', () => {
        ids.forEach(id => document.getElementById(id).disabled = !check.checked);
    });
}
wireScheduleCheckbox('schedule1Check', ['s1FromInput', 's1ToInput', 's1SapInput']);
wireScheduleCheckbox('schedule2Check', ['s2FromInput', 's2ToInput', 's2SapInput']);
wireScheduleCheckbox('schedule3Check', ['s3FromInput', 's3ToInput', 's3SapInput']);

/* "Select All" toggles every day checkbox */
document.getElementById('selectAllDays').addEventListener('change', function () {
    document.querySelectorAll('.day-checkbox').forEach(cb => cb.checked = this.checked);
});

/* Apply-type radios enable/disable the matching set of fields */
const dayCheckboxIds = ['selectAllDays','daySunday','dayMonday','dayTuesday','dayWednesday','dayThursday','dayFriday','daySaturday'];
function toggleApplyType() {
    const byWeekDays = document.getElementById('applyWeekDays').checked;
    dayCheckboxIds.forEach(id => document.getElementById(id).disabled = !byWeekDays);
    document.getElementById('periodFromDate').disabled = byWeekDays;
    document.getElementById('periodToDate').disabled = byWeekDays;
}
document.getElementById('applyWeekDays').addEventListener('change', toggleApplyType);
document.getElementById('applyPeriod').addEventListener('change', toggleApplyType);
toggleApplyType(); // set correct initial state

/* Save button: write the entered schedule into DUMMY_CONSULTANTS
   for whichever consultant is currently selected on the main page */
document.getElementById('btnSaveSchedule').addEventListener('click', function () {

    const consultantName = document.getElementById('consultantInput').value.trim();
    if (!consultantName) {
        alert('Please search/select a consultant on the Consultant Schedule page first.');
        return;
    }

    // create the consultant in dummy storage if this is a new name
    if (!DUMMY_CONSULTANTS[consultantName]) {
        DUMMY_CONSULTANTS[consultantName] = { id: '', dept: '', schedule: { byDay: {}, byDate: {} } };
        refreshConsultantList();
    }
    const consultant = DUMMY_CONSULTANTS[consultantName];
    if (!consultant.schedule) consultant.schedule = { byDay: {}, byDate: {} };
    if (!consultant.schedule.byDay) consultant.schedule.byDay = {};
    if (!consultant.schedule.byDate) consultant.schedule.byDate = {};

    // build one schedule entry from the modal's current values
    const entry = {
        s1From: document.getElementById('schedule1Check').checked ? document.getElementById('s1FromInput').value : '',
        s1To:   document.getElementById('schedule1Check').checked ? document.getElementById('s1ToInput').value : '',
        sap1:   document.getElementById('schedule1Check').checked ? document.getElementById('s1SapInput').value : '',
        s2From: document.getElementById('schedule2Check').checked ? document.getElementById('s2FromInput').value : '',
        s2To:   document.getElementById('schedule2Check').checked ? document.getElementById('s2ToInput').value : '',
        sap2:   document.getElementById('schedule2Check').checked ? document.getElementById('s2SapInput').value : '',
        s3From: document.getElementById('schedule3Check').checked ? document.getElementById('s3FromInput').value : '',
        s3To:   document.getElementById('schedule3Check').checked ? document.getElementById('s3ToInput').value : '',
        sap3:   document.getElementById('schedule3Check').checked ? document.getElementById('s3SapInput').value : ''
    };

    if (document.getElementById('applyWeekDays').checked) {
        // ---- apply to selected recurring weekdays ----
        const dayMap = {
            daySunday: 'Sunday', dayMonday: 'Monday', dayTuesday: 'Tuesday',
            dayWednesday: 'Wednesday', dayThursday: 'Thursday', dayFriday: 'Friday', daySaturday: 'Saturday'
        };
        let anyChecked = false;
        Object.keys(dayMap).forEach(id => {
            if (document.getElementById(id).checked) {
                anyChecked = true;
                consultant.schedule.byDay[dayMap[id]] = entry;
            }
        });
        if (!anyChecked) {
            alert('Please select at least one day (or "Select All") to apply this schedule to.');
            return;
        }
    } else {
        // ---- apply to a specific date period only ----
        const fromVal = document.getElementById('periodFromDate').value;
        const toVal = document.getElementById('periodToDate').value;
        if (!fromVal || !toVal) {
            alert('Please choose both From Date and To Date for the period.');
            return;
        }
        const fromDate = parseISO(fromVal);
        const toDate = parseISO(toVal);
        if (isNaN(fromDate) || isNaN(toDate) || toDate < fromDate) {
            alert('Please choose a valid date range.');
            return;
        }
        for (let d = new Date(fromDate); d <= toDate; d.setDate(d.getDate() + 1)) {
            consultant.schedule.byDate[formatDMY(d)] = entry;
        }
    }

    // close the modal
    const modalEl = document.getElementById('scheduleTimingModal');
    if (window.bootstrap && bootstrap.Modal) {
        const modalInstance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
        modalInstance.hide();
    }

    alert(`Schedule saved for ${consultantName} Schedule.`);
});
</script>