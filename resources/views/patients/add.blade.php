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
                                <input type="text" class="form-control form-control-sm">

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
                    <div class="row mb-2">

                        <label class="col-sm-2 col-form-label small-label">
                            DOB <span class="text-danger">*</span>
                        </label>

                        <div class="col-sm-9">
                            <div class="row g-2">

                                <div class="col-6">
                                    <input type="date" class="form-control form-control-sm" id="dob">
                                </div>

                                <div class="col-3">
                                    <input type="number" class="form-control form-control-sm" placeholder="Age">
                                </div>

                                <div class="col-3">
                                    <select class="form-select form-select-sm" id="gender">
                                        <option selected>Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center mb-1">
                        <label for="contactNo" class="col-sm-2 col-form-label small-label">
                            Contact No<span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <div class="row g-2">
                                <div class="col-9">
                                    <div class="input-group input-group-sm mb-1">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">+966</span>
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            id="contactNo">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <select class="form-select form-select-sm" id="blood-group">
                                        <option selected>Blood Group</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-9">
                            <div class="row g-2">

                                <div class="col-9">
                                    <div class="input-group input-group-sm mb-1">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">+966</span>
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            id="contactNo2">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <input type="text" placeholder="Nationality"
                                        class="form-control form-control-sm" id="nationality">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center mb-1">
                        <label for="Id1" class="col-sm-2 col-form-label small-label">
                            ID Card No<span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm" id="Id1">
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" id="IdType">
                                        <option selected>Select Type</option>
                                        <option>Iqama</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input type="date" class="form-control form-control-sm" id="idexp">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center mb-1">
                        <label for="Id2" class="col-sm-2 col-form-label small-label">
                            ID Card II
                        </label>
                        <div class="col-sm-9">
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-sm" id="Id2">
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-sm" id="Id2Type">
                                        <option selected>Select Type</option>
                                        <option>Iqama</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <input type="date" placeholder="Expiry Date"
                                        class="form-control form-control-sm" id="id2exp">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center mb-1">
                        <label for="status" class="col-sm-2 col-form-label small-label">
                            Pat Status
                        </label>
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <input type="checkbox" value="active" checked>
                                Active
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center g-0 mt-2">
                <div class="col-lg-12">
                    <label>Company Related Details</label>

                </div>
            </div>
        </div>
