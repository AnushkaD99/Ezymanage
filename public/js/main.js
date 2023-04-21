//toggle password
const passwordInput = document.querySelector('#id_password');
const toggleButton = document.querySelector('.fa-eye');

toggleButton.addEventListener('click', function () {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleButton.classList.remove('fa-eye');
        toggleButton.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleButton.classList.remove('fa-eye-slash');
        toggleButton.classList.add('fa-eye');
    }
});

//toggle sidebar
const toggleBtn = document.getElementById('sidebar-toggle');
const sidebar = document.querySelector('.sidebar');
const navbar = document.querySelector('.navbar');
const container = document.querySelector('.container');

toggleBtn.addEventListener('click', function () {
    sidebar.classList.toggle('active');
    navbar.classList.toggle('active');
    container.classList.toggle('active');

});