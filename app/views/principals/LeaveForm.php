<?php require_once APPROOT . '/views/inc/header1.php'; ?>
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
                <a href="<?php echo URLROOT; ?>/principals/leaveForm" class="active"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
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
            <a href="../logout.php"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
        </div>
    </div>

    <!-- //Navigation bar -->
    <div class="content">
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <div class="container">
            <div class="left">
                <div class="topic">
                    <h1>LEAVE FORM</h1>
                </div>
                <div class="forum">
                    <span class="forum-topic">Application For Leave</span>
                    <form action="" method="POST">
                        <div class="forum_box">
                            <div class="forum_con">
                                <label for="reason">Reason for leave :</label><br>
                                <textarea id="reason" name="reason" required></textarea><br>
                                <label for="commencing_date">Date of commencing date :</label><br>
                                <input type="date" id="commencing_date" name="commencing_date" required>
                                <span class="error"><?php echo $data['commencing_date_err'] ?></span>
                                <label for="resuming_date">Date of resuming duties :</label><br>
                                <input type="date" id="resuming_date" name="resuming_date" required>
                                <span class="error"><?php echo $data['resuming_date_err'] ?></span>
                                <!-- <label for="total_leaves">Number of days leave applied for :</label> -->
                                <span class="error"><?php echo $data['interval_err'] ?></span><br>
                                <div class="leave">
                                <lable for="leavetype">Leave type :</lable></br>
                                <select id="leavetype" name="leavetype">
                                    <option value="Casual">Casual</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Other">Other</option>
                                </select>
                                <span class="error"><?php echo $data['leavetype_err']; ?></span>
                                </div>
                            </div>
                        </div>
                        <input class="submit-btn" type="submit">
                    </form>
                </div>
            </div>
            <div class="right">
                <div class="card">
                    <h3>LATEST APPLICATION STATUS</h3>
                    <div class="status-bt">
                        <table>
                            <tr>
                                <th>Commencing Date</th>
                                <th>Resuming_Date</th>
                                <th></th>
                            </tr>
                            <?php foreach($data['leave_details'] as $leave_details) : ?>
                            <tr>
                                <td><?php echo $leave_details->commencing_date ?></td>
                                <td><?php echo $leave_details->resuming_date ?></td>
                                <td> <a href="<?php echo URLROOT; ?>/teachers/LeaveView/<?php echo $leave_details->leave_id; ?>" class="Btn3">More</a></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
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
