<div class="row g-4">
    <div class="card table-card">

        <div class="card-body">

            <!-- Toolbar -->

            <div class="table-toolbar">

                <!-- Left -->

                <div class="table-length">

                    <label>Show</label>

                    <select class="form-select form-select-sm" id="lengthMenu">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>

                    <label>entries</label>

                </div>

                <!-- Right -->

                <div class="table-actions">
                    <button type="button" class="btn btn-primary btn-sm btn-add-patient" data-bs-toggle="modal"
                        data-bs-target="#patientAddModal">

                        <i class="bi bi-plus-lg"></i>

                        Add New

                    </button>
                    @include('patients.modals.add')
                    <div class="search-wrapper">

                        <i class="bi bi-search"></i>

                        <input type="text" class="form-control form-control-sm" id="tableSearch"
                            placeholder="Search">

                    </div>



                </div>

            </div>

            <!-- Table -->

            <div class="table-wrapper mt-1">

                <table class="table table-dark table-hover align-middle mb-0">

                    <thead>

                        <tr>

                            <th width="70">#</th>
                            <th>Patient</th>
                            <th>Doctor</th>
                            <th>Gender</th>
                            <th>Condition</th>
                            <th>Status</th>
                            <th width="150" class="text-center">Action</th>

                        </tr>

                    </thead>

                    <tbody id="patientTable">

                        <tr>

                            <td class="text-secondary">1100</td>
                            <td>John Doe</td>
                            <td>Dr. Smith</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Allergy </td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td>Dr. Alex</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Hypertension</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active
                                    </spen>
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
                            <td>Dr. Lucy</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Diabetes Type 2</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
                            <td>Dr. Ahmed</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Fracture</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Critical</span>
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
                            <td>Dr. Farhana</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Asthma</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Recovering</span>
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
                            <td>Dr. Thomas</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Post-Surgery</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td>Dr. Mehra</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Routine Checkup</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
                            <td>Dr. Fazal</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Hypertension</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Critical</span>
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
                            <td>Dr. Patel</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Diabetes Type 2</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Recovering</span>
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
                            <td>Dr. Smith</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Fracture</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td>Dr. Nancy</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Asthma</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
                            <td>Dr. Paul</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Post-Surgery</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Critical</span>
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
                            <td>Dr. Alex</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Routine Checkup</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Recovering</span>
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
                            <td class="text-secondary">PT-0013</td>
                            <td>Arjun Nair</td>
                            <td>Dr. Paul</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Hypertension</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td class="text-secondary">PT-0014</td>
                            <td>Pooja Iyer</td>
                            <td>Dr. Patel</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Diabetes Type 2</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
                            <td class="text-secondary">PT-0015</td>
                            <td>Yash Gupta</td>
                            <td>Dr. Fazal</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Fracture</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Critical</span>
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
                            <td class="text-secondary">PT-0016</td>
                            <td>Riya Reddy</td>
                            <td>Dr. Nancy</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Asthma</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Recovering</span>
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
                            <td class="text-secondary">PT-0017</td>
                            <td>Dev Menon</td>
                            <td>Dr. Smith</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Post-Surgery</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td>Dr. Alex</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Routine Checkup</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
                            <td class="text-secondary">PT-0019</td>
                            <td>Rahul Joshi</td>
                            <td>Dr. Ahmed</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Hypertension</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Critical</span>
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
                            <td>Dr. Mehra</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Diabetes Type 2</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Recovering</span>
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
                            <td class="text-secondary">PT-0021</td>
                            <td>Nikhil Sharma</td>
                            <td>Dr. Nancy</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Fracture</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td>Dr. Patel</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Asthma</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
                            <td class="text-secondary">PT-0023</td>
                            <td>Aman Nair</td>
                            <td>Dr. Farhana</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Post-Surgery</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Critical</span>
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
                            <td>Dr. Paul</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Routine Checkup</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Recovering</span>
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
                            <td class="text-secondary">PT-0025</td>
                            <td>Siddharth Gupta</td>
                            <td>Dr. Patel</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Hypertension</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td>Dr. Ahmed</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Diabetes Type 2</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
                            <td class="text-secondary">PT-0027</td>
                            <td>Varun Menon</td>
                            <td>Dr. Fazal</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Fracture</td>
                            <td><span
                                    class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Critical</span>
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
                            <td class="text-secondary">PT-0028</td>
                            <td>Esha Pillai</td>
                            <td>Dr. Patel</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Asthma</td>
                            <td><span
                                    class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">Recovering</span>
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
                            <td>Dr. Smith</td>
                            <td class="text-secondary">Male</td>
                            <td class="text-secondary">Post-Surgery</td>
                            <td><span
                                    class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
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
                            <td class="text-secondary">PT-0030</td>
                            <td>Ritu Kapoor</td>
                            <td>Dr. Farhana</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">Routine Checkup</td>
                            <td><span
                                    class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Discharged</span>
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
