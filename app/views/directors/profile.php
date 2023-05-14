<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/appointments"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/school_management"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Management</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/projects"><i class="fa-solid fa-building"></i><span class="link">School Projects</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/profile" class="active"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
          <div class="logout">
              <hr>
              <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
          </div>
        </div>
        <!-- End sidebar --> 
        
    <div class="main">
        <h1>Profile Details</h1>
        <div class="content" id="center">
            <div class="profile">
                <div class="personal_info">
                    <form action="" method="POST">
                        <div class="subtittle">
                            <h3>Customize your peronal details</h3>
                            <div class="edit_btn" id="edit_personal_details">Customize</div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Username :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->username ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Full Name :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->full_name ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Name with Initials :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="nameWithInitials" class="textBox" value="<?php echo $data['users']->name_with_initials ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                NIC :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="nic" class="textBox" value="<?php echo $data['users']->nic ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Birthday :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="date" name="birthday" class="textBox" value="<?php echo $data['users']->birthday ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Gender :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="gender" class="textBox" value="<?php echo $data['users']->gender ?>" readonly>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="space"></div>
                <hr>
                <div class="space"></div>
                <div class="personal_info">
                    <form action="" method="POST">
                        <div class="subtittle">
                            <h3>Customize your contact details</h3>
                            <!-- <div class="edit_btn" id="edit_personal_details">Customize</div> -->
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Contact number :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="birthday" class="password" value="<?php echo $data['users']->contact_num ?>" readonly>
                                <i class="fa-solid fa-pen-to-square" id="edit_cn"></i>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Email :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="birthday" class="password" value="<?php echo $data['users']->email ?>" readonly>
                                <i class="fa-solid fa-pen-to-square" id="edit_em"></i>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Address :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="address" class="password" value="<?php echo $data['users']->address ?>" readonly>
                                <i class="fa-solid fa-pen-to-square" id="edit_ad"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="space"></div>
                <hr>
                <div class="space"></div>
                <div class="subtittle">
                    <h3>Change your password</h3>
                    <div class="edit_btn" id="edit_password">Change</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>