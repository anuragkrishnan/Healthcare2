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

/* Load page content via AJAX */

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



// Avatar click → file input in doctor add page
document.addEventListener('DOMContentLoaded', () => {
  const avatarPreview = document.querySelector('.avatar-preview');
const fileBtn = document.getElementById('btn-upload');

[avatarPreview, fileBtn].forEach(el => {
  if (!el) return;
  el.addEventListener('click', openFilePicker);
});

function openFilePicker() {
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/*';
  input.style.display = 'none';
  document.body.appendChild(input); // attach to DOM

  input.addEventListener('change', e => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = evt => {
        avatarPreview.innerHTML = `<img src="${evt.target.result}" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">`;
      };
      reader.readAsDataURL(file);
    }
    input.remove(); // clean up after use
  });

  input.click();
}


});


