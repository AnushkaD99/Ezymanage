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
        <h1>View Details</h1>
        <div class="main-viewDetails-buttons">
            <a href="<?php echo URLROOT; ?>/directors/viewDetails">
                <div class="main-viewDetails-buttons-1 select-btn" id="select-btn1">Teachers</div>
            </a>
            <a href="<?php echo URLROOT; ?>/directors/viewDetails_principal">
                <div class="main-viewDetails-buttons-2 select-btn" id="select-btn2">Principals</div>
            </a>
            <a href="<?php echo URLROOT; ?>/directors/viewDetails_directors">
                <div class="main-viewDetails-buttons-3 select-btn" id="select-btn3">Directors</div>
            </a>
            <div class="main-viewDetails-buttons-4 dropdown">
                <div class="select-btn dropbtn active">
                    Clerks
                </div>
                <div class="dropdown-content">
                    <a href="<?php echo URLROOT; ?>/directors/viewDetails_schoolClerks">School Clerks</a>
                    <a href="<?php echo URLROOT; ?>/directors/viewDetails_zonalClerks">zonal Education Office Clerks</a>
                </div>
            </div>
            <a href="<?php echo URLROOT; ?>/directors/viewDetails_schools">
                <div class="main-viewDetails-buttons-5 select-btn">Schools</div>
            </a>
        </div>
        <div class="content">
            <table id="table-customize">
                <h3 id="center">Zonal Education Office Clerks Details</h3>
                <div class="space"></div>
                <div class="search-bar">
                    <div class="form">
                        <form action="" method="POST">
                            <input type="text" placeholder="Search by Employee number or name" class="search-tab" name="search"><!-- gap 
                                --><button type="submit" class="search-btn"><i class="fa-solid fa-search"></i>Search</button>
                        </form>
                    </div>
                    <!-- <div class="add">
                            <a href="<?php echo URLROOT; ?>/directors/add_zonalClerk"><div class="btn3"><i class="fa-solid fa-plus"></i> Add Clerk</div></a>
                        </div> -->
                </div>
                <br>
                <tr>
                    <th>Emp No</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Birthday</th>
                    <th>NIC</th>
                </tr>
                <?php foreach ($data['zonalClerks'] as $zonalClerks) : ?>
                    <tr>
                        <td><?php echo $zonalClerks->emp_no; ?></td>
                        <td><?php echo $zonalClerks->name_with_initials; ?></td>
                        <td><?php echo $zonalClerks->designation; ?></td>
                        <td><?php echo $zonalClerks->address; ?></td>
                        <td><?php echo $zonalClerks->contact_num; ?></td>
                        <td><?php echo $zonalClerks->birthday; ?></td>
                        <td><?php echo $zonalClerks->nic; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>