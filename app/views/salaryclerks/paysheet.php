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

            <button><a href="<?php echo URLROOT; ?>/salaryclerks/all_paysheet">All paysheets</a></button>

                <table id="table-customize">
                    <tr>
                        <th><input type="checkbox" onClick="toggle(this)" /></th>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Designation</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($data['paysheet'] as $paysheet) : ?>
                        <tr>
                            <td> <input type="checkbox" name="chkId[]" value="<?php echo $paysheet->emp_no; ?>" /> </td>
                            <td><?php echo $paysheet->emp_no; ?></td>
                            <td><?php echo $paysheet->full_name; ?></td>
                            <td><?php echo $paysheet->designation; ?></td>
                            <td>
                                <a href="<?php echo URLROOT; ?>/salaryclerks/generate_payslip/<?php echo $paysheet->emp_no; ?>"><button class="btn btn-primary"><i class="fa-solid fa-gears"></i></a></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
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
                height: 800,
                modal: true,
                open: function() {
                    $(this).load(url);
                }
            });
        });
    });
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>