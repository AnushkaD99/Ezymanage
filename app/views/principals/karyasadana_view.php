<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Ezymange</title>
</head>

<body>
    <<div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/principals/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/principals/paysheet"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Paysheet</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/principals/Karyasadanaya"  class="active"><i class="fa-solid fa-file-lines"></i><span class="link">Karyasadanaya</span></a>
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

    <!-- //Navigation bar -->

    <nav class="navbar">
        <div class="navbar__left">
            <div class="nav-icon" onclick="toggleSidebar()">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="logo">
                <img src="../images/logo.png" alt="logo">
            </div>
        </div>
        <div class="navbar__right">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-circle-user"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span id="userName"><?php echo $Username ?></span><br>
                        <span id="designation"><?php echo $Designation ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="rectangle1">
        <table>
            <tr>
                <td class="col1">
                    <span class="forum-topic">KARYASADANAYA - 2022<br>EDUCATION ZONAL - COLOMBO</span>
                </td>
                <td class="col2">
                    <fieldset class="fieldset1">
                        <p class="span1">
                            <b>Evaluation period</b><br>
                            <?php echo ($start_date); ?> <b>To</b> <?php echo ($end_date); ?>
                        </p>
                    </fieldset>
                </td>
            </tr>
        </table>
        <fieldset class="fieldset2">
            <p class="subtopic">Personal details</p>
            <table class="table1">
                <tr>
                    <td class="th">
                        <ul>
                            <li><b>Name :</b> <?php echo ($name); ?> </li>
                        </ul>
                    </td>
                    <td class="th">
                        <ul>
                            <li><b>Birthday :</b> 01/01/1990 </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><b>School :</b> Nalanda College</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li><b>Position :</b> </b> <?php echo ($designation); ?> </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><b>Registration Number :</b> </b> <?php echo ($Userid); ?> </li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><b>Current Grade :</b> 3</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td colspan="3"><b>Education Qualifications :</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </td>
                </tr>
            </table>
        </fieldset>

        <fieldset class="fieldset3">
            <p class="subtopic">Karya Sadana</p>
            <table class="table2">
                <tr>
                    <th>
                        Tasks for the year
                    </th>
                    <th class="td">
                        Resource support and training needs expected from the school to accomplish tasks
                    </th>
                    <th>
                        Karya sadana Indicators
                    </th>
                    <th style="width: 200px;">
                        Tasks performed and problems encountered
                    </th>
                </tr>
                <tr>
                    <th>
                        Teaching
                    </th>
                    <td>
                        <?php echo ($tasks1); ?>
                    </td>
                    <td>
                        <?php echo ($Indicators1); ?>
                    </td>
                    <td>
                        <?php echo ($Problems1); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Extracurricular activities
                    </th>
                    <td>
                        <?php echo ($tasks2); ?>
                    </td>
                    <td>
                        <?php echo ($Indicators2); ?>
                    </td>
                    <td>
                        <?php echo ($Problems2); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Student welfare & guidance
                    </th>
                    <td>
                        <?php echo ($tasks3); ?>
                    </td>
                    <td>
                        <?php echo ($Indicators3); ?>
                    </td>
                    <td>
                        <?php echo ($Problems3); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Special services for the school
                    </th>
                    <td>
                        <?php echo ($tasks4); ?>
                    </td>
                    <td>
                        <?php echo ($Indicators4); ?>
                    </td>
                    <td>
                        <?php echo ($Problems4); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        School community relations
                    </th>
                    <td>
                        <?php echo ($tasks5); ?>
                    </td>
                    <td>
                        <?php echo ($Indicators5); ?>
                    </td>
                    <td>
                        <?php echo ($Problems5); ?>
                    </td>
                </tr>
                </tr>
            </table>
        </fieldset>
        <div class="back-btn">
            <a href="Karyasadanaya.php"><button class="submit-btn">Back</button></a>
        </div>
    </div>
</body>

</html>
<?php } ?>