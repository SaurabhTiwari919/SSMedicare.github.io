<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
header("location: login.php");
exit;
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Our blood others lives </title>
        <link rel="stylesheet" href="style.css">
        <title>Welcome  - <?php echo $_SESSION['uname'];?> </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<script src="script.js"></script>
   
    </head>
    <body>
    <?php require 'partial/dbconnect.php' ?>
        <header> 
            <div class="mh">
            <nav>
                  <a href="#donor"> services</a>
                   <a href="#contact"> About</a>

                
                  <a href="#inventory"> Stock</a>
                   <a href="#contact"> Contact</a>

                </nav>
                <div class="menubtn">
                  <a href="#contact" ><button>Help!</button></a>

                </div>
				
            </div>
			<!-- <h2  class="hdt" style="font-size: 50px;"  aria-setsize="100" color ="yellow">SS MEDICARE </h2> -->
            <ul class="ul">
                <li class="li">S</li>
                <li class="li">S</li>
                <li class="li">M</li>
                <li class="li">E</li>
                <li class="li">D</li>
                <li class="li">I</li>
                <li class="li">C</li>
                <li class="li">A</li>
                <li class="li">R</li>
                <li class="li">E</li>
            </ul>
       <main>
                <section class="left-sec">
                    <h3> We could flourish life once again</h3>
                    <p class="p2"><h1> We are the best manager </h1><br>
						of life & care for your life at 24x7 
                </p>
				<!-- <h2>LOGIN</h2> -->

<button class="newb">  <a class="nav-link" href="/mynewp/logout.php">Log out</a></button>
<!-- onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login -->
<div id="id01" class="module">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img height="80px" width="30px" src="loginavatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input style="color: #000;" class="pss" type="checkbox" checked="checked" name="remember"><b> Remember me</b>
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a class="pss" href="#">password?</a></span>
    </div>
  </form>
</div>
              <!-- <a href="#donor" ><form  action="mynewcss.html" method="get"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Login </button></a></form> -->
                </section>
                <!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: flex;
  flex-direction: column;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.pss{
	color: #000;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: 20%;
  padding: 10px 18px;
  background-color: #ba2015;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}
/* .modal-content animate{
	width: 20%;
	display: flex;
	flex-direction: column;
} */

.container {
	display: table-column;
	/* flex-direction: column; */
  padding: 16px;
}

span.psw {
	display: flex;
	color: #000;
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.module{
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>




<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


        </main>  
        
            
        </header><div class="mainc">
        <p>Since blood  cannot be stored for an indefinite amount of  time, 
           a constant source of blood donation is required. According to the WHO,
        <br>the sustainable approach toward ensuring prompt and effective access<br>
            to the sources of safe blood and blood products is to develop a nationwide
            organized blood transfusion  program  focused  on voluntary  non remunerated <br>
             blood donors (VNRBD). Recruiting voluntary blood donors remains one of the 
            significant challenges for any blood transfusion service. Out of 193  WHO Member 
            States, only  62 countries  (32%) reported receiving more than 99% of their<br>
            blood supply through VNRBD . </p><br>
        

            <p> In general, blood banks  face  multifaceted 
            challenges  in  resource  limited  conditions  like  rural  areas  of Bangladesh.<br>
            Blood storage is a big concern due to the unavailability of continuous electricity 
            supply  in  many  parts  of  Bangladesh  and  other  parts  of  the world. <br>
            Improper storage  can deteriorate the quality of  stored  blood,  leading to  
                  
                  wastage. Besides,  blood from  voluntary donors is challenging to obtain on 
                  short notice because of poor networking, the absence of databases  of  potential <br>
                   donors,  and  transportation.  Professional  donors  often  take  this opportunity
                    to sell blood to earn money. These blood sources can be of poor quality due to<br>
                     blood being frequently sold (often having less than four months intervals)or posing 
            a risk of transmissible infections such as <strong> hepatitis, syphilis, and malaria.</strong></p>
   <p> <em>For more info</em> <a class="mew"  href="https://medlineplus.gov/"target="_blank">click on me </a>
    <br>
    
	This approach would definitely transit the double standard mind and<br>
	 overcome the misconceptions oriented to blood donation. This initiative<br>
	is cause for a change, it’s a non-benefit site created for social causes <br>
	as to enhance the chance to be lived in any casualty or in needs. <br><br></p>

</div>
    
	<header>
		<h2 aria-setsize="30" color ="yellow">SS MEDICARE </h2>
		<nav>
			<ul>
				<li><a href="#donor">Donor Registration</a></li>
				<li><a href="#inventory">Blood Inventory</a></li>
				<li><a href="#request">Blood Request</a></li>
				<li><a href="#history">Donation History</a></li>
				<li><a href="#search">Search Donors</a></li>
			</ul>
		</nav>
	</header>
	<div class="learn"> <strong>LEARN ABOUT BLOOD DONATION </strong> </div>
	<blockquote><div class="donat"><p class="lastc"> Donating the blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn , help in maintaining good health.</p>
	<div id="fact "><img src="donationFact.webp" alt="networkError">
	</div>
</div></blockquote>

	<div class="btype"><strong> TYPES OF DONATION</strong>
	<div class="typeb"> <p class="lastc">Human body contains about five liters of blood, which is made of several cellular and non-cellular components such as Red blood cell, Platelet, and Plasma.

	Each type of component has its unique properties and can be used for different indications. The donated blood is separated into these components by the blood centre and one donated unit can save upto four lives depending on the number of components separated from your blood.</p><div id="liv">
		<img height="500px" width="600px"  src="bdtype.jpg" alt="noImage">
	</div>
	</div>
	</div>
	
	<div class="look"><iframe width="800" height="515" src="https://www.youtube.com/embed/kOISEM6L4xk?si=8htr9pkmAcwabjvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loop="1" ></iframe>
    <p class="look2"> Please! Take out 1 mint to see this video to understand the importance of Blood Donation</p>
    </div>
	<main>
		<section id="donor">
			<h2>Donor Registration</h2>
			<form action="connection.php" method="GET">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
				<label for="bloodgroup">Blood Group:</label>
				<input type="text" id="bloodgroup" placeholder="A/B/AB/O"name="bloodgroup" required>
				<label for="age">Age:</label>
				<input type="number" id="age" name="age" required>
				<label for="gender">Gender:</label><br>
				<input type="radio" id="male" name="gender" value="Male" required><label for="male">Male</label><br>
				
				<input type="radio" id="female" name="gender" value="Female" required><label for="female">Female</label>
				<input type="radio" id="female" name="gender" value="Other" required><label for="other">Other</label>
				<input id="clr"   type="submit" value="Submit">
			</form>
		</section>
		<section id="inventory">
			<h2>Blood Inventory</h2>
			<table>

			<thead>
				<tr>
					<th>Blood Group</th>
					<th>Units Available</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>A+</td>
					<td>8</td>
				</tr>
				<tr>
					<td>B+</td>
					<td>5</td>
				</tr>
				<tr>
					<td>AB+</td>
					<td>3</td>
				</tr>
				<tr>
					<td>O+</td>
					<td>7</td>
				</tr>
				<tr>
					<td>A-</td>
					<td>2</td>
				</tr>
				<tr>
					<td>B-</td>
					<td>1</td>
				</tr>
				<tr>
					<td>AB-</td>
					<td>0</td>
				</tr>
				<tr>
					<td>O-</td>
					<td>2</td>
				</tr>
			</tbody>
		</table>
		</section>
		<section id="request">
			<h2>Blood Request</h2>
			<form action="request.php" method="post">
        <label for="rname" > Request for: </label> <input type="text" id="rname" placeholder="who needs"  name="rname">
				<select id="bloodgroup" name="bloodrequest" required>

					<option value="">Select Blood Group</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>

				<label for="units">Units Required:</label>
				<input type="number" id="units"placeholder="1 Unit = 350ml" name="units" required>
				<label for="date">Required Date:</label>
				<input type="date" id="date" name="req_date" required>
                <label for="phone">phone number:</label>
				<input type="number" id="pn" name="phoneno" required>
                <label for="email" >Email Required:</label>
				<input type="email"placeholder="xyz12@gmail.com" id="un" name="email" required>
                
				<input id="clr" type="submit" value="Submit">
			</form>
		</section>
		<section id="history">
			<h2>Donation History</h2>
			<ul id="donation-history">
			</ul>
		</section>
		<section id="search">
			<h2>Search Donors</h2>
			<form>
				<label for="bloodgroup">Blood Group:</label>
				<input type="text" id="search-bloodgroup" name="bloodgroup" required>
				<input id="clr" type="submit" value="Search">
			</form>
			<ul id="donor-list">
			</ul>
		</section>
	</main>
    <br>
    <br><hr><hr>
    <main class="dn">
        <section class="contact2" style="font-size: 40px;" id="contact">
                                        <br>
            ADDRESS: Amaudha,sherganj
            <br>AKS UNIVERSITY,Satna 485001<BR>

            <br>Email : st296277@gmail.com
           
			<br>Phone: +91-9131540419
        </section>
    </main>
	<footer class="footl">
		<p><h4 style="color: rgb(239, 232, 232); font-style: normal;">&copy; 2023 BLOOD SECURED BY : 👇</h4><br>
       <h2 class="mls"> SS Medicare</h2></p>
	</footer>
	
<footer>
<div class="p1">
<a href="https://instagram.com/saurabh_tiwari.99?igshid=OGQ5ZDk2ZA=="><h3>INSTAGRAM  <img width="50px"height="50px" src="insta.png" alt=""></h3></a>

</div>
<div class="p1">
	<a href="https://linkedin.com/in/saurabh-tiwari-184444291?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><h3>LINKEDIN <img width="50px"height="50px" src="link.jpg" alt=""></h3>
		</a>
	</div>
<div class="p1">
	<a href="https://www.facebook.com/profile.php?id=100056816979110"><h3 class="fb">FACEBOOK <img width="50px"height="50px" src="fb.png" alt=""><h3></a></div>
		
	</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       
	 
</body>
</html>