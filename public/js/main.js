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

//searchbar
var searchInput = document.getElementById('search-input');
searchInput.addEventListener('input', function() {
    var filterValue = this.value.toUpperCase();
    var rows = document.querySelectorAll('.employee-row');

    for (var i = 0; i < rows.length; i++) {
        var idCell = rows[i].querySelector('.emp-id');
        var fnameCell = rows[i].querySelector('.emp-fname');
        var nameCell = rows[i].querySelector('.emp-name');
        var idValue = idCell.textContent || idCell.innerText;
        var fnameValue = fnameCell.textContent || fnameCell.innerText;
        var nameValue = nameCell.textContent || nameCell.innerText;

        if (idValue.toUpperCase().indexOf(filterValue) > -1 || nameValue.toUpperCase().indexOf(filterValue) > -1 || fnameValue.toUpperCase().indexOf(filterValue) > -1) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
});