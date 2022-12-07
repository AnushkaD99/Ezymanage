<?php require APPROOT . '/views/inc/header.php'; ?>
<ul>
	<li class="image">
		<img class="loginPageImg" src="<?php echo URLROOT; ?>/img/loginpage.png">
	</li>
	<li class="login">	
	    <img class="logo" src="<?php echo URLROOT; ?>/img/logo.png">
	    <h1>Sign in to Ezymanage</h1>
	    <!-- <p>New User? <a href="Registration/Registration.php">Sign Up</a> now</p> -->
	    <br>
	    <form method="POST" action="<?php echo URLROOT; ?>/users/login">
  	    <!--<?php include('errors.php'); ?>-->
  	    <div class="input-group">
            <lable for="Username">Username :</label>
  		    <input type="text" name="username" placeholder="Username" >
  	    </div>
  	    <div class="input-group">
            <lable for="Password">Password :</label>
  		    <input type="password" name="password" placeholder="Password" id="id_password">
		    <i class="fa-solid fa-eye" id="togglePassword"></i>
  	    </div>
  	    <div class="input-group">
  		    <button type="submit" name="login_user" class="loginbtn">Sign In</button>
  	    </div>
	    <div class="input-group">
		    <?php echo $data['username_err']; echo $data['password_err']; ?>
	    </div>  
    </li>
</ul>
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