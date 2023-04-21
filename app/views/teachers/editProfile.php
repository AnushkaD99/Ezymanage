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
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/promotions"><i class="fa-solid fa-angles-up"></i><span class="link">Promotions</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/salary_increment"><i class="fa-sharp fa-solid fa-file-circle-plus"></i><span class="link">Salary Increment Form</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/transfers"><i class="fa-solid fa-arrows-rotate"></i><span class="link">Transfers</span></a>
            </li>
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
            <h1>Edit Profile</h1>
            <form action="" enctype="multipart/form-data" method="POST">
                <div class="main-editprofile">
                    <div class="main-editprofile-dp">
                        <!-- <div class="img">
                          <img src="<?php echo $data['users']->dp ?>" alt="user" class="user">
                          <input type="file" id="profile-picture" name="profile-picture" accept =".jpeg, .jpg, .png">
                          <b>User Name : </b><input type="text" name="emp.num" class="textBox" value="<?php echo $data['users']->username ?>">
                        </div> -->
                        <div class="upload">
                            <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['users']->dp ?>" id = "image" alt="user">

                            <div class="rightRound" id = "upload">
                                <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
                                <i class = "fa fa-camera"></i>
                            </div>

                            <!-- <div class="leftRound" id = "cancel" style = "display: none;">
                            <i class = "fa fa-times"></i>
                            </div>
                            <div class="rightRound" id = "confirm" style = "display: none;">
                            <input type="submit">
                            <i class = "fa fa-check"></i>
                            </div> -->
                        </div>
                    </div>
                    <div class="main-editprofile-personal">
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Employee Number :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="emp_num" class="textBox" value="<?php echo $data['users']->userId ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Email :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="email" class="textBox" value="<?php echo $data['users']->email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Contact Number :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="contact" class="textBox" value="<?php echo $data['users']->contact ?>">
                            </div>
                        </div>
                    </div>
                    <div class="main-editprofile-other">
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Full Name :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->full_name ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Name with Initials :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="nameWithInitials" class="textBox" value="<?php echo $data['users']->nameWithInitials ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Address :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="address" class="textBox" value="<?php echo $data['users']->address ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Birthday :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="birthday" class="textBox" value="<?php echo $data['users']->birthday ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                School :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="school" class="textBox" value="<?php echo $data['users']->school ?>">
                            </div> 
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Designation :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="designation" class="textBox" value="<?php echo $data['users']->designation ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                NIC :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="nic" class="textBox" value="<?php echo $data['users']->NIC ?>">
                            </div>
                        </div>
                        <!-- <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Password :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="password" class="textBox" placeholder="***************">
                            </div> 
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Confirm Password :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="confirmPassword" class="textBox" placeholder="***************">
                            </div>
                        </div> -->
                        <div class="col-2-btn">
                            <input type="submit" value="Change" class="submit-btn">
                            <input type="reset" value="Reset" class="submit-btn">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>

        document.getElementById("profile-picture").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(profile-picture.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }
    </script>

<script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("upload").style.display = "none";
      }

    //   var userImage = document.getElementById('image').src;
    //   document.getElementById("cancel").onclick = function(){
    //     document.getElementById("image").src = userImage; // Back to previous image

    //     document.getElementById("cancel").style.display = "none";
    //     document.getElementById("confirm").style.display = "none";

    //     document.getElementById("upload").style.display = "block";
    //   }
    </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
