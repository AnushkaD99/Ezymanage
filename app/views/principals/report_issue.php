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
                    <a href="<?php echo URLROOT; ?>/principals/report_issue" class="active"><i class="fa-brands fa-wpforms"></i><span class="link">Report Issue</span></a>
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
            <div class="main-2col">
                <div class="main-2col-left">
                    <div class="tittle">
                        <h1>REPORT ISSUES</h1>
                    </div>
                    <div class="content">
                        <h3 id="center">Select issue type</h3>
                        <div class="col-2-btn">
                            <div class="2col-btn-left submit-btn" id="schoolbtn">School</div>
                            <div class="col-2-btn-right submit-btn" id="peronalbtn">Personal</div>
                        </div>
                        <div class="space"></div>

                        <!-- Form for school issues -->
                        <div id="school">
                            <form action="" method="POST">
                                <div class="border-box">
                                    <h3 id="center">Application for submit school issues</h3>
                                    <input type="hidden" name="issue_type" value="school">
                                    <label for="issue_type">Issue Type:</label>
                                    <select id="issue_type" name="issue_cat">
                                        <option value="">Select an option</option>
                                        <option value="Category 1">category 1</option>
                                        <option value="Category 2">category 2</option>
                                        <option value="Category 3">category 3</option>
                                    </select>
                                    <div class="space"></div>
                                    <label for="description">Issue Description:</label>
                                    <textarea id="description" name="description" rows="5" cols="30"></textarea>
                                    <div class="space"></div>
                                </div>
                                <input type="submit" value="Submit" class="submit-btn">
                            </form>
                        </div>

                        <!-- Form for personal issue -->
                        <div id="personal">
                            <form action="" method="POST">
                            <div class="border-box">
                                <h3 id="center">Application for submit Personal issues</h3>
                                <input type="hidden" name="issue_type" value="personal">
                                <label for="issue_type">Issue Type:</label>
                                <select id="issue_type" name="issue_cat">
                                    <option value="">Select an option</option>
                                    <option value="Category 1">category 1</option>
                                    <option value="Category 2">category 2</option>
                                    <option value="Category 3">category 3</option>
                                </select>
                                <div class="space"></div>
                                <label for="description">Issue Description:</label>
                                <textarea id="description" name="description" rows="5" cols="30"></textarea>
                                <div class="space"></div>
                            </div>
                            <input type="submit" value="Submit" class="submit-btn">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main-2col-right">
                    <div class="content">
                        <h3 id="center">Reported issues history</h3>
                        <table class="row-space">
                            <tr>
                                <th>Issue type</th>
                                <th>Issue category</th>
                                <th>Description</th>
                            </tr>
                            <?php foreach($data['submitted_issues'] as $details) : ?>
                            <tr>
                                <td><?php echo $details->issue_type ?></td>
                                <td><?php echo $details->issue_cat ?></td>
                                <td><?php echo $details->issue ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <div class="submit-btn">See More</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var form1 = document.getElementById("school");
        var form2 = document.getElementById("personal");

        var School = document.getElementById("schoolbtn");
        var Personal = document.getElementById("peronalbtn");

        School.onclick = function(){
            form1.style.display = 'contents';
            form2.style.display = 'none';
        }

        Personal.onclick = function(){
            form2.style.display = 'contents';
            form1.style.display = 'none';
        }

    </script>

<?php require APPROOT . '/views/inc/footer.php'; ?>   
