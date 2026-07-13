<div class="modal fade" id="specialityEditModal" tabindex="-1" aria-labelledby="specialityEditModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

        <div class="modal-content">

            <div class="modal-header speciality-header">

                <h5 class="modal-title" id="specialityEditModalLabel">
                    Edit Speciality
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="card border-0">

                    <div class="card-section">

                        <div class="form-container">

                            <div class="tabs">
                                <div class="tab active">
                                    Speciality Details
                                </div>
                            </div>

                            <div class="speciality-grid">

                                <div class="speciality-form">
                                    <input type="hidden" id="edit_id" value="">
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input type="text" id="edit_code" class="form-control" value="">
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            Speciality
                                            <span class="text-danger">*</span>
                                        </label>

                                        <input type="text" id="edit_name" class="form-control" value="">
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button id="btnSuccess" class="btn btn-success">Update</button>


            </div>

        </div>

    </div>

</div>
<script>
    const specialityUrl = "{{ url('master/speciality') }}";
</script>
