<?php
session_start();
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="newhome.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/5f801f0dea.js" crossorigin="anonymous"></script>


    <script>
        // Set the session timeout in milliseconds (30 seconds)
        const sessionTimeout = 1000000000; // 10 seconds
        let timeoutId; 

        // Function to redirect to logout page after session timeout
        const logoutAfterTimeout = () => {
            window.location.href = 'logout.php'; // Change this to the actual logout URL
        };

        // Function to reset the timeout
        const resetTimeout = () => {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(logoutAfterTimeout, sessionTimeout);
        };

        // Add event listeners to reset the timeout on user activity
        document.addEventListener('click', resetTimeout);
        document.addEventListener('mousemove', resetTimeout);
        document.addEventListener('keydown', resetTimeout);

        // Initial setup of the timeout
        timeoutId = setTimeout(logoutAfterTimeout, sessionTimeout);

       
    </script>

<body>



<!-- Navigation -->


<header class="header">
	<a href="#" class ="logo"><i class="fa-solid fa-heart-pulse"></i>medical</a>
	<nav class="navbar">
		<ul>
		 <!--img src="navlogo.jpg"-->
		  <li><a href="#home">Home</a></li>
		  <li><a href="#service">Services</a>
			<!--<div class="submenu1">
				<ul>
					<li><a href="#contact">About Us</a></li>
					<li><a href="#contact">Diagnosis</a></li>
					<li><a href="#about">Contact</a></li>
				</ul>
			</div>
			-->
		  </li>
		  <li><a href="#about">About Us</a></li>
		  <li><a href="#doctor">Doctors</a></li>
		  <li><a href="#contact">Diagnosis</a>
			<!--
			<div class="submenu1">
				<ul>
					<li><a href="#contact">About Us</a></li>
					<li><a href="#contact">Diagnosis </a></li>
					<li><a href="#about">Contact</a></li>
				</ul>
			</div>
		  -->
		  
		  </li>
		  
		  <li><a href="#contact">Rating</a></li>
		  
		  <li><a href="#appointment">Appointment</a></li>
		  <li><a href="edit_profile.php">My Profile</a></li>
		</ul>
	</nav>
	<div id="menu-bar" class="fas fa-bars"></div>
</header>


<section class="home" id ="home">
	<div class="image">
		<img src="home.jpg">
	</div>
	<div class="content">
		<h3>We take care of your healthy life.</h3>
		<p>A person who has good physical health is likely to have bodily functions and processes working at their workplace.</p>
		<a href="#appointment" class="btn">Appointment us<span class="fas fa-chevron-right"></span></a>
	</div>
</section>



<!--start SERVICE SECTION-->

<section class="service" id="service">
	<h1 class="heading">OUR <span>SERVICE</span></h1>
	<div class="box-container">
	
		<div class="box">
			<i class="fa-solid fa-notes-medical"></i>
			<h3>Free Checkups</h3>
			<p>lorem ipuse dolor sit amet conscteture, adipiscing elit...ad, omnis</p>
			<a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
		</div>
		
		<div class="box">
			<i class="fa-solid fa-truck-medical"></i>
			<h3>24/7 ambulance</h3>
			<p>lorem ipuse dolor sit amet conscteture, adipiscing elit...ad, omnis</p>
			<a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
		</div>
		
		<div class="box">
			<i class="fa-solid fa-user-nurse"></i>
			<h3>expert doctors</h3>
			<p>lorem ipuse dolor sit amet conscteture, adipiscing elit...ad, omnis</p>
			<a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
		</div>
		
		<div class="box">
			<i class="fa-solid fa-pills"></i>
			<h3>medicines</h3>
			<p>lorem ipuse dolor sit amet conscteture, adipiscing elit...ad, omnis</p>
			<a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
		</div>
		
		<div class="box">
			<i class="fa-solid fa-bed-pulse"></i>
			<h3>bed facilites</h3>
			<p>lorem ipuse dolor sit amet conscteture, adipiscing elit...ad, omnis</p>
			<a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
		</div>
		<div class="box">
		<i class="fa-sharp fa-solid fa-heart-pulse"></i>
			<h3>total care</h3>
			<p>lorem ipuse dolor sit amet conscteture, adipiscing elit...ad, omnis</p>
			<a href="#" class="btn">learn more<span class="fas fa-chevron-right"></span></a>
		</div>
		
	</div>
</section>

<!--about us SECTION----------->

<section class="about" id="about">

	<h1 class="heading"><span>ABOUT</span> US</h1>
	<div class="row">
		<div class="image">
			<img src="about.jpg">
		</div>
		<div class="content">
			<h3>take the world's best quality treatment</h3>
			<p>lorem ipuse dolor sit amet conscteture, adipiscing elit...ad, omnis</p>
			<a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
		</div>
	</div>

</section>

<!--Doctors SECTION STart----------->

<section class="doctor" id="doctor">
	<h1 class="heading">Our <span>DOCTORS </span></h1>
	
	<div class="box-container">
		<div class="box">
			<img src="d1.jpg">
			<h3>Dr. Shakti</h3>
			<span>MBBS(CMC),DDV(BSMMU)</span>
			<span>Dermatology(skin,allergy,nail,hair)</span>
			<div class="share">
				<a href="#" class="fa-brands fa-facebook"></a>
				<a href="#" class="fa-brands fa-twitter"></a>
				<a href="#" class="fa-brands fa-square-instagram"></a>
				<a href="#" class="fa-brands fa-linkedin"></a>
			</div>
			
		</div>
		
		<div class="box">
			<img src="d2.jpg">
			<h3>Dr. Sheikh</h3>
			<span>MBBS</span>
			<span>Cencer and Tumor Specialist</span>
			<div class="share">
				<a href="#" class="fa-brands fa-facebook"></a>
				<a href="#" class="fa-brands fa-twitter"></a>
				<a href="#" class="fa-brands fa-square-instagram"></a>
				<a href="#" class="fa-brands fa-linkedin"></a>
			</div>
			
		</div>
		
		<div class="box">
			<img src="d3.jpg">
			<h3>Dr. Ruksana</h3>
			<span>FCPS(Surgery)</span>
			<span>Breast Diseases Cancer</span>
			<div class="share">
				<a href="#" class="fa-brands fa-facebook"></a>
				<a href="#" class="fa-brands fa-twitter"></a>
				<a href="#" class="fa-brands fa-square-instagram"></a>
				<a href="#" class="fa-brands fa-linkedin"></a>
			</div>
			
		</div>
		<div class="box">
			<img src="d4.jpg">
			<h3>Dr. Nur</h3>
			<span>Pediatric(Children)</span>
			<span>MS(Pediatric Surgery)</span>
			<div class="share">
				<a href="#" class="fa-brands fa-facebook"></a>
				<a href="#" class="fa-brands fa-twitter"></a>
				<a href="#" class="fa-brands fa-square-instagram"></a>
				<a href="#" class="fa-brands fa-linkedin"></a>
			</div>
			
		</div>
		<div class="box">
			<img src="d5.jpg">
			<h3>Dr. Pervin</h3>
			<span>General,Colorectal</span>
			<span>MRCS</span>
			<div class="share">
				<a href="#" class="fa-brands fa-facebook"></a>
				<a href="#" class="fa-brands fa-twitter"></a>
				<a href="#" class="fa-brands fa-square-instagram"></a>
				<a href="#" class="fa-brands fa-linkedin"></a>
			</div>
			
		</div>
		<div class="box">
			<img src="d6.jpg">
			<h3>Dr. Momen</h3>
			<span>General & Lararoscopic surgeon</span>
			<span>FCPS(Surgery)</span>
			<div class="share">
				<a href="#" class="fa-brands fa-facebook"></a>
				<a href="#" class="fa-brands fa-twitter"></a>
				<a href="#" class="fa-brands fa-square-instagram"></a>
				<a href="#" class="fa-brands fa-linkedin"></a>
			</div>
			
		</div>
	</div>


</section>


<!--Appointment SECTION start-->
<section class="appointment" id="appointment">
	<h1 class="heading"><span>Appointment</span> Now</h1>
	
	<div class="row">
		<div class="image">
			<img src="appointment.jpg">
		</div>
		
		<form action="" method="post">
			
			<h3>Make Appointment</h3>
			<input type="text" name="name" placeholder="Your Name" class="box">
			<input type="number" name="number" placeholder="Your Number" class="box">
			<input type="email" name="email" placeholder="Your Email" class="box">
			<input type="date" name="date" class="box">
			<input type="summit" name="submit" value="Appointment now" class="btn">
		</form>
	</div>



</section>
















<!--footer SECTION start-->

<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>click links</h3>
			<a href="#"><i class="fas fa-chevron-right"></i>home</a>
			<a href="#"><i class="fas fa-chevron-right"></i>about</a>
			<a href="#"><i class="fas fa-chevron-right"></i>service</a>
			<a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
			<a href="#"><i class="fas fa-chevron-right"></i>appointment</a>
			<a href="#"><i class="fas fa-chevron-right"></i>review</a>
			<a href="#"><i class="fas fa-chevron-right"></i>diagnosis</a>
		</div>
		
		<div class="box">
			<h3>our service</h3>
			<a href="#"><i class="fas fa-chevron-right"></i>Dental Care</a>
			<a href="#"><i class="fas fa-chevron-right"></i>Message Therapy</a>
			<a href="#"><i class="fas fa-chevron-right"></i>Cardilogy</a>
			<a href="#"><i class="fas fa-chevron-right"></i>Diagnosis</a>
			<a href="#"><i class="fas fa-chevron-right"></i>Altrasnography</a>
			<a href="#"><i class="fas fa-chevron-right"></i>CT Scan</a>
			<a href="#"><i class="fas fa-chevron-right"></i>X-ray</a>
		</div>
		<div class="box">
			<h3>Appointment Info</h3>
			<a href="#"><i class="fa-solid fa-phone"></i>+10393847444</a>
			<a href="#"><i class="fa-solid fa-phone"></i>+01294869695</a>
			<a href="#"><i class="fa-solid fa-messages"></i>doctor@gmail.com</a>
			<a href="#"><i class="fa-solid fa-messages"></i>appointment@gmail.com</a>
			<a href="#"><i class="fas fa-chevron-right"></i>appointment</a>
			<a href="#"><i class="fa-solid fa-location-dot"></i>gazipur,Dhaka</a>
		</div>
		<div class="box">
			<h3>Follow Us</h3>
			<a href="#">faceappointment</a>
			<a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
			<a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a>
			<a href="#"><i class="fas fa-chevron-right"></i>doctors</a>
			<a href="#"><i class="fa-brands fa-square-instagram"></i>Instagram</a>
			<a href="#"><i class="fa-brands fa-square-instagram"></i>instagram</a>
			<a href="#"><i class="fa-brands fa-pinterest"></i>pinterest</a>
		</div>
	</div>
	
</section>

<div class="color">
	</div>



</body>
</html>
