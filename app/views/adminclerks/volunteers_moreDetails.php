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
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/volunteers" class="active"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/verifyDetails"><i class="fa-solid fa-user-check"></i><span class="link">Verify Details</span></a>
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
        <h1 class="main-topic">Volunteer Details</h1>
        <div class="singlecol">
            <div class="border-box">
                <div class="row">
                    <div class="row-lable">Registration Number :</div>
                    <div class="row-data"><?php echo $data['volunteers']->id; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Name :</div>
                    <div class="row-data"><?php echo $data['volunteers']->first_name . " " . $data['volunteers']->last_name; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">NIC :</div>
                    <div class="row-data"><?php echo $data['volunteers']->nic; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Address :</div>
                    <div class="row-data"><?php echo $data['volunteers']->address; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Contact Number :</div>
                    <div class="row-data"><?php echo $data['volunteers']->contact_num; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Email</div>
                    <div class="row-data"><?php echo $data['volunteers']->email; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Birthday :</div>
                    <div class="row-data"><?php echo $data['volunteers']->birthday; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Gender :</div>
                    <div class="row-data"><?php echo $data['volunteers']->gender; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Contact Number</div>
                    <div class="row-data"><?php echo $data['volunteers']->contact_num; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Subjects can be teach :</div>
                    <div class="row-data"><?php echo $data['volunteers']->subjects; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Qualifications :</div>
                    <div class="row-data"><?php echo $data['volunteers']->qualifications; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Other Details :</div>
                    <div class="row-data"><?php echo $data['volunteers']->other; ?></div>
                </div>
            </div>
            <a href="<?php echo URLROOT; ?>/adminclerks/volunteers">
                <div class="backBtn-circle"><i class="fa-solid fa-angle-left"></i> Back</div>
            </a>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>