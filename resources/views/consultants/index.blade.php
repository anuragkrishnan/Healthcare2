<div class="d-flex justify-content-between align-items-center mb-3">

    <!-- Left -->
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

    <!-- Right -->
    <button
        type="button"
        class="btn btn-primary btn-sm"
        data-bs-toggle="modal"
        data-bs-target="#consultantAddModal">

        <i class="bi bi-plus-lg"></i> New

    </button>

</div>

            <!-- Table -->

            <div class="table-wrapper mt-1">

                <table class="table table-dark table-hover align-middle mb-0">

                    <thead>

                        <tr>

                            <th width="70"><code></code></th>
                            <th>Name</th>
                            <th>Speciality</th>
                            <th>User id</th>
                            <th>Mobile</th>
                            <th>Schedule</th>
                            <th width="150" class="text-center">Action</th>

                        </tr>

                    </thead>

                    <tbody id="consultantTable">

                        <tr>

                            <td class="text-secondary">1100</td>
                            <td>John Doe</td>
                            <td>Physician</td>
                            <td class="text-secondary">001</td>
                            <td class="text-secondary">9097865456 </td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Morning</span>
                            </td>

                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>

                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0001</td>
                            <td>Aarav Sharma</td>
                            <td>Pediatrician</td>
                            <td class="text-secondary">002</td>
                            <td class="text-secondary">9087556765</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Morning
                                    </span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0002</td>
                            <td>Diya Verma</td>
                            <td>Gynecologist</td>
                            <td class="text-secondary">003</td>
                            <td class="text-secondary">8787565434</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Evening</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0003</td>
                            <td>Kabir Nair</td>
                            <td>Gynecologist</td>
                            <td class="text-secondary">004</td>
                            <td class="text-secondary">7890878767</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Evening</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0004</td>
                            <td>Meera Iyer</td>
                            <td>Cardiologist</td>
                            <td class="text-secondary">005</td>
                            <td class="text-secondary">9034567867</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Day</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0005</td>
                            <td>Rohan Gupta</td>
                            <td>Neurologist</td>
                            <td class="text-secondary">006</td>
                            <td class="text-secondary">6785678989</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Day</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0006</td>
                            <td>Ishaan Reddy</td>
                            <td>Pediatrician</td>
                            <td class="text-secondary">007</td>
                            <td class="text-secondary">9087564567</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Night</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0007</td>
                            <td>Ananya Menon</td>
                            <td>Obstetrician</td>
                            <td class="text-secondary">008</td>
                            <td class="text-secondary">8978967876</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Morning</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0008</td>
                            <td>Vivaan Pillai</td>
                            <td>Psychiatrist</td>
                            <td class="text-secondary">009</td>
                            <td class="text-secondary">9087867875 </td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Evening</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0009</td>
                            <td>Sara Joshi</td>
                            <td>Psychologist</td>
                            <td class="text-secondary">010</td>
                            <td class="text-secondary">8978909898</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Morning</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0010</td>
                            <td>Aditi Kapoor</td>
                            <td>Pulmonologist</td>
                            <td class="text-secondary">011</td>
                            <td class="text-secondary">7867567890</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Evening</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0011D</td>
                            <td>Karan Sharma</td>
                            <td>Pulmonologist</td>
                            <td class="text-secondary">012</td>
                            <td class="text-secondary">8967567890</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Evening</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-secondary">PT-0012</td>
                            <td>Neha Verma</td>
                            <td>ENT Specialist</td>
                            <td class="text-secondary">013</td>
                            <td class="text-secondary">786789873</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Day</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                       
                     
                        
                       
                     
                        <tr>
                            <td class="text-secondary">PT-0018</td>
                            <td>Tanvi Pillai</td>
                            <td>Psychiatrist</td>
                            <td class="text-secondary">018</td>
                            <td class="text-secondary">7890875678</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Evening</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                     
                        <tr>
                            <td class="text-secondary">PT-0020</td>
                            <td>Simran Kapoor</td>
                            <td>Pulmonologist</td>
                            <td class="text-secondary">020</td>
                            <td class="text-secondary">6756789098</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Morning</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                       
                      
                        <tr>
                            <td class="text-secondary">PT-0022</td>
                            <td>Priya Verma</td>
                            <td>Pulmonologist</td>
                            <td class="text-secondary">022</td>
                            <td class="text-secondary">8909897876</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Night</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                       
                        <tr>
                            <td class="text-secondary">PT-0024</td>
                            <td>Kavya Iyer</td>
                            <td>ENT Specialist</td>
                            <td class="text-secondary">024</td>
                            <td class="text-secondary">9089786756</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Morning</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                      
                        <tr>
                            <td class="text-secondary">PT-0026</td>
                            <td>Lavanya Reddy</td>
                            <td>ENT Specialist</td>
                            <td class="text-secondary">026</td>
                            <td class="text-secondary">7890987867</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Evening</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                       
                        <tr>
                            <td class="text-secondary">PT-0029</td>
                            <td>Manish Joshi</td>
                            <td>ENT Specialist</td>
                            <td class="text-secondary">029</td>
                            <td class="text-secondary">787878789</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Day</span>
                            </td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>

                            </td>
                        </tr>
                       

                    </tbody>

                </table>

            </div>

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