<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/index"><i class="fa-solid fa-house"></i><span></span>Home</a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-file-invoice-dollar"></i><span>Paysheet</span></a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-file-lines"></i><span>Karyasadanaya</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/leaveForm" class="active"><i class="fa-solid fa-file"></i><span>Leave Form</span></a>
            </li>
            <li>
                <a href="#"><i class="fa-brands fa-wpforms"></i><span>Report Issue</span></a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-eye"></i><span>School Details</span></a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-calendar-plus"></i><span>Appointments</span></a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-angles-up"></i><span>Promotions</span></a>
            </li>
            <li>
                <a href="#"><i class="fa-sharp fa-solid fa-file-circle-plus"></i><span>Salary Increment Form</span></a>
            </li>
            <li>
                <a href="#"><i class="fa-solid fa-arrows-rotate"></i><span>Transfers</span></a li>
            <li>
                <a href="#"><i class="fa-solid fa-circle-user"></i><span>Profile</span></a>
            </li>
        </ul>
        <div class="logout">
            <hr>
            <a href="logout.php"><i class="fa-solid fa-sign-out"></i><span>Logout</span></a>
        </div>
    </div>

    <!-- //Navigation bar -->
    <div class="content">
        <div class="navbar">
            <div class="navbar__left">
                <div class="nav-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="logo">
                    <img src="<?php echo URLROOT; ?>/img/logo.png" alt="logo">
                </div>
            </div>
            <div class="navbar__right">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-bell"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-circle-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span id="userName"><?php //echo $_SESSION('username') ?></span><br>
                            <span id="designation">Teacher</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
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
                                <span class="error"><?php //echo $commencing_dateErr ?></span>
                                <label for="resuming_date">Date of resuming duties :</label><br>
                                <input type="date" id="resuming_date" name="resuming_date" required>
                                <span class="error"><?php //echo $resuming_dateErr ?></span>
                                <label for="total_leaves">Number of days leave applied for :</label>
                                <span class="error"><?php //echo $intervalErr ?></span><br>
                                <div class="leave">
                                    <div class="leave_t">
                                        <label for="casual">Casual :</label>
                                        <input type="number" id="casual" name="casual" min="0" max="42" placeholder="0">
                                    </div>
                                    <div class="leave_t">
                                        <label for="medical">Medical :</label>
                                        <input type="number" id="medical" name="medical" min="0" max="42" placeholder="0">
                                    </div>
                                    <div class="leave_t">
                                        <label for="other">Other :</label>
                                        <input type="number" id="other" name="other" min="0" max="42" placeholder="0">
                                    </div>
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
                        <span>Pending ...</span>
                        <a href="Leave_view.php?leave_id=<?php echo $last_id;?>">
                            <button>View</button>
                        </a>
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
