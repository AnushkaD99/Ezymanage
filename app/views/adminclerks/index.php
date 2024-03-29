<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/index" class="active"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">Users</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
            </li>
            <!-- <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/verifyDetails"><i class="fa-solid fa-user-check"></i><span class="link">Verify Details</span></a>
                </li> -->
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
                <div class="card-set card-set-margin">
                    <div class="dashboard-items">
                        <div>
                            <div class="h1-dashboard">
                                <?php echo $data['teacher_count']->count; ?>
                            </div><br>
                            <div class="h3-dashboard">
                                All Teachers
                            </div>
                        </div>
                        <div class="dashboard-icons">
                            <div class="icon"><i class="fa-solid fa-person-chalkboard"></i></div>
                        </div>
                    </div>
                    <div class="dashboard-items">
                        <div>
                            <div class="h1-dashboard">
                                <?php echo $data['principal_count']->count; ?>
                            </div><br>
                            <div class="h3-dashboard">
                                All Principals
                            </div>
                        </div>
                        <div class="dashboard-icons">
                            <div class="icon"><i class="fa-solid fa-person-chalkboard"></i></div>
                        </div>
                    </div>
                    <div class="dashboard-items">
                        <div>
                            <div class="h1-dashboard">
                                <?php echo $data['volunteer_count']->count; ?>
                            </div><br>
                            <div class="h3-dashboard">
                                All Volunteers
                            </div>
                        </div>
                        <div class="dashboard-icons">
                            <div class="icon"><i class="fa-solid fa-person-chalkboard"></i></div>
                        </div>
                    </div>
                    <div class="dashboard-items">
                        <div>
                            <div class="h1-dashboard">
                                <?php echo $data['schools_count']->count; ?>
                            </div><br>
                            <div class="h3-dashboard">
                                All Schools
                            </div>
                        </div>
                        <div class="dashboard-icons">
                            <div class="icon"><i class="fa-solid fa-person-chalkboard"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-single-down-right">
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
<?php require_once APPROOT . '/views/inc/upload_successful_mzg.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>