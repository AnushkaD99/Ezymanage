<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails" class="active"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/paysheet"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Pay Sheet</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
            <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails">
                <div class="main-viewDetails-buttons-1 select-btn" id="select-btn1">Teachers</div>
            </a>
            <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails_principal">
                <div class="main-viewDetails-buttons-2 select-btn active" id="select-btn2">Principals</div>
            </a>
            <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails_directors">
                <div class="main-viewDetails-buttons-3 select-btn" id="select-btn3">Directors</div>
            </a>
            <div class="main-viewDetails-buttons-4 dropdown">
                <div class="select-btn dropbtn">
                    Clerks
                </div>
                <div class="dropdown-content">
                    <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails_schoolClerks">School Clerks</a>
                    <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails_zonalClerks">zonal Education Office Clerks</a>
                </div>
            </div>
            <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails_schools">
                <div class="main-viewDetails-buttons-5 select-btn">Schools</div>
            </a>
        </div>
        <div class="content">
            <div id="principals">
                <table id="table-customize">
                    <h3 id="center">Principal Details</h3>
                    <div class="space"></div>
                    <div class="search-bar">
                        <div class="form">
                            <form action="" method="POST">
                            <form action="" method="POST">
                                <input type="text" placeholder="Search by Employee number or name" class="search-tab" id="search-input" name="search"><!-- gap 
                                    --><button type="submit" class="search-btn"><i class="fa-solid fa-search"></i>Search</button>
                            </form>
                        </div>
                        <!-- <div class="add">
                            <a href="<?php echo URLROOT; ?>/salaryclerks/add_principal">
                                <div class="btn3"><i class="fa-solid fa-plus"></i> Add Principal</div>
                            </a>
                        </div> -->
                    </div>
                    <br>
                    <tr>
                        <th>Emp No</th>
                        <th>Full Name</th>
                        <th>Name with Initials</th>
                        <th>School</th>
                        <th>Grade</th>
                        <th>Email</th>
                        <th>View more details</th>
                    </tr>
                    <?php foreach ($data['principals'] as $principal) : ?>
                        <tr class="employee-row">
                            <td class="emp-id"> <?php echo $principal->emp_no; ?></td>
                            <td class="emp-fname"> <?php echo $principal->full_name; ?></td>
                            <td class="emp-name"><?php echo $principal->name_with_initials; ?></td>
                            <td><?php echo $principal->school; ?></td>
                            <td><?php echo $principal->grade; ?></td>
                            <td><?php echo $principal->email; ?></td>
                            <td id="center"> <a href="<?php echo URLROOT; ?>/salaryclerks/viewMorePrincipalDetails/<?php echo $principal->emp_no; ?>" class="btn3">More</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>