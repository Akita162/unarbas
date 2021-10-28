document.addEventListener('click', function (e) {
  if (e.target.classList.contains('gallery-item')) {
    const src = e.target.getAttribute('src');
    document.querySelector('.modal-img').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
    myModal.show();
  }
});

function kembali() {
  if (document.referrer == "") {
    window.location.href="../pendaftaran";
  } else {
    window.history.back();
  }
}