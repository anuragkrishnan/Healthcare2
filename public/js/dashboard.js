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

const langBtn = document.getElementById('lang-btn');
const langDropdown = document.getElementById('lang-dropdown');

if (langBtn && langDropdown) {

langBtn.addEventListener('click', function () {
    langDropdown.classList.toggle('show');
});

document.addEventListener('click', function (e) {
    if (!e.target.closest('.language-selector')) {
        langDropdown.classList.remove('show');
    }
});
}

const userBtn = document.getElementById('user-btn');
const userDropdown = document.getElementById('user-dropdown');

if (userBtn && userDropdown) {

    userBtn.addEventListener('click', function () {
        userDropdown.classList.toggle('show');
    });

    document.addEventListener('click', function (e) {
        if (!e.target.closest('.user-info')) {
            userDropdown.classList.remove('show');
        }
    });
}

// User profile dropdown
const userToggle = document.getElementById('user-menu-toggle');
const userDropdown1 = document.getElementById('user-dropdown1');
const userChevron = document.getElementById('user-chevron');

userToggle.addEventListener('click', function (e) {
    e.stopPropagation();
    userDropdown1.classList.remove('hidden');
    userDropdown1.classList.toggle('open');
    userChevron.classList.toggle('rotated');
});

// Close when clicking anywhere outside
document.addEventListener('click', function (e) {
    userDropdown1.classList.remove('open');
    userChevron.classList.remove('rotated');
});
