<?php require APPROOT . '/views/inc/loginHeader.php'; ?>
<div class="frm">
	<div class="left">
        <img src="<?php echo URLROOT; ?>/img/loginpage.svg" alt="">
    </div>
    <div class="right">
        <div class="container">
            <h2>Login to Ezymanage</h2>
            <p>New User? <a href="registration.php"><strong>Sign Up</strong></a> now</p>
            <form action="" method="POST">
                <div class="input-group">
                    <lable for="fullname">User Name : <sup>*</sup></lable>
                    <input type="text" name="username" placeholder="Username" required>
                    <span class="error"><?php echo $data['username_err'] ?></span>
                </div>
                <div class="input-group">
                    <lable for="fullname">Password : <sup>*</sup></lable>
                    <input type="password" name="password" placeholder="Password" id="id_password" required>
                    <span class="error"><?php echo $data['password_err'] ?></span>
                </div>
                <span class="error"><?php //echo $loginErr ?></span>
                <div class="reg-btn">
                    <input type="submit" value="Login" class="loginbtn">
                </div>
            </form>
        </div>
    </div>
</div>


<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {

    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
 
    this.classList.toggle('fa-eye-slash');
});

</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>