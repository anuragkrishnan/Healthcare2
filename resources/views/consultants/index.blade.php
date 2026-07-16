
<div class="d-flex justify-content-between align-items-center mb-3">

    <!-- Left -->
    
    <div class="table-wrapper mt-1">
    <table class="table table-sm table-borderless w-auto align-middle ml-3 d-inline-block text-secondary">
    <tbody>
        <tr class="d-flex gap-3 align-items-center">
            <td></td>
            <td>
                <div class="d-flex align-items-center">
        <span class="me-2">Show</span>

        <select class="form-select form-select-sm" style="width:80px;">
            <option>10</option>
            <option>25</option>
            <option>50</option>
            <option>100</option>
        </select>

        <span class="ms-2">entries</span>
         </div>
            </td>
            <td>
                                <input type="text" class="d-inline-block p-0 px-1 text-center border rounded" placeholder="Search..." style="width: 100px;"> 
                <i class="bi bi-search cursor-pointer text-primary ms-1"></i>
            </td>
            
          
        </tr>
    </tbody>
</table></div>

    <!-- Right -->
   

     <div class="d-flex gap-1">
           <button type="button"
        class="btn btn-sm btn-outline-success px-3"
        data-bs-toggle="modal"
        data-bs-target="#consultantAddModal">
    <i class="bi bi-plus-circle me-1"></i> New
</button>
           
            <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-printer me-1"></i> Print</button>
        </div>



        <!-- <button type="button" class="btn btn-primary btn-sm btn-add-patient" data-bs-toggle="modal"
                        data-bs-target="#patientAddModal">

                        <i class="bi bi-plus-lg"></i>

                        Add New

                    </button>
                    @include('patients.modals.add') -->

</div>

            <!-- Table -->
<div class="table-responsive">
            <div class="table-wrapper mt-1">
                <div class="consultant-page">
                <table class="table table-dark table-hover align-middle mb-0" >

                    <thead>

                        <tr>
                            <th class="text-secondary" style="width:5%">Sl No.</th>
                            <th class="text-secondary" style="width:10%">Code</th>
                            <th  class="text-secondary" style="width:10%">Name</th>
                            <th  class="text-secondary" style="width:10%">Speciality</th>
                            <th  class="text-secondary" style="width:10%">User id</th>
                            <th class="text-secondary" style="width:10%">Mobile</th>
                            <th class="text-secondary" style="width:8%">Scheduler</th>
                            <th class="text-secondary" style="width:8%">Document</th>
                            <th class="text-secondary" style="width:5%">Edit</th>
                            <th class="text-secondary" style="width:5%">Delete</th>


         

                            <!-- <th width="150" class="text-center">Action</th> -->

                        </tr>
                    </thead>


<tbody id="consultantTable">
    @forelse($consultants as $key => $consultant)
    <tr>
        <td class="text-secondary">{{ $key + 1 }}</td>
        <td class="text-secondary">{{ $consultant->doctorId }}</td>
        <td>{{ $consultant->name }}</td>
        <td>{{ $consultant->speciality }}</td>
        <td class="text-secondary">{{ $consultant->userCode }}</td>
        <td class="text-secondary">{{ $consultant->contactNo }}</td>
        <td class="text-center">
            <button class="btn btn-sm text-success" title="Schedule">
                <i class="bi bi-calendar-event"></i>
            </button>
        </td>
        <td class="text-secondary">
            <button class="btn btn-sm text-secondary" title="Document">
                <i class="bi bi-file-earmark-text"></i>
            </button>
        </td>
        <td>
            
                <button type="button"
            class="btn btn-sm text-primary"
            data-bs-toggle="modal">
            <i class="bi bi-pencil"></i>
        </button> 
       
        </td>
        <td>
            <button class="btn btn-sm text-danger delete-consultant"
                >
                <i class="bi bi-trash"></i>
            </button>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="10" class="text-center text-muted py-3">
            No consultants found. Click "New" to add one.
        </td>
    </tr>
    @endforelse
</tbody>

                        
                </table>

            </div></div></div>

            <!-- Footer -->


            <div class="table-footer">

                <div id="tableInfo">
                    Showing 1 to 10 of 35 entries
                </div>

                <nav aria-label="Table Pagination">

                    <ul class="pagination pagination-sm mb-0">

                        <li class="page-item disabled">
                            <a class="page-link" href="#">Previous</a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>

                    </ul>

                </nav>



            </div>

        </div>

    </div>
</div>

{{-- INCLUDE MODAL HERE --}}
@include('consultants.add')
 

 


