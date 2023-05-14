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
            <h1>Add Teacher</h1>
        </div>
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="content">
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Name :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="name" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['name_err'] ?></span>
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
                        Contact Number :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="contact_num" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['contact_num_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Email :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="email" name="email" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['email_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Moto :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="moto" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['moto_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Vision :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="vision" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['vision_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Mission :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="mission" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['mission_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Principal :
                    </div>
                    <div class="main-editprofile-right">
                        <select id="principal" name="principal">
                            <option value="No Principal">No Principal</option>
                            <?php foreach ($data['principal_list'] as $principals) : ?>
                                <option value="<?php echo $principals->full_name; ?>"><?php echo $principals->full_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <span class="error"><?php echo $data['principal_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        School Type :
                    </div>
                    <div class="main-editprofile-right">
                        <select id="school_type" name="school_type">
                            <option value="National Schools">National Schools</option>
                            <option value="Provincial Schools">Provincial Schools</option>
                            <option value="Central Schools">Central Schools</option>
                            <option value="Rural Schools">Rural Schools</option>
                            <option value="Estate Schools">Estate Schools</option>
                        </select>
                    </div>
                    <span class="error"><?php echo $data['school_type_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Student Count :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="student_count" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['student_count_err'] ?></span>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Teacher Count :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="teacher_count" class="textBox">
                    </div>
                    <span class="error"><?php echo $data['teacher_count_err'] ?></span>
                </div>
                <input type="submit" value="Submit" class="submit-btn">
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>