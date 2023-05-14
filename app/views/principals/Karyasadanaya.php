<?php require_once APPROOT . '/views/inc/header.php'; ?>
    <div class="container">
        <!-- Start navbar -->
        <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
        <!-- Start sidebar -->
        <div class="sidebar">
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
        <!-- End sidebar -->
        <div class="main">
            <div class="main-2col">
                <div class="main-2col-left">
                    <div class="tittle">
                        <h1>KARYASADANAYA</h1>
                    </div>
                    <form action="" method="POST">
                        <!-- Form 1 -->
                        <div id="frm1">
                            <div class="content">
                                <div class="border-box">
                                    <label for="Evaluation period">Evaluation period :</label>
                                    <table>
                                        <tr>
                                            <td><input type="date" id="start_date" name="start_date"></td>
                                            <td id="center">To</td>
                                            <td class="align-right"><input type="date" id="end_date" name="end_date"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="space"></div>
                                <div class="border-box">
                                    <h4>1. Process: Teaching</h4>
                                    <label for="tasks1">1.1 Resource support and training needs expected from the school to accomplish tasks :</label><br>
                                    <textarea id="tasks1" name="tasks1"></textarea><br>
                                    <?php //echo $tasks1Err; ?>
                                    <label for="indicators">1.2 Karya sadana Indicators :</label><br>
                                    <textarea id="Indicators1" name="Indicators1"></textarea><br>
                                    <?php //echo $Indicators1Err; ?>
                                    <label for="Problems1">1.3 Tasks performed and problems encountered :</label><br>
                                    <textarea id="Problems1" name="Problems1"></textarea><br>
                                    <?php //echo $Problems1Err; ?>
                                </div>
                                <div class="submit-btn" id="nxt1">Next</div>
                            </div>
                        </div>

                        <!-- Form 2 -->
                        <div id="frm2">
                            <div class="content">
                                <div class="border-box">
                                    <h4>2. Process : Extracurricular activities</h4>
                                    <label for="tasks2">2.1 Resource support and training needs expected from the school to accomplish tasks :</label><br>
                                    <textarea id="tasks2" name="tasks2"></textarea><br>
                                    <?php //echo $tasks2Err; ?>
                                    <label for="indicators2">2.2 Karya sadana Indicators :</label><br>
                                    <textarea id="Indicators2" name="Indicators2"></textarea><br>
                                    <?php //echo $Indicators2Err; ?>
                                    <label for="Problems2">2.3 Tasks performed and problems encountered :</label><br>
                                    <textarea id="Problems2" name="Problems2"></textarea><br>
                                    <?php //echo $Problems2Err; ?>
                                </div>
                                <div class="col-2-btn">
                                    <div class="2col-btn-left submit-btn" id="bck1">>Previous</div>
                                    <div class="col-2-btn-right submit-btn" id="nxt2">Next</div>
                                </div>
                            </div>
                        </div>

                        <!-- Form 3 -->
                        <div id="frm3">
                            <div class="content">
                                <div class="border-box">
                                        <h4>3. Process : Student Welfare and Guidance</h4>
                                        <label for="tasks3">3.1 Resource support and training needs expected from the school to accomplish tasks :</label><br>
                                        <textarea id="tasks3" name="tasks3"></textarea><br>
                                        <?php //echo $tasks3Err; ?>
                                        <label for="indicators3">3.2 Karya sadana Indicators :</label><br>
                                        <textarea id="Indicators3" name="Indicators3"></textarea><br>
                                        <?php //echo $Indicators3Err; ?>
                                        <label for="Problems3">3.3 Tasks performed and problems encountered :</label><br>
                                        <textarea id="Problems3" name="Problems3"></textarea><br>
                                        <?php //echo $Problems3Err; ?>
                                </div>
                                <div class="col-2-btn">
                                    <div class="2col-btn-left submit-btn" id="bck2">Previous</div>
                                    <div class="col-2-btn-right submit-btn" id="nxt3">Next</div>
                                </div>
                            </div>
                        </div>

                        <!-- Form 4 -->
                        <div id="frm4">
                            <div class="content">
                                <div class="border-box">
                                <h4>4. Process : Special services for the school</h4>
                                    <label for="tasks4">4.1 Resource support and training needs expected from the school to accomplish tasks :</label><br>
                                    <textarea id="tasks4" name="tasks4"></textarea><br>
                                    <?php //echo $tasks4Err; ?>
                                    <label for="indicators4">4.2 Karya sadana Indicators :</label><br>
                                    <textarea id="indicators4" name="Indicators4"></textarea><br>
                                    <?php //echo $Indicators4Err; ?>
                                    <label for="tasks4">4.3 Tasks performed and problems encountered :</label><br>
                                    <textarea id="tasks4" name="Problems4"></textarea><br>
                                    <?php //echo $Problems4Err; ?>
                                </div>
                                <div class="col-2-btn">
                                    <div class="2col-btn-left submit-btn" id="bck3">Previous</div>
                                    <div class="col-2-btn-right submit-btn" id="nxt4">Next</div>
                                </div>
                            </div>
                        </div>

                        <!-- Form 5 -->
                        <div id="frm5">
                            <div class="content">
                                <div class="border-box">
                                    <h4>5. Process : School community relations</h4>
                                    <label for="tasks5">5.1 Resource support and training needs expected from the school to accomplish tasks :</label><br>
                                    <textarea id="tasks5" name="tasks5"></textarea><br>
                                    <?php //echo $tasks5Err; ?>
                                    <label for="indicators5">5.2 Karya sadana Indicators :</label><br>
                                    <textarea id="indicators5" name="Indicators5"></textarea><br>
                                    <?php //echo $Indicators5Err; ?>
                                    <label for="Problems5">5.3 Tasks performed and problems encountered :</label><br>
                                    <textarea id="Problems5" name="Problems5"></textarea><br>
                                    <?php //echo $Problems5Err; ?>
                                </div>
                                <div class="col-2-btn">
                                    <div class="2col-btn-left submit-btn" id="bck4">Previous</div>
                                    <button class="submit-btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="main-2col-right">
                    <div class="content" id="center">
                        <h3>LATEST APPLICATION STATUS</h3>
                        Pending....
                    </div>
                    <div class="content">
                        <h3 id="center">Instructions</h3>
                        <ul>
                            <li>Learning-teaching mechanism</li>
                            <li>Extra curricular activities</li>
                            <li>Student welfare and guidance</li>
                            <li>Special services done for the school</li>
                            <li>Civic relationships</li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3 id="center">PREVIOUS KARYASADANA</h3>
                        <table class="row-space">
                            <tr>
                                <th>Year</th>
                                <th></th>
                            </tr>
                            <?php foreach($data['karyasadana_details'] as $karyasadana_details) : ?>
                            <tr>
                                <td><?php echo $karyasadana_details->end_date ?></td>
                                <td class="align-right"><a href="<?php echo URLROOT; ?>/teachers/karyasadanaya_view/<?php echo $karyasadana_details->id; ?>" class="view-btn">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <div class="submit-btn">See More</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var form1 = document.getElementById("frm1");
        var form2 = document.getElementById("frm2");
        var form3 = document.getElementById("frm3");
        var form4 = document.getElementById("frm4");
        var form5 = document.getElementById("frm5");

        var Next1 = document.getElementById("nxt1");
        var Next2 = document.getElementById("nxt2");
        var Next3 = document.getElementById("nxt3");
        var Next4 = document.getElementById("nxt4");
        var Back1 = document.getElementById("bck1");
        var Back2 = document.getElementById("bck2"); 
        var Back3 = document.getElementById("bck3");
        var Back4 = document.getElementById("bck4"); 

        Next1.onclick = function(){
            form1.style.display = 'none';
            form2.style.display = 'contents';
        }

        Next2.onclick = function(){
            form2.style.display = 'none';
            form3.style.display = 'contents';
        }

        Next3.onclick = function(){
            form3.style.display = 'none';
            form4.style.display = 'contents';
        }

        Next4.onclick = function(){
            form4.style.display = 'none';
            form5.style.display = 'contents';
        }

        Back1.onclick = function(){
            form2.style.display = 'none';
            form1.style.display = 'contents';
        }

        Back2.onclick = function(){
            form3.style.display = 'none';
            form2.style.display = 'contents';
        }
        Back3.onclick = function(){
            form4.style.display = 'none';
            form3.style.display = 'contents';
        }

        Back4.onclick = function(){
            form5.style.display = 'none';
            form4.style.display = 'contents';
        }

    </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
