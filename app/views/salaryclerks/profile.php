<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <!-- Start navbar -->
    <?php require_once APPROOT . '/views/inc/navbar.php'; ?>
    <!-- Start sidebar -->
    <div class="sidebar">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/index"><i class="fa-solid fa-house"></i><span class="link">Home</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/viewDetails"><i class="fa-solid fa-eye"></i><span class="link">View</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/paysheet"><i class="fa-solid fa-file-invoice-dollar"></i><span class="link">Pay Sheet</span></a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/salaryclerks/profile" class="active"><i class="fa-solid fa-circle-user"></i><span class="link">Profile</span></a>
            </li>
        </ul>
        <div class="logout">
            <hr>
            <a href="<?php echo URLROOT; ?>/users/logout"><i class="fa-solid fa-sign-out"></i><span class="link">Logout</span></a>
        </div>
    </div>
    <!-- End sidebar -->
    <div class="main">
        <h1>Profile Details</h1>
        <div class="content" id="center">
            <div class="profile">
                <div class="profile_pic">
                    <div class="subtittle">
                        <h3>Profile Picture</h3>
                        <div class="edit_btn" id="edit_profile_pic">Edit</div>
                    </div>
                    <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['users']->dp ?>" alt="user" class="user">
                </div>
                <div class="space"></div>
                <hr>
                <div class="space"></div>
                <div class="personal_info">
                    <form action="" method="POST">
                        <div class="subtittle">
                            <h3>Customize your peronal details</h3>
                            <div class="edit_btn" id="edit_personal_details">Customize</div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Username :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->username ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Full Name :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->full_name ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Name with Initials :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="nameWithInitials" class="textBox" value="<?php echo $data['users']->name_with_initials ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                NIC :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="nic" class="textBox" value="<?php echo $data['users']->nic ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Birthday :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="date" name="birthday" class="textBox" value="<?php echo $data['users']->birthday ?>" readonly>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Gender :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="gender" class="textBox" value="<?php echo $data['users']->gender ?>" readonly>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="space"></div>
                <hr>
                <div class="space"></div>
                <div class="personal_info">
                    <form action="" method="POST">
                        <div class="subtittle">
                            <h3>Customize your contact details</h3>
                            <!-- <div class="edit_btn" id="edit_personal_details">Customize</div> -->
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Contact number :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="birthday" class="password" value="<?php echo $data['users']->contact_num ?>" readonly>
                                <i class="fa-solid fa-pen-to-square" id="edit_cn"></i>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Email :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="birthday" class="password" value="<?php echo $data['users']->email ?>" readonly>
                                <i class="fa-solid fa-pen-to-square" onclick="openModal_edit_email('<?php echo $data['users']->emp_no ?>')"></i>
                            </div>
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Address :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="address" class="password" value="<?php echo $data['users']->address ?>" readonly>
                                <i class="fa-solid fa-pen-to-square" id="edit_ad"></i>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="space"></div>
                <hr>
                <div class="space"></div>
                <div class="subtittle">
                    <h3>Change your password</h3>
                    <div class="edit_btn" id="edit_password">Change</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'editProfile.php'; ?>

<script>
    function openModal_edit_email(id) {
        document.getElementById("myModal_edit_email").style.display = "block";

        // Set the existing subject and details in the input fields
        document.getElementById('id').value = id;
    }

    function openModal_add_otp(id) {
        document.getElementById("myModal_add_otp").style.display = "block";

        // Set the existing subject and details in the input fields
        document.getElementById('id').value = id;
    }

    function closeModal_edit_email() {
        document.getElementById("myModal_edit_email").style.display = "none";
    }

    function closeModal_add_otp() {
        document.getElementById("myModal_add_otp").style.display = "none";
    }

    // document.getElementById("executeQuery").addEventListener("click", function() {
    //     $.ajax({
    //         url: "<?php echo URLROOT; ?>/salaryclerks/change_email",
    //         type: "POST",
    //         success: function(response) {
    //             //alert(response); // Show a popup with the response from the PHP script
    //             document.getElementById("myModal_add_otp").style.display = "block";
    //         },
    //         error: function(xhr, status, error) {
    //             alert("An error occurred: " + error);
    //         }
    //     });
    // });
    
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>