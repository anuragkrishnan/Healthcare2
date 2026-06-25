<style>
    /* Thin dark-aware scrollbar for the modal body, matching #content-area's style */
    .dark-modal .modal-body::-webkit-scrollbar {
        width: 6px;
    }

    .dark-modal .modal-body::-webkit-scrollbar-track {
        background: transparent;
    }

    .dark-modal .modal-body::-webkit-scrollbar-thumb {
        background: rgba(17, 46, 107, 0.7);
        border-radius: 20px;
    }

    .dark-modal .modal-body::-webkit-scrollbar-thumb:hover {
        background: rgba(17, 46, 107, 0.7);
    }

    /* ============ Floating underline fiel--- need to add this css in the dashboard.css file ============ */
    .field-underline {
        position: relative;
        margin-bottom: 2rem;
    }

    .field-underline-input {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid var(--border);
        color: #fff;
        font-size: 0.95rem;
        padding: 8px 2px 10px 2px;
        outline: none;
        transition: border-color .2s ease;
    }

    /* the line itself: thin by default, thickens and turns primary-blue on focus */
    .field-underline::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: 2px;
        background: var(--primary);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .25s ease;
    }

    .field-underline-input:focus {
        border-bottom-color: transparent;
        /* the ::after line takes over visually */
    }

    .field-underline-input:focus~.field-underline-label,
    .field-underline-input:not(:placeholder-shown)~.field-underline-label {
        transform: translateY(-22px);
        font-size: 0.72rem;
        color: var(--primary);
    }

    .field-underline-input:focus+.field-underline-label+.field-underline-line,
    .field-underline:has(.field-underline-input:focus)::after {
        transform: scaleX(1);
    }

    .field-underline-label {
        position: absolute;
        left: 2px;
        top: 8px;
        font-size: 0.95rem;
        color: #b8c2bc;
        pointer-events: none;
        transition: transform .2s ease, font-size .2s ease, color .2s ease;
        transform-origin: left top;
    }

    /* Optional helper/error text under the field */
    .field-underline-hint {
        font-size: 0.72rem;
        color: #7d8a83;
        margin-top: 4px;
    }

    .field-underline.has-error .field-underline-input {
        border-bottom-color: #e44949;
    }

    .field-underline.has-error::after {
        background: #e44949;
    }

    .field-underline.has-error .field-underline-label {
        color: #e44949;
    }

    .field-underline.has-error .field-underline-hint {
        color: #e44949;
    }

    /* Select variant — same visual language, since a <select> can't use
     :placeholder-shown the way text inputs can. Label is always floated;
     a chevron icon is added since native select arrows vary by OS/browser. */
    .field-underline-select {
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid var(--border);
        color: #fff;
        font-size: 0.95rem;
        padding: 8px 24px 10px 2px;
        outline: none;
        appearance: none;
        transition: border-color .2s ease;
    }

    .field-underline-select:focus {
        border-bottom-color: transparent;
    }

    .field-underline-select~.field-underline-label {
        transform: translateY(-22px);
        font-size: 0.72rem;
        color: #b8c2bc;
    }

    .field-underline-select:focus~.field-underline-label {
        color: var(--primary);
    }

    .field-underline:has(.field-underline-select:focus)::after {
        transform: scaleX(1);
    }

    .field-underline-select option {
        background: #1a1e28;
        color: #fff;
    }

    .field-underline .select-chevron {
        position: absolute;
        right: 2px;
        top: 10px;
        color: #7d8a83;
        font-size: 0.8rem;
        pointer-events: none;
    }

    .btn-primary-custom {
        background: var(--primary);
        border: none;
        color: #fff;
        border-radius: 10px;
        padding: 0.65rem 1.6rem;
        font-size: 0.875rem;
        font-weight: 600;
        transition: background .18s, box-shadow .18s;
    }

    .btn-primary-custom:hover {
        background: #486bf9;
        box-shadow: 0 4px 18px rgba(79, 142, 247, .35);
    }

    .input-group-underline {
        position: relative;
        display: flex;
        align-items: center;
        border-bottom: 1px solid var(--border);
        transition: border-color .2s ease;
    }

    .input-group-underline::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: -1px;
        height: 2px;
        background: var(--primary);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .25s ease;
    }

    .input-group-underline:has(.form-control-underline:focus)::after {
        transform: scaleX(1);
    }

    .input-group-underline:has(.form-control-underline:focus) {
        border-bottom-color: transparent;
    }

    .form-control-underline {
        flex: 1 1 auto;
        width: 100%;
        background: transparent !important;
        border: none !important;
        color: #fff;
        font-size: 0.95rem;
        padding: 8px 2px 10px 2px;
        outline: none !important;
        box-shadow: none !important;
    }

    .form-control-underline::placeholder {
        color: #7d8a83;
    }

    .input-group-underline-btn {
        flex-shrink: 0;
        background: transparent;
        border: none;
        color: #b8c2bc;
        font-size: 0.85rem;
        padding: 6px 4px 6px 8px;
        cursor: pointer;
        transition: color .18s ease;
    }

    .input-group-underline-btn:hover {
        color: var(--primary);
    }
</style>

<div class="modal fade" id="patientAddModal" tabindex="-1" aria-labelledby="patientAddModalLabel" aria-modal="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content dark-modal">
            <div class="modal-header page-header" style="height: 70px;">
                <div class="page-header-items">
                    <div class="page-title-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="page-title-text">
                        <div class="page-title">Add New Patient</div>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-container align-items-center">
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <div class="input-group-underline">
                                <input type="text" class="form-control-underline" id="patientId"
                                    placeholder="Patient ID">
                                <button class="input-group-underline-btn" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-fname" placeholder=" ">
                                <label class="field-underline-label" for="fld-fname">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-mname" placeholder=" ">
                                <label class="field-underline-label" for="fld-mname">Middle Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-lname" placeholder=" ">
                                <label class="field-underline-label" for="fld-lname">Last Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-family-name"
                                    placeholder=" ">
                                <label class="field-underline-label" for="fld-family-name">Family Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-phone" placeholder=" ">
                                <label class="field-underline-label" for="fld-phone">Mobile No.</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline has-error">
                                <input type="email" class="field-underline-input" id="fld-email" placeholder=" "
                                    value="not-an-email">
                                <label class="field-underline-label" for="fld-email">Email Address</label>
                                <div class="field-underline-hint">Enter a valid email address</div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <select class="field-underline-select" id="fld-priority">
                                    <option value="" selected disabled>Select Priority</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label class="field-underline-label" for="fld-priority"> Priority</label>
                                <i class="bi bi-chevron-down select-chevron"></i>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-dob" placeholder=" ">
                                <label class="field-underline-label" for="fld-dob">DOB</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-age" placeholder=" ">
                                <label class="field-underline-label" for="fld-age">Age</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-id" placeholder=" ">
                                <label class="field-underline-label" for="fld-id">Id card No</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-id2" placeholder=" ">
                                <label class="field-underline-label" for="fld-id2">Id Card 2</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="status" class="col-sm-2 col-form-label">
                                Status
                            </label>
                            <span>
                                <input type="checkbox" value="active" checked> Active
                            </span>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <div class="input-group-underline">
                                <input type="text" class="form-control-underline" id="patientId"
                                    placeholder="Patient ID">
                                <button class="input-group-underline-btn" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-fname" placeholder=" ">
                                <label class="field-underline-label" for="fld-fname">First Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-mname" placeholder=" ">
                                <label class="field-underline-label" for="fld-mname">Middle Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-lname" placeholder=" ">
                                <label class="field-underline-label" for="fld-lname">Last Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-family-name"
                                    placeholder=" ">
                                <label class="field-underline-label" for="fld-family-name">Family Name</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-phone" placeholder=" ">
                                <label class="field-underline-label" for="fld-phone">Mobile No.</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <input type="email" class="field-underline-input" id="fld-email" placeholder=" ">
                                <label class="field-underline-label" for="fld-email">Email Address</label>

                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="field-underline">
                                <select class="field-underline-select" id="fld-priority">
                                    <option value="" selected disabled>Select Priority</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <label class="field-underline-label" for="fld-priority"> Priority</label>
                                <i class="bi bi-chevron-down select-chevron"></i>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-dob" placeholder=" ">
                                <label class="field-underline-label" for="fld-dob">DOB</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-age" placeholder=" ">
                                <label class="field-underline-label" for="fld-age">Age</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-id" placeholder=" ">
                                <label class="field-underline-label" for="fld-id">Id card No</label>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="field-underline">
                                <input type="text" class="field-underline-input" id="fld-id2" placeholder=" ">
                                <label class="field-underline-label" for="fld-id2">Id Card 2</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label for="status" class="col-sm-2 col-form-label">
                                Status
                            </label>
                            <span>
                                <input type="checkbox" value="active" checked> Active
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="height: 60px;">
                <button type="button" class="btn btn-primary">Save Patient</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
