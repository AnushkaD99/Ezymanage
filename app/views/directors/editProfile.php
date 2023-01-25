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
              <a href="../logout.php"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
          </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <h1>Edit Profile</h1>
            <form action="profile.php" method="post">
                <div class="main-editprofile">
                    <div class="main-editprofile-dp">
                        <!-- <div class="img">
                          <img src="<?php echo $data['users']->dp ?>" alt="user" class="user">
                          <input type="file" id="profile-picture" name="profile-picture" accept =".jpeg, .jpg, .png">
                          <b>User Name : </b><input type="text" name="emp.num" class="textBox" value="<?php echo $data['users']->username ?>">
                        </div> -->
                        <div class="upload">
                            <img src="<?php echo $data['users']->dp ?>" id = "image" alt="user">

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
                                <input type="text" name="emp.num" class="textBox" value="<?php echo $data['users']->userId ?>">
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
                                Zonal :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="zonal" class="textBox" value="<?php echo $data['users']->zonal ?>">
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
                        <div class="main-editprofile-block">
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
                        </div>
                        <button type="submit" class="fullBtn">Update</button>
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
