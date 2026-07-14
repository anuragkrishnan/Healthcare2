/**
 * Generic AJAX Request
 */
function ajaxRequest(options) {

    $.ajax({
        url: options.url,
        type: options.type || 'POST',
        data: options.data || {},

        success: function (response) {

            if (options.success) {
                options.success(response);
            }

        },

        error: function (xhr) {

            if (xhr.status === 422) {

                let errors = xhr.responseJSON.errors;
                let message = '';

                $.each(errors, function (key, value) {
                    message += value[0] + '<br>';
                });

                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    html: message
                });

            } else {

                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: options.errorMessage || 'Something went wrong.'
                });

                console.log(xhr.responseText);

            }

        }

    });

}

/*Generic Save Function */

function saveRecord(config) {

    if (!$(config.form).valid()) {
        return;
    }

    ajaxRequest({

        url: config.url,

        type: 'POST',

        data: $(config.form).serialize(),

        success: function (response) {

            Swal.fire({

                icon: 'success',
                title: 'Success',
                text: response.message,
                timer: 1500,
                showConfirmButton: false

            });

            $(config.modal).modal('hide');

            $(config.form)[0].reset();

            loadPage(config.reloadUrl);

        },

        errorMessage: config.errorMessage

    });

}

/*Generic Edit Function */

function editRecord(config) {

    ajaxRequest({

        url: config.url,
        type: 'GET',

        success: function (data) {

            $.each(data, function (key, value) {

                $('[name="' + key + config.suffix + '"]').val(value);

            });

            $(config.modal).modal('show');

        }

    });

}

/*Generic Update Function */

function updateRecord(config) {

    if (!$(config.form).valid()) {
        return;
    }

    let id = $(config.idField).val();

    ajaxRequest({

        url: config.url + '/' + id,

        type: 'POST',

        data: $(config.form).serialize() + '&_method=PUT',

        success: function (response) {

            Swal.fire({

                icon: 'success',
                title: 'Success',
                text: response.message,
                timer: 1500,
                showConfirmButton: false

            });

            bootstrap.Modal.getInstance(
                document.querySelector(config.modal)
            ).hide();

            $(config.form)[0].reset();

            loadPage(config.reloadUrl);

        },

        errorMessage: config.errorMessage

    });

}

/*Generic Delete Function */

function deleteRecord(config) {

    Swal.fire({

        title: config.title || 'Delete?',
        text: config.text || 'Are you sure?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Confirm'

    }).then((result) => {

        if (!result.isConfirmed) return;

        ajaxRequest({

            url: config.url,
            type: 'POST',

            data: {
                _method: 'DELETE',
                _token: $('meta[name="csrf-token"]').attr('content')
            },

            success: function (response) {

                Swal.fire({

                    icon: 'success',
                    title: 'Deleted',
                    text: response.message,
                    timer: 1500,
                    showConfirmButton: false

                });

                loadPage(config.reloadUrl);

            },

            errorMessage: config.errorMessage

        });

    });

}


