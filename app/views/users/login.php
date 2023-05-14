<?php require APPROOT . '/views/inc/loginHeader.php'; ?>
<div class="form">
    <div class="container">
        <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" class="logo">
        <h2>Login to Ezymanage</h2>
        <form action="" method="POST">
            <div class="input-group">
                <lable for="fullname">User Name : <sup>*</sup></lable><br>
                <input type="text" name="username" placeholder="Username" required><br>
                <span class="error"><?php echo $data['username_err'] ?></span>
            </div>
            <div class="input-group">
                <lable for="fullname">Password : <sup>*</sup></lable><br>
                <div class="input">
                    <input type="password" name="password" placeholder="Password" id="id_password" required>
                    <i class="fa-solid fa-eye" id="id_password"></i>
                </div>
                <span class="error"><?php echo $data['password_err'] ?></span>
            </div>
            <span class="error"><?php //echo $loginErr
                                ?></span>
            <div class="reg-btn">
                <button type="submit" value="Login" class="loginbtn" id="showToastBtn">Login</button>
            </div>
            <br>
            <a href="<?php echo URLROOT; ?>/users/forgotPassword"><strong>Forgot Password?</strong></a>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>