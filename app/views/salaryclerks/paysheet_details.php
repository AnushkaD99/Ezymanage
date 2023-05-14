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
                    <div class="button1 button active">Employee Section</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/allowance">
                    <div class="button2 button">Allowance</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/deductions">
                    <div class="button3 button">Deductions</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/basicSalary">
                    <div class="button4 button">Manage Basic Salary</div>
                </a>
            </div>
            <div class="content">
                <form action="<?php echo URLROOT; ?>/salaryclerks/pay_slip_actions" method="POST">
                    <table id="table-customize">
                        <tr>
                            <th><input type="checkbox" onClick="toggle(this)" /></th>
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Designation</th>
                            <th>Basic Salary(Rs.)</th>
                            <th>Allowances(Rs.)</th>
                            <th>Deductions(Rs.)</th>
                            <th>Net Salary(Rs.)</th>
                            <th>Month</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($data['payslip'] as $payslip) :
                            $timestap = $payslip->date;
                            $date = date("Y-m", strtotime($timestap));
                            $status = $payslip->status;
                            if ($status == 0) {
                                $status = "Not Sent";
                                $class = "red";
                            } else {
                                $status = "Sent";
                                $class = "green";
                            }
                        ?>
                            <tr>
                                <td> <input type="checkbox" name="chkId[]" value="<?php echo $payslip->id; ?>" /> </td>
                                <td><?php echo $payslip->emp_no; ?></td>
                                <td><?php echo $payslip->full_name; ?></td>
                                <td><?php echo $payslip->designation; ?></td>
                                <td><?php echo number_format($payslip->basic_salary, 2); ?></td>
                                <td><?php echo number_format($payslip->allowances, 2); ?></td>
                                <td><?php echo number_format($payslip->deductions, 2); ?></td>
                                <td><?php echo number_format($payslip->net_salary, 2); ?></td>
                                <td><?php echo $date; ?></td>
                                <td>
                                    <center>
                                        <div class="<?php echo $class; ?>"><?php echo $status; ?></div>
                                    </center>
                                </td>
                                <td>
                                    <button class="btn btn-primary view_payslip" data-url="<?php echo URLROOT; ?>/salaryclerks/payslip/<?php echo $payslip->emp_no; ?>" type="button"><i class="fa-solid fa-circle-info" style="color: #00FF00;"></i></button>
                                    <!-- <a href="<?php echo URLROOT; ?>/salaryclerks/delete_payslip/<?php echo $payslip->id; ?>"><button><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button></a>
                                    <a href="<?php echo URLROOT; ?>/salaryclerks/send_payslip/<?php echo $payslip->id; ?>"><button><i class="fa-solid fa-paper-plane" style="color: #0000FF;"></i></button></a> -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <button type="submit" name="delete">Delete</button>
                    <button type="submit" name="send">Send PaySlip</button>
                </form>
                <a href="<?php echo URLROOT; ?>/salaryclerks/paysheet"><button>Back</button></a>

            </div>
    </div>
</div>

<script>
    function toggle(source) {
        checkboxes = document.getElementsByName('chkId[]');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }


    function view_paysheet() {
        document.getElementById("myModal_info").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal_info").style.display = "none";
    }

    $(document).ready(function() {
        $('.view_payslip').click(function() {
            var url = $(this).attr('data-url');
            $('<div>').dialog({
                title: 'Payslip',
                width: 800,
                height: 860,
                modal: true,
                open: function() {
                    $(this).load(url);
                }
            });
        });
    });
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>