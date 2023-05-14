<?php require APPROOT . '/views/inc/loginHeader.php'; ?>
<div class="form">
    <div class="container">
        <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" class="logo">
        <h2>Login to Ezymanage</h2>
        <form action="" method="POST">
            <p>A email message with a 6-digit verification <br>
                code was just sent to <?php echo $data['userData']->email ?></p>
            <div class="input-group">
                <lable for="fullname">Enter Otp : <sup>*</sup></lable><br>
                <input type="text" name="otp" placeholder="Enter the code">
                <span class="error"><?php echo $data['otp_err'] ?></span>
            </div>
            <div class="reg-btn">
                <button type="submit" value="Submit" class="loginbtn" id="showToastBtn">Submit</button>
            </div>
            <br>
            <a href="<?php echo URLROOT; ?>/users/forgotPassword"><strong>Forgot Password?</strong></a>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>