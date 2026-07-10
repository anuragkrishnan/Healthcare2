<style>
/* ---- Consultant autocomplete dropdown ---- */
.autocomplete-wrapper { position: relative; }
.autocomplete-suggestions {
    display: none;
    position: absolute;
    top: calc(100% + 2px);
    left: 0;
    right: 0;
    z-index: 1050;
    max-height: 220px;
    overflow-y: auto;
    background: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.375rem;
    box-shadow: 0 6px 16px rgba(0,0,0,0.12);
}
.autocomplete-suggestions.show { display: block; }
.autocomplete-item {
    padding: 8px 12px;
    cursor: pointer;
    font-size: 0.9rem;
    color: #212529;
    display: flex;
    flex-direction: column;
    line-height: 1.3;
}
.autocomplete-item small { color: #6c757d; }
.autocomplete-item:hover,
.autocomplete-item.active {
    background-color: #0d6efd;
    color: #fff;
}
.autocomplete-item:hover small,
.autocomplete-item.active small { color: #e9ecef; }
.autocomplete-no-result {
    padding: 8px 12px;
    font-size: 0.9rem;
    color: #6c757d;
    font-style: italic;
}
.autocomplete-item mark {
    background: #fff3cd;
    color: inherit;
    padding: 0;
}
.autocomplete-item.active mark { background: rgba(255,255,255,0.35); }
</style>




<div class="add-consultant-page consultant-schedule-page">

    <!-- Toolbar -->
    <div class="page-header bg-white border border-light-subtle rounded-3 p-2 mb-3 shadow-sm d-flex flex-wrap gap-2 justify-content-between align-items-center">
        <div class="d-flex gap-1">

            <button class="btn btn-sm btn-outline-success px-3" data-bs-toggle="modal"
                        data-bs-target="#scheduleTimingModal" ><i class="bi bi-clock me-1"></i> Time</button>
            <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-x-circle me-1"></i> Cancel</button>
            <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-printer me-1"></i> Print</button>
        </div>
        <div class="d-flex align-items-center gap-2"></div>
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

                <!-- Consultant (searchable) -->
                <!-- NEW -->
                <div class="col-lg-5">
                    <div class="form-group" style="grid-template-columns:110px 1fr;">
                        <label>Consultant</label>
                        <div class="autocomplete-wrapper position-relative">
                            <input type="text" id="consultantInput" class="form-control"
                                placeholder="🔍 Search Consultant" autocomplete="off">
                            <div id="consultantSuggestions" class="autocomplete-suggestions"></div>
                        </div>
                    </div>
                </div>

                <!-- From Date (calendar picker) -->
                <div class="col-lg-3">
                    <div class="form-group" style="grid-template-columns:80px 1fr;">
                        <label>From Date</label>
                        <input type="date" id="fromDateInput" class="form-control" value="2026-04-20">
                    </div>
                </div>

                <!-- To Date (calendar picker) -->
                <div class="col-lg-3">
                    <div class="form-group" style="grid-template-columns:70px 1fr;">
                        <label>To Date</label>
                        <input type="date" id="toDateInput" class="form-control" value="2026-04-30">
                    </div>
                </div>

                <div class="col-auto">
                    <button id="btnLoadSchedule" class="btn btn-primary px-4" style="height:38px; margin-bottom:2px;">
                        <i class="bi bi-arrow-repeat me-1"></i> Load
                    </button>
                </div>

            </div>

            <!-- small status line (no consultant found / no data etc.) -->
            <div id="scheduleStatus" class="text-danger small mb-2" style="display:none;"></div>

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
                            <th>From</th><th>To</th><th>SAP 1</th>
                            <th>From</th><th>To</th><th>SAP 2</th>
                            <th>From</th><th>To</th><th>SAP 3</th>
                        </tr>
                    </thead>

                    <!-- rows are generated dynamically by JS; kept empty here -->
                    <tbody id="scheduleTable">
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>
{{-- INCLUDE MODAL HERE --}}
@include('consultants.scheduleTiming')

<script>
/* =========================================================
   DUMMY BACKEND DATA
  
   ========================================================= */
const DUMMY_CONSULTANTS = {
    "Dr. Rajesh Kumar": {
        id: "C001",
        dept: "Cardiology",
        schedule: {
            byDay: {
                "Monday":    { s1From: "09:00", s1To: "11:00", sap1: "", s2From: "12:00", s2To: "14:00", sap2: "", s3From: "",      s3To: "",      sap3: "" },
                "Tuesday":   { s1From: "09:00", s1To: "11:00", sap1: "", s2From: "",      s2To: "",      sap2: "",        s3From: "16:00", s3To: "18:00", sap3: "" },
                "Wednesday": { s1From: "09:00", s1To: "11:00", sap1: " ", s2From: "12:00", s2To: "14:00", sap2: "", s3From: "",      s3To: "",      sap3: "" },
                "Thursday":  { s1From: "09:00", s1To: "11:00", sap1: "", s2From: "",      s2To: "",      sap2: "",        s3From: "16:00", s3To: "18:00", sap3: "" },
                "Friday":    { s1From: "09:00", s1To: "11:00", sap1: "", s2From: "12:00", s2To: "14:00", sap2: "", s3From: "",      s3To: "",      sap3: "" },
                "Saturday":  { s1From: "09:00", s1To: "12:00", sap1: "", s2From: "",      s2To: "",      sap2: "",        s3From: "",      s3To: "",      sap3: "" },
                "Sunday":    { s1From: "",      s1To: "",      sap1: "",        s2From: "",      s2To: "",      sap2: "",        s3From: "",      s3To: "",      sap3: "" }
            },
            byDate: {}
        }
    },

    "Dr. Suresh Pillai": {
        id: "C005",
        dept: "General Medicine",
        schedule: {
            byDay: {
                "Monday":    { s1From: "10:00", s1To: "12:00", sap1: "SAP-501", s2From: "13:00", s2To: "15:00", sap2: "SAP-502", s3From: "",      s3To: "",      sap3: "" },
                "Tuesday":   { s1From: "10:00", s1To: "12:00", sap1: "SAP-501", s2From: "13:00", s2To: "15:00", sap2: "SAP-502", s3From: "",      s3To: "",      sap3: "" },
                "Wednesday": { s1From: "10:00", s1To: "12:00", sap1: "SAP-501", s2From: "",      s2To: "",      sap2: "",        s3From: "18:00", s3To: "20:00", sap3: "SAP-503" },
                "Thursday":  { s1From: "10:00", s1To: "12:00", sap1: "SAP-501", s2From: "13:00", s2To: "15:00", sap2: "SAP-502", s3From: "",      s3To: "",      sap3: "" },
                "Friday":    { s1From: "10:00", s1To: "12:00", sap1: "SAP-501", s2From: "",      s2To: "",      sap2: "",        s3From: "18:00", s3To: "20:00", sap3: "SAP-503" },
                "Saturday":  { s1From: "10:00", s1To: "13:00", sap1: "SAP-501", s2From: "",      s2To: "",      sap2: "",        s3From: "",      s3To: "",      sap3: "" },
                "Sunday":    { s1From: "",      s1To: "",      sap1: "",        s2From: "",      s2To: "",      sap2: "",        s3From: "",      s3To: "",      sap3: "" }
            },
            byDate: {}
        }
    }
};

// NEW — add this block in its place:
const consultantInputEl = document.getElementById('consultantInput');
const consultantSuggestionsEl = document.getElementById('consultantSuggestions');
let activeSuggestionIndex = -1;

function highlightMatch(name, query) {
    const i = name.toLowerCase().indexOf(query.toLowerCase());
    if (i === -1) return name;
    return name.slice(0, i) + '<mark>' + name.slice(i, i + query.length) + '</mark>' + name.slice(i + query.length);
}

function renderConsultantSuggestions(query) {
    const names = Object.keys(DUMMY_CONSULTANTS);
    const matches = query
        ? names.filter(n => n.toLowerCase().includes(query.toLowerCase()))
        : names;

    activeSuggestionIndex = -1;
    consultantSuggestionsEl.innerHTML = '';

    if (matches.length === 0) {
        consultantSuggestionsEl.innerHTML = `<div class="autocomplete-no-result">No consultant found${query ? ` for "${query}"` : ''}</div>`;
        consultantSuggestionsEl.classList.add('show');
        return;
    }

    matches.forEach(name => {
        const info = DUMMY_CONSULTANTS[name];
        const item = document.createElement('div');
        item.className = 'autocomplete-item';
        item.dataset.name = name;
        item.innerHTML = `
            <span>${highlightMatch(name, query)}</span>
            ${info && info.dept ? `<small>${info.dept}${info.id ? ' • ' + info.id : ''}</small>` : ''}
        `;
        item.addEventListener('mousedown', (e) => {
            e.preventDefault();
            selectConsultant(name);
        });
        consultantSuggestionsEl.appendChild(item);
    });

    consultantSuggestionsEl.classList.add('show');
}

function selectConsultant(name) {
    consultantInputEl.value = name;
    hideConsultantSuggestions();
    loadSchedule();
}

function hideConsultantSuggestions() {
    consultantSuggestionsEl.classList.remove('show');
    activeSuggestionIndex = -1;
}

function updateActiveSuggestion(items) {
    items.forEach((el, idx) => el.classList.toggle('active', idx === activeSuggestionIndex));
    if (activeSuggestionIndex >= 0 && items[activeSuggestionIndex]) {
        items[activeSuggestionIndex].scrollIntoView({ block: 'nearest' });
    }
}

consultantInputEl.addEventListener('input', () => {
    renderConsultantSuggestions(consultantInputEl.value.trim());
});

consultantInputEl.addEventListener('focus', () => {
    renderConsultantSuggestions(consultantInputEl.value.trim());
});

consultantInputEl.addEventListener('keydown', (e) => {
    const items = Array.from(consultantSuggestionsEl.querySelectorAll('.autocomplete-item'));
    if (!consultantSuggestionsEl.classList.contains('show') || items.length === 0) return;

    if (e.key === 'ArrowDown') {
        e.preventDefault();
        activeSuggestionIndex = (activeSuggestionIndex + 1) % items.length;
        updateActiveSuggestion(items);
    } else if (e.key === 'ArrowUp') {
        e.preventDefault();
        activeSuggestionIndex = (activeSuggestionIndex - 1 + items.length) % items.length;
        updateActiveSuggestion(items);
    } else if (e.key === 'Enter') {
        e.preventDefault();
        if (activeSuggestionIndex >= 0) {
            selectConsultant(items[activeSuggestionIndex].dataset.name);
        } else {
            hideConsultantSuggestions();
            loadSchedule();
        }
    } else if (e.key === 'Escape') {
        hideConsultantSuggestions();
    }
});

document.addEventListener('click', (e) => {
    if (!e.target.closest('.autocomplete-wrapper')) {
        hideConsultantSuggestions();
    }
});

function refreshConsultantList() {
    if (consultantSuggestionsEl.classList.contains('show')) {
        renderConsultantSuggestions(consultantInputEl.value.trim());
    }
}


/* ---- date helpers ---- */
// Native <input type="date"> gives "YYYY-MM-DD"
function parseISO(str) {
    const [y, m, d] = str.split('-').map(Number);
    return new Date(y, m - 1, d);
}
// Table display format: "DD/MM/YYYY"
function formatDMY(date) {
    const d = String(date.getDate()).padStart(2, '0');
    const m = String(date.getMonth() + 1).padStart(2, '0');
    const y = date.getFullYear();
    return `${d}/${m}/${y}`;
}
const DAY_NAMES = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

function showStatus(msg) {
    const el = document.getElementById('scheduleStatus');
    if (!msg) { el.style.display = 'none'; el.textContent = ''; return; }
    el.style.display = 'block';
    el.textContent = msg;
}

function cellInput(value) {
    return `<input type="text" class="form-control form-control-sm" value="${value || ''}">`;
}

/* Build table rows for the chosen consultant + date range using dummy data
   (byDate entries -- saved as "Period Only" in the modal -- win over
   byDay entries -- saved as recurring Weeks/Days -- for the same date) */
function loadSchedule() {
    const name = document.getElementById('consultantInput').value.trim();
    const fromStr = document.getElementById('fromDateInput').value;
    const toStr = document.getElementById('toDateInput').value;
    const tbody = document.getElementById('scheduleTable');
    tbody.innerHTML = '';

    if (!name) {
        showStatus('Please enter / select a consultant name.');
        return;
    }
    const consultant = DUMMY_CONSULTANTS[name];
    if (!consultant) {
        showStatus(`No consultant found matching "${name}".`);
        return;
    }
    if (!fromStr || !toStr) {
        showStatus('Please choose both From Date and To Date.');
        return;
    }

    const fromDate = parseISO(fromStr);
    const toDate = parseISO(toStr);
    if (isNaN(fromDate) || isNaN(toDate) || toDate < fromDate) {
        showStatus('Please choose a valid date range.');
        return;
    }

    showStatus(''); // clear

    const byDay = (consultant.schedule && consultant.schedule.byDay) || {};
    const byDate = (consultant.schedule && consultant.schedule.byDate) || {};

    let sno = 1;
    for (let d = new Date(fromDate); d <= toDate; d.setDate(d.getDate() + 1)) {
        const dateStr = formatDMY(d);
        const dayName = DAY_NAMES[d.getDay()];
        const day = byDate[dateStr] || byDay[dayName] || {};
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${sno}</td>
            <td>${dateStr}</td>
            <td>${dayName}</td>
            <td>${cellInput(day.s1From)}</td>
            <td>${cellInput(day.s1To)}</td>
            <td>${cellInput(day.sap1)}</td>
            <td>${cellInput(day.s2From)}</td>
            <td>${cellInput(day.s2To)}</td>
            <td>${cellInput(day.sap2)}</td>
            <td>${cellInput(day.s3From)}</td>
            <td>${cellInput(day.s3To)}</td>
            <td>${cellInput(day.sap3)}</td>
        `;
        tbody.appendChild(row);
        sno++;
    }
}

document.getElementById('btnLoadSchedule').addEventListener('click', loadSchedule);

/* Load a default consultant's schedule once on page ready so the table isn't empty */
window.addEventListener('DOMContentLoaded', () => {
    document.getElementById('consultantInput').value = 'Dr. Rajesh Kumar';
    loadSchedule();
});
</script>