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
                    <button type="button" class="btn btn-sm btn-outline-success px-3" data-bs-toggle="modal"
                        data-bs-target="#specialityAddModal"><i class="bi bi-plus-circle me-1"></i> New</button>

                    @include('speciality.modals.add')
                    @include('speciality.modals.edit')

                    <div class="search-wrapper">

                        <i class="bi bi-search"></i>

                        <input type="text" class="form-control form-control-sm" id="tableSearch" placeholder="">

                    </div>



                </div>

            </div>

            <!-- Table -->

            <div class="table-wrapper mt-1">

                <table class="table table-dark table-hover align-middle mb-0" id="specialityTable">

                    <thead>

                        <tr>
                            <th>Sl No</th>
                            <th>Speciality Code</th>
                            <th>Speciality Name</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>

                        </tr>

                    </thead>

                    <tbody>
                        @foreach ($specialities as $key => $speciality)
                            <tr>
                                <td class="text-secondary">{{ $key + 1 }}</td>
                                <td class="text-secondary"> {{ $speciality->speciality_short_code }}</td>
                                <td> {{ $speciality->speciality_name }}</td>
                                <td>
                                    @if ($speciality->status == 1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td class="text-center">

                                    <button type="button" class="btn btn-sm text-primary" data-bs-toggle="modal"
                                        data-bs-target="#specialityEditModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm text-danger delete-btn">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>


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
