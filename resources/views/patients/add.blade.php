 <div
     class="page-header bg-white border border-light-subtle rounded-3 ml-2 p-2 mb-3 shadow-sm d-flex flex-wrap gap-2 justify-content-between align-items-center">
     <div class="d-flex gap-1">
         <button class="btn btn-sm btn-outline-success px-3"><i class="bi bi-plus-circle me-1"></i> New</button>
         <button class="btn btn-sm btn-outline-secondary px-3" disabled><i class="bi bi-download me-1"></i> Save</button>
         <button class="btn btn-sm btn-outline-secondary px-3" disabled><i class="bi bi-pencil me-1"></i> Edit</button>
         <button class="btn btn-sm btn-outline-dark px-3"><i class="bi bi-arrow-left me-1"></i> Previous</button>
         <button class="btn btn-sm btn-outline-dark px-3">Next <i class="bi bi-arrow-right ms-1"></i></button>
         <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-x-circle me-1"></i> Cancel</button>
         <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-printer me-1"></i> Print</button>
     </div>
     <div class="d-flex gap-1 text-secondary">
         <table class="table table-sm table-borderless w-auto align-middle m-0 d-inline-block text-secondary">
             <tbody>
                 <tr class="d-flex gap-3 align-items-center">
                     <td>
                         <strong>Visit Bill No:</strong>
                         <input type="text" class="d-inline-block p-0 px-1 text-center border rounded"
                             placeholder="Search..." style="width: 100px;">
                         <i class="bi bi-search cursor-pointer text-primary ms-1"></i>
                     </td>

                     <td>
                         <strong>Date:</strong> 20/04/2026
                     </td>

                     <td>
                         <strong>Time:</strong> 10:53
                     </td>

                     <td>
                         <strong>Self Registration:</strong>
                         <input type="checkbox" class="form-check-input ms-1">
                     </td>

                     <td>
                         <span class="text-danger fw-bold">
                             <input type="checkbox" class="form-check-input me-1" checked> Emergency
                         </span>
                     </td>
                 </tr>
             </tbody>
         </table>
     </div>
     <div class="d-flex align-items-center gap-2">
         <span class="badge bg-primary p-2">Consultant Token: 001</span>
     </div>
 </div>
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
                     <input type="text" placeholder="🔍">
                 </div>
                 <div class="form-group">
                     <label>First Name</label>
                     <input type="text" value="SHIS">
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
                 <div class="form-group">
                     <label style="font-size:10px;">New Patient ID</label>
                     <input type="text" value="639564" style="background:#e2e8f0;" readonly>
                 </div>
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
                     <div class="flex-row">Age<span class="text-danger">*</span><input type="text" value="4Y 11M"
                             style="width:50px;">
                     </div>
                 </div>
                 <div class="form-group">
                     <label class="required">Contact No</label>
                     <input type="text" value="SAUDI ARABIA (+966) 0542395255">
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
     <div class="form-container" id="consultation-tab">
         <div class="tabs">
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
                     <input type="text" value="">
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
                             <input type="radio" name="payment" class="form-check-input"> <label for=""
                                 class="form-check-label small-label">Credit</label>

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
                         <label class="text-danger font-bold">Net Cash Payable</label>
                         <input type="text" value="" placeholder="0.00">
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- ── Action Bar ── -->
 <div class="d-flex align-items-center justify-content-center flex-wrap gap-3">
     <div class="action-bar">
         <button type="button" class="btn-default">Discard</button>
         <button type="button" class="btn-primary-custom">
             <i class="bi bi-check2-circle"></i> Save
         </button>
     </div>
 </div>
