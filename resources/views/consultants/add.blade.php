
<div class="add-consultant-page">
<div class="modal fade"
     id="consultantAddModal"
     tabindex="-1">

    <div class="modal-dialog modal-xl modal-dialog-scrollable">

        <div class="modal-content">
            <form action="{{ route('master.consultants.store') }}" method="POST" class="consultant-add-form">
    
            @csrf

            <div class="modal-header">

                <h5 class="modal-title">
                    Consultant Master
                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

            <div class="page-header bg-white border border-light-subtle rounded-3 p-2 mb-3 shadow-sm d-flex flex-wrap gap-2 justify-content-between align-items-center">
        <div class="d-flex gap-1">
            
            <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-printer me-1"></i> Print</button>
        </div>
    
        <div class="d-flex gap-1 text-secondary">
    <table class="table table-sm table-borderless w-auto align-middle m-0 d-inline-block text-secondary">
</table>
            </div>
        <div class="d-flex align-items-center gap-2">
           
        </div>
    </div>

    <!-- Main Registration Section Form Container -->
    <div class="card-section">
      



<div class="form-container">
    <div class="tabs">
        <div class="tab active">Doctor Details</div>
        
    </div>
     <div class="row g-4">
    <!-- left -->
   

                    <div class="col-lg-6 border-end pe-4">
                       
                            <div class="form-group">
                                <label>Doctor ID</label>
                                <input type="text" placeholder="🔍" name="doctorId">
                            </div>
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <input type="text" value="SHIS" name="name">
                            </div>
                            <div class="form-group">
                                <label>Cost centre</label>
                                <input type="text" name="costCentre">
                            </div>
                            <div class="form-group" style="align-items: start;">
                                <label>Address</label>
                                <textarea name="address"></textarea>
                            </div>
                        
                                <div class="form-group">
                                    <label>Qualification</label>
                                    <input type="text" name="qualification">
                                </div>
                                <div class="form-group">
                                <label class="required">Date of birth</label>
                                <input type="date" value="" name="dob">
                                </div>
                                <div class="form-group">
                                <label class="required">Gender</label>
                                <select name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="required">Contact No</label>
                                <input type="text" value="SAUDI ARABIA (+966) 0542395255" name="contactNo">
                            </div>
                            <div class="form-group">
                                <label>Email id</label>
                                <input type="text" name="email">
                            </div>
                            <div class="form-group" style="align-items: start;">
                                <label>Remarks</label>
                                <textarea name="remarks"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Free  Consultation Days for cash Registration</label>
                                <input type="text" name="freeDaysCash">
                            </div>
                            <div class="form-group">
                                <label>Free  Consultation Days for credit Registration</label>
                                <input type="text" name="freeDaysCredit">
                            </div>
                            

              <!-- Checkbox Section -->
<div class="form-group checkbox-group">
    <label></label>

    <div class="checkbox-wrapper">

        <div class="form-check">
            <input class="form-check-input"
                   type="checkbox"
                   id="appointment" name="showInAppointment" value="1">

            <label class="form-check-label" for="appointment">
                Show in Appointment Diary
            </label>
        </div>

        <div class="form-check mt-2">
            <input class="form-check-input"
                   type="checkbox"
                   id="registration"  name="showInRegistration" value="1">

            <label class="form-check-label" for="registration">
                Show in Registration Entry
            </label>
        </div>

    </div>
</div>





        </div>
<!-- Right -->   
                <div class="col-lg-6 ps-4">
                            <div class="form-group">
                                <label style="font-size:10px;">User ID</label>
                                <input type="text" value="639564" style="background:#e2e8f0;" name="userCode" readonly>
                            </div>
                    

                        
                            <div class="form-group">
                                <label>License No.</label>
                                <input type="text" name="licenseNo">
                            </div>
                            <div class="form-group">
                                <label>Reg No</label>
                                <input type="text" name="regNo">
                            </div>
                            <div class="form-group">
                                <label>Id Card No</label>
                                <input type="text" name="idCardNo">
                            </div>
                            <div class="form-group">
                                <label>Id Type</label>
                                <input type="text" name="idType">
                            </div>
                            <div class="form-group">
                                <label>Nationality</label>
                                <input type="text" name="nationality">
                            </div>
                            <div class="form-group">
                                <label>Sort Order</label>
                                <input type="text" name="sortOrder">
                            </div>

                            <div class="form-group">
                                <label>Schedule Interval</label>
                                <input type="text" name="scheduleInterval">
                            </div>


                            

                

                <div class="row mb-2">

                        <div class="col-6">

                            <div class="form-group">
                                <label>Room No</label>
                                <input type="text" class="form-control" name="roomNo">
                            </div>

                        </div>

                <div class="col-6">

                        <div class="form-group">
                            <label>No. of Free Visit</label>
                            <input type="text" class="form-control" name="freeVisits">
                        </div>

                 </div>

        </div>
                            
                       
        


        <!-- Default Rate -->
<div class="form-group">
    <label>Default Rate</label>
    <input type="text" class="form-control" name="defaultRate">
</div>

<!-- Min Discount -->
<div class="row mb-2">
    <div class="col-6">
        <div class="form-group">
            <label>Min Desc %</label>
            <input type="text" class="form-control" name="minDescPercent">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label>Min Desc Amt</label>
            <input type="text" class="form-control" name="minDescAmt">
        </div>
    </div>
</div>

<!-- Max Discount -->
<div class="row mb-2">
    <div class="col-6">
        <div class="form-group">
            <label>Max Desc %</label>
            <input type="text" class="form-control" name="maxDescPercent">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label>Max Desc Amt</label>
            <input type="text" class="form-control" name="maxDescAmt">
        </div>
    </div>
</div>

<!-- Speciality & Consultant Type -->
<div class="row mb-2">
    <div class="col-6">
        <div class="form-group">
            <label>Speciality</label>
            <input type="text" class="form-control" name="speciality">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label>Consultant Type</label>
            <input type="text" class="form-control" name="consultantType">
        </div>
    </div>
</div>


        
                        </div>
                    </div>
                </div>


             </div>

            <div class="modal-footer">

                <button
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Close
                </button>

                <button
                    class="btn btn-primary">
                    Save
                </button>

            </div>
        </form>
        </div>

    </div>

</div> </div>

 
 
 


