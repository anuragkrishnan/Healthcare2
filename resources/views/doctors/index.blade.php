<div class="row g-4">
    {{-- Page header --}}
    <div class="page-header">
        <div>
            <div class="page-title">Add New Doctor</div>
            <div class="page-subtitle">Fill in the details below to register a new doctor</div>
        </div>
    </div>

    {{-- Doctors add form --}}

    <div class="form-container">
        <!-- ── Section 1: Profile ── -->
        <div class="card-section">
            <div class="section-label"><i class="bi bi-person-circle"></i> Profile</div>

            <!-- Avatar -->
            <div class="avatar-upload">
                <div class="avatar-preview" title="Upload photo">
                    <i class="bi bi-camera"></i>
                </div>
                <div class="avatar-upload-text">
                    <p>Upload a profile photo</p>
                    <span style="color: #d0d5d2; font-size: 0.75rem;">JPG or PNG · Max 2 MB · Recommended 200×200
                        px</span>
                    <div class="mt-2">
                        <button type="button" class="btn btn-sm btn-default" id="btn-upload"
                            style="padding:.3rem .85rem;font-size:.75rem;">Choose file</button>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-2">
                        <label class="form-label">Title</label>
                        <select class="form-select">
                            <option>Dr.</option>
                            <option>Prof.</option>
                            <option>Mr.</option>
                            <option>Ms.</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="First name" />
                    </div>
                    <div class="col-sm-5">
                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Last name" />
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Gender</label>
                        <select class="form-select">
                            <option value="" disabled selected>Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Non-binary</option>
                            <option>Prefer not to say</option>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label">National ID / Passport</label>
                        <input type="text" class="form-control" placeholder="ID number" />
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Nationality</label>
                        <input type="text" class="form-control" placeholder="e.g. Indian" />
                    </div>
                </div>

            </div>
        </div>

        <!-- ── Section 2: Professional ── -->
        <div class="card-section">
            <div class="section-label"><i class="bi bi-briefcase"></i> Professional</div>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label class="form-label">Medical Registration No. <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-shield-check"></i></span>
                        <input type="text" class="form-control" placeholder="MCI / State council number" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Licence Expiry</label>
                    <input type="date" class="form-control" />
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Primary Specialisation <span class="text-danger">*</span></label>
                    <select class="form-select">
                        <option value="" disabled selected>Choose specialisation</option>
                        <option>Cardiology</option>
                        <option>Dermatology</option>
                        <option>Endocrinology</option>
                        <option>Gastroenterology</option>
                        <option>General Practice</option>
                        <option>Neurology</option>
                        <option>Oncology</option>
                        <option>Orthopaedics</option>
                        <option>Paediatrics</option>
                        <option>Psychiatry</option>
                        <option>Radiology</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Sub-specialisations / Expertise tags</label>
                    <select class="form-control">
                        <option>Interventional Cardiology</option>
                        <option>Heart Failure</option>
                        <option>Echocardiography</option>
                    </select>
                    <!--to show selected tags  -->
                    <div class="tag-list">
                        <span class="tag"> <span class="tag-remove"></span></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Highest Qualification <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="e.g. MBBS, MD, DM" />
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Years of Experience</label>
                    <div class="field-icon-wrap">
                        <i class="bi bi-briefcase field-icon"></i>
                        <input type="number" min="0" max="60" class="form-control"
                            placeholder="e.g. 12" />
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Affiliated Hospital / Clinic</label>
                    <input type="text" class="form-control" placeholder="Current institution name" />
                </div>
            </div>
        </div>

        <!-- ── Section 3: Contact ── -->
        <div class="card-section">
            <div class="section-label"><i class="bi bi-telephone"></i> Contact</div>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <div class="field-icon-wrap">
                        <i class="bi bi-envelope field-icon"></i>
                        <input type="email" class="form-control" placeholder="doctor@example.com" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">+966</span>
                        <input type="tel" class="form-control" placeholder="98765 43210" />
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Emergency / Alternate Contact</label>
                    <input type="tel" class="form-control" placeholder="Alternate number" />
                </div>
                <div class="col-sm-6">
                    <label class="form-label">Department</label>
                    <select class="form-select">
                        <option value="" disabled selected>Select department</option>
                        <option>Outpatient (OPD)</option>
                        <option>Inpatient (IPD)</option>
                        <option>Emergency</option>
                        <option>ICU</option>
                        <option>Surgical Block</option>
                    </select>
                </div>
                <hr class="mt-4 mb-3" />
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <div class="form-label mb-0">Account Status</div>
                            <div class="status-note">Active doctors are visible for booking immediately</div>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="statusSwitch"
                                checked>
                            <label class="form-check-label" for="statusSwitch">Active</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ── Action Bar ── -->
        <div class="d-flex align-items-center justify-content-end flex-wrap gap-3">
            <div class="action-bar">
                <button type="button" class="btn-default">Discard</button>
                <button type="button" class="btn-primary-custom">
                    <i class="bi bi-check2-circle"></i> Save Doctor
                </button>
            </div>
        </div>
    </div>
</div>
