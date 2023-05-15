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
                    <a href="<?php echo URLROOT; ?>/principals/school_details" class="active"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/appointments"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
                </li>
                <!-- <li>
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
                </li> -->
                <!-- <li>
                    <a href="<?php echo URLROOT; ?>/principals/projects"><i class="fa-solid fa-building"></i><span class="link">School Projects</span></a>
                </li> -->
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
            <div class="logout">
                <hr>
                <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
            </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <h1 class="main-topic">Principal Details</h1>
            <div class="singlecol">
                <div class="border-box">
                    <div class="row">
                            <div class="row-lable">Full Name</div>
                            <div class="row-data"><?php echo $data['principals']->fullName; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Name with initials</div>
                            <div class="row-data"><?php echo $data['principals']->nameWithInitials; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Emloyee Number</div>
                            <div class="row-data"><?php echo $data['principals']->id; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">NIC</div>
                            <div class="row-data"><?php echo $data['principals']->NIC; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Address</div>
                            <div class="row-data"><?php echo $data['principals']->address; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Birthday</div>
                            <div class="row-data"><?php echo $data['principals']->bday; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">School</div>
                            <div class="row-data"><?php echo $data['principals']->school; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Designation</div>
                            <div class="row-data"><?php echo $data['principals']->designation; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Current Grade</div>
                            <div class="row-data"><?php echo $data['principals']->currentGrade; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Email</div>
                            <div class="row-data"><?php echo $data['principals']->email; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Contact Number</div>
                            <div class="row-data"><?php echo $data['principals']->contactNumber; ?></div>
                    </div>
                </div>
                <a href="<?php echo URLROOT; ?>/directors/viewDetails"><div class="backBtn-circle"><i class="fa-solid fa-angle-left"></i> Back</div></a>
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
