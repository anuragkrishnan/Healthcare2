<div class="row g-4 m-6">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm" style="background-color: var(--dark)">
                    <div class="card-body p-4">
                        <p class="text-secondary mb-4">Click the buttons below to see the alerts examples.
                        </p>

                        <div class="d-flex gap-2 mb-3">
                            <button id="btnSuccess" class="btn btn-success">Trigger Success</button>
                            <button id="btnError" class="btn btn-danger">Trigger Error</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btnSuccess').addEventListener('click', () => {
        showSuccess('Your changes have been saved.');
    });

    document.getElementById('btnError').addEventListener('click', () => {
        showError('Something went wrong. Please try again.');
    });
</script>
