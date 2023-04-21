<?php require_once APPROOT . '/views/inc/header-p.php'; ?>
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
                <a href="<?php echo URLROOT; ?>/principals/school_management" class="active"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Management</span></a>
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
        <div class="tittle">
            <h1>School Management</h1>
        </div>
        <div class="content">
            <div class="buttons">
                <div class="select-btn select-btn1" id="select-btn1">Paysheets</div>
                <div class="select-btn select-btn2 active" id="select-btn2">Leave forms</div>
                <div class="select-btn select-btn3" id="select-btn3">Karyasadana</div>
                <div class="select-btn select-btn4" id="select-btn4">Issues</div>
                <div class="select-btn select-btn5" id="select-btn5">Salary Increments</div>
                <div class="select-btn select-btn6" id="select-btn6">Promotions</div>
                <div class="select-btn select-btn7" id="select-btn7">Transfers</div>
            </div>
            <div class="space"></div>
            <hr>
            <div class="space"></div>

            <!-- Leave Form -->
            <div id="paysheet">
                <table class="row-space" id="table-customize">
                    <h3 id="center">Submitted leave forms for principal approval</h3>
                    <div class="space"></div>
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>School</th>
                        <th>Commencing date</th>
                        <th>Resuming date</th>
                        <th>leave_type</th>
                        <th>reason</th>
                        <th colspan=2>Approve or Reject</th>
                    </tr>
                    <?php foreach ($data['leaves'] as $leave_details) : ?>
                        <tr>
                            <td><?php echo $leave_details->name ?></td>
                            <td><?php echo $leave_details->designation ?></td>
                            <td><?php echo $data['school'] ?></td>
                            <td><?php echo $leave_details->commencing_date ?></td>
                            <td><?php echo $leave_details->resuming_date ?></td>
                            <td><?php echo $leave_details->leave_type ?></td>
                            <td><?php echo $leave_details->reason ?></td>
                            <form action="" method="POST">
                                <input type="hidden" name="title" value="leaves_tbl">
                                <input type="hidden" name="form_id" value="<?php echo $leave_details->leave_id ?>">
                                <td><input type="submit" name="status" class="approve-btn" value="Appprove"></td>
                                <td><input type="submit" name="status" class="reject-btn" value="Reject"></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <!-- Karyasadana -->
            <div id="karyasadana">
                <table class="row-space" id="table-customize">
                    <h3 id="center">Submitted karyasadaka for principal approval</h3>
                    <div class="space"></div>
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>School</th>
                        <th>Submitted date</th>
                        <th>view more</th>
                        <th colspan=2>Approve or Reject</th>
                    </tr>
                    <?php foreach ($data['karyasadana'] as $karyasadana_details) : ?>
                        <tr>
                            <td><?php echo $karyasadana_details->name ?></td>
                            <td><?php echo $karyasadana_details->designation ?></td>
                            <td><?php echo $karyasadana_details->school ?></td>
                            <td><?php echo $karyasadana_details->submitted_date ?></td>
                            <td><a href="<?php echo URLROOT; ?>/teachers/LeaveView/<?php echo $karyasadana_details->karyasadana_id; ?>" class="view-btn">view</a></td>
                            <form action="" method="POST">
                                <input type="hidden" name="title" value="karyasadana_tbl">
                                <input type="hidden" name="form_id" value="<?php echo $karyasadana_details->karyasadana_id ?>">
                                <td><input type="submit" name="status" class="approve-btn" value="Appprove"></td>
                                <td><input type="submit" name="status" class="reject-btn" value="Reject"></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

            <!-- Issues -->
            <div id="issues">
                <table class="row-space" id="table-customize">
                    <h3 id="center">Submitted Issues for principal approval</h3>
                    <div class="space"></div>
                    <tr>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>School</th>
                        <th>Submitted date</th>
                        <th>Issue Category</th>
                        <th>Issue</th>
                        <th colspan=2>Approve or Reject</th>
                    </tr>
                    <?php foreach ($data['issues'] as $issue_details) : ?>
                        <tr>
                            <td><?php echo $issue_details->name ?></td>
                            <td><?php echo $issue_details->designation ?></td>
                            <td><?php echo $issue_details->school ?></td>
                            <td><?php echo $issue_details->submitted_date ?></td>
                            <td><?php echo $issue_details->issue_cat ?></td>
                            <td><?php echo $issue_details->issue ?></td>
                            <form action="" method="POST">
                                <input type="hidden" name="title" value="issue_tbl">
                                <input type="hidden" name="form_id" value="<?php echo $issue_details->issue_id ?>">
                                <td><input type="submit" name="status" class="approve-btn" value="Appprove"></td>
                                <td><input type="submit" name="status" class="reject-btn" value="Reject"></td>
                            </form>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    var form1 = document.getElementById("frm1");
    var paysheet = document.getElementById("paysheet");
    var karyasadana = document.getElementById("karyasadana");
    var issues = document.getElementById("issues");
    var form5 = document.getElementById("frm5");

    var btn1 = document.getElementById("select-btn1");
    var btn2 = document.getElementById("select-btn2");
    var btn3 = document.getElementById("select-btn3");
    var btn4 = document.getElementById("select-btn4");
    var btn5 = document.getElementById("select-btn5");
    var btn6 = document.getElementById("select-btn6");
    var btn7 = document.getElementById("select-btn7");

    // btn1.onclick = function(){
    //     form1.style.display = 'none';
    //     form2.style.display = 'contents';
    // }

    btn2.onclick = function() {
        paysheet.style.display = 'contents';
        karyasadana.style.display = 'none';
        issues.style.display = 'none';
    }

    btn3.onclick = function() {
        paysheet.style.display = 'none';
        karyasadana.style.display = 'contents';
        issues.style.display = 'none';
        btn3.classList.toggle("active");
    }

    btn4.onclick = function() {
        paysheet.style.display = 'none';
        karyasadana.style.display = 'none';
        issues.style.display = 'contents';
        btn4.classList.toggle("active");
    }

    // btn5.onclick = function(){
    //     form2.style.display = 'none';
    //     form1.style.display = 'contents';
    // }

    // btn6.onclick = function(){
    //     form3.style.display = 'none';
    //     form2.style.display = 'contents';
    // }
    // btn7.onclick = function(){
    //     form4.style.display = 'none';
    //     form3.style.display = 'contents';
    // }

    const buttons = document.querySelectorAll('.select-btn');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            buttons.forEach(btn => {
                btn.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>