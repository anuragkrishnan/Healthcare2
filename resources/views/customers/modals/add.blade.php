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
            <div class="modal-body p-1 ">

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
                        <form id="customerForm" class="customer-add-form" action="{{ route('customer.store') }}"
                            method="POST">
                            @csrf
                            <div class="tab-content">


                                <div class="tab-pane fade show active" id="customerDetails">

                                    <div class="grid-3-col">

                                        <div>

                                            <div class="form-group">
                                                <label>Customer Code</label>
                                                <input type="text" name="accountCode"
                                                    value="{{ $customerCode }}"placeholder="Auto Generated" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label>
                                                    Customer Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="name">
                                            </div>

                                            <div class="form-group">
                                                <label>اسم
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="arabicName" style="text-align:right;">
                                            </div>

                                            <div class="form-group" style="align-items:start;">
                                                <label>Address</label>
                                                <textarea rows="1" name="address"></textarea>
                                            </div>

                                        </div>

                                        <div>

                                            <div class="form-group">
                                                <label>Category
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <select name="category">
                                                    <option value="">Select Category</option>
                                                    <option value="Temp1">Temp1</option>
                                                    <option value="Temp2">Temp2</option>
                                                    <option value="Temp3">Temp3</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Executive</label>

                                                <select name="executive">
                                                    <option value="">Select Executive</option>
                                                    <option value="Dummy1">Dummy1</option>
                                                    <option value="Dummy2">Dummy2</option>
                                                    <option value="Dummy3">Dummy3</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>ICD Group
                                                    <span class="text-danger">*</span>
                                                </label>

                                                <select name="icdGroup">
                                                    <option value="">Select ICD Group</option>
                                                    <option value="Group1">Group1</option>
                                                    <option value="Group2">Group2</option>
                                                    <option value="Group3">Group3</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Parent</label>

                                                <input type="text" name="parent">
                                            </div>

                                        </div>

                                        <div>

                                            <div class="form-group">
                                                <label>Phone
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" name="phone">
                                            </div>



                                            <div class="form-group">
                                                <label>Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="email" name="email">
                                            </div>

                                            <div class="form-group">
                                                <label>Status</label>

                                                <div class="d-flex align-items-center gap-3">

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            value="Active" checked>

                                                        <label class="form-check-label">
                                                            Active
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="status"
                                                            value="Inactive">

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
                                                            <input type="text" name="companyName">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Working Company</label>
                                                            <input type="text" name="workingCompany">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Registration No
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="registrationNo">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Tax No
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="tax">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>CR No</label>
                                                            <input type="text" name="crNo">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>PAN No
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="pan">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div>

                                                    <div class="section-heading">
                                                        <p>CONTACT DETAILS</p>
                                                    </div>

                                                    <div class="section-body">

                                                        <div class="form-group">
                                                            <label>Contact Person
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="contactName">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Mobile No</label>
                                                            <input type="text" name="mobileNo">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Telephone</label>
                                                            <input type="text" name="telephone">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Fax</label>
                                                            <input type="text" name="fax">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" name="contactEmail">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Website</label>
                                                            <input type="text" name="website">
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
                                                                        name="modeOfPayment" value="Cash" checked>

                                                                    <label class="form-check-label">
                                                                        Cash
                                                                    </label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="modeOfPayment" value="Credit">

                                                                    <label class="form-check-label">
                                                                        Credit
                                                                    </label>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Credit Limit</label>
                                                            <input type="text" name="creditLimit"
                                                                placeholder="0.00">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Credit Days</label>
                                                            <input type="text" name="creditDays">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Discount (%)
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" name="discount" placeholder="0">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Currency</label>

                                                            <select name="currency">
                                                                <option value="">Select Currency</option>
                                                                <option value="SAR">SAR</option>
                                                                <option value="USD">USD</option>
                                                                <option value="INR">INR</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group" style="align-items:start;">
                                                            <label>Remarks</label>
                                                            <textarea name="paymentTerms"></textarea>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div>
                                                    <div class="section-heading">
                                                        <p>ACCOUNT SETTINGS</p>
                                                    </div>

                                                    <div class="section-body">

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="accountOnHold" value="1">
                                                            <label class="form-check-label">Account On Hold</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="useAlternateCode" value="1">
                                                            <label class="form-check-label">Use Alternate Code</label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="section-heading">
                                                        <p>ADDRESS DETAILS</p>
                                                    </div>

                                                    <div class="section-body">

                                                        <div class="form-group">
                                                            <label>Building No</label>
                                                            <input type="text" name="buildingNo">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Street</label>
                                                            <input type="text" name="street">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" name="city">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>District</label>
                                                            <input type="text" name="district">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Postal Code</label>
                                                            <input type="text" name="postalCode">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Contact GSM</label>
                                                            <input type="text" name="contactGsm">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="section-heading">
                                                        <p>EXPIRY DETAILS</p>
                                                    </div>

                                                    <div class="section-body">

                                                        <div class="form-group">
                                                            <label>Tax Expiry Date</label>
                                                            <input type="date" name="taxExpiryDate">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Registration Expiry Date</label>
                                                            <input type="date" name="registrationExpiryDate">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>CR Expiry Date</label>
                                                            <input type="date" name="crExpiryDate">
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>

                                    </div>



                                </div>

                                <div class="tab-pane fade" id="classDetails">

                                    <div class="p-1">

                                        <div class="grid-3-col gap-1">

                                            <div>

                                                <div class="section-heading py-0">
                                                    <p class="mb-0">CUSTOMER CLASS</p>
                                                </div>

                                                <div class="section-body p-1">

                                                    <div class="form-group mb-1">
                                                        <label>Class Code</label>
                                                        <input type="text" name="classCode">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Customer Class Code</label>
                                                        <input type="text" name="customerClassCode">
                                                    </div>

                                                    <div class="form-group mb-1">
                                                        <label>Description</label>
                                                        <input type="text" name="classDescription">
                                                    </div>

                                                    <div class="form-group mb-1">
                                                        <label>Sub Category Code</label>

                                                        <select name="subCategoryCode">
                                                            <option value="">Select</option>
                                                            <option value="Sub1">Sub1</option>
                                                            <option value="Sub2">Sub2</option>
                                                            <option value="Sub3">Sub3</option>
                                                        </select>

                                                    </div>

                                                    <div class="form-group mb-1">
                                                        <label>Test Price</label>

                                                        <input type="number" name="testPrice">

                                                    </div>

                                                    <div class="d-flex gap-3 mt-1">

                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox"
                                                                name="classOnHold" value="1">

                                                            <label class="form-check-label ">
                                                                On Hold
                                                            </label>

                                                        </div>


                                                        <div class="form-check">

                                                            <input class="form-check-input" type="checkbox"
                                                                name="isPrivileged" value="1">

                                                            <label class="form-check-label">
                                                                Privileged
                                                            </label>

                                                        </div>


                                                    </div>


                                                </div>

                                            </div>





                                            <div>


                                                <div class="section-heading py-0">
                                                    <p class="mb-0">CONTRACT DETAILS</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Contract / Policy No
                                                        </label>

                                                        <input type="text" name="contractPolicyNo">

                                                    </div>



                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Begin Date
                                                        </label>

                                                        <input type="date" name="beginDate">

                                                    </div>



                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Expiry Date
                                                        </label>

                                                        <input type="date" name="expiryDate">

                                                    </div>



                                                </div>

                                            </div>








                                            <div>


                                                <div class="section-heading py-0">
                                                    <p class="mb-0">CONSULTATION</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Free Cash Days
                                                        </label>

                                                        <input type="number" name="freeConsultationCashDays">

                                                    </div>



                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Free Credit Days
                                                        </label>

                                                        <input type="number" name="freeConsultationCreditDays">

                                                    </div>



                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Free Visit Count
                                                        </label>

                                                        <input type="number" name="freeVisitCount">

                                                    </div>


                                                </div>


                                            </div>



                                        </div>





                                        <!-- SECOND ROW -->


                                        <div class="grid-3-col mt-1">



                                            <div>

                                                <div class="section-heading py-0">
                                                    <p class="mb-0">LIMIT DETAILS</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Single Event Limit
                                                        </label>

                                                        <input type="number" name="singleEventAmountLimit">

                                                    </div>



                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Maximum Days
                                                        </label>

                                                        <input type="number"
                                                            name="maximumDaysBetweenFirstAndLastVisit">

                                                    </div>


                                                </div>


                                            </div>





                                            <div>


                                                <div class="section-heading py-0">
                                                    <p class="mb-0">RULES</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="allowFreeConsultationOtherSpecialities"
                                                            value="1">

                                                        <label class="form-check-label">
                                                            Other Specialities
                                                        </label>

                                                    </div>



                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="allowFreeConsultationSameSpeciality" value="1">

                                                        <label class="form-check-label">
                                                            Same Speciality
                                                        </label>

                                                    </div>


                                                </div>

                                            </div>





                                            <div>

                                                <div class="section-heading py-0">
                                                    <p class="mb-0">TOP UP</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="topUp" value="1">

                                                        <label class="form-check-label">
                                                            Top Up
                                                        </label>

                                                    </div>



                                                    <div class="form-check">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="viewPaymentModeType" value="1">

                                                        <label class="form-check-label">
                                                            Payment Mode
                                                        </label>

                                                    </div>


                                                </div>


                                            </div>



                                        </div>
                                        <div class="grid-3-col gap-1 mt-1">


                                            <div>

                                                <div class="section-heading py-0">
                                                    <p class="mb-0">INSURANCE PAYMENT</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-check mb-1">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="insurancePayment" value="1">

                                                        <label>
                                                            Insurance Payment
                                                        </label>
                                                    </div>



                                                    <div class="form-check mb-1">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="modifyRegistration" value="1">

                                                        <label>
                                                            Modify at Registration / Billing
                                                        </label>
                                                    </div>



                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Deductible Amount
                                                        </label>

                                                        <input type="number" name="deductibleAmount">

                                                    </div>



                                                    <div class="form-check mb-1">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="billItemGroupWise" value="1">

                                                        <label>
                                                            Bill Item Group Wise Deductible
                                                        </label>

                                                    </div>



                                                    <div class="form-check mb-1">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="noMaximum" value="1">

                                                        <label>
                                                            No Maximum Limit for Deductible
                                                        </label>

                                                    </div>


                                                </div>

                                            </div>





                                            <div>


                                                <div class="section-heading py-0">
                                                    <p class="mb-0">CO-INSURANCE</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Co-insurance %
                                                        </label>

                                                        <input type="number" name="coInsurancePercentage">

                                                    </div>



                                                    <div class="form-check mb-1">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="billItemGroupCoIns" value="1">

                                                        <label>
                                                            Bill Item Group Co-Insurance
                                                        </label>

                                                    </div>



                                                    <div class="form-check mb-1">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="overrideCoIns" value="1">

                                                        <label>
                                                            Override Co-Insurance %
                                                        </label>

                                                    </div>



                                                </div>

                                            </div>






                                            <div>


                                                <div class="section-heading py-0">
                                                    <p class="mb-0">CALCULATION</p>
                                                </div>


                                                <div class="section-body p-1">


                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Maximum Collectible Amount
                                                        </label>

                                                        <input type="number"
                                                            name="coInsuranceMaximumCollectibleAmount">

                                                    </div>




                                                    <div class="form-group mb-1">

                                                        <label>
                                                            Calculation Method
                                                        </label>


                                                        <select name="coInsuranceCalculationMethod">

                                                            <option value="">Select Method</option>

                                                            <option value="Gross Amount">
                                                                Gross Amount
                                                            </option>

                                                            <option value="Net Amount">
                                                                Net Amount
                                                            </option>

                                                        </select>


                                                    </div>



                                                    <div class="form-check mb-1">

                                                        <input class="form-check-input" type="checkbox"
                                                            name="grossAmount" value="1">

                                                        <label>
                                                            Calculate Pre-Authorization Gross Amount
                                                        </label>

                                                    </div>



                                                </div>

                                            </div>



                                        </div>
                                        <div class="mt-2">

                                            <div class="section-heading">
                                                <p class="mb-0">INSURANCE OPTIONS</p>
                                            </div>

                                            <div class="section-body p-3">

                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="insuranceCompany" value="1">
                                                            <label class="form-check-label">Insurance Company</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="freeRegistration" value="1">
                                                            <label class="form-check-label">Free Registration</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="blockBilling" value="1">
                                                            <label class="form-check-label">Block Billing</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="validateEmployee" value="1">
                                                            <label class="form-check-label">Validate Employee</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="workingCompanyMandatory" value="1">
                                                            <label class="form-check-label">Working Company
                                                                Mandatory</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="blockSendingLabResult" value="1">
                                                            <label class="form-check-label">Block Sending Lab
                                                                Result</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="enableIdfInsurance" value="1">
                                                            <label class="form-check-label">Enable IDF
                                                                Insurance</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="idfSettings" value="1">
                                                            <label class="form-check-label">IDF Settings</label>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-3">
                                        <div class="action-bar">
                                            <button type="button" class="btn-default">Discard</button>
                                            <button type="submit" class="btn-primary-custom">
                                                <i class="bi bi-check2-circle"></i> Save
                                            </button>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </form>

                    </div>

                </div>

            </div>



        </div>

    </div>

</div>
