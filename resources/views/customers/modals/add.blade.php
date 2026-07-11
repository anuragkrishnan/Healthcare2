<div class="modal fade" id="customerAddModal" tabindex="-1">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header speciality-header">
                <h5 class="modal-title">
                    Add Customer
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">

                <div class="card-section">

                    <div class="form-container">


                        <ul class="nav nav-tabs mb-3" id="customerTabs" role="tablist">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#customerDetails"
                                    type="button">
                                    Customer Details
                                </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#classDetails"
                                    type="button">
                                    Class Details
                                </button>
                            </li>

                        </ul>
                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="customerDetails">

                                <div class="grid-3-col">

                                    <div>

                                        <div class="form-group">
                                            <label>Customer Code</label>
                                            <input type="text" placeholder="Auto Generated" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                Customer Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <input type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>اسم</label>
                                            <input type="text" style="text-align:right;">
                                        </div>

                                        <div class="form-group" style="align-items:start;">
                                            <label>Address</label>
                                            <textarea rows="4"></textarea>
                                        </div>

                                    </div>

                                    <div>

                                        <div class="form-group">
                                            <label>Category</label>

                                            <select>
                                                <option>Select Category</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Executive</label>

                                            <select>
                                                <option>Select Executive</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ICD Group</label>

                                            <select>
                                                <option>Select ICD Group</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Parent</label>

                                            <input type="text">
                                        </div>

                                    </div>

                                    <div>

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Fax</label>
                                            <input type="text">
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>

                                            <div class="d-flex align-items-center gap-3">

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        checked>

                                                    <label class="form-check-label">
                                                        Active
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status">

                                                    <label class="form-check-label">
                                                        Inactive
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="card-section">

                                    <div class="form-container">

                                        <div class="grid-3-col">

                                            <div>

                                                <div class="section-heading">
                                                    <p>COMPANY DETAILS</p>
                                                </div>

                                                <div class="section-body">

                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Working Company</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Registration No</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tax No</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>CR No</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>PAN No</label>
                                                        <input type="text">
                                                    </div>

                                                </div>

                                            </div>

                                            <div>

                                                <div class="section-heading">
                                                    <p>CONTACT DETAILS</p>
                                                </div>

                                                <div class="section-body">

                                                    <div class="form-group">
                                                        <label>Contact Person</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Mobile No</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Telephone</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Fax</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text">
                                                    </div>

                                                </div>

                                            </div>
                                            <div>

                                                <div class="section-heading">
                                                    <p>PAYMENT DETAILS</p>
                                                </div>

                                                <div class="section-body">

                                                    <div class="form-group">
                                                        <label>Payment Type</label>

                                                        <div class="d-flex align-items-center gap-3">

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment_type" checked>

                                                                <label class="form-check-label">
                                                                    Cash
                                                                </label>
                                                            </div>

                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment_type">

                                                                <label class="form-check-label">
                                                                    Credit
                                                                </label>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label>Credit Limit</label>
                                                        <input type="text" placeholder="0.00">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Credit Days</label>
                                                        <input type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Discount (%)</label>
                                                        <input type="text" placeholder="0">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Currency</label>

                                                        <select>
                                                            <option>SAR</option>
                                                            <option>USD</option>
                                                            <option>INR</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group" style="align-items:start;">
                                                        <label>Remarks</label>
                                                        <textarea></textarea>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>



                            </div>

                            <div class="tab-pane fade" id="classDetails">

                                <div class="card-section mt-3">

                                    <div class="form-container">

                                        <div class="section-heading">
                                            <p>INSURANCE PAYMENT</p>
                                        </div>

                                        <div class="section-body">

                                            <div class="grid-2-col">

                                                <div>

                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="insurancePayment">

                                                        <label class="form-check-label" for="insurancePayment">
                                                            Insurance Payment
                                                        </label>
                                                    </div>

                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="modifyRegistration">

                                                        <label class="form-check-label" for="modifyRegistration">
                                                            Modify at Registration / Billing
                                                        </label>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Deductible Amount</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="0.00">
                                                    </div>

                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="billItemGroupWise">

                                                        <label class="form-check-label" for="billItemGroupWise">
                                                            Bill Item Group Wise Deductible
                                                        </label>
                                                    </div>

                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="noMaximum">

                                                        <label class="form-check-label" for="noMaximum">
                                                            No Maximum Limit for Deductible
                                                        </label>
                                                    </div>

                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="grossAmount">

                                                        <label class="form-check-label" for="grossAmount">
                                                            Calculate Pre-Authorization based on Gross Amount
                                                        </label>
                                                    </div>

                                                </div>

                                                <div>

                                                    <div class="form-group">
                                                        <label>Co-insurance %</label>

                                                        <input type="text" class="form-control" placeholder="0">
                                                    </div>

                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="billItemGroupCoIns">

                                                        <label class="form-check-label" for="billItemGroupCoIns">
                                                            Bill Item Group Co-Insurance
                                                        </label>
                                                    </div>

                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="overrideCoIns">

                                                        <label class="form-check-label" for="overrideCoIns">
                                                            Override Co-Insurance %
                                                        </label>
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label>
                                                            Co-insurance Maximum Collectible Amount
                                                        </label>

                                                        <input type="text" class="form-control"
                                                            placeholder="0.00">
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label>
                                                            Co-insurance Calculation Method
                                                        </label>

                                                        <select class="form-select">
                                                            <option>Select Method</option>
                                                            <option>Gross Amount</option>
                                                            <option>Net Amount</option>
                                                        </select>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div>

                                        <div class="section-heading">
                                            <p>OPERATIONAL DETAILS</p>
                                        </div>

                                        <div class="section-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox">

                                                        <label class="form-check-label">
                                                            Insurance Company
                                                        </label>
                                                    </div>

                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox">

                                                        <label class="form-check-label">
                                                            Free Registration
                                                        </label>
                                                    </div>

                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox">

                                                        <label class="form-check-label">
                                                            Block Billing
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox">

                                                        <label class="form-check-label">
                                                            Validate Employee
                                                        </label>
                                                    </div>

                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox">

                                                        <label class="form-check-label">
                                                            Working Company Mandatory
                                                        </label>
                                                    </div>
                                                    <button type="button"
                                                        class="btn btn-sm btn-outline-secondary ms-2">
                                                        IDF Settings
                                                    </button>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox">

                                                        <label class="form-check-label">
                                                            Block Sending Label Result
                                                        </label>
                                                    </div>

                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="checkbox">

                                                        <label class="form-check-label">
                                                            Enable IDF Insurance
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="d-flex align-items-center justify-content-center flex-wrap gap-3">
                                    <div class="action-bar">
                                        <button type="button" class="btn-default">Discard</button>
                                        <button type="button" class="btn-primary-custom">
                                            <i class="bi bi-check2-circle"></i> Save
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>

                </div>

            </div>



        </div>

    </div>

</div>
