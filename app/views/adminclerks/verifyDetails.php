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
                    <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
                </li>
                <!-- <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/verifyDetails" class="active"><i class="fa-solid fa-user-check"></i><span class="link">Verify Details</span></a>
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
            <div class="tittle">
                <h1>Verify Details</h1>
            </div>
            <div class="content">
                <div class="border-box">
                    <table id="table-customize">
                        <tr>
                            <th>Emp. No</th>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <form action="" method="POST"></form>
                        <!-- <?php foreach($data['teachers'] as $teacher) : ?> -->
                        <tr>
                            <td> <?php //echo $teacher->id; ?></td>
                            <td> <?php //echo $teacher->fullName; ?></td>
                            <td id="center"><a href="<?php echo URLROOT; ?>/adminclerks/viewMoreTeacherDetails/<?php //echo $teacher->id; ?>" class="btn3">More</a></td>
                        </tr>
                        <!-- <?php endforeach; ?> -->
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
