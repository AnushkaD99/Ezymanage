<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/index" class="active"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/school_profile"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Profile</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/projects"><i class="fa-solid fa-building"></i><span class="link">Projects</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
          <div class="logout">
              <hr>
              <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
          </div>
        </div>
        <!-- End sidebar --> 
        <div class="main">
            <div class="main-single">
                <div class="main-single-up">
                    <table>
                        <tr>
                            <td><img src="<?php echo URLROOT; ?>/img/logo.png" alt="logo"></td>
                        </tr>
                        <tr>
                            <td>Hey<span id="userName"><?php echo $_SESSION['user_name']; ?>,</span></td>
                        </tr>
                        <tr>
                            <td>Welcome to Ezymanage!</td>
                        </tr>
                    </table>
                </div>
                <div class="main-single-down-left">
                    <div class="card-button1-set">
                        <div class="card-button1"><a href="">School Details</a></div>
                        <div class="card-button1"><a href="">Principal Details</a></div>
                        <div class="card-button1"><a href="">Teacher Details</a></div>
                    </div>
                </div>
                <div class="main-single-down-right">
                    <div class="month">
                        <i class="fas fa-angle-left prev"></i>
                        <div class="date">
                            <h1>Calender</h1>
                            <span></span>
                        </div>
                        <i class="fas fa-angle-right next"></i>
                    </div>
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="days"></div>
                </div>    
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
