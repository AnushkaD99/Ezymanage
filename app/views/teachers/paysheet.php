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
                <a href="<?php echo URLROOT; ?>/teachers/paysheet" class="active"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Paysheet</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/Karyasadanaya"><i class="fa-solid fa-file-lines"></i><span class="link">Karyasadanaya</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/leaveForm"><i class="fa-solid fa-file"></i><span class="link">Leave Form</span></a>
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
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/teachers/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
            </li> -->
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
                        <h3>Emp No. : <?php echo $data['user']->emp_no; ?></h3>
                        <h3>Name : <?php echo $data['user']->name_with_initials; ?></h3>
                        <h3>Position : <?php echo $data['user']->designation; ?></h3>
                        <h3>School : <?php echo $data['school']; ?></h3>
                        <hr class="dashed_line">
                        <h3>EARNINGS</h3>
                        <div class="sub-content">
                            <table>
                                <tr>
                                    <td>Basic</td>
                                    <td class="align-right">: <?php echo number_format($data['payslip']->basic_salary, 2); ?></td>
                                </tr>
                                <?php foreach ($data['allowances'] as $allowance) : ?>
                                    <tr>
                                        <td><?php echo $allowance->allowance_name; ?></td>
                                        <td class="align-right">: <?php echo number_format($allowance->amount, 2); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <hr class="dashed_line">
                        <table>
                            <tr>
                                <td>GROSS PAY</td>
                                <td class="align-right">: <?php echo number_format($data['gross_pay'], 2); ?></td>
                            </tr>
                        </table>
                        <h3>DEDUCTIONS</h3>
                        <div class="sub-content">
                            <table>
                                <?php foreach ($data['deductions'] as $deduction) : ?>
                                    <tr>
                                        <td><?php echo $deduction->name; ?></td>
                                        <?php $amount = $deduction->amount;
                                        if ($deduction->name == 'W. & O. P.') {
                                            $amount = $data['payslip']->basic_salary * $amount / 100;
                                        }
                                        ?>
                                        <td class="align-right">: <?php echo number_format($amount, 2); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        <table>
                            <tr>
                                <td>TOT. DED.</td>
                                <td class="align-right">: <?php echo number_format($data['payslip']->deductions, 2); ?></td>
                            </tr>
                        </table>
                        <hr class="dashed_line">
                        <table>
                            <tr>
                                <td>NET PAY</td>
                                <td class="align-right">: <?php echo number_format($data['payslip']->net_salary, 2); ?></td>
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