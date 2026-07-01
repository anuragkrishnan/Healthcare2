<style>
    .small-label {
        font-size: 10px;
        padding-right: 2px;
    }

    .form-control-sm,
    .btn-sm {
        font-size: 12px;
    }

    /* ── Form Controls Override ── */
    .custom-divider {
        width: 1px;
        height: 100%;
        min-height: 420px;
        background: linear-gradient(to bottom,
                transparent,
                #c7c7c7 10%,
                #9ca3af 50%,
                #c7c7c7 90%,
                transparent);
        opacity: .8;
    }

    .form-control,
    .form-select {
        background: #eee;
        border: 1px solid #abaeac;
        color: #1a1e28;
        border-radius: 10px;
        font-size: 0.775rem;
        padding: 0.6rem 0.9rem;
        transition: border-color .2s, box-shadow .2s;
    }

    .form-control:focus,
    .form-select:focus {
        background: #d3d5da;
        border-color: #abaeac;
        box-shadow: 0 0 0 3.5px #abaeac;
        color: #1a1e28;
        outline: none;
    }

    .form-control::placeholder {
        color: #1a1e28;
    }

    .form-select option {
        background: #eee;
    }

    .input-group-text {
        background: #eee;
        border: 1px solid var(--border);
        color: #1a1e28;
        border-radius: 10px 0 0 10px;
        font-size: 0.85rem;
    }

    .input-group .form-control {
        border-radius: 0 10px 10px 0;
    }

    .input-group .form-control:focus {
        z-index: 2;
    }

    /* inline icon inside input */
    .field-icon-wrap {
        position: relative;
    }

    .field-icon-wrap .form-control {
        padding-left: 2.2rem;
    }

    .field-icon-wrap .field-icon {
        position: absolute;
        left: 0.7rem;
        top: 50%;
        transform: translateY(-50%);
        color: #171a18;
        font-size: 0.85rem;
        pointer-events: none;
        z-index: 1;
    }

    /* Make native date/time picker icons visible on dark backgrounds */
    input[type="date"],
    input[type="time"] {
        opacity: 0.85;
        transition: opacity 0.15s;
    }

    input[type="date"]:hover,
    input[type="time"]:hover {
        opacity: 1;
    }

    /* Firefox uses a different rendering path — this targets the icon area */
    input[type="date"],
    input[type="time"] {
        color-scheme: light;
    }
</style>
<div class="row g-8">
    <div class="card">

        <div class="card-body col-lg-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Patient Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
            </ul>
            <div class="row d-flex align-items-center g-0 mt-2">

                <div class="col-lg-3 col-md-3">
                    <div class="row align-items-center mb-1">
                        <label for="patientId" class="col-sm-3 col-form-label small-label">
                            Patient ID
                        </label>
                        <div class="col-sm-8">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control">

                                <button class="btn btn-light border" type="button">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="firstName" class="col-sm-3 col-form-label small-label">
                            First Name
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="firstName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="middleName" class="col-sm-3 col-form-label small-label">
                            Middle Name
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="middleName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="lastName" class="col-sm-3 col-form-label small-label">
                            Last Name
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="lastName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="familyName" class="col-sm-3 col-form-label small-label">
                            Family Name
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="familyName">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="address" class="col-sm-3 col-form-label small-label">
                            Address
                        </label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="address" rows="2"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="row align-items-center mb-1">
                        <label for="newPatientId" class="col-sm-3 col-form-label small-label">
                            New Patient ID
                        </label>
                        <div class="col-sm-8">
                            <h6>63556</h6>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="firstNameArabic" class="col-sm-3 col-form-label small-label">
                            الاسم الأول
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="firstNameArabic">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="middleNameArabic" class="col-sm-3 col-form-label small-label">
                            الاسم الأوسط
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="middleNameArabic">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="lastNameArabic" class="col-sm-3 col-form-label small-label">
                            اسم العائلة
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="lastNameArabic">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="email" class="col-sm-3 col-form-label small-label">
                            Email
                        </label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control form-control-sm" id="email">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="priority" class="col-sm-3 col-form-label small-label">
                            Priority
                        </label>
                        <div class="col-sm-8">
                            <select class="form-select form-select-sm" aria-label="priority">
                                <option selected>Select Priority</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--div class="col-auto d-none d-lg-flex justify-content-center mx-2">
                    <div class="custom-divider"></div>
                </div-->

                <div class="col-lg-6">
                    <div class="row align-items-center mb-1">
                        <label for="dob" class="col-sm-3 col-form-label small-label">
                            DOB <span class="text-danger">*</span>
                        </label>

                        <div class="col-sm-3">
                            <input type="date" class="form-control form-control-sm" id="dob">
                        </div>

                        <label for="age" class="col-sm-1 col-form-label small-label text-end">
                            Age
                        </label>

                        <div class="col-sm-2">
                            <input type="number" class="form-control form-control-sm" id="age">
                        </div>

                        <label for="gender" class="col-sm-1 col-form-label small-label text-end">
                            Gender
                        </label>

                        <div class="col-sm-2">
                            <select class="form-select form-select-sm" id="gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="row align-items-center mb-1">
                        <label for="contactNo" class="col-sm-3 col-form-label small-label">
                            Contact No<span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="contactNo">
                        </div>
                    </div>

                    <div class="row align-items-center mb-1">
                        <label for="Id1" class="col-sm-3 col-form-label small-label">
                            ID Card No<span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="Id1">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="Id2" class="col-sm-3 col-form-label small-label">
                            ID Card II
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control form-control-sm" id="Id2">
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="status" class="col-sm-3 col-form-label small-label">
                            Pat Status
                        </label>
                        <div class="col-sm-8">
                            <div class="checkbox">
                                <input type="checkbox" value="active" checked> Active
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
