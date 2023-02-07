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
            <h1>View Details</h1>
            <div class="main-viewDetails">
                <div class="main-viewDetails-buttons">
                    <div class="main-viewDetails-buttons-left select-btn active" id="select-btn1">Teachers</div>
                    <div class="main-viewDetails-buttons-center select-btn" id="select-btn2">Principals</div>
                    <div class="main-viewDetails-buttons-right select-btn" id="select-btn3">Schools</div>
                </div>
                <div class="main-viewDetails-details">
                    <!-- Schools -->
                    <div id="schools">
                        <table id="table-customize">
                        <h3>School Details</h3>
                            <form action="">
                                <input type="text" placeholder="Search" >
                                <button type="submit"><i class="fa-solid fa-search"></i></button>
                            </form>
                            <tr>
                                <th>School Reg.No</th>
                                <th>Name</th>
                                <th>View more details</th>
                            </tr>
                            <?php foreach($data['schools'] as $school) : ?>
                            <tr>
                                <td> <?php echo $school->id; ?></td>
                                <td> <?php echo $school->name; ?></td>
                                <td id="center"> <a href="<?php echo URLROOT; ?>/adminclerks/viewMoreSchoolDetails/<?php echo $school->id; ?>" class="btn3">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>

                    <!-- Principal -->
                    <div id="principals">
                        <table id="table-customize">
                            <h3>Principal Details</h3>
                            <form action="">
                                <input type="text" placeholder="Search" >
                                <button type="submit"><i class="fa-solid fa-search"></i></button>
                            </form>
                            <tr>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th>View more details</th>
                            </tr>
                            <?php foreach($data['principals'] as $principal) : ?>
                            <tr>
                                <td> <?php echo $principal->id; ?></td>
                                <td> <?php echo $principal->fullName; ?></td>
                                <td id="center"> <a href="<?php echo URLROOT; ?>/adminclerks/viewMorePrincipalDetails/<?php echo $principal->id; ?>" class="btn3">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>

                    <!-- Teacher -->
                    <div id="teachers">
                        <table id="table-customize">
                            <h3>Teacher Details</h3>
                            <form action="">
                                <input type="text" placeholder="Search" >
                                <button type="submit"><i class="fa-solid fa-search"></i></button>
                            </form>
                            <tr>
                                <th>Emp No</th>
                                <th>Name</th>
                                <th>View more details</th>
                            </tr>
                            <?php foreach($data['teachers'] as $teacher) : ?>
                            <tr>
                                <td> <?php echo $teacher->id; ?></td>
                                <td> <?php echo $teacher->fullName; ?></td>
                                <td id="center"> <a href="<?php echo URLROOT; ?>/adminclerks/viewMoreTeacherDetails/<?php echo $teacher->id; ?>" class="btn3">More</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var teachers = document.getElementById("teachers");
        var principals = document.getElementById("principals");
        var schools = document.getElementById("schools");

        var btn1 = document.getElementById("select-btn1");
        var btn2 = document.getElementById("select-btn2");
        var btn3 = document.getElementById("select-btn3");

        btn1.onclick = function(){
            teachers.style.display = 'contents';
            principals.style.display = 'none';
            schools.style.display = 'none';
        }

        btn2.onclick = function(){
            teachers.style.display = 'none';
            principals.style.display = 'contents';
            schools.style.display = 'none';
        }

        btn3.onclick = function(){
            teachers.style.display = 'none';
            principals.style.display = 'none';
            schools.style.display = 'contents';
        }

        const buttons = document.querySelectorAll('.select-btn');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                buttons.forEach(btn => {
                    btn.classList.remove('active');
                    });
                this.classList.add('active');
            });
        });


    </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>   
