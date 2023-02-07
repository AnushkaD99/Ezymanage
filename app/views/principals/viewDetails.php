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
            <h1>View Details</h1>
            <div class="main-viewDetails">
                <div class="main-viewDetails-buttons">
                    <div class="main-viewDetails-buttons-left btn3">
                        <a href="" >Teachers</a>
                    </div>
                    <div class="main-viewDetails-buttons-center btn3">
                        <a href="" id="principalBtn">Principals</a>
                    </div>
                    <div class="main-viewDetails-buttons-right btn3">
                        <a href="" id="schoolBtn">Schools</a>
                    </div>
                </div>
                <div class="main-viewDetails-details">
                    <div id="schools">
                        <table class="view-table">
                        <h3>School Details</h3>
                            <form action="">
                                <input type="text" placeholder="Search" >
                                <button type="submit"><i class="fa-solid fa-search"></i></button>
                            </form>
                            <tr>
                                <th>School Reg.No</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            <?php foreach($data['schools'] as $school) : ?>
                            <tr>
                                <td> <?php echo $school->id; ?></td>
                                <td> <?php echo $school->name; ?></td>
                                <td> <a href="<?php echo URLROOT; ?>/directors/viewMoreSchoolDetails/<?php echo $school->id; ?>" class="btn3">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div id="principals">
                        <table class="view-table">
                            <h3>Principal Details</h3>
                            <form action="">
                                <input type="text" placeholder="Search" >
                                <button type="submit"><i class="fa-solid fa-search"></i></button>
                            </form>
                            <tr>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            <?php foreach($data['principals'] as $principal) : ?>
                            <tr>
                                <td> <?php echo $principal->id; ?></td>
                                <td> <?php echo $principal->fullName; ?></td>
                                <td> <a href="<?php echo URLROOT; ?>/directors/viewMorePrincipalDetails/<?php echo $principal->id; ?>" class="btn3">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <div id="teachers">
                        <table class="view-table">
                            <h3>Teacher Details</h3>
                            <form action="">
                                <input type="text" placeholder="Search" >
                                <button type="submit"><i class="fa-solid fa-search"></i></button>
                            </form>
                            <tr>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th></th>
                            </tr>
                            <?php foreach($data['teachers'] as $teacher) : ?>
                            <tr>
                                <td> <?php echo $teacher->id; ?></td>
                                <td> <?php echo $teacher->fullName; ?></td>
                                <td> <a href="<?php echo URLROOT; ?>/directors/viewMoreTeacherDetails/<?php echo $teacher->id; ?>" class="btn3">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
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

        var schools = document.getElementById("schools");
        var principals = document.getElementById("principals");
        var teachers = document.getElementById("teachers");
        var schoolBtn = document.getElementByIdr("schoolBtn");
        var principalBtn = document.getElementById("principalBtn");
        var teacherBtn = document.getElementById("teacherBtn");

        schoolBtn.onclick = function(){
            teachers.style.display = 'none';
            principals.style.display = 'none';
            schools.style.display = 'contents';
        }

        principalBtn.onclick = function(){
            teachers.style.display = 'none';
            principals.style.display = 'contents';
            schools.style.display = 'none';
        }

        teacherBtn.onclick = function(){
            teachers.style.display = 'contents';
            principals.style.display = 'none';
            schools.style.display = 'none';
        }
    </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
