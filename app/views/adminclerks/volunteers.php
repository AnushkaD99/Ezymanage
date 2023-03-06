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
                <table id="table-customize">
                    <tr>
                        <th>Reg.No</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>NIC</th>
                        <th>Subjects</th>
                        <th></th>
                        <!-- <th></th> -->
                    </tr>
                    <?php foreach ($data['volunteers'] as $volunteer) : ?>
                        <tr>
                            <td><?php echo $volunteer->id; ?></td>
                            <td><?php echo $volunteer->first_name . " " . $volunteer->last_name; ?></td>
                            <td><?php echo $volunteer->contact_num; ?></td>
                            <td><?php echo $volunteer->email; ?></td>
                            <td><?php echo $volunteer->gender; ?></td>
                            <td><?php echo $volunteer->nic; ?></td>
                            <td><?php echo $volunteer->subjects; ?></td>
                            <td><a href="<?php echo URLROOT; ?>/adminclerks/volunteers_moreDetails/<?php echo $volunteer->id; ?>"><i class="fa-sharp fa-solid fa-circle-info"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>