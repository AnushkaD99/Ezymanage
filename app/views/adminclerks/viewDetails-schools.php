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
        <h1>View Details</h1>
        <div class="main-viewDetails-buttons">
            <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails">
                <div class="main-viewDetails-buttons-1 select-btn" id="select-btn1">Teachers</div>
            </a>
            <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails_principal">
                <div class="main-viewDetails-buttons-2 select-btn" id="select-btn2">Principals</div>
            </a>
            <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails_directors">
                <div class="main-viewDetails-buttons-3 select-btn" id="select-btn3">Directors</div>
            </a>
            <div class="main-viewDetails-buttons-4 dropdown">
                <div class="select-btn dropbtn">
                    Clerks
                </div>
                <div class="dropdown-content">
                    <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails_schoolClerks">School Clerks</a>
                    <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails_zonalClerks">zonal Education Office Clerks</a>
                </div>
            </div>
            <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails_schools">
                <div class="main-viewDetails-buttons-5 select-btn active">Schools</div>
            </a>
        </div>
        <div class="content">
            <div id="schools">
                <table id="table-customize">
                    <h3 id="center">School Details</h3>
                    <div class="space"></div>
                    <div class="search-bar">
                        <div class="form">
                            <form action="" method="POST">
                                <input type="text" placeholder="Search by school registration number or school name" class="search-tab" name="search"><!-- gap 
                                    --><button type="submit" class="search-btn"><i class="fa-solid fa-search"></i>Search</button>
                            </form>
                        </div>
                        <div class="add">
                            <a href="<?php echo URLROOT; ?>/adminclerks/add_school">
                                <div class="btn3"><i class="fa-solid fa-plus"></i> Add School</div>
                            </a>
                        </div>
                    </div>
                    <br>
                    <tr>
                        <th>School Reg.No</th>
                        <th>Name</th>
                        <th>School type</th>
                        <th>Name of the Principal</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>View more details</th>
                    </tr>
                    <?php foreach ($data['schools'] as $school) : ?>
                        <tr class="employee-row">
                            <td class="emp-id"> <?php echo $school->school_id; ?></td>
                            <td class="emp-name"> <?php echo $school->name; ?></td>
                            <td> <?php echo $school->type; ?></td>
                            <td> <?php echo $school->principal; ?></td>
                            <td> <?php echo $school->contact_num; ?></td>
                            <td> <?php echo $school->address; ?></td>
                            <td id="center"> <a href="<?php echo URLROOT; ?>/adminclerks/viewMoreSchoolDetails/<?php echo $school->school_id; ?>" class="btn3">More</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>