<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/transferclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/transferclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/transferclerks/transfers" class="active"><i class="fa-solid fa-shuffle"></i><span class="link">Tranfers</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/transferclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
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
                
            </div>
        </div>
    </div>
    <?php require_once APPROOT . '/views/inc/upload_successful_mzg.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
