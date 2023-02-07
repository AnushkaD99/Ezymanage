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
                    <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"  class="active"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
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
            <h1 class="main-topic">Principal Details</h1>
            <div class="singlecol">
                <div class="border-box">
                    <table class="view-table">
                        <tr>
                            <th>Reg.No</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th></th>
                        </tr>
                        <?php foreach($data['volunteers'] as $volunteer) : ?>
                        <tr>
                            <td> <?php echo $volunteer->id; ?></td>
                            <td> <?php echo $volunteer->fullName; ?></td>
                            <td> <?php echo $volunteer->phoneNumber; ?></td>
                            <td> <a href="<?php echo URLROOT; ?>/adminclerks/viewMoreSchoolDetails/<?php echo $volunteer->id; ?>" class="btn3">More</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="backBtn-circle"><i class="fa-solid fa-angle-left"></i> Back</div>
            </div>
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
