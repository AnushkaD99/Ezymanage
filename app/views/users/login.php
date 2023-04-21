<?php require APPROOT . '/views/inc/loginHeader.php'; ?>
<!-- <div class="fullfrm">
    <div class="frm">
        <div class="left">
            <img src="<?php echo URLROOT; ?>/img/loginpage.svg" alt="" class="lgPgImg">
        </div>
        <div class="right">
            <div class="container">
                <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" class="logo">
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
                        <i class="fa-solid fa-eye" id="id_password"></i>
                        <span class="error"><?php echo $data['password_err'] ?></span>
                    </div>
                    <span class="error"><?php //echo $loginErr
                                        ?></span>
                    <div class="reg-btn">
                        <input type="submit" value="Login" class="loginbtn" id="showToastBtn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<div class="form">
    <div class="container">
        <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" class="logo">
        <h2>Login to Ezymanage</h2>
        <p>New User? <a href="registration.php"><strong>Sign Up</strong></a> now</p>
        <form action="" method="POST">
            <div class="input-group">
                <lable for="fullname">User Name : <sup>*</sup></lable><br>
                <input type="text" name="username" placeholder="Username" required><br>
                <span class="error"><?php echo $data['username_err'] ?></span>
            </div>
            <div class="input-group">
                <lable for="fullname">Password : <sup>*</sup></lable><br>
                <input type="password" name="password" placeholder="Password" id="id_password" required>
                <i class="fa-solid fa-eye" id="id_password"></i><br>
                <span class="error"><?php echo $data['password_err'] ?></span>
            </div>
            <span class="error"><?php //echo $loginErr
                                ?></span>
            <div class="reg-btn">
                <button type="submit" value="Login" class="loginbtn" id="showToastBtn">Login</button>
            </div>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>