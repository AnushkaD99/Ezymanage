


<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/index" class="active"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
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
            <!-- <li>
                <a href="<?php echo URLROOT; ?>/teachers/promotions"><i class="fa-solid fa-angles-up"></i><span class="link">Promotions</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/salary_increment"><i class="fa-sharp fa-solid fa-file-circle-plus"></i><span class="link">Salary Increment Form</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/transfers"><i class="fa-solid fa-arrows-rotate"></i><span class="link">Transfers</span></a>
            </li> -->
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
            </li>
        </ul>
        <div class="logout">
            <hr>
            <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
        </div>
    </div>
    <!-- End sidebar -->
    <div class="main">
        <div class="main-single">
            <div class="main-single-up">
                <table>
                    <tr>
                        <td><img src="<?php echo URLROOT; ?>/img/logo.png" alt="logo"></td>
                    </tr>
                    <tr>
                        <td>Hey<span id="userName"><?php echo $_SESSION['user_name']; ?>,</span></td>
                    </tr>
                    <tr>
                        <td>Welcome to Ezymanage!</td>
                    </tr>
                </table>
            </div>
            <div class="main-single-down-left">
                <div class="card-set-margin">
                    <h2>Status</h2>
                    <div class="card-set">
                        <div class="card">
                            <h3>Remaining Leave Details</h3>
                            <div class="details">
                                <div class="details-card">
                                    <span>Casual Leave</span>
                                    <span class="num">42</span>
                                </div>
                                <div class="details-card">
                                    <span>Medical Leave</span>
                                    <span class="num">42</span>
                                </div>
                                <div class="details-card">
                                    <span>Other Leave</span>
                                    <span class="num">42</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-single-down-right">
                <div class="card-set-margin">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                            <h1>Calender</h1>
                            <span></span>
                        </div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/inc/upload_successful_mzg.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>