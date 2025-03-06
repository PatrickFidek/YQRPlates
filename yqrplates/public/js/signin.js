document.querySelector('.img__btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.cont').classList.toggle('s--signup');
});
$('input[type="checkbox"]').on('change', function() {
$('input[type="checkbox"]').not(this).prop('checked', false);
});