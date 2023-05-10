<!-- <a href="<?php echo URLROOT; ?>/users/login"><button>Login</button></a> -->
<!-- <a href="<?php echo URLROOT; ?>/pages/volunteerRegistration"><button>Register as a Volunteer</button></a> -->
<?php require_once APPROOT . '/views/inc/indexhead.php'; ?>
<!-- <?php
        if (isset($_GET['msg'])) {
            echo ('<script>alert("Prescription Successfully Submited")</script>'); // print_r($_GET);
        }
        ?> -->
<section>
    <div class="slide-show-container">
        <div class="wrapper-one">
            <div class="wrapper-text"></div>
        </div>
        <div class="wrapper-two">
            <div class="wrapper-text"></div>
        </div>
        <div class="wrapper-three">
            <div class="wrapper-text"></div>
        </div>
    </div>
</section>

<section class="features">
    <div class="features-inner">
        <div class="features-card" style="border-radius:15px 0px 0px 15px">

            <div style="font-size: 3rem;">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
            </div>

            <h2>Emergency Cases</h2>

            <p>Please feel free to contact our friendly reception staff with any general or
                medical enquiry.<br></p>
        </div>

        <div class="features-card" style="background-color:#2d4990;">

            <div style="font-size: 3rem;">
                <i class="fa fa-medkit " aria-hidden="true"></i>
            </div>

            <h2>Health Checkup</h2>

            <p>Make an appointment with our panel of expert physicians and learn about maintaining a wholesome lifestyle and good health.</p>

        </div>
        <div class="features-card" style="background-color:#21cdc0;border-radius:0px 15px 15px 0px">

            <div style="font-size: 3rem;">
                <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
            <h2>Online Pharmacy</h2>
            <p>Order medicine online with few clicks and recieve medicine to your doorsteps </p>
        </div>

    </div>
</section>

<!-- About Us -->
<br><br>
<br><br>
<section id="about" class="about">
    <div class="about-left">
        <h1>About Us</h1><br><br>
        <h2>Ensuring the Best in the Industry</h2><br>
        <p>MDK Hospitals is the most accredited hospital in the Sri Lankan<br> healthcare sector. Since 2011, MDK Hospitals has revolutionized<br> the healthcare industry through infrastructure development <br>and advancement of products and services, with a view to deliver<br> healthcare that is on par with global medical standards.
        </p>


    </div>

    <div class="about-right">
        <img src="<?php echo URLROOT ?>/public/images/c1.jpg">
    </div>





</section>



<section id="op" class="op">
    <div class="op-right">
        <h1>Online Pharmacy</h1><br><br>
        <h2>Order your medicine to the doorsteps during <br>the pandemic</h2><br>
        <p>MDK Hospitals is committed to provide compassionate care <br> and excellent service that transcends conventional healthcare.<br> Easily order your medicines by uploading your prescriptions<br> to the MDK Hospitals online website and recieve your medicine <br> to your doorstep <br><br><br>

            <a href="<?php echo URLROOT; ?>/pages/upload"><button style="padding:10px 20px 10px 20px;" class="button"><span>Upload Prescription </span></button></a>
        </p>



    </div>

    <div class="op-left">
        <img src="<?php echo URLROOT ?>/public/images/op.jpg">
    </div>

</section>


<!-- facilities -->
<section id="fac" class="fac">
    <h1>Our Facilities</h1>
    <p>MDK Hospitals is committed to provide <br>compassionate care
        and excellent service that transcends conventional healthcare.
    </p><br><br><br>
    <div class="row">
        <div class="fac-col">
            <h3>Surgery</h3>
            <p>MDK Hospitals has become a regional leader in complex fields of surgeries with their cutting edge technology. With the help of the expertise in different sectors, our staff offers a total care approach to our people.
            </p>
        </div>
        <div class="fac-col">
            <h3>Dental</h3>
            <p>With a dedicated team of local specialist dentists, highly trained nurses and access to the most up-to-date technology, MDK hospital is able to provide the best dental service in the area. </p>
        </div>
        <div class="fac-col">
            <h3>Pharmacy</h3>
            <p>MDK Hospitals Pharmacies promote rational use of medicine by providing a well-defined dispensing process with the help of professional, qualified staff in conveniently located, safe and reliable outlets. </p>
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