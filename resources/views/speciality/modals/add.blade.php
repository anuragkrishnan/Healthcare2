<div class="modal fade" id="specialityAddModal" tabindex="-1" aria-labelledby="specialityAddModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header speciality-header">
                <h5 class="modal-title" id="specialityAddModalLabel">
                    Add Speciality
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <!-- Body -->
            <div class="modal-body">

                <div class="card border-0">

                    <!-- ================= HEADER TOOLBAR ================= -->




                    <div class="card-section">

                        <div class="form-container">

                            <div class="tabs">

                                <div class="tab active">
                                    Speciality Details
                                </div>



                            </div>

                            <div class="speciality-grid">

                                <div class="speciality-form">
                                    <form id="specialityForm">

                                        @csrf

                                        <div class="form-group">
                                            <label>Speciality Short Code</label>
                                            <input type="text" name="speciality_short_code" class="form-control"
                                                id="speciality_short_code">
                                            <span> </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Speciality Name<span class="text-danger">*</span></label>
                                            <input type="text" id="speciality_name" name="speciality_name"
                                                class="form-control">
                                            <span> </span>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- END BODY -->


            <!-- FOOTER -->

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                    Cancel

                </button>

                <button type="button" id="btnSave" class="btn btn-success">

                    Save

                </button>

            </div>

        </div>

    </div>

</div>
<script>
    const storeSpecialityUrl = "{{ route('master.specialities.store') }}";
</script>
