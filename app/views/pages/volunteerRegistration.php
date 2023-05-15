<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/stylev.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <div class="tittle">
        <h1>Application for Volunteer Registration</h1>
    </div>
    <form action="" method="POST">
        <div class="content mar-set">
            <div class="border-box">
                <label for="first_name">First Name :</label><br>
                <input type="text" id="first_name" name="first_name" class="text">
                <span class="error"><?php echo $data['first_name_err'] ?></span>

                <div class="space"></div>

                <label for="last_name">Last Name :</label><br>
                <input type="text" id="last_name" name="last_name" class="text">
                <span class="error"><?php echo $data['last_name_err'] ?></span>

                <div class="space"></div>
                <label for="gender">Gender :</label><br>
                <input type="radio" id="gender" name="gender" value="Male"><label for="gender">Male</label>
                <input type="radio" id="gender" name="gender" value="Female"><label for="gender">Female</label>
                <div class="space"></div>


                <label for="nic">NIC :</label><br>
                <input type="text" id="nic" name="nic" class="text">
                <span class="error"><?php echo $data['nic_err'] ?></span>

                <div class="space"></div>

                <label for="dob">Date of Birth :</label><br>
                <input type="date" id="birthday" name="birthday" class="text">
                <span class="error"><?php echo $data['birthday_err'] ?></span>

                <div class="space"></div>

                <label for="address">Address :</label><br>
                <input type="text" id="address" name="address" class="text">
                <span class="error"><?php echo $data['address_err'] ?></span>

                <div class="space"></div>

                <label for="contact_num">contact number :</label><br>
                <input type="text" id="contact_num" name="contact_num" class="text">
                <span class="error"><?php echo $data['contact_num_err'] ?></span>

                <div class="space"></div>

                <label for="email">Email :</label><br>
                <input type="text" id="email" name="email" class="text">
                <span class="error"><?php echo $data['email_err'] ?></span>

                <div class="space"></div>

                <lable for="Subjects">Subjects :</lable></br>
                <input type="checkbox" name="subjects" value="Mathematics">Mathematics<br>
                <input type="checkbox" name="subjects" value="Sceince">Sceince <br>
                <input type="checkbox" name="subjects" value="English">English <br>
                <input type="checkbox" name="subjects" value="Sinhala">Sinhala <br>
                <input type="checkbox" name="subjects" value="Tamil">Tamil <br>
                <input type="checkbox" name="subjects" value="ICT">ICT <br>


                <div class="space"></div>

                <label for="Qulification">qulifications :</label><br>
                <select id="subjects" name="qualifications">
                    <option value="Pass O/L">Pass O/L</option>
                    <option value="Pass A/L">Pass A/L</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Graduated">Graduated</option>
                </select>

                <div class="space"></div>

                <label for="Other">Other :</label><br>
                <input type="text" id="other" name="other" class="text">
            </div>
            <input class="submit-btn" type="submit">
        </div>
    </form>
</body>

</html>