<div
    class="page-header bg-white border border-light-subtle rounded-3 p-2 mb-3 shadow-sm d-flex flex-wrap gap-2 justify-content-between align-items-center overflow-hidden">
    <div class="d-flex gap-1 text-secondary">
        <table class="table table-sm table-borderless w-auto align-middle m-0 d-inline-block text-secondary">
            <tbody>
                <tr class="d-flex gap-3 align-items-center">
                    <td>
                        <strong>Patient Id:</strong>
                        <input type="text" class="d-inline-block ml-2 p-0 px-1 border" placeholder="Type-> 17163"
                            style="width: 100px;" id="patientId">
                        <i class="bi bi-search cursor-pointer text-primary ms-1"></i>
                    </td>

                    <td>
                        <strong>ID Card No:</strong>
                        <input type="text" style="width: 100px;" class="d-inline-block p-0 px-1 border"
                            value="" id="idCardNo">
                    </td>

                    <td>
                        <strong>Name:</strong>
                        <input type="text" style="width: 150px;" class="d-inline-block p-0 px-1 border"
                            value="" id="name" placeholder="Type-> fatima">
                    </td>

                    <td>
                        <strong>Mobile:</strong>
                        <input type="text" style="width: 100px;" class="d-inline-block p-0 px-1 border"
                            value="" id="mobile">
                    </td>

                    <td>
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i
                                class="bi bi-search me-1"></i> Search
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i
                                class="bi bi-chevron-down me-1"></i> Show Advance Search
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>

<div class="card-section h-auto" style="overflow:hidden;">
    <div class="card table-card mb-1">
        <!-- Toolbar -->

        <div class="table-toolbar">
            <div class="table-length d-flex align-items-center">

                <label for="searchPatient" style="width:100%;">Search Patient</label>
                <input style="max-width:600px;" type="text" id="searchPatient" name="searchPatient"
                    placeholder="Search Patient">

            </div>

            <div class="table-actions">

                <button class="btn btn-sm btn-outline-dark px-3"><i class="bi bi-arrow-left me-1"></i>
                    Previous</button>
                <button class="btn btn-sm btn-outline-dark px-3">Next <i class="bi bi-arrow-right ms-1"></i></button>

            </div>
        </div>
        <div class="table-wrapper">
            <div class="table-responsive">
                <table class="table table-light table-hover align-middle mb-0">

                    <thead>

                        <tr>

                            <th>Patient ID</th>
                            <th>Name</th>
                            <th>MiddleName</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Mobile</th>
                            <th>Nationality</th>
                            <th>Occupation</th>
                            <th>Employee ID</th>
                            <th>Customer</th>
                            <th>Remarks</th>

                        </tr>

                    </thead>
                    <tbody id="resultsBody">
                        <tr class="no-data-row">
                            <td colspan="12" class="text-center" style="height:150px;">No data found</td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <div class="section-heading mt-1">
                <p>Patient History</p>
            </div>
            <div class="table-responsive">
                <table class="table table-light table-hover align-middle mb-0">

                    <thead>

                        <tr>

                            <th>Type</th>
                            <th>Doc No.</th>
                            <th>Doc. Date</th>
                            <th>Consultant</th>
                            <th>Net Amount</th>
                            <th>Payment Mode</th>
                            <th>Remarks</th>

                        </tr>

                    </thead>
                    <tbody id="patientHistoryBody">
                        <tr class="no-data-row">
                            <td colspan="7">
                                Select a patient above to view history
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="section-heading mt-1">
                <p>Billing</p>
            </div>
            <div class="table-responsive">
                <table class="table table-light table-hover align-middle mb-3">

                    <thead>

                        <tr>

                            <th>S. No</th>
                            <th>Item Code</th>
                            <th>Item Description</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Discount</th>
                            <th>Tax Amount</th>
                            <th>Net Amount</th>

                        </tr>

                    </thead>
                    <tbody id="billingBody">
                        <tr class="no-data-row">
                            <td colspan="8">
                                <div>Select a patient above to view billing</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center gap-2 ml-3 pl-2">
        <span class="badge text-bg-success mr-3"> </span> Cash Bill
        <span class="badge text-bg-danger mr-3"> </span> Inactive Patient
        <span class="badge text-bg-warning"> </span> Cancelled
    </div>
</div>

<!-- ── Action Bar ── -->
<div class="sticky-section d-flex align-items-center justify-content-center flex-wrap gap-3 mb-2">
    <div class="action-bar">
        <button type="button" class="btn btn-sm btn-outline-dark"><strong>
                <i class="bi bi-check2-circle text-primary"></i> Ok</strong>
        </button>
        <button type="button" class="btn btn-sm btn-outline-dark"><strong><i class="bi bi-ban text-danger"></i>
                Cancel</strong></button>

    </div>
</div>
@include('patients.modals.newreg')
<script>
    // ---- Dummy datasets — replace with real ajax response later ----

    // Shown for "known" numeric input, e.g. patient ID 17163 or mobile 0542395255
    const numberDataset = [{
        patientId: "17163",
        idCardNo: "784199012345678",
        name: "SUMESH",
        middleName: "",
        lastName: "SIDHARTH",
        age: "45Y",
        gender: "M",
        mobile: "0542395255",
        nationality: "INDIA",
        occupation: "",
        employeeId: "0",
        customer: "GULF ASIAN MEDICAL CENTER - TCS - AL JAZEERA TAKAFUL",
        remark: ""
    }];

    // Shown when letters are typed in the Name field
    const nameLetterDataset = [{
        patientId: "19005",
        idCardNo: "784200011223344",
        name: "FATIMA",
        middleName: "",
        lastName: "HASSAN",
        age: "27Y",
        gender: "F",
        mobile: "0567891234",
        nationality: "PAKISTAN",
        occupation: "TEACHER",
        employeeId: "0",
        customer: "CASH PATIENT",
        remark: ""
    }];

    // Larger pool to draw random rows from when a number doesn't match a "known" one
    const randomPool = [{
            patientId: "20011",
            idCardNo: "784201122334455",
            name: "MOHAMMED",
            middleName: "",
            lastName: "AL SAYED",
            age: "50Y",
            gender: "M",
            mobile: "0509998888",
            nationality: "EGYPT",
            occupation: "ACCOUNTANT",
            employeeId: "77",
            customer: "CASH PATIENT",
            remark: ""
        },
        {
            patientId: "20012",
            idCardNo: "784201122334456",
            name: "LAYLA",
            middleName: "",
            lastName: "IBRAHIM",
            age: "29Y",
            gender: "F",
            mobile: "0509998889",
            nationality: "JORDAN",
            occupation: "NURSE",
            employeeId: "78",
            customer: "GULF ASIAN MEDICAL CENTER - DAMMAM",
            remark: ""
        },
        {
            patientId: "20013",
            idCardNo: "784201122334457",
            name: "YUSUF",
            middleName: "",
            lastName: "AL AMIN",
            age: "41Y",
            gender: "M",
            mobile: "0509998890",
            nationality: "SUDAN",
            occupation: "CHEF",
            employeeId: "0",
            customer: "CASH PATIENT",
            remark: ""
        },
        {
            patientId: "20014",
            idCardNo: "784201122334458",
            name: "NOORA",
            middleName: "",
            lastName: "AL SHAMSI",
            age: "33Y",
            gender: "F",
            mobile: "0509998891",
            nationality: "UAE",
            occupation: "MANAGER",
            employeeId: "12",
            customer: "GULF ASIAN MEDICAL CENTER - JUBAIL",
            remark: ""
        },
        {
            patientId: "20015",
            idCardNo: "784201122334459",
            name: "OMAR",
            middleName: "",
            lastName: "FAROUK",
            age: "55Y",
            gender: "M",
            mobile: "0509998892",
            nationality: "EGYPT",
            occupation: "RETIRED",
            employeeId: "0",
            customer: "CASH PATIENT",
            remark: ""
        }
    ];

    const resultsBody = document.getElementById('resultsBody');

    // "Known" numbers that map to the fixed numberDataset (simulate a real match)
    const knownNumbers = ["17163", "17164", "1111", "2222"];

    function renderNoData() {
        resultsBody.innerHTML = `
      <tr class="no-data-row">
        <td colspan="12"><div>No data found</div></td>
      </tr>`;
    }

    function renderRows(rows) {
        resultsBody.innerHTML = rows.map(p => `
      <tr class="${p ? 'row-clickable pat-row' : ''}" data-name="${p.name}" data-id="${p.patientId}">
        <td>${p.patientId}</td>
        <td>${p.name}</td>
        <td>${p.middleName}</td>
        <td>${p.lastName}</td>
        <td>${p.age}</td>
        <td>${p.gender}</td>
        <td>${p.mobile}</td>
        <td>${p.nationality}</td>
        <td>${p.occupation}</td>
        <td>${p.employeeId}</td>
        <td>${p.customer}</td>
        <td>${p.remark}</td>
      </tr>
    `).join('');
    }

    // Pick a random sample (1-3 rows) from the random pool
    function getRandomRows() {
        const shuffled = [...randomPool].sort(() => Math.random() - 0.5);
        const count = Math.floor(Math.random() * 3) + 1; // 1 to 3 rows
        return shuffled.slice(0, count);
    }

    // ---- Dummy history dataset, keyed by patientId — replace with real ajax lookup later ----
    const patientHistoryData = {
        "17163": [{
                type: "REG",
                docNo: "2622846",
                docDate: "10/06/2026 10:55PM",
                consultant: "DR. MADHAVI LATHA MAGATAPALLI",
                netAmount: "28.75",
                paymentMode: "Credit",
                remarks: ""
            },
            {
                type: "PHARMACY",
                docNo: "11869276",
                docDate: "11/03/2026 10:09AM",
                consultant: "DR. MADHAVI LATHA MAGATAPALLI",
                netAmount: "21.56",
                paymentMode: "Credit",
                remarks: ""
            },
            {
                type: "PHARMACY",
                docNo: "11869149",
                docDate: "10/03/2026 11:21PM",
                consultant: "DR. MADHAVI LATHA MAGATAPALLI",
                netAmount: "105.57",
                paymentMode: "Credit",
                remarks: ""
            },
            {
                type: "REG",
                docNo: "2622745",
                docDate: "10/03/2026 10:55PM",
                consultant: "DR. MADHAVI LATHA MAGATAPALLI",
                netAmount: "28.75",
                paymentMode: "Credit",
                remarks: ""
            }
        ],
        "17164": [{
            type: "REG",
            docNo: "2614799",
            docDate: "03/03/2026 10:21AM",
            consultant: "DR. MADHAVI LATHA MAGATAPALLI",
            netAmount: "28.75",
            paymentMode: "Credit",
            remarks: ""
        }]
    };

    const patientHistoryBody = document.getElementById('patientHistoryBody');

    function renderNoHistory() {
        patientHistoryBody.innerHTML = `
    <tr class="no-data-row">
      <td colspan="7"><div>No history found</div></td>
    </tr>`;
    }

    function renderHistoryRows(rows) {
        patientHistoryBody.innerHTML = rows.map(r => {

            return `
      <tr>
        <td>${r.type}</td>
        <td>${r.docNo}</td>
        <td>${r.docDate}</td>
        <td>${r.consultant}</td>
        <td>${r.netAmount}</td>
        <td>${r.paymentMode}</td>
        <td>${r.remarks}</td>
      </tr>`;
        }).join('');
    }

    // ---- Dummy billing dataset, keyed by patientId — replace with real ajax lookup later ----
    const patientBillingData = {
        "17163": [{
            sNo: "4782937",
            itemCode: "PH00607",
            itemDescription: "FLUCA 5 ML EYE DROPS",
            quantity: "1",
            rate: "23.95",
            discount: "2.40",
            taxAmount: "0.00",
            netAmount: "21.56"
        }],
        "17164": [{
                sNo: "4782940",
                itemCode: "PH00612",
                itemDescription: "PARACETAMOL 500MG TAB",
                quantity: "2",
                rate: "5.00",
                discount: "0.00",
                taxAmount: "0.75",
                netAmount: "10.75"
            },
            {
                sNo: "4782941",
                itemCode: "PH00615",
                itemDescription: "COUGH SYRUP 100ML",
                quantity: "1",
                rate: "18.00",
                discount: "1.00",
                taxAmount: "0.85",
                netAmount: "17.85"
            }
        ]
    };

    const billingBody = document.getElementById('billingBody');

    function renderNoBilling() {
        billingBody.innerHTML = `
    <tr class="no-data-row">
      <td colspan="8"><div>No billing records found</div></td>
    </tr>`;
    }

    function renderBillingRows(rows) {
        billingBody.innerHTML = rows.map(r => `
    <tr>
      <td>${r.sNo}</td>
      <td>${r.itemCode}</td>
      <td>${r.itemDescription}</td>
      <td>${r.quantity}</td>
      <td>${r.rate}</td>
      <td>${r.discount}</td>
      <td>${r.taxAmount}</td>
      <td>${r.netAmount}</td>
    </tr>
  `).join('');
    }

    // NEW: populate history + billing together for a given patientId
    function populateRelatedTables(patientId) {
        const history = patientHistoryData[patientId];
        history ? renderHistoryRows(history) : renderNoHistory();

        const billing = patientBillingData[patientId];
        billing ? renderBillingRows(billing) : renderNoBilling();
    }

    function runSearch(fieldKey, rawValue) {
        const value = rawValue.trim();

        if (!value) {
            renderNoData();
            renderNoHistory();
            renderNoBilling();
            return;
        }

        const isNumeric = /^\d+$/.test(value);
        const isAlpha = /^[a-zA-Z\s]+$/.test(value);

        let matchedRows = null;

        // Letters typed in the Name field -> fixed letter dataset
        if (fieldKey === 'name' && isAlpha) {
            matchedRows = nameLetterDataset;
        }
        // Numbers typed in any field
        else if (isNumeric) {
            matchedRows = knownNumbers.includes(value) ? numberDataset : getRandomRows();
        }

        if (matchedRows && matchedRows.length) {
            renderRows(matchedRows);
            // NEW: auto-populate history & billing for the first matched patient
            populateRelatedTables(matchedRows[0].patientId);
        } else {
            renderNoData();
            renderNoHistory();
            renderNoBilling();
        }
    }

    // Attach Enter-key listener to each top field
    const fieldMap = {
        patientId: 'patientId',
        idCardNo: 'idCardNo',
        name: 'name',
        mobile: 'mobile'
    };

    Object.keys(fieldMap).forEach(inputId => {
        const input = document.getElementById(inputId);
        if (!input) return;

        input.addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                runSearch(fieldMap[inputId], this.value);
            }
        });
    });

    // CHANGED: clicking a patient row in the results table now opens the modal
    // (instead of populating history/billing, which already happened on search).
    // Reusing the existing regModal fields — mapped to patient info here.
    // Swap these mappings/fields if you'd rather show different patient details.
    resultsBody.addEventListener('click', function(e) {
        const row = e.target.closest('tr');
        if (!row || row.classList.contains('no-data-row')) return;

        const cells = row.querySelectorAll('td');
        const patientId = cells[0]?.textContent.trim();
        const firstName = cells[1]?.textContent.trim();
        const lastName = cells[3]?.textContent.trim();
        const mobile = cells[6]?.textContent.trim();

        document.getElementById('regPatId').value = patientId || '';
        document.getElementById('regName').value = `${firstName || ''} ${lastName || ''}`.trim();
        document.getElementById('regMobile').value = mobile || '';

        const modal = new bootstrap.Modal(document.getElementById('regModal'));
        modal.show();
    });
</script>
