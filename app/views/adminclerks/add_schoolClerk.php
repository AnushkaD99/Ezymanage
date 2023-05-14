<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails" class="active"><i class="fa-solid fa-eye"></i><span class="link">Users</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
            </li>
            <!-- <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/verifyDetails"><i class="fa-solid fa-user-check"></i><span class="link">Verify Details</span></a>
            </li> -->
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
            </li>
        </ul>
        <div class="logout">
            <hr>
            <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
        </div>
    </div>
    <!-- End sidebar -->
    <div class="main">
        <div class="tittle">
            <h1>Add School Clerk</h1>
        </div>
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="content">
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Full Name :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="fullName" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['full_name_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Name with Initials :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="nameWithInitials" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['name_with_initials_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        User Name :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="username" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['username_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Gender :
                    </div>
                    <div class="main-editprofile-right">
                        <select id="gender" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <span class="error"><?php echo $data['confirm_password_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Birthday :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="date" name="birthday" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['birthday_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Email :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="email" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['email_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Contact Number :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="contact" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['contact_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Address :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="address" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['address_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        School :
                    </div>
                    <div class="main-editprofile-right">
                        <select id="school" name="school">
                            <option value="No School">No School</option>
                            <?php foreach ($data['school_list'] as $schools) : ?>
                                <option value="<?php echo $schools->name; ?>"><?php echo $schools->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <span class="error"><?php echo $data['confirm_password_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        NIC :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="nic" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['nic_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Password :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="password" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['password_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Confirm Password :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="confirmPassword" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['confirm_password_err'] ?></span>
                </div>
                <input type="submit" value="Submit" class="submit-btn">
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>