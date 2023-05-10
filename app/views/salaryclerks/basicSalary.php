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
                    <div class="button3 button">Deductions</div>
                </a>
                <a href="<?php echo URLROOT; ?>/salaryclerks/basicSalary">
                    <div class="button4 button active">Manage Basic Salary</div>
                </a>
            </div>
            <div class="content col2">
                <div class="col2_left">
                    <h3 id="center">Teacher's Basic Salary</h3>
                    <!-- <button id="add_step">Add Basic Salary Step</button> -->
                    <div class="col4">
                        <div class="col4a">
                        <button id="edit_basic_3-i"><i class="fa-solid fa-pen-to-square"></i></button>
                            <table id="table-customize">
                                <tr>
                                    <th colspan="2">Class 3-i</th>
                                </tr>
                                <?php foreach ($data['basic'] as $basic) :
                                ?>
                                    <tr>
                                        <?php if ($basic->class == 'Class 3-i') { ?>
                                            <td><?php echo $basic->step; ?></td>
                                            <td><?php echo $basic->basic_salary; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach;
                                ?>
                            </table>
                        </div>
                        <div class="col4b">
                        <button id="edit_basic_2-ii"><i class="fa-solid fa-pen-to-square"></i></button>
                            <table id="table-customize">
                                <tr>
                                    <th colspan="2">Class 2-ii</th>
                                </tr>
                                <?php foreach ($data['basic'] as $basic) :
                                ?>
                                    <tr>
                                        <?php if ($basic->class == 'Class 2-ii') { ?>
                                            <td><?php echo $basic->step; ?></td>
                                            <td><?php echo $basic->basic_salary; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach;
                                ?>
                            </table>
                        </div>
                        <div class="col4c">
                        <button id="edit_basic_2-i"><i class="fa-solid fa-pen-to-square"></i></button>
                            <table id="table-customize">
                                <tr>
                                    <th colspan="2">Class 2-i</th>
                                </tr>
                                <?php foreach ($data['basic'] as $basic) :
                                ?>
                                    <tr>
                                        <?php if ($basic->class == 'Class 2-i') { ?>
                                            <td><?php echo $basic->step; ?></td>
                                            <td><?php echo $basic->basic_salary; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach;
                                ?>
                            </table>
                        </div>
                        <div class="col4d">
                        <button id="edit_basic_1"><i class="fa-solid fa-pen-to-square"></i></button>
                            <table id="table-customize">
                                <tr>
                                    <th colspan="2">Class 1</th>
                                </tr>
                                <?php foreach ($data['basic'] as $basic) :
                                ?>
                                    <tr>
                                        <?php if ($basic->class == 'Class 1') { ?>
                                            <td><?php echo $basic->step; ?></td>
                                            <td><?php echo $basic->basic_salary; ?></td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach;
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col2_right">

                </div>
            </div>
    </div>
</div>

<!-- Add basic Salary Step popup -->
<div class="mfp-hide white-popup personal_info" id="new_step">
    <form action="" method="POST">
        <h3>Add Basic Salary Step</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Class :
            </div>
            <div class="main-editprofile-right">
                <!-- <input type="grade" name="grade" class="textBox" placeholder="Enter here"> -->
                <select name="class" id="class" class="textBox">
                    <!-- <option value="Class 1">Class 1</option>
                    <option value="Class 2-i">Class 2-i</option> -->
                    <option value="Class 2-ii">Class 2-ii</option>
                    <!-- <option value="Class 3-i">Class 3-i</option> -->
                </select>
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Step :
            </div>
            <div class="main-editprofile-right">
                <input type="step" name="step" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Basic Salary :
            </div>
            <div class="main-editprofile-right">
                <input type="b_slary" name="b_salary" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit" id="submit" value="Submit" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>

<!-- Edit Basic Salary -->
<div class="mfp-hide white-popup personal_info" id="new_basic_1">
    <form action="" method="POST">
        <h3>Class 1 Basic Salary</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Starting Step Basic Salary :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="st_basic_1" class="textBox" placeholder="Enter Starting Step Basic Salary">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Increment Amount :
            </div>
            <div class="main-editprofile-right">
                <input type="int" name="increment_1" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_1" id="submit" value="Submit" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>
<div class="mfp-hide white-popup personal_info" id="new_basic_2-i">
    <form action="" method="POST">
        <h3>Class 2-i Basic Salary</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Starting Step Basic Salary :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="st_basic_2-i" class="textBox" placeholder="Enter Starting Step Basic Salary">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Increment Amount :
            </div>
            <div class="main-editprofile-right">
                <input type="int" name="increment_2-i" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_2-i" id="submit" value="Submit" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>
<div class="mfp-hide white-popup personal_info" id="new_basic_2-ii">
    <form action="" method="POST">
        <h3>Class 2-ii Basic Salary</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Starting Step Basic Salary :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="st_basic_2-ii" class="textBox" placeholder="Enter Starting Step Basic Salary">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Increment Amount :
            </div>
            <div class="main-editprofile-right">
                <input type="int" name="increment_2-ii" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_2-ii" id="submit" value="Submit" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>
<div class="mfp-hide white-popup personal_info" id="new_basic_3-i">
    <form action="" method="POST">
        <h3>Class 3-i Basic Salary</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Starting Step Basic Salary :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="st_basic_3-i" class="textBox" placeholder="Enter Starting Step Basic Salary">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Increment Amount :
            </div>
            <div class="main-editprofile-right">
            <input type="int" name="increment_3-i" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_3-i" id="submit" value="Submit" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>


<!-- Include jQuery and Magnific-Popup JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function() {
        $('#add_step').magnificPopup({
            items: {
                src: '#new_step'
            },
            type: 'inline',
        });
    });

    $(document).ready(function() {
        $('#edit_basic_1').magnificPopup({
            items: {
                src: '#new_basic_1'
            },
            type: 'inline',
        });
    });
    
    $(document).ready(function() {
        $('#edit_basic_2-i').magnificPopup({
            items: {
                src: '#new_basic_2-i'
            },
            type: 'inline',
        });
    });
    $(document).ready(function() {
        $('#edit_basic_2-ii').magnificPopup({
            items: {
                src: '#new_basic_2-ii'
            },
            type: 'inline',
        });
    });
    $(document).ready(function() {
        $('#edit_basic_3-i').magnificPopup({
            items: {
                src: '#new_basic_3-i'
            },
            type: 'inline',
        });
    });
</script>
<?php require APPROOT . '/views/inc/footer.php'; ?>