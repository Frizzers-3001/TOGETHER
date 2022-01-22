<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login_PATIENT.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login_PATIENT.php");
}
?>
<!DOCTYPE html>

<html>

<head>

    <title>TOGETHER</title>
	<link rel="stylesheet" href="website.css">
  

</head>

<body>

<header>
  
        <h1>TOGETHER</h1>
        <h4>We will bring a change</h4>
        
</header>

<div class="navbar">
<a href="website.html" >Home</a>

<a href="#" >Cart</a>


<div class="dropdown">
  <button onclick="myFunction1()" class="dropbtn">Support</button>
  <div id="Support" class="dropdown-content">
    <a href="#">Faq's</a>
  </div>
</div>

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Resources</button>
  <div id="Resources" class="dropdown-content">
    <a href="#">Overview</a>
    <a href="#">Do's and Don's</a>
  </div>
</div>

<div class="dropdown">
  <button onclick="myFunction4()" class="dropbtn">Reminder</button>
  <div id="Reminder" class="dropdown-content">
    <a href="#">Medics</a>
    <a href="#">Appointments</a>
  </div>
</div>

<div class="dropdown">
  <button onclick="myFunction5()" class="dropbtn">Account</button>
  <div id="Account" class="dropdown-content">
    <a href="website.html">Logout</a>
  </div>
</div>

<div class="dropdown">
  <button onclick="myFunction2()" class="dropbtn">Book</button>
  <div id="Book" class="dropdown-content">
    <a href="#">Registered Doctor</a>
    <a href="#">Other Doctor</a>
  </div>
</div>

<div class="dropdown">
  <button onclick="myFunction3()" class="dropbtn">Chat</button>
  <div id="Chat" class="dropdown-content">
    <a href="#">Registered Doctor</a>
    <a href="#">Other Doctor</a>
  </div>
</div>
</div>
<div class="content">

		<!-- Creating notification when the
				user logs in -->
		
		<!-- Accessible only to the users that
				have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?>
			
		
					
			<?php endif ?>
		
	</div>
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("Resources").classList.toggle("show");
}
function myFunction1() {
  document.getElementById("Support").classList.toggle("show");
}

function myFunction2() {
  document.getElementById("Book").classList.toggle("show");
}

function myFunction3() {
  document.getElementById("Chat").classList.toggle("show");
}

function myFunction4() {
  document.getElementById("Reminder").classList.toggle("show");
}

function myFunction5() {
  document.getElementById("Account").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    <main>
	<section>
          <h2>Add/Edit Doctors</h2>
          <a href="doctors_list.php"><img src="Doctors.png" height ="250" width="500" alt="Add doctors" ></a> 
        </section>
        <section>
          <h2>Add/Edit Readings</h2>
          <a href="doctors_list.php"><img src="Add.png" height ="250" width="500" alt="records" ></a> 
        </section>

        <section>
          <h2>Get in touch with doctors</h2>
          <img src="doctors_list.php" height ="250" width="500" alt="chat" >    
        </section>

        <section>
          <h2>Video Call </h2>
          
           <img src="doctors_list.php" height ="250" width="500" alt="Video call" >
        </section>

        

        <section>
            <h2>
                Contact Us
            </h2>
            <h3>Simarjeet Kaur Bhatia</h3>
            <a href="https://github.com/simarjeet30">Github</a>
            <a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQEF63n5HIzuQAAAAX5U3qNAS1-GcR_r-xVVF7ilSRQCnJF1edcRSfkYZSXzhouCcslZ8S4JWVY1rrMr6uMeLKp9-3bCLJytbrQPtb7LfwVVFeigIdS2sNuI-grFy8cv5qAFUk8=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fsimarjeet-kaur-5857781b9">LinkedIn</a>
            <a href="https://devfolio.co/@Simarjeet30">Devfolio</a>
        </section>
    </main>

    <footer>
        <a href="#" target="_blank">FAQ</a>
        <a href="#">Contact Us</a>
        <a href="#">Terms of Use</a>
        <a href="#">Privacy Policy</a>
    </footer>
</body>
</html>
