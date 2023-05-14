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
</head>

<body>
    <div class="header"> 
        <!--top bar ( time/contact) -->
        <div class="top-header">
        
            <div class="text-right" style="margin-left: 81.5%;">
                Call Us At 0347 888 888
            </div>
        </div>
        <!--logo and menu-->
        <nav>  
        <div class="logo">  
                <a href = "index.html"><img src="<?php echo URLROOT ?>/public/img/logo.png" width="300px" height="65px"> </a>
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
                    <li class="upload-Pres"><a href="<?php echo URLROOT; ?>/users/login">Login</a></li>
                    <!-- <li><a href="#op" onclick="return hashNoHistory(this)">Upload Prescription</a></li> -->

                    <!-- <li><a href="--><?php //echo URLROOT; ?><!--/users/login">Log In</a></li>-->
                </ul>
            
            </div>
        </div> 

        <!--font awesome for bars-->
        <i class="fas fa-bars" onclick="showMenu()"></i>
        <!-- Login Popup -->

<div class="bg-modal" style="<?php if( $data['passwordError']!= '' ) {echo 'display:flex;';}else {echo "display:none;";} ?> ">
    <div class="modal-content">
       
       <div class="close">+</div>
       <br><br>
       <center>
        <img class="login-image" src="<?php echo URLROOT ?>/public/images/mdklogo.png" alt="login-popup-image" style="width:70px;"> 
        <h3 style="color:#0a0a2e;">MDK Hospitals</h3>
        <br><br>
       </center> 

       <form method="post" action="<?php echo URLROOT; ?>/users/login">
           <p>Username : </p>
           <input name="Runame" type="text"  placeholder=
           "Enter the username">
           <p>Password : </p>
           <input type="password" name="Rpass" placeholder="Enter the password">

           <!-- <a href="<?php echo URLROOT; ?>/users/forgetpass" style="font-size: 14px; padding-left:120px;">Forgot Password?</a> -->
           <br><br>
           <center>
         <div style="margin-top:-20%; font-size: 13px; ">
           <span class="invalidFeedback" style="color: #d11a2a;" >
                <?php echo "<br><br><br>"; ?>
                <?php echo $data['passwordError']; ?>
                </span><br><br><br>
				    <input type="submit" name="submitbutton4" value="Sign In" class="login-btn" style= "margin-top: -18%;" ></div>
            </form>

           <!-- <a href="" class="login-btn">Log In</a> -->
           </center>
       </form>
    </div>
</div>

<script>
  document.getElementById('button').addEventListener('click',function(){
        document.querySelector('.bg-modal').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click',function(){
      document.querySelector('.bg-modal').style.display = 'none';
  });

</script>

    </nav>

</div>
