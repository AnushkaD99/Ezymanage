<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/schoolclerks/index" class="active"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/schoolclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/schoolclerks/school_profile"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Profile</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/schoolclerks/projects"><i class="fa-solid fa-building"></i><span class="link">Projects</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/schoolclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
                        <input type="text" name="emp.num" class="textBox" value="<?php echo $data['users']->emp_no ?>" readonly>
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
                        <input type="text" name="contact.num" class="textBox" value="<?php echo $data['users']->contact_num ?>" readonly>
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
                        <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->name_with_initials ?>" readonly>
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
                        <input type="text" name="nic" class="textBox" value="<?php echo $data['users']->nic ?>" readonly>
                    </div>
                </div>
                <div class="fullBtn" id="my-popup-trigger">Edit Profile</div>
                <!-- <a href="<?php echo URLROOT; ?>/salryclerks/editProfile">
                    <div class="fullBtn">Edit Profile</div>
                </a> -->
            </div>
        </div>
    </div>
</div>
<?php require 'editProfile.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>