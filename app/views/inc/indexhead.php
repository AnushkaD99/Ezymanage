<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezymanage</title>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/landingstyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


</head>
<body>
    <div class="header"> 
        <!--top bar ( time/contact) -->
        <div class="top-header" style="margin-left: 2.5%;">
            <div class="text-left">
                <p >   Open 24 hours</p>
            </div>
            <div class="text-right" style="margin-right: 3%;">
                Call Us At 0347 888 888
            </div>
        </div>
        <!--logo and menu-->
        <nav>
            <div class="logo">
                <a href = "index.html"><img src="<?php echo URLROOT ?>/public/images/mdklogowidth.png" width="200" height="70"> </a>
            </div>
            
        <div class="nav-links" id="navLinks">

        <!--font awesome for closing-->
        <!-- <i class="fas fa-times" onclick="hideMenu()"></i> -->

            <div class="nav-align">

           
            <ul>

                <li><a href="#">Home</a></li>
                <li><a href="#about" onclick="return hashNoHistory(this)">About Us</a></li>
                <!-- <li><a href="">Surgeries</a></li> -->
                <li><a href="#fac" onclick="return hashNoHistory(this)">Facilities</a></li>
                <li><a href="#location" onclick="return hashNoHistory(this)">Contact Us</a></li>
                <li class="upload-Pres"><a href="<?php echo URLROOT; ?>/pages/volunteerRegistration">Register as a Volunteer</a></li>
                <!-- <li><a href="#op" onclick="return hashNoHistory(this)">Upload Prescription</a></li> -->



<!--                <li><a href="--><?php //echo URLROOT; ?><!--/users/login">Log In</a></li>-->
            </ul>
            
          </div>
        </div> 

        <!--font awesome for bars-->
        <i class="fas fa-bars" onclick="showMenu()"></i>

    </nav>

</div>
