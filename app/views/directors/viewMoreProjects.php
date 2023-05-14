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
        <h1 class="main-topic">Project Details</h1><br>
        <div class="singlecol">
            <div class="border-box">
                <div class="row">
                    <div class="row-lable">Schooo Name</div>
                    <div class="row-data"><?php echo $data['projects']->school_name; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Project Name</div>
                    <div class="row-data"><?php echo $data['projects']->name; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Description</div>
                    <div class="row-data"><?php echo $data['projects']->description; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Submited Date</div>
                    <div class="row-data"><?php echo $data['projects']->date_added; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Project Start Date</div>
                    <div class="row-data"><?php echo $data['projects']->estimate_date; ?></div>
                </div>
                <div class="row">
                    <div class="row-lable">Project Proposal Drive Link</div>
                    <div class="row-data"><?php echo $data['projects']->drive_link; ?></div>
                </div> 
                <div class="row">
                    <div class="row-lable">Project Status</div>
                    <div class="row-data"> 
                    <?php 
                        if ($data['projects']->status == 0) { ?>
                            <form action="" method="POST">
                                <input type="hidden" name="title" value="projects_tbl">
                                <input type="hidden" name="form_id" value="<?php echo $data['projects']->project_id ?>">
                                <button type="submit" name="status" class="approve-btn" value="Approve">Approve</button>
                                <button type="submit" name="status" class="reject-btn" value="Reject">Reject</button>
                            </form>
                        <?php
                        } elseif ($data['projects']->status == 1) { ?>
                            <td>Approved <i class="fa fa-check" aria-hidden="true"></i></td>
                        <?php
                        } elseif ($data['projects']->status == -1) { ?>
                            <td>Rejected <i class="fa fa-ban" aria-hidden="true"></i></td>
                        <?php
                        } ?>
                    </div>
                </div>    
            </div>
            <a href="<?php echo URLROOT; ?>/directors/projects">
                <div class="backBtn-circle"><i class="fa-solid fa-angle-left"></i> Back</div>
            </a>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>