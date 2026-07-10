<!-- REG Details Modal -->
<div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="regModalLabel" aria-hidden="true" role="dialog"
    style="z-index: 10000;">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">



                <!-- Row 1: full-width title -->
                <div class="section-heading w-100">
                    <p class="mb-0">Patient Registration</p>
                    <button type="button" class="btn-close position-absolute" style="top: 24px; right: 24px;"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Row 2: everything else, inline -->
                <div class="d-flex flex-wrap align-items-center gap-4 text-secondary w-100">

                    <div class="d-flex align-items-center gap-1">
                        <strong>Visit Bill No:</strong>
                        <input type="text" class="p-0 px-1 text-center border rounded" placeholder="Search..."
                            style="width: 100px;" id="regDocNo" readonly>
                        <i class="bi bi-search cursor-pointer text-primary ms-1"></i>
                    </div>

                    <div><strong>Date:</strong> 10/07/2026</div>

                    <div><strong>Time:</strong> 10:53</div>

                    <div class="d-flex align-items-center gap-1">
                        <strong>Self Registration:</strong>
                        <input type="checkbox" class="form-check-input ms-1">
                    </div>

                    <div class="text-danger fw-bold d-flex align-items-center gap-1">
                        <input type="checkbox" class="form-check-input me-1"> Emergency
                    </div>

                    <div class="d-flex align-items-center gap-2 ms-auto">
                        <label for="created-by" class="mb-0">Created By</label>
                        <input id="created-by" value="Admin" class="border-0" style="width:90px;">
                    </div>

                    <div class="d-flex align-items-center">
                        <span class="badge bg-primary p-2">Consultant Token: 001</span>
                    </div>

                </div>
            </div>
            <div class="modal-body">

                <!-- Main Registration Section Form Container -->
                <div class="card-section">
                    <div class="form-container">
                        <div class="tabs">
                            <div class="tab active">Patient Details</div>
                            <div class="tab">Patient Information</div>
                            <div class="tab">Package Details</div>
                        </div>

                        <div class="grid-3-col">
                            <div>
                                <div class="form-group">
                                    <label>Patient ID</label>
                                    <input type="text" placeholder="🔍" id="regPatId" readonly>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" value="" id="regName" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label>Family Name</label>
                                    <input type="text">
                                </div>
                                <div class="form-group" style="align-items: start;">
                                    <label>Address</label>
                                    <textarea></textarea>
                                </div>
                            </div>

                            <div>
                                <!--div class="form-group">
                                    <label style="font-size:10px;">New Patient ID</label>
                                    <input type="text" value="639564" style="background:#e2e8f0;" readonly>
                                </div-->
                                <div class="form-group">
                                    <label class="arabic-label">الاسم الأول</label>
                                    <input type="text" style="text-align: right;" value="سهيس">
                                </div>
                                <div class="form-group">
                                    <label class="arabic-label">الاسم الوسطى</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label class="arabic-label">الاسم الأخير</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label class="arabic-label">اسم العائلة</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select>
                                        <option selected>Select Priority</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <div class="form-group double-input">
                                    <label class="required">Date of birth</label>
                                    <input type="text" value="05/05/2021">
                                    <div class="flex-row">Age<span class="text-danger">*</span><input type="text"
                                            value="4Y 11M" style="width:50px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="required">Contact No</label>
                                    <input type="text" value="SAUDI ARABIA (+966)" id="regMobile" readonly>
                                </div>
                                <div class="form-group double-input col-sm-8 mr-4">
                                    <label class="required">Gender</label>
                                    <select>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <div class="flex-row row">
                                        <label class="col-sm-6">B.Group</label>
                                        <select class="col-sm-6">
                                            <option></option>
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

                                <div class="form-group">
                                    <label class="required">Nationality</label>
                                    <input type="text" value="Indian">
                                </div>
                                <div class="form-group double-input">
                                    <label class="required">ID Card No</label>
                                    <input type="text" value="2303053215">
                                    <div class="flex-row">Type<span class="text-danger">*</span><select>
                                            <option>Iqama</option>
                                        </select></div>
                                </div>
                                <div class="form-group double-input">
                                    <label>ID Card II</label>
                                    <input type="text">
                                    <div class="flex-row"><span>Type</span><select>
                                            <option>Select Type</option>
                                        </select></div>
                                </div>
                                <div class="form-group">
                                    <label>Pat Status</label>
                                    <label><input type="checkbox" checked> Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section">
                    <div class="form-container">
                        <div class="grid-2-col border-0">
                            <div>
                                <div class="section-heading">
                                    <p>COMPANY RELATED DETAILS</p>
                                </div>
                                <div class="section-body">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="form-group">
                                            <label>Customer<span class="text-danger">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Working Comp.</label>
                                            <input type="text" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label></label>
                                            <input type="hidden" placeholder="">

                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="form-group">
                                            <label>Class<span class="text-danger">*</span></label>
                                            <input type="text" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Emp. Id</label>
                                            <input type="text" placeholder="🔍">
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input type="text" placeholder="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="section-heading">
                                    <p>NEXT OF KIN</p>
                                </div>
                                <div class="section-body">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-1">
                                        <div class="form-group">
                                            <label>Relation</label>
                                            <input type="text" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact (+966)</label>
                                            <input type="text" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section">
                    <div class="form-container">
                        <div class="tabs" id="consultation-tab">
                            <div class="tab active">Consultation</div>
                            <div class="tab">Insurance Details</div>
                            <div class="tab">Attach Documents</div>

                            <div class="nav-tab-btn gap-2 ">
                                <button class="btn btn-sm btn-secondary">Multi Payment</button>
                                <button class="btn btn-sm btn-secondary">Show Tax Details</button>
                            </div>
                        </div>
                        <div class="grid-3-col">
                            <div>
                                <div class="form-group">
                                    <label> Speciality<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Consultant<span class="text-danger">*</span></label>
                                    <input type="text" value="" id="regConsultant" readonly>
                                </div>
                                <div class="form-group">
                                    <label> Consultation Service<span class="text-danger">*</span></label>
                                    <select>
                                        <option>Select Type</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Referal Doctor</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <label> Referal Center</label>
                                    <input type="text">
                                </div>
                                <div class="form-group" style="align-items: start;">
                                    <label>Reference</label>
                                    <input type="text">
                                </div>
                                <div class="form-group" style="align-items: start;">
                                    <label>Reference No</label>
                                    <input type="text">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="freeConsultation">
                                            <label for="freeConsultation">
                                                Free Consultation
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="freeRegistration">
                                            <label for="freeRegistration">
                                                Free Registration
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="revisit">
                                            <label for="revisit">
                                                Re-visit
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="nightVisit">
                                            <label for="nightVisit">
                                                Night Visit
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label> Follow-up Event</label>
                                    <input type="text" placeholder="🔍">
                                </div>
                                <div class="form-group">
                                    <label>Remarks</label>
                                    <textarea>
                     </textarea>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label> Payment</label>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="form-check">
                                            <input type="radio" name="payment" class="form-check-input" checked>
                                            <label for="" class="form-check-label small-label">Cash</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="payment" class="form-check-input"> <label
                                                for="" class="form-check-label small-label">Credit</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Consultation Charge</label>
                                    <input type="text" value="" placeholder="0.00">
                                </div>
                                <div class="form-group">
                                    <label> Registration Charge</label>
                                    <input type="text" value="" placeholder="0.00">
                                </div>
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="text" value="" placeholder="0.00">
                                </div>
                                <div class="form-group">
                                    <label> Net Amount</label>
                                    <input type="text" value="" placeholder="0.00">
                                </div>
                                <div>
                                    <div class="form-group" style="align-items: start;">
                                        <label>Net Tax Amount</label>
                                        <input type="text" value="" placeholder="0.00">
                                    </div>
                                    <div class="form-group" style="align-items: start;">
                                        <label>Net Total (Inc.Tax)</label>
                                        <input type="text" value="" placeholder="0.00">
                                    </div>
                                    <div class="form-group" style="align-items: start;">
                                        <label>Net Credit Amount</label>
                                        <input type="text" value="" placeholder="0.00">
                                    </div>
                                    <div class="form-group" style="align-items: start;">
                                        <label>Tax Relaxation</label>
                                        <input type="text" value="" placeholder="0.00">
                                    </div>
                                    <div class="form-group" style="align-items: start;">
                                        <label class="text-danger font-bold"><strong>Net Cash Payable</strong></label>
                                        <input type="text" value="" placeholder="0.00">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer" style="justify-content:center;">
                <div class="action-bar">
                    <button class="btn btn-sm btn-outline-primary px-3"><strong><i class="bi bi-download me-1"></i>
                            Save</strong></button>
                    <button class="btn btn-sm btn-outline-danger px-3" data-bs-dismiss="modal"><strong><i
                                class="bi bi-x-circle me-1"></i>
                            Cancel</strong>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
