<?php require_once APPROOT . '/views/inc/header-appointment.php'; ?>
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
                <a href="<?php echo URLROOT; ?>/directors/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/directors/appointments" class="active"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
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
        <div class="tittle">
            <h1>Appointments</h1>
        </div>
        <div class="content">
            <div class="column-2">
                <div class="column-2-left">
                    <table id="table-customize">
                        <tr>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Date</th>
                            <th>Time Slot</th>
                            <th>Reason</th>
                            <th>Actiont</th>
                        </tr>
                        <?php foreach ($data['appointments'] as $appointments) : ?>
                            <tr>
                                <td><?php echo $appointments->name ?></td>
                                <td><?php echo $appointments->designation ?></td>
                                <td><?php echo $appointments->date ?></td>
                                <td><?php echo $appointments->start_time . " - " . $appointments->end_time ?></td>
                                <td><?php echo $appointments->reason ?></td>
                                <form action="" method="POST">
                                    <input type="hidden" name="form_id" value="<?php echo $appointments->id ?>">
                                    <td>
                                        <input type="submit" name="status" class="approve-btn" value="Appprove">
                                        <input type="submit" name="status" class="reject-btn" value="Reject">
                                    </td>
                                </form>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="column-2-right">
                    gzhcvjhvc
                </div>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>