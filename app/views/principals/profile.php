<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/paysheet"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Paysheet</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/Karyasadanaya"><i class="fa-solid fa-file-lines"></i><span class="link">Karyasadanaya</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/leaveForm"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/report_issue"><i class="fa-brands fa-wpforms"></i><span class="link">Report Issue</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/school_details"><i class="fa-solid fa-eye"></i><span class="link">School Details</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/appointments"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/promotions"><i class="fa-solid fa-angles-up"></i><span class="link">Promotions</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/salary_increment"><i class="fa-sharp fa-solid fa-file-circle-plus"></i><span class="link">Salary Increment Form</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/transfers"><i class="fa-solid fa-arrows-rotate"></i><span class="link">Transfers</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/school_management"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Management</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/projects"><i class="fa-solid fa-building"></i><span class="link">School Projects</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/profile" class="active"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
                        <img src="<?php echo URLROOT; ?>/img/uploads/download.png" alt="user" class="user"><br>
                        <b>User Name : </b><?php echo $data['users']->username ?>
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
                            <input type="text" name="contact.num" class="textBox" value="<?php echo $data['users']->contact ?>">
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
                            Name with initials :
                        </div>
                        <div class="main-editprofile-right">
                            <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->nameWithInitials ?>">
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
                    <a href="<?php echo URLROOT; ?>/principals/editProfile"><div class="fullBtn">Edit Profile</div></a>
                </div>
            </div>
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
