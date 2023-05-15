<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/paysheet"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Paysheet</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/Karyasadanaya"><i class="fa-solid fa-file-lines"></i><span class="link">Karyasadanaya</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/leaveForm"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/report_issue"><i class="fa-brands fa-wpforms"></i><span class="link">Report Issue</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/school_details"><i class="fa-solid fa-eye"></i><span class="link">School Details</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/appointments"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
            </li>
            <!-- <li>
                <a href="<?php echo URLROOT; ?>/teachers/promotions"><i class="fa-solid fa-angles-up"></i><span class="link">Promotions</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/salary_increment"><i class="fa-sharp fa-solid fa-file-circle-plus"></i><span class="link">Salary Increment Form</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/transfers"><i class="fa-solid fa-arrows-rotate"></i><span class="link">Transfers</span></a>
            </li> -->
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/profile" class="active"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
        <div class="main-editprofile">
            <div class="main-editprofile-dp">
                <div class="img">
                    <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['users']->dp ?>" alt="user" class="user"><br>
                    <b>User Name : </b><?php echo $data['users']->username ?>
                </div>
            </div>
            <div class="main-editprofile-personal">
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Employee Number :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="emp.num" class="textBox" value="<?php echo $data['users']->userId ?>" readonly>
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Email :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="email" class="textBox" value="<?php echo $data['users']->email ?>" readonly>
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Contact Number :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="contact.num" class="textBox" value="<?php echo $data['users']->contact ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="main-editprofile-other">
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
                        Name with initials :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->nameWithInitials ?>" readonly>
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Address :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="address" class="textBox" value="<?php echo $data['users']->address ?>" readonly>
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Birthday :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="birthday" class="textBox" value="<?php echo $data['users']->birthday ?>" readonly>
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        School :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="school" class="textBox" value="<?php echo $data['users']->school ?>" readonly>
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Designation :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="designation" class="textBox" value="<?php echo $data['users']->designation ?>" readonly>
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        NIC :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="nic" class="textBox" value="<?php echo $data['users']->NIC ?>" readonly>
                    </div>
                </div>
                <a href="<?php echo URLROOT; ?>/teachers/editProfile">
                    <div class="fullBtn">Edit Profile</div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>