<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails" class="active"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/verifyDetails"><i class="fa-solid fa-user-check"></i><span class="link">Verify Details</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
          <div class="logout">
              <hr>
              <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
          </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <h1><?php echo $data['schools']->name; ?> Details</h1>
            <div class="main-col-2">
                <div class="main-col-2-left">
                    <div class="border-box">
                        <h4>School Details</h4>
                        <ul>
                            <li>Name: <?php echo $data['schools']->name; ?></li>
                            <li>Address : <?php echo $data['schools']->address; ?></li>
                            <li>Phone Number : <?php echo $data['schools']->phoneNumber; ?></li>
                            <li>Principal Name : <?php echo $data['schools']->principal; ?></li>
                        </ul>
                    </div>
                    <br>
                    <div class="border-box">
                        <h4>The Moto</h4>
                        <span><?php echo $data['schools']->moto; ?></span>
                    </div>
                </div>
                <div class="main-col-2-right">
                    <div class="border-box">
                        <h4>Vision</h4>
                        <span><?php echo $data['schools']->vision; ?></span>
                    </div>
                    <br>
                    <div class="border-box">
                        <h4>Mision</h4>
                        <span><?php echo $data['schools']->mission; ?></span>
                    </div>
                </div>
            </div>
            <div class="backBtn-circle"><i class="fa-solid fa-angle-left"></i> Back</div>
        </div>
    </div>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let navbar = document.querySelector(".navbar");
        let link = document.querySelector(".link");
        let container = document.querySelector(".container");
        let sidebarBtn = document.querySelector(".fa-bars");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            navbar.classList.toggle("active");
            link.classList.toggle("active");
            container.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                // sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                // link.style.display = 'none';
            } else
                // sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                // link.style.display = '';
        }
    </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
