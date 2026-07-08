
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
            <button class="btn btn-sm btn-outline-success px-3" data-bs-toggle="modal"
                        data-bs-target="#consultantAddModal">
                        <i class="bi bi-plus-circle me-1"></i> New</button>
           
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

                        <tr>
                            <td class="text-secondary">1</td>
                            <td class="text-secondary">1100</td>
                            <td>John Doe</td>
                            <td>Physician</td>
                            <td class="text-secondary">001</td>
                            <td class="text-secondary">9097865456 </td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                               <button type="button" class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#consultantEditModal">
                                    <i class="bi bi-pencil"></i>
                                    </a>
                                </button>
                                @include('consultants.edit')


                                
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger delete-btn">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>

                        </tr>
                        <tr>
                            <td class="text-secondary">2</td>
                            <td class="text-secondary">PT-0001</td>
                            <td>Aarav Sharma</td>
                            <td>Pediatrician</td>
                            <td class="text-secondary">002</td>
                            <td class="text-secondary">9087556765</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">3</td>
                            <td class="text-secondary">PT-0002</td>
                            <td>Diya Verma</td>
                            <td>Gynecologist</td>
                            <td class="text-secondary">003</td>
                            <td class="text-secondary">8787565434</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">4</td>
                            <td class="text-secondary">PT-0003</td>
                            <td>Kabir Nair</td>
                            <td>Gynecologist</td>
                            <td class="text-secondary">004</td>
                            <td class="text-secondary">7890878767</td>
                          <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">6</td>
                            <td class="text-secondary">PT-0004</td>
                            <td>Meera Iyer</td>
                            <td>Cardiologist</td>
                            <td class="text-secondary">005</td>
                            <td class="text-secondary">9034567867</td>
                           <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">7</td>
                            <td class="text-secondary">PT-0005</td>
                            <td>Rohan Gupta</td>
                            <td>Neurologist</td>
                            <td class="text-secondary">006</td>
                            <td class="text-secondary">6785678989</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">8</td>
                            <td class="text-secondary">PT-0006</td>
                            <td>Ishaan Reddy</td>
                            <td>Pediatrician</td>
                            <td class="text-secondary">007</td>
                            <td class="text-secondary">9087564567</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">9</td>
                            <td class="text-secondary">PT-0007</td>
                            <td>Ananya Menon</td>
                            <td>Obstetrician</td>
                            <td class="text-secondary">008</td>
                            <td class="text-secondary">8978967876</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">10</td>
                            <td class="text-secondary">PT-0008</td>
                            <td>Vivaan Pillai</td>
                            <td>Psychiatrist</td>
                            <td class="text-secondary">009</td>
                            <td class="text-secondary">9087867875 </td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">11</td>
                            <td class="text-secondary">PT-0009</td>
                            <td>Sara Joshi</td>
                            <td>Psychologist</td>
                            <td class="text-secondary">010</td>
                            <td class="text-secondary">8978909898</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">12</td>
                            <td class="text-secondary">PT-0010</td>
                            <td>Aditi Kapoor</td>
                            <td>Pulmonologist</td>
                            <td class="text-secondary">011</td>
                            <td class="text-secondary">7867567890</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">13</td>
                            <td class="text-secondary">PT-0011D</td>
                            <td>Karan Sharma</td>
                            <td>Pulmonologist</td>
                            <td class="text-secondary">012</td>
                            <td class="text-secondary">8967567890</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">14</td>
                            <td class="text-secondary">PT-0012</td>
                            <td>Neha Verma</td>
                            <td>ENT Specialist</td>
                            <td class="text-secondary">013</td>
                            <td class="text-secondary">786789873</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                       
                     
                        
                       
                     
                        
                       
                        <tr>
                            <td class="text-secondary">15</td>
                            <td class="text-secondary">PT-0029</td>
                            <td>Manish Joshi</td>
                            <td>ENT Specialist</td>
                            <td class="text-secondary">029</td>
                            <td class="text-secondary">787878789</td>
                            <td text-center><button class="btn btn-sm text-success" title="Schedule">
                                <i class="bi bi-calendar-event"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                 <button class="btn btn-sm text-secondary" title="Document">
                                 <i class="bi bi-file-earmark-text"></i>
                                 </button>
                            </td>                            

                            <td class="text-secondary">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-secondary">
                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                       

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
