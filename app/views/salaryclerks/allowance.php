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
                <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/paysheet" class="active"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Pay Sheet</span></a>
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
        <h2 id="center">Payroll System</h1>
            <!-- Section selection buttons -->
            <div class="buttons">
                <a href="<?php echo URLROOT; ?>/salaryclerks/paysheet">
                    <div class="button1 button">Employee Section</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/allowance">
                    <div class="button2 button active">Allowance</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/deductions">
                    <div class="button3 button">Deductions</div>
                </a>
            </div>
            <div class="content">
                <table id="table-customize">
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Designation</th>
                        <th>Basic Salary</th>
                        <th>Net Salary</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($data['allowance'] as $allowance) : ?>
                        <tr>
                            <td><?php echo $allowance->emp_no; ?></td>
                            <td><?php echo $allowance->full_name; ?></td>
                            <td><?php echo $allowance->designation; ?></td>
                            <!-- <td><?php echo $allowance->basic_salary; ?></td>
                            <td><?php echo $allowance->net_salary; ?></td> -->
                            <td>
                                <a href="<?php echo URLROOT; ?>/salaryclerks/edit/<?php echo $allowance->id; ?>" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                                <a href="<?php echo URLROOT; ?>/salaryclerks/delete/<?php echo $allowance->id; ?>" class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>