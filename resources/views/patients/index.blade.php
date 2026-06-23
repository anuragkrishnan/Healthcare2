<div class="row g-4">
    {{-- Page header --}}
    <div class="page-header">

        <div class="page-header-items">
            <div class="page-title-icon">
                <i class="bi bi-people-fill"></i>
            </div>
            <div class="page-title-text">
                <div class="page-title">Patients List</div>
                <div class="page-subtitle">Manage and monitor all registered patients</div>
            </div>
        </div>
        <div style="display:flex;gap:10px;">
            <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal"
                data-bs-target="#patientAddModal">
                <i class="bi bi-solid bi-plus"></i> New Patient
            </button>
        </div>
        @include('patients.modals.add')
    </div>


</div>

<div class="row">
    <div class="card data-card shadow-sm border-1">

        <div class="card-body p-2">

            <table id="patientsTable" class="table table-dark align-middle mb-0">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td class="text-secondary">#1001</td>
                        <td>John Doe</td>
                        <td class="text-secondary">Cardiology</td>
                        <td class="text-secondary">9876543210</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1002</td>
                        <td>Jane Smith</td>
                        <td class="text-secondary">Neurology</td>
                        <td class="text-secondary">9876543211</td>
                        <td><span
                                class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1003</td>
                        <td>Michael Johnson</td>
                        <td class="text-secondary">Orthopedics</td>
                        <td class="text-secondary">9876543212</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1004</td>
                        <td>Sarah Wilson</td>
                        <td class="text-secondary">Pediatrics</td>
                        <td class="text-secondary">9876543213</td>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Inactive</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1005</td>
                        <td>David Brown</td>
                        <td class="text-secondary">Dermatology</td>
                        <td class="text-secondary">9876543214</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1006</td>
                        <td>Emily Davis</td>
                        <td class="text-secondary">ENT</td>
                        <td class="text-secondary">9876543215</td>
                        <td><span
                                class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1007</td>
                        <td>Robert Miller</td>
                        <td class="text-secondary">Cardiology</td>
                        <td class="text-secondary">9876543216</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1008</td>
                        <td>Olivia Taylor</td>
                        <td class="text-secondary">Gynecology</td>
                        <td class="text-secondary">9876543217</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1009</td>
                        <td>William Anderson</td>
                        <td class="text-secondary">Neurology</td>
                        <td class="text-secondary">9876543218</td>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Inactive</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1010</td>
                        <td>Sophia Thomas</td>
                        <td class="text-secondary">Oncology</td>
                        <td class="text-secondary">9876543219</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1011</td>
                        <td>James Martin</td>
                        <td class="text-secondary">Orthopedics</td>
                        <td class="text-secondary">9876543220</td>
                        <td><span
                                class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1012</td>
                        <td>Isabella White</td>
                        <td class="text-secondary">Pediatrics</td>
                        <td class="text-secondary">9876543221</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1013</td>
                        <td>Benjamin Harris</td>
                        <td class="text-secondary">Cardiology</td>
                        <td class="text-secondary">9876543222</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1014</td>
                        <td>Mia Clark</td>
                        <td class="text-secondary">ENT</td>
                        <td class="text-secondary">9876543223</td>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Inactive</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1015</td>
                        <td>Daniel Lewis</td>
                        <td class="text-secondary">Dermatology</td>
                        <td class="text-secondary">9876543224</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-secondary">#1016</td>
                        <td>John Doe</td>
                        <td class="text-secondary">Cardiology</td>
                        <td class="text-secondary">9876543210</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1017</td>
                        <td>Jane Smith</td>
                        <td class="text-secondary">Neurology</td>
                        <td class="text-secondary">9876543211</td>
                        <td><span
                                class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1018</td>
                        <td>Michael Johnson</td>
                        <td class="text-secondary">Orthopedics</td>
                        <td class="text-secondary">9876543212</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1019</td>
                        <td>Sarah Wilson</td>
                        <td class="text-secondary">Pediatrics</td>
                        <td class="text-secondary">9876543213</td>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Inactive</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1020</td>
                        <td>David Brown</td>
                        <td class="text-secondary">Dermatology</td>
                        <td class="text-secondary">9876543214</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1021</td>
                        <td>Emily Davis</td>
                        <td class="text-secondary">ENT</td>
                        <td class="text-secondary">9876543215</td>
                        <td><span
                                class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1022</td>
                        <td>Robert Miller</td>
                        <td class="text-secondary">Cardiology</td>
                        <td class="text-secondary">9876543216</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1023</td>
                        <td>Olivia Taylor</td>
                        <td class="text-secondary">Gynecology</td>
                        <td class="text-secondary">9876543217</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1024</td>
                        <td>William Anderson</td>
                        <td class="text-secondary">Neurology</td>
                        <td class="text-secondary">9876543218</td>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Inactive</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1025</td>
                        <td>Sophia Thomas</td>
                        <td class="text-secondary">Oncology</td>
                        <td class="text-secondary">9876543219</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1026</td>
                        <td>James Martin</td>
                        <td class="text-secondary">Orthopedics</td>
                        <td class="text-secondary">9876543220</td>
                        <td><span
                                class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1027</td>
                        <td>Isabella White</td>
                        <td class="text-secondary">Pediatrics</td>
                        <td class="text-secondary">9876543221</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1028</td>
                        <td>Benjamin Harris</td>
                        <td class="text-secondary">Cardiology</td>
                        <td class="text-secondary">9876543222</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1029</td>
                        <td>Mia Clark</td>
                        <td class="text-secondary">ENT</td>
                        <td class="text-secondary">9876543223</td>
                        <td><span
                                class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">Inactive</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-secondary">#1030</td>
                        <td>Daniel Lewis</td>
                        <td class="text-secondary">Dermatology</td>
                        <td class="text-secondary">9876543224</td>
                        <td><span
                                class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Active</span>
                        </td>
                        <td>
                            <button class="btn btn-link btn-sm p-1 text-primary"><i
                                    class="bi bi-pencil-fill"></i></button>
                            <button class="btn btn-link btn-sm p-1 text-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>

            </table>

        </div>



    </div>


</div>
