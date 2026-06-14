document.addEventListener('DOMContentLoaded', function () {

    console.log('Dashboard Loaded');

    const menuItems = document.querySelectorAll('.sidebar-menu a');

    menuItems.forEach(item => {

        item.addEventListener('click', function(){

            menuItems.forEach(x =>
                x.classList.remove('active')
            );

            this.classList.add('active');

        });

    });

});

$(document).on('click', '.load-page', function (e) {
    e.preventDefault();

    let url = $(this).data('url');

    console.log("Loading:", url); // debug

    $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
            
            $('#content-area').html(response);
        },
        error: function (xhr) {
            console.log(xhr.responseText);
            alert('Page load failed');
        }
    });
});