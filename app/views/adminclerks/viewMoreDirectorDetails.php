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
                    <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails" class="active"><i class="fa-solid fa-eye"></i><span class="link">Users</span></a>
                </li>
                <!-- <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
                </li> -->
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/reports"><i class="fa-solid fa-user-check"></i><span class="link">Reports</span></a>
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
            <h1 class="main-topic">Director Details</h1>
            <div class="singlecol">
                <div class="border-box">
                    <div class="row">
                            <div class="row-lable">Full Name</div>
                            <div class="row-data"><?php echo $data['directors']->full_name; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Name with initials</div>
                            <div class="row-data"><?php echo $data['directors']->name_with_initials; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Emloyee Number</div>
                            <div class="row-data"><?php echo $data['directors']->emp_no; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">NIC</div>
                            <div class="row-data"><?php echo $data['directors']->nic; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Address</div>
                            <div class="row-data"><?php echo $data['directors']->address; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Birthday</div>
                            <div class="row-data"><?php echo $data['directors']->birthday; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Designation</div>
                            <div class="row-data"><?php echo $data['directors']->designation; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Email</div>
                            <div class="row-data"><?php echo $data['directors']->email; ?></div>
                    </div>
                    <div class="row">
                            <div class="row-lable">Contact Number</div>
                            <div class="row-data"><?php echo $data['directors']->contact_num; ?></div>
                    </div>
                </div>
                <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails_directors"><div class="backBtn-circle"><i class="fa-solid fa-angle-left"></i> Back</div></a>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
