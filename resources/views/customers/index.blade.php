<div class="row g-4">
    <div class="card table-card col-12 customer-table-card">
        <div class="card-body">
            <div class="table-toolbar">
                <div class="table-length">
                    <label>Show</label>
                    <select class="form-select form-select-sm">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                    </select>
                    <label>entries</label>
                </div>

                <div class="d-flex align-items-center ms-3">

                    <label class="d-flex align-items-center me-3 mb-0">
                        <input class="me-1" type="radio" name="status" checked>
                        Active
                    </label>

                    <label class="d-flex align-items-center me-3 mb-0">
                        <input class="me-1" type="radio" name="status">
                        Inactive
                    </label>

                    <label class="d-flex align-items-center mb-0">
                        <input class="me-1" type="radio" name="status">
                        Both
                    </label>

                </div>
                <div class="table-actions">
                    <button class="btn btn-sm btn-outline-secondary">
                        <i class="bi bi-file-earmark-excel me-1"></i> Download As Excel
                    </button>

                    <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#customerAddModal">
                        <i class="bi bi-plus-circle"></i> New
                    </button>

                    @include('customers.modals.add')

                    <div class="search-wrapper">
                        <i class="bi bi-search"></i>
                        <input type="text" class="form-control form-control-sm" id="tableSearch">
                    </div>
                </div>
            </div>

            <div class="table-wrapper mt-1">
                <table class="table table-dark table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Policy No</th>
                            <th>Expiry Date</th>
                            <th>Edit</th>
                            <th>Price Mapping</th>
                            <th>Pre-Authorization</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="customerTable">
                        @forelse($customers as $customer)
                            <tr>
                                <td>{{ $customer->accountCode }}</td>

                                <td>{{ $customer->name }}</td>

                                <td>{{ $customer->category ?? '-' }}</td>

                                <td>{{ $customer->contractPolicyNo ?? '-' }}</td>

                                <td>
                                    {{ $customer->expiryDate ? date('d-m-Y', strtotime($customer->expiryDate)) : '-' }}
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-sm text-primary edit-btn"
                                        data-id="{{ $customer->customerId }}" data-bs-toggle="modal"
                                        data-bs-target="#customerEditModal">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                </td>

                                <!-- Price Mapping -->
                                <td class="text-center">
                                    <button class="btn btn-sm text-success">
                                        <i class="bi bi-geo-alt"></i>
                                    </button>
                                </td>

                                <!-- Pre Authorization -->
                                <td class="text-center">
                                    <button class="btn btn-sm text-info">
                                        <i class="bi bi-shield-check"></i>
                                    </button>
                                </td>

                                <td class="text-center">
                                    <button class="btn btn-sm text-danger customer-delete-btn"
                                        data-id="{{ $customer->customerId }}">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">
                                    No customer records found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    {{-- <tbody id="customerTable">

                        <tr>
                            <td>C16298</td>
                            <td>CASH CUSTOMER</td>
                            <td>CASH</td>
                            <td>-</td>
                            <td>30-03-2027</td>
                            <td class="text-center">
                                <button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm text-success">
                                    <i class="bi bi-geo-alt"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm text-info">
                                    <i class="bi bi-shield-check"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm text-danger delete-btn">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>C16297</td>
                            <td>ARABIAN CROWN CONTRACTING</td>
                            <td>CREDIT</td>
                            <td>POL1001</td>
                            <td>30-12-2026</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16296</td>
                            <td>INSPECT PROJECT LLC</td>
                            <td>CASH</td>
                            <td>POL1002</td>
                            <td>18-11-2026</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16295</td>
                            <td>UNITED HEALTH GROUP</td>
                            <td>INSURANCE</td>
                            <td>POL1003</td>
                            <td>05-04-2027</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16294</td>
                            <td>AL NOOR MEDICAL CENTER</td>
                            <td>CREDIT</td>
                            <td>POL1004</td>
                            <td>12-08-2026</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16293</td>
                            <td>EMIRATES INSURANCE</td>
                            <td>INSURANCE</td>
                            <td>POL1005</td>
                            <td>15-09-2027</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16292</td>
                            <td>GULF MEDICAL INSURANCE</td>
                            <td>INSURANCE</td>
                            <td>POL1006</td>
                            <td>22-06-2027</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16291</td>
                            <td>ROYAL HOSPITAL STAFF</td>
                            <td>STAFF</td>
                            <td>POL1007</td>
                            <td>01-01-2028</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16290</td>
                            <td>ABC TRADING COMPANY</td>
                            <td>CREDIT</td>
                            <td>POL1008</td>
                            <td>14-10-2026</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16289</td>
                            <td>GREEN LIFE CLINIC</td>
                            <td>CASH</td>
                            <td>POL1009</td>
                            <td>28-07-2027</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16288</td>
                            <td>GLOBAL MEDICARE</td>
                            <td>INSURANCE</td>
                            <td>POL1010</td>
                            <td>30-05-2027</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16287</td>
                            <td>OMAN PETROLEUM</td>
                            <td>CORPORATE</td>
                            <td>POL1011</td>
                            <td>19-03-2027</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16286</td>
                            <td>AL SHIFA CLINIC</td>
                            <td>CASH</td>
                            <td>POL1012</td>
                            <td>01-12-2026</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16285</td>
                            <td>MODERN MEDICAL SERVICES</td>
                            <td>CORPORATE</td>
                            <td>POL1013</td>
                            <td>18-08-2027</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                        <tr>
                            <td>C16284</td>
                            <td>MEDICARE PLUS</td>
                            <td>INSURANCE</td>
                            <td>POL1014</td>
                            <td>21-02-2028</td>
                            <td class="text-center"><button class="btn btn-sm text-primary" data-bs-toggle="modal"
                                    data-bs-target="#customerEditModal"><i class="bi bi-pencil"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-success"><i
                                        class="bi bi-geo-alt"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-info"><i
                                        class="bi bi-shield-check"></i></button></td>
                            <td class="text-center"><button class="btn btn-sm text-danger delete-btn"><i
                                        class="bi bi-trash"></i></button></td>
                        </tr>

                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    var customerDeleteUrl = "{{ url('master/customer') }}";
</script>
