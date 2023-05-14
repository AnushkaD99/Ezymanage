<!-- <a href="<?php echo URLROOT; ?>/users/login"><button>Login</button></a> -->
<!-- <a href="<?php echo URLROOT; ?>/pages/volunteerRegistration"><button>Register as a Volunteer</button></a> -->
<?php require_once APPROOT . '/views/inc/indexhead.php'; ?>
<!-- <?php
        if (isset($_GET['msg'])) {
            echo ('<script>alert("Prescription Successfully Submited")</script>'); // print_r($_GET);
        }
        ?> -->
<section class="section1">
    <div class="main-cont">
        <h4>"Welcome to our revolutionary web application, empowering education management. </h4>
        <h4>Experience efficient and effective education administration like never before!" </h4> 
    </div>
</section>

<section class="features">
    <div class="features-inner">
        <div class="features-card" style="border-radius:15px 0px 0px 15px; background-color:#D7E2FF;">

            <div style="font-size: 3rem;">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
            </div>

            <h2>Emergency Cases</h2>

            <p>Please feel free to contact our friendly reception staff with any general enquiry.<br></p>
        </div>

        <div class="features-card" style="background-color:#D7E2FF;">

            <div style="font-size: 3rem;">
                <i class="fa fa-book " aria-hidden="true"></i>
            </div>

            <h2>Volanteer</h2>

            <p>Those who are passionate about teaching and want to make a difference can register their interest for volunteer teaching.</p>

        </div>
        <div class="features-card" style="background-color:#D7E2FF; border-radius:0px 15px 15px 0px">

            <div style="font-size: 3rem;">
                <i class="fa fa-money" aria-hidden="true"></i>
            </div>
            <h2>Donation</h2>
            <p>Empower the next generation with your donation to support school projects.</p>
        </div>

    </div>
</section>

<!-- About Us -->
<br><br>
<br><br>
<section id="about" class="about">
    <div class="about-left">
        <h1>About Us</h1><br><br>
        <p>"At <b>Ezymanage,</b> we believe that education is the cornerstone of progress and development. 
        That's why we're passionate about using the power of technology to improve education management and support teachers and students alike. 
        Our team of dedicated professionals is committed to delivering innovative solutions that streamline processes, enhance collaboration, and foster data-driven decision-making. 
        Join us on our mission to create a brighter future for education!"</p>
    </div>

    <div class="about-right">
        <img style="padding-top:200px" src="<?php echo URLROOT ?>/public/img/logo.png">
    </div>





</section>


<section id="op" class="op">
    <div class="op-left">
        <h1>Volunteering</h1><br><br>
        <h2>Become a Volunteer Teacher</h2><br>
        <p>Are you passionate about teaching and making a difference in the 
        lives of students? Do you want to give back to your community 
        and help build a brighter future for the next generation? If 
        so, we invite you to register your interest for volunteer teaching! By 
        joining our volunteer teaching program, you can share your expertise 
        and inspire students in your local area. Whether you have years of 
        teaching experience or are just starting out, we welcome your enthusiasm
         and dedication to education. Register your interest now and let's work 
         together to create a better tomorrow!
            <br><br><br></p>
    </div>

    <div class="op-right">
        <a href="<?php echo URLROOT; ?>/pages/volunteerRegistration"><button style="padding:10px 20px 10px 20px;" class="button"><span>Register as a Volunteer </span></button></a>
    </div>

</section>


<!-- facilities -->
<section id="fac" class="fac">
    <h1>Our Facilities</h1>
    <p>
    Our facility offers a range of features such as teacher and principal registration, appointment management, pay sheet management, teacher transfer management, ability to donate for school projects, volunteer registration, and issue reporting.
    </p><br><br><br>
    <div class="row">
        <div class="fac-col">
            <h3>Teacher</h3>
            <p>
            "This system empowers teachers to schedule appointments, manage pay sheets, view transfer lists, and donate to school projects, promoting efficient communication and streamlining the education process."    
            </p>
        </div>
        <div class="fac-col">
            <h3>Principal</h3>
            <p>
                "The principal can register the school, manage teacher transfers, and review complaints using the education management system, ensuring efficient school management."
            </p>
        </div>
        <div class="fac-col">
            <h3>Director</h3>
            <p>
            "Directors can manage appointments with teachers, view the appointment list, and accept appointments through the system."
            </p>
        </div>
    </div>


</section>


<!-- Contact -->
<!-- Faculty section css styles applied -->

<section id="location" class="location">
    <div class="center">
        <div class="location-center">

            <h1 style="font-size:50px;">Contact Us</h1><br><br><br>
            <!-- <h2>Order your medicine to the doorsteps during <br>the pandemic</h2><br> -->


            <p style="font-size:20px;"> <i class="fa fa-map-marker" aria-hidden="true"></i> No 149, Sri Ariyavilasa Rd,
                Horana 12400 <br> <i class="fa fa-phone-square"></i>
                0347 888 888 </p>




        </div>
        <br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.4554387451667!2d80.06169371460474!3d6.714141722780812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24b7291210f21%3A0xac1a58f519a84bf2!2sMDK%20Hospital!5e0!3m2!1sen!2slk!4v1634207145593!5m2!1sen!2slk" width="1400px" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>
<br>

<?php
require APPROOT . '/views/inc/landfooter.php';
?>

<!-- JavaScript-->

<script>
    function hashNoHistory(link) {
        var a = document.createElement("a");
        a.href = link.href;
        location.replace(a.href);
        return false;
    }
</script>


</body>

</html>