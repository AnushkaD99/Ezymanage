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
            <h1>Teacher Reports</h1>
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
                        <select name="gender" id="filter2">
                            <option default>School</option>
                            <?php foreach ($data['school'] as $school) : ?>
                                <option value="<?php echo $school->name; ?>"><?php echo $school->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select name="Grade" id="filter3">
                            <option default>Grade</option>
                            <option value="First Class">First Class</option>
                            <option value="Second Class First Grade">Second Class First Grade</option>
                            <option value="Second Class Second Grade">Second Class Second Grade</option>
                            <option value="Third Class First Grade">Third Class First Grade</option>
                        </select>
                    </div>
                    <div class="search-bar"><input type="text" id='search-input' placeholder="Search by employee number or name"></div>
                </div>
            </div>
        </div>
        <div class="space"></div>
        <hr>
        <div class="space"></div>
        <div class="second-row">
            <div><h3>All Teachers : <span><?php echo $data['teacher_count']->count; ?></span></h3></div>
            <button class="print-button" onclick="printDiv('report')"><i class="fas fa-print"></i> Print</button>
        </div>
        <div id="report">
            <div class="hidden">Teacher details</div>
            <table id="table-customize">
                <tr>
                    <th>Employee number</th>
                    <th>Full name</th>
                    <th>Name with initials</th>
                    <th>NIC</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Address</th>
                    <th>School</th>
                    <th>Grade</th>
                </tr>
                <?php foreach ($data['teacher'] as $teacher) : ?>
                    <tr class="employee-row">
                        <td class="emp-id"><?php echo $teacher->emp_no; ?></td>
                        <td class="emp-fname"><?php echo $teacher->full_name; ?></td>
                        <td class="emp-name"><?php echo $teacher->name_with_initials; ?></td>
                        <td><?php echo $teacher->nic; ?></td>
                        <td class="emp-gender"><?php echo $teacher->gender; ?></td>
                        <td><?php echo $teacher->birthday; ?></td>
                        <td><?php echo $teacher->email; ?></td>
                        <td><?php echo $teacher->contact_num; ?></td>
                        <td><?php echo $teacher->address; ?></td>
                        <td class="emp-school"><?php echo $teacher->school; ?></td>
                        <td class="emp-grade"><?php echo $teacher->grade; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<script>
    //teacher principal filters
var Filter1 = document.getElementById('filter1');
var Filter2 = document.getElementById('filter2');
var Filter3 = document.getElementById('filter3');

Filter1.addEventListener('input', applyFilters);
Filter2.addEventListener('input', applyFilters);
Filter3.addEventListener('input', applyFilters);

function applyFilters() {
    var genderFilterValue = Filter1.value.toUpperCase();
    var schoolFilterValue = Filter2.value.toUpperCase();
    var gradeFilterValue = Filter3.value.toUpperCase();

    var rows = document.querySelectorAll('.employee-row');

    for (var i = 0; i < rows.length; i++) {
        var genderCell = rows[i].querySelector('.emp-gender');
        var schoolCell = rows[i].querySelector('.emp-school');
        var gradeCell = rows[i].querySelector('.emp-grade');

        var genderValue = genderCell.textContent || genderCell.innerText;
        var schoolValue = schoolCell.textContent || schoolCell.innerText;
        var gradeValue = gradeCell.textContent || gradeCell.innerText;

        var displayRow = true;

        if (genderFilterValue !== 'GENDER' && genderValue.toUpperCase() !== genderFilterValue) {
            displayRow = false;
        }
        if (schoolFilterValue !== 'SCHOOL' && schoolValue.toUpperCase() !== schoolFilterValue) {
            displayRow = false;
        }
        if (gradeFilterValue !== 'GRADE' && gradeValue.toUpperCase() !== gradeFilterValue) {
            displayRow = false;
        }

        rows[i].style.display = displayRow ? '' : 'none';
    }
}


</script>
<?php require APPROOT . '/views/inc/footer.php'; ?>