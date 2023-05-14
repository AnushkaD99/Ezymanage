<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/school_profile"><i class="fa-solid fa-chalkboard-user"></i><span class="link">School Profile</span></a>
                </li>
                <li>
                    <a href="<?php echo URLROOT; ?>/schoolclerks/projects" class="active"><i class="fa-solid fa-building"></i><span class="link">Projects</span></a>
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
            <div class="main-2col">
                <div class="main-2col-left">
                    <div class="tittle">
                        <h1>SCHOOL PROJECTS</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="content">
                            <h3 id="center">Add School Projects</h3>
                            <div class="space"></div>
                            <div class="border-box">
                                <label for="name">Project Name :</label><br>
                                <textarea name="name" placeholder="Project Name" ><?php echo $data['name']; ?></textarea><br>
                                <span class="error"><?php echo $data['name_err']; ?></span>
                                <div class="space"></div>

                                <label for="description">Project Description :</label><br>
                                <textarea name="description" placeholder="Project Description"><?php echo $data['description']; ?></textarea><br>
                                <span class="error"><?php echo $data['description_err']; ?></span>
                                <div class="space"></div>

                                <label for="school_name">School Name :</label><br>
                                <textarea name="school_name" placeholder="School Name"><?php echo $data['school_name']; ?></textarea><br>
                                <span class="error"><?php echo $data['school_name_err']; ?></span>
                                <div class="space"></div>

                                <label for="estimate_date">Estimated Start Date :</label><br>
                                <input type="date" name="estimate_date" value="<?php echo $data['estimate_date']; ?>">
                                <span class="error"><?php echo $data['date_err']; ?></span>
                                <div class="space"></div>

                                <label for="drive_link">Drive link :</label><br>
                                <p>Please add your Project Proposal to drive and put that link here.</p>
                                <textarea name="drive_link" placeholder="Drive Link"><?php echo $data['drive_link']; ?></textarea><br>
                                <span class="error"><?php echo $data['drive_link_err']; ?></span>
                                <div class="space"></div>

                                <?php //echo $date_err; ?>
                            </div>
                            <input type="submit" value="Submit" class="submit-btn">
                        </div>
                    </form>
                </div>
                <div class="main-2col-right">
                    <br><br>
                    <div class="content">
                    <h3 id="center">PREVIOUS ADDED PROJECTS</h3>
                    <div style="height: 540px; overflow: scroll;">
                        <table class="row-space">
                            <tr style="position: sticky; top: 0px; background-color:white;">
                                <th style="width:250px;">Project Name</th>
                                <th style="width:160px;">Project Updated Date</th>
                                <th>Status</th>
                            </tr>
                            <?php foreach($data['project_details'] as $project_details): ?>
                            <tr>
                                <td><?php echo $project_details->name; ?></td>
                                <td><?php echo $project_details->date_added; ?></td>
                                <!-- <td class="align-right"><a href="<?php echo URLROOT; ?>/teachers/LeaveView/<?php echo $project_details->id; ?>" class="view-btn">More</a></td> -->
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
