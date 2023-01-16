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
                    <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/verifyDetails"><i class="fa-solid fa-user-check"></i><span class="link">Verify Details</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/profile"  class="active"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
          <div class="logout">
              <hr>
              <a href="../logout.php"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
          </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <h1>Edit Profile</h1>
            <form action="profile.php" method="post">
                <div class="main-editprofile">
                    <div class="main-editprofile-dp">
                        <!-- <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $profile_picture; ?>" alt="Profile Picture" class="profile-picture"><br>
                        <label for="profile-picture">Profile Picture</label>
                        <input type="file" id="profile-picture" name="profile-picture" accept =".jpeg, .jpg, .png"> -->
                        <div class="title" style="justify-content: center;">Personal Profile</div>
                        <div class="img">
                          <img src="<?php echo URLROOT; ?>/img/uploads/download.png" alt="user" class="user"  style="width: 100px; height:100px">
                          <input type="file" id="profile-picture" name="profile-picture" accept =".jpeg, .jpg, .png">
                        </div>
                    </div>
                    <div class="main-editprofiler-personal">
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Employee Number :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="emp.num" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Email :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="email" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Contact Number :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="contact.num" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                    </div>
                    <div class="main-editprofile-other">
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Full Name :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="fullName" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Address :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="address" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Birthday :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="birthday" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Zonal :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="zonal" class="textBox" value="<?php //echo $Email ?>">
                            </div> 
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Designation :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="designation" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                NIC :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="nic" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Password :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="password" class="textBox" value="<?php //echo $Email ?>">
                            </div> 
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                Confirm Password :
                            </div>
                            <div class="main-editprofiler-right">
                                <input type="text" name="confirmPassword" class="textBox" value="<?php //echo $Email ?>">
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofiler-left">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let navbar = document.querySelector(".navbar");
        let link = document.querySelector(".link");
        let container = document.querySelector(".container");
        let sidebarBtn = document.querySelector(".fa-bars");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            navbar.classList.toggle("active");
            link.classList.toggle("active");
            container.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                // sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                // link.style.display = 'none';
            } else
                // sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                // link.style.display = '';
        }
    </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
