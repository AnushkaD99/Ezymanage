<?php require_once APPROOT . '/views/inc/header1.php'; ?>
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/paysheet"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Paysheet</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/Karyasadanaya"><i class="fa-solid fa-file-lines"></i><span class="link">Karyasadanaya</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/leaveForm"  class="active"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
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
                    <div class="view">
                        <div class="for um_box">
                            <div class="forum_view-top">
                                <div>
                                    <span class="title">Form No :</span>
                                    <span><?php echo $data['leave']->leave_id ?></span>
                                </div>
                                <div>
                                    <span class="title">Submitted date :</span>
                                    <span><?php echo $data['leave']->submitted_date ?></span>
                                </div>
                            </div>
                            <div class="forum_view">
                                <span class="title">Name:</span>
                                <div class="spc"><?php echo $_SESSION['user_name']?></div>
                            </div>
                            <div class="forum_view">
                                <span class="title">Designation :</span>
                                <div class="spc">Teacher</div>
                            </div>
                            <!-- <div class="forum_view">
                                <span class="title">Date of First Appointment:</span>
                                <div class="spc"><?php echo $_SESSION['user_name'] ?></div>
                            </div> -->
                            <div class="forum_view">
                                <span class="title">Date of Commencing leave :</span>
                                <div class="spc"><?php echo $data['leave']->commencing_date ?></div>
                            </div>
                            <div class="forum_view">
                                <span class="title">Date of resuming duties :</span>
                                <div class="spc"><?php echo $data['leave']->resuming_date ?></div>
                            </div>
                            <div class="forum_view">
                                <span class="title">Leave type :</span>
                                <div class="spc"><?php echo $data['leave']->leave_type ?></div>
                            </div>
                            <!-- <div class="forum_view">
                                <span class="title">Number of days leave appplied for :</span>
                                <div class="spc"><?php echo $interval ?></div>
                            </div> -->
                            <div class="forum_view">
                                <span class="title">Reason for leave :</span>
                                <div class="spc"><?php echo $data['leave']->reason ?></div>
                            </div>
                            <!-- <div class="forum_view">
                                <span class="title">Principal's approvement :</span>
                                <div class="spc"><?php echo $Username ?></div>
                            </div> -->
                            <div class="forum_view">
                                <a href="<?php echo URLROOT; ?>/teachers/LeaveForm"><button class="submit-btn">Back</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="card">
                    <h3>LATEST APPLICATION STATUS</h3>
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
                                <td> <a href="<?php echo URLROOT; ?>/teachers/LeaveView/<?php echo $leave_details->id; ?>" class="Btn3">More</a></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>