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
                    <a href="<?php echo URLROOT; ?>/directors/viewDetails"  class="active"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
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
                    <a href="<?php echo URLROOT; ?>/directors/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
          <div class="logout">
              <hr>
              <a href="../logout.php"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
          </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <h1 class="main-topic">Teacher Details</h1>
            <div class="singlecol">
                <div class="border-box">
                    <div class="row">
                            <div class="row-lable">Full Name</div>
                            <div class="row-data"><?php echo $data['teachers']->fullName; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Name with initials</div>
                            <div class="row-data"><?php echo $data['teachers']->nameWithInitials; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Emloyee Number</div>
                            <div class="row-data"><?php echo $data['teachers']->id; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">NIC</div>
                            <div class="row-data"><?php echo $data['teachers']->NIC; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Address</div>
                            <div class="row-data"><?php echo $data['teachers']->address; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Birthday</div>
                            <div class="row-data"><?php echo $data['teachers']->bday; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">School</div>
                            <div class="row-data"><?php echo $data['teachers']->school; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Designation</div>
                            <div class="row-data"><?php echo $data['teachers']->designation; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Current Grade</div>
                            <div class="row-data"><?php echo $data['teachers']->currentGrade; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Email</div>
                            <div class="row-data"><?php echo $data['teachers']->email; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Contact Number</div>
                            <div class="row-data"><?php echo $data['teachers']->contactNumber; ?></div>
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
