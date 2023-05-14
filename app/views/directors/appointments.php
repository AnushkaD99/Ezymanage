<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/appointments" class="active"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/school_management"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Management</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/projects"><i class="fa-solid fa-building"></i><span class="link">School Projects</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/profile"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
                </li>
            </ul>
          <div class="logout">
              <hr>
              <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
          </div>
        </div>
        <!-- End sidebar -->
        <div class="main">
            <div class="tittle">
                <h1>Appointments</h1>
            </div>
            <div class="content">
            <div class="search-bar"  style="position: sticky; top: 0;">
                        <div class="form">
                            <form action="" method="POST">
                                <input type="text" placeholder="Search by Project Name or School Name" class="search-tab" name="search" id="search-input"><!-- gap 
                                --><button type="submit" class="search-btn"><i class="fa-solid fa-search"></i>Search</button>
                            </form>
                        </div><br><br><br><br>                        
                    </div>
                    <br>
                <div style="height: 580px; overflow: scroll;">
                <table id="table-customize">
                    <tr style="position: sticky; top: 0px;">
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Date</th>
                        <th>Time Slot</th>
                        <th>Reason</th>
                        <th colspan="2">Approve or Reject</th>
                    </tr>
                    <?php foreach($data['appointments'] as $appointments) : ?>
                        <tr class="employee-row">
                            <td class="emp-name"><?php echo $appointments->name ?></td>
                            <td><?php echo $appointments->designation ?></td>
                            <td><?php echo $appointments->date ?></td>
                            <td><?php echo $appointments->start_time ." - ". $appointments->end_time?></td>
                            <td><?php echo $appointments->reason ?></td>
                            <?php
                            if ($appointments->status == 0) { ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="title" value="appointment_tbl">
                                    <input type="hidden" name="form_id" value="<?php echo $appointments->id ?>">
                                    <td><input type="submit" name="status" class="approve-btn" value="Approve"></td>
                                    <td><input type="submit" name="status" class="reject-btn" value="Reject"></td>
                                </form>
                            <?php
                            } elseif ($appointments->status == 1) { ?>
                                <td colspan=2>
                                    <div class="approved">Approved</div>
                                </td>
                            <?php
                            } elseif ($appointments->status == -1) { ?>
                                <td colspan=2>
                                    <div class="rejected">Rejected</div>
                                </td>
                            <?php
                            } ?>
                        </tr>
                    <?php endforeach; ?>
                </table>
                </div>
                
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
