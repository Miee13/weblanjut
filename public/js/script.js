document.querySelectorAll('.show-toast').forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    var toastEl = document.getElementById('liveToast');
    var toast = new bootstrap.Toast(toastEl);
    toast.show();
  });
});