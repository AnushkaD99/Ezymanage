<!-- <div class="mfp-hide white-popup" id="my-popup"> -->

<!-- Change profile pic -->
<div class="mfp-hide white-popup profile_pic" id="profile_pic">
    <div class="subtittle">
        <h3>Profile Picture</h3>
        <div class="edit_btn">Edit</div>
    </div>
    <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['users']->dp ?>" alt="user" class="user">
    <form action="<?php echo URLROOT; ?>/salaryclerks/updateProfilePicture" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileImg">
        <input type="submit" value="Upload">
    </form>
</div>

<!-- Change Personal info -->
<div class="mfp-hide white-popup personal_info" id="personal_info">
    <form action="" method="POST">
        <h3>Customize your peronal details</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Username :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="username" class="textBox" value="<?php echo $data['users']->username ?>">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Full Name :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="full_name" class="textBox" value="<?php echo $data['users']->full_name ?>">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Name with Initials :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="name_with_initials" class="textBox" value="<?php echo $data['users']->name_with_initials ?>">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                NIC :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="nic" class="textBox" value="<?php echo $data['users']->nic ?>">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Birthday :
            </div>
            <div class="main-editprofile-right">
                <input type="date" name="birthday" class="textBox" value="<?php echo $data['users']->birthday ?>">
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Gender :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="gender" class="textBox" value="<?php echo $data['users']->gender ?>">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_per" value="Update" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>

<!-- Change Password -->
<div class="mfp-hide white-popup personal_info" id="password">
    <form action="" method="POST">
        <h3>Reset Password</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Current Password :
            </div>
            <div class="main-editprofile-right">
                <input type="password" name="current_password" id="id_password" class="password" placeholder="Enter your current password">
                <i class="fa-solid fa-eye" id="id_password"></i>
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                New Password :
            </div>
            <div class="main-editprofile-right">
                <input type="password" name="new_password" id="id_password" class="password" placeholder="Enter your new password">
                <i class="fa-solid fa-eye" id="id_password"></i>
            </div>
        </div>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                Confirm Password :
            </div>
            <div class="main-editprofile-right">
                <input type="password" name="confirm_password" id="id_password" class="password" placeholder="Enter your new password again">
                <i class="fa-solid fa-eye" id="id_password"></i>
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_pass" value="Change" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>

<!-- Edit contact number -->
<div class="mfp-hide white-popup personal_info" id="new_cn">
    <form action="" method="POST">
        <h3>Change contact number</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                New number :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="contact_num" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_cn" value="Change" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>

<!-- Edit email -->
<div id="myModal_edit_email" class="modal">
    <div class="modal-content">
        <div class="close" onclick="closeModal_edit_email()">&times;</div>
        <div>
            <form action="<?php echo URLROOT; ?>/salaryclerks/change_email" method="POST">
                <h3>Change email address</h3>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        New email :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="email" name="email" class="textBox" placeholder="Enter here">
                    </div>
                </div>
                <input type="hidden" name="id" class="textBox" id="id">
                <div class="col-2-btn">
                    <input type="submit" name="submit" id="executeQuery" value="Change" class="fullBtn">
                    <input type="reset" value="Reset" class="fullBtn">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit address -->
<div class="mfp-hide white-popup personal_info" id="new_ad">
    <form action="" method="POST">
        <h3>Change personal address</h3>
        <div class="main-editprofile-block">
            <div class="main-editprofile-left">
                New address :
            </div>
            <div class="main-editprofile-right">
                <input type="text" name="address" class="textBox" placeholder="Enter here">
            </div>
        </div>
        <div class="col-2-btn">
            <input type="submit" name="submit_ad" value="Change" class="fullBtn">
            <input type="reset" value="Reset" class="fullBtn">
        </div>
    </form>
</div>

<!-- OTP -->


<div id="myModal_add_otp" class="modal">
    <div class="modal-content">
        <div class="close" onclick="closeModal_add_otp()">&times;</div>
        <div>
            <form action="<?php echo URLROOT; ?>/salaryclerks/getotp" method="POST">
                <h3>Check your email to otp</h3>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        OTP :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="int" name="otp" class="textBox" placeholder="Enter here">
                    </div>
                </div>
                <div class="col-2-btn">
                    <input type="submit" name="submit_add" value="Change" class="fullBtn">
                    <input type="reset" value="Reset" class="fullBtn">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById("profile-picture").onchange = function() {
        document.getElementById("image").src = URL.createObjectURL(profile - picture.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
    }
</script>

<script type="text/javascript">
    document.getElementById("fileImg").onchange = function() {
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("upload").style.display = "none";
    }

    //   var userImage = document.getElementById('image').src;
    //   document.getElementById("cancel").onclick = function(){
    //     document.getElementById("image").src = userImage; // Back to previous image

    //     document.getElementById("cancel").style.display = "none";
    //     document.getElementById("confirm").style.display = "none";

    //     document.getElementById("upload").style.display = "block";
    //   }
</script>

<!-- Include jQuery and Magnific-Popup JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- Initialize Magnific-Popup -->
<script>
    $(document).ready(function() {
        $('#edit_profile_pic').magnificPopup({
            items: {
                src: '#profile_pic'
            },
            type: 'inline',
        });
    });

    $(document).ready(function() {
        $('#edit_personal_details').magnificPopup({
            items: {
                src: '#personal_info'
            },
            type: 'inline'
        });
    });

    $(document).ready(function() {
        $('#edit_password').magnificPopup({
            items: {
                src: '#password'
            },
            type: 'inline'
        });
    });

    $(document).ready(function() {
        $('#edit_cn').magnificPopup({
            items: {
                src: '#new_cn'
            },
            type: 'inline',
        });
    });

    $(document).ready(function() {
        $('#edit_ad').magnificPopup({
            items: {
                src: '#new_ad'
            },
            type: 'inline',
        });
    });
</script>

<script>
    const passwordInput = document.querySelector('#id_password');
    const toggleButton = document.querySelector('.fa-eye');
    // const edit_profile_pic = document.querySelector('#edit_profile_pic');
    // const profile_pic = document.querySelector('#profile_pic');
    // const edit_personal_details = document.querySelector('#edit_personal_details');
    // const personal_info = document.querySelector('#personal_info');
    // const edit_password = document.querySelector('#edit_password');
    // const password = document.querySelector('#password');

    toggleButton.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.classList.remove('fa-eye');
            toggleButton.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleButton.classList.remove('fa-eye-slash');
            toggleButton.classList.add('fa-eye');
        }
    });
</script>