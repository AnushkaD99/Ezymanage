<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
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
                <a href="<?php echo URLROOT; ?>/teachers/leaveForm"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/report_issue"><i class="fa-brands fa-wpforms"></i><span class="link">Report Issue</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/school_details" class="active"><i class="fa-solid fa-eye"></i><span class="link">School Details</span></a>
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
            <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
        </div>
    </div>
    <!-- End sidebar -->
    <div class="main">
        <h1><?php echo $data['schools']->name; ?> Details</h1>
        <div class="main-col-2">
            <div class="main-col-2-left">
                <div class="border-box">
                    <h4>School Details</h4>
                    <ul>
                        <li>Name: <?php echo $data['schools']->name; ?></li>
                        <li>Address : <?php echo $data['schools']->address; ?></li>
                        <li>Phone Number : <?php echo $data['schools']->phoneNumber; ?></li>
                        <li>Principal Name : <?php echo $data['schools']->principal; ?></li>
                    </ul>
                </div>
                <br>
                <div class="border-box">
                    <h4>The Moto</h4>
                    <span><?php echo $data['schools']->moto; ?></span>
                </div>
            </div>
            <div class="main-col-2-right">
                <div class="border-box">
                    <h4>Vision</h4>
                    <span><?php echo $data['schools']->vision; ?></span>
                </div>
                <br>
                <div class="border-box">
                    <h4>Mision</h4>
                    <span><?php echo $data['schools']->mission; ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>