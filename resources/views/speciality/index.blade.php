<div class="row g-4">
    <div class="card table-card col-8 speciality-table-card">

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

                    <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-printer me-1"></i>
                        Print</button>
                    <button type="button" class="btn btn-primary btn-sm btn-add-speciality" data-bs-toggle="modal"
                        data-bs-target="#specialityAddModal">

                        <i class="bi bi-plus-lg"></i>

                        Add New

                    </button>
                    @include('speciality.modals.add')

                    <div class="search-wrapper">

                        <i class="bi bi-search"></i>

                        <input type="text" class="form-control form-control-sm" id="tableSearch" placeholder="">

                    </div>



                </div>

            </div>

            <!-- Table -->

            <div class="table-wrapper mt-1">

                <table class="table table-dark table-hover align-middle mb-0">

                    <thead>

                        <tr>
                            <th width="70">Sl No</th>
                            <th width="70">Code</th>
                            <th width="200">Speciality</th>
                            <th width="150" class="text-center">Action</th>

                        </tr>

                    </thead>

                    <tbody id="specialityTable">

                        <tr>
                            <td class="text-secondary">1</td>
                            <td class="text-secondary">1100</td>
                            <td>ANESTHESIA</td>

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
                            <td class="text-secondary">2</td>
                            <td class="text-secondary">1101</td>
                            <td>ANESTHESIA</td>
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
                            <td class="text-secondary">3</td>
                            <td class="text-secondary">1102</td>
                            <td>CARDIOLOGIST</td>
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
                            <td class="text-secondary">4</td>
                            <td class="text-secondary">1103</td>
                            <td>NEUROLOGIST</td>
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
                            <td class="text-secondary">5</td>
                            <td class="text-secondary">1104</td>
                            <td>ORTHOPEDIC SURGEON</td>
                            <td class="text-center">

                                <button class="btn btn-sm text-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>

                                <button class="btn btn-sm text-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                        </tr>
                        <tr>
                            <td class="text-secondary">6</td>
                            <td class="text-secondary">1105</td>
                            <td>DERMATOLOGIST</td>
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
