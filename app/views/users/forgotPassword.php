<?php require APPROOT . '/views/inc/loginHeader.php'; ?>
<div class="form">
    <div class="container">
        <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" class="logo">
        <h2>Forgot Password</h2>
        <form action="<?php echo URLROOT; ?>/users/forgotPassword" method="POST">
            <div class="input-group">
                <lable for="fullname">Please Enter Your Registered Email Address : <sup>*</sup></lable><br>
                <input type="email" name="email" placeholder="Enter here">
                <span class="error"><?php echo $data['email_err'] ?></span>
            </div>
            <div class="reg-btn">
                <button type="submit" value="Submit" class="loginbtn" id="showToastBtn">Sent Otp</button>
            </div>
            <br>
            <a href="<?php echo URLROOT; ?>/users/login"><strong>Back</strong></a>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>