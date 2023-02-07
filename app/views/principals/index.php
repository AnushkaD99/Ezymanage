<?php require_once APPROOT . '/views/inc/header1.php'; ?>
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/principals/index" class="active"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
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
                <a href="<?php echo URLROOT; ?>/principals/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
            </li>
        </ul>
        <div class="logout">
            <hr>
            <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
        </div>
    </div>
<div class="content">
<?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <div class="container">
        <div class="left">
            <!-- <div class="topic">
                <h1>Hey <?php echo $Username; ?>,<br>Welcome to Ezymanage System</h1>
            </div> -->
            <div class="forum">
                <img src="<?php echo URLROOT; ?>/img/logo.png" alt="">
                <h1>Hey <?php echo $_SESSION['user_name']; ?>,<br>Welcome to Ezymanage!</h1>
            </div>
            <div class="forum">
                <div class="dtl">
                    <h3>Number of days remaining in current school</h3>
                    <div class="dtl-k">
                        <div class="left">
                            <div class="dtls-card">
                                <span class="num">04</span>
                                <span>Years</span>
                            </div>
                            <div  class="dtls-card">
                                <span class="num">10</span>
                                <span>Months</span>
                            </div>
                            <div class="dtls-card">
                                <span class="num">22</span>
                                <span>Days</span>
                            </div>
                        </div>
                        <div class="right">
                            <img src="../images/Calendar.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="card">
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

<?php require APPROOT . '/views/inc/footer.php'; ?>
