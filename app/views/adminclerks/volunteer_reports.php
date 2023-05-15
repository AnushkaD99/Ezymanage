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
                <a href="<?php echo URLROOT; ?>/adminclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">Users</span></a>
            </li>
            <!-- <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/volunteers"><i class="fa-solid fa-handshake-angle"></i><span class="link">Volunteers</span></a>
            </li> -->
            <li>
                <a href="<?php echo URLROOT; ?>/adminclerks/reports" class="active"><i class="fa-solid fa-user-check"></i><span class="link">Reports</span></a>
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
        <div class="tittle">
            <h1>Volunteer Reports</h1>
        </div>
        <div class="content-report">
            <div class="upperbar">
                <div class="upperbar-left">
                    <div class="back-tbn"><a href="<?php echo URLROOT; ?>/adminclerks/reports"><button>Back</button></a></div>
                </div>
                <div class="upperbar-right">
                    <div class="filter">
                        <strong>Filter by :</strong>
                        <select name="gender" id="filter1">
                            <option default>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <select name="subject" id="filter4">
                            <option default>Subject</option>
                            <option value="Mathematics">Maths</option>
                            <option value="Science">Science</option>
                            <option value="English">English</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Tamil">Tamil</option>
                        </select>
                    </div>
                    or
                    <div class="search-bar"><input type="text" id='search-input' placeholder="Search by nic number or name"></div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <hr>
        <div class="space"></div>
        <div class="second-row">
            <div>
                <h3>All Volunteers : <span><?php echo $data['volunteer_count']->count; ?></span></h3>
            </div>
            <button class="print-button" onclick="printDiv('report')"><i class="fas fa-print"></i> Print</button>
        </div>
        <div id="report">
            <div class="hidden">Volunteer details</div>
            <table id="table-customize">
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>NIC</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>Subjects</th>
                    <th>Qulifications</th>
                </tr>
                <?php foreach ($data['volunteer'] as $volunteer) : ?>
                    <tr class="employee-row">
                        <td class="emp-fname"><?php echo $volunteer->first_name; ?></td>
                        <td class="emp-name"><?php echo $volunteer->last_name; ?></td>
                        <td class="emp-id"><?php echo $volunteer->nic; ?></td>
                        <td class="emp-gender"><?php echo $volunteer->gender; ?></td>
                        <td><?php echo $volunteer->birthday; ?></td>
                        <td><?php echo $volunteer->email; ?></td>
                        <td><?php echo $volunteer->contact_num; ?></td>
                        <td><?php echo $volunteer->address; ?></td>
                        <td class="emp-subjects"><?php echo $volunteer->subjects; ?></td>
                        <td><?php echo $volunteer->qualifications; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<script>
    //volunteer filters
    var Filter1 = document.getElementById('filter1');
    var Filter4 = document.getElementById('filter4');

    Filter1.addEventListener('input', applyFilters);
    Filter4.addEventListener('input', applyFilters);

    function applyFilters() {
        var genderFilterValue = Filter1.value.toUpperCase();
        var subjectFilterValue = Filter4.value.toUpperCase();

        var rows = document.querySelectorAll('.employee-row');

        for (var i = 0; i < rows.length; i++) {
            var genderCell = rows[i].querySelector('.emp-gender');
            var subjectCell = rows[i].querySelector('.emp-subject');

            var genderValue = genderCell.textContent || genderCell.innerText;
            var subjectValue = subjectCell.textContent || subjectCell.innerText;

            var displayRow = true;

            if (genderFilterValue !== 'GENDER' && genderValue.toUpperCase() !== genderFilterValue) {
                displayRow = false;
            }
            if (subjectFilterValue !== 'SUBJECT' && subjectValue.toUpperCase() !== subjectFilterValue) {
                displayRow = false;
            }

            rows[i].style.display = displayRow ? '' : 'none';
        }
    }
</script>
<?php require APPROOT . '/views/inc/footer.php'; ?>