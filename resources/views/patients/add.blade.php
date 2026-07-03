<div class="row g-8">
    <div class="card" style="height:100vh; max-height:90%;overflow-y:auto;overflow-x:hidden;">
        <div class="card-body col-lg-12 p-0">
            <ul class="nav nav-tabs nav-tabs-sm">
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
            <div class="section">
                <div class="row d-flex align-items-center g-0 mt-1">

                    <div class="col-lg-3 col-md-3">
                        <div class="row align-items-center">
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
                        <div class="row align-items-center">
                            <label for="firstName" class="col-sm-3 col-form-label small-label">
                                First Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="firstName">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="middleName" class="col-sm-3 col-form-label small-label">
                                Middle Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="middleName">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="lastName" class="col-sm-3 col-form-label small-label">
                                Last Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="lastName">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="familyName" class="col-sm-3 col-form-label small-label">
                                Family Name
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="familyName">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="address" class="col-sm-3 col-form-label small-label">
                                Address
                            </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="address" rows="1"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="row align-items-center">
                            <label for="newPatientId" class="col-sm-3 col-form-label small-label">
                                New Patient ID
                            </label>
                            <div class="col-sm-8">
                                <h6>63556</h6>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="firstNameArabic" class="col-sm-3 col-form-label small-label">
                                الاسم الأول
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="firstNameArabic">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="middleNameArabic" class="col-sm-3 col-form-label small-label">
                                الاسم الأوسط
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="middleNameArabic">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="lastNameArabic" class="col-sm-3 col-form-label small-label">
                                اسم العائلة
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-sm" id="lastNameArabic">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <label for="email" class="col-sm-3 col-form-label small-label">
                                Email
                            </label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control form-control-sm" id="email">
                            </div>
                        </div>
                        <div class="row align-items-center">
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
                        <div class="row">

                            <label class="col-sm-2 col-form-label small-label">
                                DOB <span class="text-danger">*</span>
                            </label>

                            <div class="col-sm-9">
                                <div class="row g-1">

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

                        <div class="row align-items-center">
                            <label for="contactNo" class="col-sm-2 col-form-label small-label">
                                Contact No<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <div class="row g-1">
                                    <div class="col-9">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">+966</span>
                                            <input type="text" class="form-control form-control-sm"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm" id="contactNo">
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
                        <div class="row align-items-center">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-9">
                                <div class="row g-1">

                                    <div class="col-9">
                                        <div class="input-group input-group-sm">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">+966</span>
                                            <input type="text" class="form-control form-control-sm"
                                                aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-sm" id="contactNo2">
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <input type="text" placeholder="Nationality"
                                            class="form-control form-control-sm" id="nationality">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <label for="Id1" class="col-sm-2 col-form-label small-label">
                                ID Card No<span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <div class="row g-1">
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

                        <div class="row align-items-center">
                            <label for="Id2" class="col-sm-2 col-form-label small-label">
                                ID Card II
                            </label>
                            <div class="col-sm-9">
                                <div class="row g-1">
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
                        <div class="row align-items-center">
                            <label for="status" class="col-sm-2 col-form-label small-label">
                                Pat Status
                            </label>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <input type="checkbox" value="active" checked>
                                    <small>Active</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center g-0 mt-1">
                <div class="col-lg-7 col-sm-12 section-heading mr-1">
                    <p>COMPANY RELATED DETAILS</p>
                    <div class="row d-flex align-items-center">
                        <label for="customer" class="col-2 col-form-label small-label">
                            Customer<span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row g-1">
                                <div class="col-sm-5">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm1"
                                            id="customer">
                                        <span class="input-group-text small-label" id="inputGroup-sizing-sm1">Cash
                                            Customer</span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="company" class="col-form-label small-label">
                                        Working Comp.
                                    </label>
                                </div>
                                <div class="col-5">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="company">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <label for="class-type" class="col-sm-2 col-form-label small-label">
                            Class<span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-10">
                            <div class="row g-2">

                                <div class="col-sm-5">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm2"
                                            id="class-type">
                                        <span class="input-group-text small-label" id="inputGroup-sizing-sm2">Default
                                            Class</span>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <label for="class-type" class="col-form-label small-label">
                                        Emp. Id
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control form-control-sm">

                                        <button class="btn btn-light border" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <input type="text" placeholder="Designation"
                                        class="form-control form-control-sm" id="designation">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 section-heading">
                    <p>NEXT OF KIN</p>
                    <div class="row align-items-center">
                        <label for="name" class="col-2 col-form-label small-label">
                            Name
                        </label>
                        <div class="col-sm-10">
                            <div class="row g-1">
                                <div class="col-sm-5">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="name">
                                </div>
                                <div class="col-sm-2">
                                    <label for="address-of-kin" class="col-form-label small-label">
                                        Address
                                    </label>
                                </div>
                                <div class="col-5">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="address-of-kin">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <label for="relation" class="col-sm-2 col-form-label small-label">
                            Relation
                        </label>
                        <div class="col-sm-10">
                            <div class="row g-2">

                                <div class="col-sm-5">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="relation">
                                </div>
                                <div class="col-sm-2">
                                    <label for="contact-of-kin" class="col-form-label small-label">
                                        Contact
                                    </label>
                                </div>

                                <div class="col-5">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text small-label"
                                            id="inputGroup-sizing-sm4">+966</span>
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm4"
                                            id="name">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="section mt-5">
                <div class="row d-flex align-items-center mt-5">
                    <div class="col-lg-12 col-sm-12 mt-4" id="consultation-tab">
                        <ul class="nav nav-tabs nav-tabs-sm">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Consultation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"></a>
                            </li>
                        </ul>
                        <ul class="nav-tab-btn">
                            <li><button class="btn btn-sm btn-light">Multi Payment</button></li>
                            <li><button class="btn btn-sm btn-light">Show Tax Details</button></li>
                        </ul>
                    </div>
                    <div class="row align-items-center g-0 mt-1">
                        <div class="col-lg-7">
                            <div class="row d-flex align-items-center">
                                <label for="speciality" class="col-2 col-form-label small-label">
                                    Speciality<span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="speciality">
                                </div>
                                <label for="follow-up" class="col-2 col-form-label small-label">
                                    Follow-up Event
                                </label>
                                <div class="col-sm-3">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control form-control-sm">

                                        <button class="btn btn-light border" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="consultant" class="col-2 col-form-label small-label">
                                    Consultant<span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="consultant">
                                </div>
                                <label for="remarks" class="col-2 col-form-label small-label">
                                    Remarks
                                </label>
                                <div class="col-sm-3">
                                    <textarea class="form-control" id="remarks" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="consultation" class="col-2 col-form-label small-label">
                                    Consultation Service<span class="text-danger">*</span>
                                </label>
                                <div class="col-sm-4">
                                    <select class="form-select form-select-sm" aria-label="priority">
                                        <option>Select Service</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="referal" class="col-2 col-form-label small-label">
                                    Referal Doctor
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="referal">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="referal-center" class="col-2 col-form-label small-label">
                                    Referal Center
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="referal-center">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="reference" class="col-2 col-form-label small-label">
                                    Reference
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="reference">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="reference-no" class="col-2 col-form-label small-label">
                                    Ref. No
                                </label>
                                <div class="col-sm-4">
                                    <input type="text" class="col-sm-12 form-control form-control-sm"
                                        id="reference-no">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-7 checkbox-group">

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="freeConsultation">
                                        <label class="form-check-label small-label" for="freeConsultation">
                                            Free Consultation
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="freeRegistration">
                                        <label class="form-check-label small-label" for="freeRegistration">
                                            Free Registration
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="revisit">
                                        <label class="form-check-label small-label" for="revisit">
                                            Re-visit
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="nightVisit">
                                        <label class="form-check-label small-label" for="nightVisit">
                                            Night Visit
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-sm-12">
                            <div class="row d-flex align-items-center">
                                <label for="payment" class="col-2 col-form-label small-label">
                                    Payment
                                </label>
                                <div class="col-sm-4">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" name="payment" class="form-check-input"
                                                    checked>
                                                <label for=""
                                                    class="form-check-label small-label">Cash</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input type="radio" name="payment" class="form-check-input"> <label
                                                    for="" class="form-check-label small-label">Credit</label>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="consultation-charge" class="col-3 col-form-label small-label">
                                    Consultation Charge
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="consultation-charge">

                                </div>
                                <label for="total-tax" class="col-3 col-form-label small-label">
                                    Total Tax Amount
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="total-tax">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="registration-charge" class="col-3 col-form-label small-label">
                                    Registration Charge
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="registration-charge">

                                </div>
                                <label for="net-total" class="col-3 col-form-label small-label">
                                    Net Total (Inc.Tax)
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="net-total">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="discount" class="col-3 col-form-label small-label">
                                    Discount
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="discount">

                                </div>
                                <label for="net-credit" class="col-3 col-form-label small-label">
                                    Net Credit Amt
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="net-credit">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">
                                <label for="net-amount" class="col-3 col-form-label small-label">
                                    Net Amount
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="net-amount">

                                </div>
                                <label for="tax-relax" class="col-3 col-form-label small-label">
                                    Tax Relaxation
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm" id="tax-relax">
                                </div>
                            </div>
                            <div class="row d-flex align-items-center">

                                <div class="col-sm-6">


                                </div>
                                <label for="payable" class="col-3 col-form-label small-label text-primary text-bold">
                                    <strong>Net Cash Payable </strong>
                                </label>
                                <div class="col-sm-3">
                                    <input type="text" placeholder="0.00"
                                        class="col-sm-12 form-control form-control-sm " id="payable">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--card-body-->
    </div> <!--card-->
</div>
