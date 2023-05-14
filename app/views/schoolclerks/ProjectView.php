<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/school_profile"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Profile</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/projects" class="active"><i class="fa-solid fa-building"></i><span class="link">Projects</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
                <h1>Full Details about all Leave forms</h1>
            </div>
            <div class="content">
                <table class="row-space" id="table-customize">
                    <tr>
                        <th>Commencing Date</th>
                        <th>Resuming_Date</th>
                        <th>Reason</th>
                        <th>Leave type</th>
                        <th>Number of days</th>
                        <th>Submitted date</th>
                        <th>status</th>
                    </tr>
                    <?php foreach($data['leave_details'] as $leave_details) : ?>
                    <tr>
                        <td><?php echo $leave_details->commencing_date ?></td>
                        <td><?php echo $leave_details->resuming_date ?></td>
                        <td><?php echo $leave_details->reason ?></td>
                        <td><?php echo $leave_details->leave_type ?></td>
                        <td><?php //echo $leave_details->reason ?></td>
                        <td><?php echo $leave_details->submitted_date ?></td>
                        <td><?php echo $leave_details->status ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
