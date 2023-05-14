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
                    <a href="<?php echo URLROOT; ?>/directors/appointments"><i class="fa-solid fa-calendar-plus"></i><span class="link">Appointments</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/school_management"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Management</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/directors/projects" class="active"><i class="fa-solid fa-building"></i><span class="link">School Projects</span></a>
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
                <h1>SCHOOL PROJECTS</h1>
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
                <div style="height: 540px; overflow: scroll;">
                    <table id="table-customize">
                        
                        <tr style="position: sticky; top: 0px;">
                            <th style="width:100px;">Project No</th>
                            <th style="width:400px;">School Name</th>
                            <th>Project Name</th>
                            <th>Submited Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                        <div>
                            <?php foreach ($data['projects'] as $projects) :?>
                            <tr class="employee-row">
                                <td> <?php echo $projects->project_id; ?></td>
                                <td class="emp-name"> <?php echo $projects->school_name; ?></td>
                                <td> <?php echo $projects->name; ?></td>
                                <td> <?php echo $projects->date_added; ?></td>
                                <?php
                                if ($projects->status == 0) { ?>
                                    <td>Pending <i class="fa fa-spinner" aria-hidden="true"></i></td>
                                <?php
                                } elseif ($projects->status == 1) { ?>
                                    <td>Approved <i class="fa fa-check" aria-hidden="true"></i></td>
                                <?php
                                } elseif ($projects->status == -1) { ?>
                                    <td>Rejected <i class="fa fa-ban" aria-hidden="true"></i></td>
                                <?php
                                } ?>
                                <!-- <td> <?php echo $projects->status; ?></td> -->
                                <td id="center"> <a href="<?php echo URLROOT; ?>/directors/viewMoreProjects/<?php echo $projects->project_id; ?>" class="btn3">More</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </div>
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
