
    <div class="page-header bg-white border border-light-subtle rounded-3 p-2 mb-3 shadow-sm d-flex flex-wrap gap-2 justify-content-between align-items-center">
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
                <input type="text" class="d-inline-block p-0 px-1 text-center border rounded" placeholder="Search..." style="width: 100px;"> 
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
            <span class="badge bg-primary px-2 py-1">Consultant Token: 001</span>
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
                <select><option></option></select>
            </div>
        </div>

        <div>
            <div class="form-group double-input">
                <label class="required">Date of birth</label>
                <input type="text" value="05/05/2021">
                <div class="flex-row"><span>Age*</span><input type="text" value="4Y 11M" style="width:50px;"></div>
            </div>
            <div class="form-group">
                <label class="required">Contact No</label>
                <input type="text" value="SAUDI ARABIA (+966) 0542395255">
            </div>
            <div class="form-group">
                <label class="required">Gender</label>
                <select><option>Male</option><option>Female</option></select>
            </div>
            <div class="form-group">
                <label>B.Group</label>
                <select><option></option></select>
            </div>
            <div class="form-group">
                <label class="required">Nationality</label>
                <input type="text" value="Indian">
            </div>
            <div class="form-group double-input">
                <label class="required">ID Card No</label>
                <input type="text" value="2303053215">
                <div class="flex-row"><span>Type*</span><select><option>Iqama</option></select></div>
            </div>
            <div class="form-group double-input">
                <label>ID Card II</label>
                <input type="text">
                <div class="flex-row"><span>Type</span><select><option>Select Type</option></select></div>
            </div>
            <div class="form-group">
                <label>Pat Status</label>
                <label><input type="checkbox" checked> Active</label>
            </div>
        </div>
    </div>
 </div>
