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
                    <a href="<?php echo URLROOT; ?>/teachers/Karyasadanaya" class="active"><i class="fa-solid fa-file-lines"></i><span class="link">Karyasadanaya</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/teachers/LeaveForm"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/teachers/report_issue"><i class="fa-brands fa-wpforms"></i><span class="link">Report Issue</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/teachers/school_details"><i class="fa-solid fa-eye"></i><span class="link">School Details</span></a>
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
            <div class="content">
                <div class="karyasadanaya-full">
                    <div class="up-left">
                        <h3 id="center">KARYASADANAYA - 2022</h3>
                        <h3 id="center">EDUCATION ZONAL - COLOMBO</h3>
                    </div>
                    <div class="up-right">
                        <div class="border-box">
                            <h3>Evaluation period</h3>
                            <h3>2022-12-16 To 2023-12-16</h3>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="border-box">
                            <h3>Karyasadana</h3>
                            <span>Approval status - <?php echo $data['karyasadana']->status ?></span>
                            <table id="table-customize">
                                <tr>
                                    <th>Tasks for the year</th>
                                    <th>Resource support and training needs expected from the school to accomplish tasks</th>
                                    <th>Karya sadana Indicators</th>
                                    <th>Tasks performed and problems encountered</th>
                                </tr>
                                <tr>
                                    <td>Teaching</td>
                                    <td><?php echo $data['karyasadana']->tasks1 ?></td>
                                    <td><?php echo $data['karyasadana']->Indicators1 ?></td>
                                    <td><?php echo $data['karyasadana']->Problems1 ?></td>
                                </tr>
                                <tr>
                                    <td>Extracurricular activities</td>
                                    <td><?php echo $data['karyasadana']->tasks2 ?></td>
                                    <td><?php echo $data['karyasadana']->Indicators2 ?></td>
                                    <td><?php echo $data['karyasadana']->Problems2 ?></td>
                                </tr>
                                <tr>
                                    <td>Student welfare & guidance</td>
                                    <td><?php echo $data['karyasadana']->tasks3 ?></td>
                                    <td><?php echo $data['karyasadana']->Indicators3 ?></td>
                                    <td><?php echo $data['karyasadana']->Problems3 ?></td>
                                </tr>
                                <tr>
                                    <td>Special services for the school</td>
                                    <td><?php echo $data['karyasadana']->tasks4 ?></td>
                                    <td><?php echo $data['karyasadana']->Indicators4 ?></td>
                                    <td><?php echo $data['karyasadana']->Problems4 ?></td>
                                </tr>
                                <tr>
                                    <td>School community relations</td>
                                    <td><?php echo $data['karyasadana']->tasks4 ?></td>
                                    <td><?php echo $data['karyasadana']->Indicators4 ?></td>
                                    <td><?php echo $data['karyasadana']->Problems4 ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
