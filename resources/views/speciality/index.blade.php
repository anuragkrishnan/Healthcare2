<div class="row g-4">
    <div class="card table-card col-8 speciality-table-card">

        <div class="">

            <!--div class="table-toolbar">

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



                <div class="search-wrapper">

                    <i class="bi bi-search"></i>

                    <input type="text" class="form-control form-control-sm" id="tableSearch" placeholder="">

                </div>


            </div-->

            <!-- Table -->

            <div class="table-wrapper mt-1" style="relative">
                <div class="table-actions" style="position:absolute; right:30%; top:4%;">

                    <button class="btn btn-sm btn-outline-secondary px-3"><i class="bi bi-printer me-1"></i>
                        Print</button>
                    <button type="button" class="btn btn-sm btn-outline-success px-3 small-label"
                        data-bs-toggle="modal" data-bs-target="#specialityAddModal"><i
                            class="bi bi-plus-circle me-1"></i> New</button>

                    @include('speciality.modals.add')
                    @include('speciality.modals.edit')




                </div>

                <table class="table table-dark table-hover align-middle mb-0" id="specialityTable">

                    <thead>

                        <tr>
                            <th width="30px;">Sl. No.</th>
                            <th>Speciality Code</th>
                            <th>Speciality Name</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>

                        </tr>

                    </thead>

                    <tbody>
                        @foreach ($specialities as $key => $speciality)
                            <tr>
                                <td class="text-secondary text-center">{{ $key + 1 }}</td>
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

                                    <button type="button" class="btn btn-sm text-primary edit-speciality"
                                        data-id="{{ $speciality->id }}">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-sm text-danger delete-btn" data-id="{{ $speciality->id }}">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>


            <!--div class="table-footer">

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



            </div-->

        </div>

    </div>
</div>
