<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/directors/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/directors/viewDetails" class="active"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/directors/appointments"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/directors/school_management"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Management</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/directors/projects"><i class="fa-solid fa-building"></i><span class="link">School Projects</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/directors/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
                        <li>Phone Number : <?php echo $data['schools']->contact_num; ?></li>
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
        <a href="<?php echo URLROOT; ?>/directors/viewDetails_schools">
            <div class="backBtn-circle"><i class="fa-solid fa-angle-left"></i> Back</div>
        </a>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>