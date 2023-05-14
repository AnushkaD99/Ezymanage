<?php require APPROOT . '/views/inc/loginHeader.php'; ?>
<div class="form">
    <div class="container">
        <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" class="logo">
        <h2>Set Account Password</h2>
        <p>Hi <?php echo $data['userData']->username ?>,<br>
            Please fill in this form to set your account password.</p>
        <form action="<?php echo URLROOT; ?>/users/changePassword/<?php echo $data['id']; ?>" method="POST">
            <div class="input-group">
                <lable for="fullname">New Password : <sup>*</sup></lable><br>
                <div class="input">
                    <input type="password" name="password" placeholder="Add New Password Here" required><br>
                    <i class="fa-solid fa-eye" id="id_password"></i><br>
                </div>
                <span class="error"><?php echo $data['password_err'] ?></span>
            </div>
            <div class="input-group">
                <lable for="fullname">Confirm new Password : <sup>*</sup></lable><br>
                <div class="input">
                    <input type="password" name="confirm_password" placeholder="Confirm new Password" id="id_password" required>
                    <i class="fa-solid fa-eye" id="id_password"></i>
                </div>
                <span class="error"><?php echo $data['confirm_password_err'] ?></span>
            </div>
            <span class="error"><?php $data['password_err'] ?></span>
            <div class="reg-btn">
                <button type="submit" value="Reset Password" class="loginbtn" id="showToastBtn">Login</button>
            </div>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>