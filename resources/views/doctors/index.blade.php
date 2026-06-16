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
                        <button type="button" class="btn btn-sm btn-upload"
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
    </div>
</div>
