<div class="mfp-hide white-popup" id="my-popup">
    <h1>Edit Profile</h1>
    <!-- <form action="" enctype="multipart/form-data" method="POST">
        <div class="main-editprofilej">
            <div class="main-editprofile-dp">
                <div class="img">
                          <img src="<?php echo $data['users']->dp ?>" alt="user" class="user">
                          <input type="file" id="profile-picture" name="profile-picture" accept =".jpeg, .jpg, .png">
                          <b>User Name : </b><input type="text" name="emp.num" class="textBox" value="<?php echo $data['users']->username ?>">
                        </div>
                <div class="upload">
                    <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['users']->dp ?>" id="image" alt="user">

                    <div class="rightRound" id="upload">
                        <input type="file" name="fileImg" id="fileImg" accept=".jpg, .jpeg, .png">
                        <i class="fa fa-camera"></i>
                    </div>

                    <div class="leftRound" id = "cancel" style = "display: none;">
                            <i class = "fa fa-times"></i>
                            </div>
                            <div class="rightRound" id = "confirm" style = "display: none;">
                            <input type="submit">
                            <i class = "fa fa-check"></i>
                            </div>
                </div>
            </div>
            <div class="main-editprofile-personal">
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Employee Number :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="emp_num" class="textBox" value="<?php echo $data['users']->emp_no ?>">
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Email :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="email" class="textBox" value="<?php echo $data['users']->email ?>">
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Contact Number :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="contact" class="textBox" value="<?php echo $data['users']->contact_num ?>">
                    </div>
                </div>
            </div>
            <div class="main-editprofile-other">
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Full Name :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->full_name ?>">
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Name with Initials :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="nameWithInitials" class="textBox" value="<?php echo $data['users']->name_with_initials ?>">
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Address :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="address" class="textBox" value="<?php echo $data['users']->address ?>">
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Birthday :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="birthday" class="textBox" value="<?php echo $data['users']->birthday ?>">
                    </div>
                </div>
                <div class="main-editprofile-block">
                    <div class="main-editprofile-left">
                        Designation :
                    </div>
                    <div class="main-editprofile-right">
                        <input type="text" name="designation" class="textBox" value="<?php echo $data['users']->designation ?>">
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
                                Password :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="password" class="textBox" placeholder="***************">
                            </div> 
                        </div>
                        <div class="main-editprofile-block">
                            <div class="main-editprofile-left">
                                Confirm Password :
                            </div>
                            <div class="main-editprofile-right">
                                <input type="text" name="confirmPassword" class="textBox" placeholder="***************">
                            </div>
                        </div>
                <div class="col-2-btn">
                    <input type="submit" value="Change" class="submit-btn">
                    <input type="reset" value="Reset" class="submit-btn">
                </div>
            </div>
        </div>
    </form> -->
    <hr>
    <div class="space"></div>
    <div class="profile_pic">
        <div class="subtittle">
            <h3>Profile Picture</h3>
            <div class="edit_btn">Edit</div>
        </div>
        <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $data['users']->dp ?>" alt="user" class="user">
    </div>
    <div class="space"></div>
    <hr>
    <div class="space"></div>
    <div class="personal_info">
        <form action="" method="POST">
            <h3>Customize your peronal details</h3>
            <div class="main-editprofile-block">
                <div class="main-editprofile-left">
                    Username :
                </div>
                <div class="main-editprofile-right">
                    <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->username ?>">
                </div>
            </div>
            <div class="main-editprofile-block">
                <div class="main-editprofile-left">
                    Full Name :
                </div>
                <div class="main-editprofile-right">
                    <input type="text" name="fullName" class="textBox" value="<?php echo $data['users']->full_name ?>">
                </div>
            </div>
            <div class="main-editprofile-block">
                <div class="main-editprofile-left">
                    Name with Initials :
                </div>
                <div class="main-editprofile-right">
                    <input type="text" name="nameWithInitials" class="textBox" value="<?php echo $data['users']->name_with_initials ?>">
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
                    Contact number :
                </div>
                <div class="main-editprofile-right">
                    <input type="text" name="birthday" class="textBox" value="<?php echo $data['users']->contact_num ?>">
                </div>
            </div>
            <div class="main-editprofile-block">
                <div class="main-editprofile-left">
                    Email :
                </div>
                <div class="main-editprofile-right">
                    <input type="text" name="birthday" class="textBox" value="<?php echo $data['users']->email ?>">
                </div>
            </div>
            <div class="main-editprofile-block">
                <div class="main-editprofile-left">
                    Address :
                </div>
                <div class="main-editprofile-right">
                    <input type="text" name="address" class="textBox" value="<?php echo $data['users']->address ?>">
                </div>
            </div>
            <div class="col-2-btn">
                <input type="submit" value="Update" class="fullBtn">
                <input type="reset" value="Reset" class="fullBtn">
            </div>
        </form>
    </div>

    <div class="space"></div>
    <hr>
    <div class="space"></div>

    <div class="personal_info">
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
                <input type="submit" value="Change" class="fullBtn">
                <input type="reset" value="Reset" class="fullBtn">
            </div>
        </form>
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
        $('#my-popup-trigger').magnificPopup({
            items: {
                src: '#my-popup'
            },
            type: 'inline'
        });
    });
</script>

<script>
    const passwordInput = document.querySelector('#id_password');
    const toggleButton = document.querySelector('.fa-eye');

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