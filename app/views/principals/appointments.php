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
                    <a href="<?php echo URLROOT; ?>/principals/appointments"  class="active"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
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
            <div class="main-2col">
                <div class="main-2col-left">
                    <div class="tittle">
                        <h1>APPOINTMENTS</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="content">
                            <h3 id="center">Application For Appointments</h3>
                            <div class="space"></div>
                            <div class="border-box">
                                <label for="reason">Reason for appointment</label><br>
                                <textarea name="reason" placeholder="Reason"></textarea><br>
                                <?php echo $data['reason_err']; ?>
                                <div class="space"></div>
                                <label for="date">Appointment Required Date :</label><br>
                                <input type="date" name="date">
                                <?php //echo $date_err; ?>
                                <div class="space"></div>
                                <label for="Problems1">Appointment Required Time :</label><br>
                                <table>
                                    <tr>
                                        <td><input type="time" name="start_time"></td>
                                        <td id="center">To</td>
                                        <td><input type="time" name="end_time"></td>
                                    </tr>
                                </table>
                                <?php //echo $date_err; ?>
                            </div>
                            <input type="submit" value="Submit" class="submit-btn">
                        </div>
                    </form>
                </div>
                <div class="main-2col-right">
                    <div class="content" id="center">
                        <h3>LATEST APPLICATION STATUS</h3>
                        Pending....
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
                    <div class="content">
                        <h3 id="center"><?php echo date("Y F j");?></h3>
                        <!-- <table class="row-space">
                            <tr>
                                <th>Year</th>
                                <th></th>
                            </tr>
                            <?php foreach($data['karyasadana_details'] as $karyasadana_details) : ?>
                            <tr>
                                <td><?php echo $karyasadana_details->end_date ?></td>
                                <td class="align-right"><a href="<?php echo URLROOT; ?>/teachers/karyasadanaView/<?php echo $karyasadana_details->karyasadana_id; ?>" class="view-btn">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table> -->
                        <div class="submit-btn">See More</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
