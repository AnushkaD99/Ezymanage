<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/paysheet"  class="active"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Paysheet</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/Karyasadanaya"><i class="fa-solid fa-file-lines"></i><span class="link">Karyasadanaya</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/leaveForm"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/report_issue"><i class="fa-brands fa-wpforms"></i><span class="link">Report Issue</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/school_details"><i class="fa-solid fa-eye"></i><span class="link">School Details</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/appointments"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/promotions"><i class="fa-solid fa-angles-up"></i><span class="link">Promotions</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/salary_increment"><i class="fa-sharp fa-solid fa-file-circle-plus"></i><span class="link">Salary Increment Form</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/transfers"><i class="fa-solid fa-arrows-rotate"></i><span class="link">Transfers</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/school_management"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Management</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/projects"><i class="fa-solid fa-building"></i><span class="link">School Projects</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/principals/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
            <div class="logout">
                <hr>
                <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
            </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <div class="main-2col">
                <div class="main-2col-left">
                    <div class="tittle">
                        <h1>PAY REPORT</h1>
                    </div>
                    <div class="content">
                        <div class="border-box">
                            <h3>ZONAL EDUCATION OFFICE - COLOMBO</h3>
                            <h3>PAY REPORT FOR MON : OCTOBER 2022</h3>
                            <h3>Emp No.     :  000001</h3>
                            <h3>Mr. Dutugemunu H.S</h3>
                            <h3>Teacher</h3>
                            <h3>Nalanda College</h3>
                            <hr class="dashed_line">
                            <h3>EARNINGS</h3>
                            <div class="sub-content">
                                <table>
                                    <tr>
                                        <td>Basic</td>
                                        <td class="align-right">: 40000.00</td>
                                    </tr>
                                    <tr>
                                        <td>INT  ALL 3</td>
                                        <td class="align-right">: 5000.00</td>
                                    </tr>
                                    <tr>
                                        <td>SUB TOTAL</td>
                                        <td class="align-right">: 45000.00</td>
                                    </tr>
                                </table>
                            </div>
                            <hr class="dashed_line">
                            <table>
                                <tr>
                                    <td>C.O.L</td>
                                    <td class="align-right">: 2000.00</td>
                                </tr>
                            </table>
                            <hr class="dashed_line">
                            <table>
                                <tr>
                                    <td>GROSS PAY</td>
                                    <td class="align-right">: 47000.00</td>
                                </tr>
                            </table>
                            <h3>DEDUCTIONS</h3>
                            <div class="sub-content">
                                <table>
                                    <tr>
                                        <td>W. & O. P</td>
                                        <td class="align-right">: 1575.00</td>
                                    </tr>
                                    <tr>
                                        <td>STAMP</td>
                                        <td class="align-right">: 25.00</td>
                                    </tr>
                                    <tr>
                                        <td>AGRAHARA</td>
                                        <td class="align-right">: 500.00</td>
                                    </tr>
                                </table>
                            </div>
                            <table>
                                <tr>
                                    <td>TOT. DED.</td>
                                    <td class="align-right">: 2100.00</td>
                                </tr>
                            </table>
                            <hr class="dashed_line">
                            <table>
                                <tr>
                                    <td>NET PAY</td>
                                    <td class="align-right">: 44900.00</td>
                                </tr>
                            </table>
                        </div>
                        <button class="submit-btn">APPROVE</button>
                    </div>
                </div>
                <div class="main-2col-right">
                    <div class="content">
                        <div class="submit-btn">Download Paysheet</div>
                        <div class="submit-btn">Print Paysheet</div>
                    </div>
                    <div class="content" id="center">
                        <h3>PAYSHEET STATUS</h3>
                        Principal Appproval : <span class="status">Pending</span>
                    </div>
                    <div class="content">
                        <h3 id="center">PAYSHEETS</h3>
                        <table class="row-space">
                            <tr>
                                <td>2023 January</td>
                                <td class="view-btn">View</td>
                            </tr>
                            <tr>
                                <td>2022 December</td>
                                <td class="view-btn">View</td>
                            </tr>
                            <tr>
                                <td>2022 November</td>
                                <td class="view-btn">View</td>
                        </table>
                        <div class="submit-btn">See More</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
