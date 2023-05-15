<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">Users</span></a>
            </li>
            <!-- <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
            </li> -->
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/reports" class="active"><i class="fa-solid fa-user-check"></i><span class="link">Reports</span></a>
            </li>
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
        <div class="tittle">
            <h1>Reports</h1>
        </div>
        <div class="content">
            <div class="card-set">
                <div class="card-set-margin">
                    <div class="card-set">
                        <a href="<?php echo URLROOT; ?>/adminclerks/teacher_reports" class="dashboard-items">
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
                        </a>
                        <a href="<?php echo URLROOT; ?>/adminclerks/principal_reports" class="dashboard-items">
                            <div>
                                <div class="h1-dashboard">
                                    <?php echo $data['principal_count']->count; ?>
                                </div><br>
                                <div class="h3-dashboard">
                                    All Principals
                                </div>
                            </div>
                            <div class="dashboard-icons">
                                <div class="icon"><i class="fa-solid fa-person"></i></div>
                            </div>
                        </a>
                        <a href="<?php echo URLROOT; ?>/adminclerks/volunteer_reports" class="dashboard-items">
                            <div>
                                <div class="h1-dashboard">
                                    <?php echo $data['volunteer_count']->count; ?>
                                </div><br>
                                <div class="h3-dashboard">
                                    All Volunteers
                                </div>
                            </div>
                            <div class="dashboard-icons">
                                <div class="icon"><i class="fa-solid fa-handshake"></i></div>
                            </div>
                        </a>
                        <a href="<?php echo URLROOT; ?>/adminclerks/school_reports" class="dashboard-items">
                            <div>
                                <div class="h1-dashboard">
                                    <?php echo $data['schools_count']->count; ?>
                                </div><br>
                                <div class="h3-dashboard">
                                    All Schools
                                </div>
                            </div>
                            <div class="dashboard-icons">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                            </div>
                        </a>
                        <!-- <a href="<?php echo URLROOT; ?>/adminclerks/schoolClerks_reports" class="dashboard-items">
                            <div>
                                <div class="h1-dashboard">
                                    <?php echo $data['schools_count']->count; ?>
                                </div><br>
                                <div class="h3-dashboard">
                                    All School Cleks
                                </div>
                            </div>
                            <div class="dashboard-icons">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                            </div>
                        </a>
                        <a href="<?php echo URLROOT; ?>/adminclerks/otherClerks_reports" class="dashboard-items">
                            <div>
                                <div class="h1-dashboard">
                                    <?php echo $data['schools_count']->count; ?>
                                </div><br>
                                <div class="h3-dashboard">
                                    Other Cleks
                                </div>
                            </div>
                            <div class="dashboard-icons">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>