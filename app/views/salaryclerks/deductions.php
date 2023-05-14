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
                    <div class="button2 button">Allowance</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/deductions">
                    <div class="button3 button active">Deductions</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/basicSalary">
                    <div class="button4 button">Manage Basic Salary</div>
                </a>
            </div>
            <div class="content">
                <button id="add">Add Deduction</button>
                <h3>deductions</h3>
                <table id="table-customize">
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>amount(Rs)</th>
                        <th id="action">Actions</th>
                    </tr>
                    <?php foreach ($data['deduction'] as $deduction) : ?>
                        <tr>
                            <td><?php echo $deduction->id; ?></td>
                            <td class="name"><?php echo $deduction->name; ?></td>
                            <td class="amount"><?php echo $deduction->amount; ?></td>
                            <td>
                                <div class="action_btns">
                                    <div class="edit_btn">
                                        <button class="edt_btn" onclick="openPopup('<?php echo $deduction->name; ?>', '<?php echo $deduction->amount; ?>')"><i class="fa-solid fa-pen-to-square"></i></button>
                                    </div>
                                    <div class="delete_btn">
                                        <form action="" method="POST">
                                            <input type="hidden" value="<?php echo $deduction->id; ?>">
                                            <button type="submit" class="dlt_btn"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
    </div>
</div>

<!-- Edit deduction popup -->
<div class="mfp-hide white-popup personal_info" id="edit_deduction">
    <form action="" method="POST">
        <h3>Add deduction</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Name of the deduction :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="name" class="textBox" id=all_name>
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Amount :
            </div>
            <div class="main-editprofile-right">
                <input type="int" name="amount" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_all" id="submit" value="Submit" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>

<!-- Add deduction popup -->
<div class="mfp-hide white-popup personal_info" id="add_deductions">
    <form action="" method="POST">
        <h3>Add Deduction</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Name of the Deduction :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="name" class="textBox" placeholder="Enter Starting Step Basic Salary">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Amount :
            </div>
            <div class="main-editprofile-right">
                <input type="int" name="amount" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_deduction" id="submit" value="Submit" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>

<!-- Include jQuery and Magnific-Popup JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {
        $('#add').magnificPopup({
            items: {
                src: '#add_deductions'
            },
            type: 'inline',
        });
    });

    $(document).ready(function() {
        $('#get_form').magnificPopup({
            items: {
                src: '#edit_deduction'
            },
            type: 'inline',
        });
    });
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>