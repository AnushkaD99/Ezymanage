

<section class= "footer">

<div class="footer-row">
<div class="footer-col">
        <div class="logo">
            <a href = "index.html"><img src="<?php echo URLROOT ?>/public/images/1.png" width=100 height > </a>
        </div>
          <h3>MDK Hospital</i></h3>
    <p>Providing the best <br> health care <br> since 2010</p>
</div>

<div class="footer-col">
           <p><ul>
            <li><a href="#fac" onclick="return hashNoHistory(this)">Facilities</a></li>
            <li><a href="<?php echo URLROOT; ?>/pages/upload">Pharmacy</a></li>
            <li><a href="#location" onclick="return hashNoHistory(this)">Location</a></li>
            <li><a href="#about" onclick="return hashNoHistory(this)">About Us</a></li>
            <li><a href="<?php echo URLROOT; ?>/users/login">Login</a></li>
         </ul> </p>
</div>

<div class="footer-col">
    <h3>Contact Us</h3>
    <br>
    <p>No 149, Sri Ariyavilasa Rd, <br> Horana 12400</p>
    <p> TEL : 0347 888 888 </p>


</div>
</div>

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

</section>