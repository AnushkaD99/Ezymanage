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
                <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
            </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <div class="main-2col">
                <div class="main-2col-left">
                    <div class="tittle">
                        <h1>LEAVE FORM</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="content">
                            <div class="border-box">
                                <label for="reason">Reason for leave :</label><br>
                                <textarea id="reason" name="reason" required></textarea><br>
                                <div class="space"></div>
                                <label for="commencing_date">Date of commencing date :</label><br>
                                <input type="date" id="commencing_date" name="commencing_date" required>
                                <span class="error"><?php echo $data['commencing_date_err'] ?></span>
                                <div class="space"></div>
                                <label for="resuming_date">Date of resuming duties :</label><br>
                                <input type="date" id="resuming_date" name="resuming_date" required>
                                <span class="error"><?php echo $data['resuming_date_err'] ?></span>
                                <div class="space"></div>
                                <!-- <label for="total_leaves">Number of days leave applied for :</label> -->
                                <span class="error"><?php //echo $data['interval_err'] ?></span><br>
                                    <lable for="leavetype">Leave type :</lable></br>
                                    <select id="leavetype" name="leavetype">
                                        <option value="Casual">Casual</option>
                                        <option value="Medical">Medical</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span class="error"><?php echo $data['leavetype_err']; ?></span>
                            </div>
                            <input class="submit-btn" type="submit">
                        </div>
                    </form>
                </div>

                <div class="main-2col-right">
                    <div class="content">
                        <h3 id="center">Remaining Leave Details</h3>
                        <table class="row-space">
                            <tr>
                                <td>Casual Leave</td>
                                <td class="align-right">42</td><a href=""></a>
                            </tr>
                            <tr>
                                <td>Medical Leave</td>
                                <td class="align-right">42<a href=""></a>
                            </tr>
                            <tr>
                                <td>Medical Leave</td>
                                <td class="align-right">42</td>
                        </table>
                    </div>
                    <div class="content" id="center">
                    <h3 id="center">PREVIOUS LEAVE FORM</h3>
                        <table class="row-space">
                            <tr>
                                <th>Commencing Date</th>
                                <th>Resuming_Date</th>
                                <th></th>
                            </tr>
                            <?php foreach($data['leave_details'] as $leave_details) : ?>
                            <tr>
                                <td><?php echo $leave_details->commencing_date ?></td>
                                <td><?php echo $leave_details->resuming_date ?></td>
                                <td class="align-right"><a href="<?php echo URLROOT; ?>/teachers/LeaveView/<?php echo $leave_details->id; ?>" class="view-btn">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <div class="submit-btn">See More</div>
                    </div>
                    <div class="content">
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
<?php require APPROOT . '/views/inc/footer.php'; ?>   
