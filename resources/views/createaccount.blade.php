@extends ('layout')

@section('content')

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
    <title>Login to Nabeelah Boutique</title>
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./index.html" class="site-logo">
							<img src="img/logo-1.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on Nabeelah Boutique ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<div class="up-item">
								<i class="flaticon-profile"></i>
							<a href="/signin">Sign</a> In or <a href="/register">Create Account</a>
							</div>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<span>0</span>
								</div>
								<a href="#">Shopping Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
          <li><a href="/home">Home</a></li>
  					<li><a href="/about">About</a></li>
  				  <li><a href="/shop">Shop</a></li>
  					<li><a href="/contactus">Contact US</a></li>
						</ul>
					</li>


			</div>
		</nav>
	</header>
	<!-- Header section end -->
<body>
  <center>
  <div class="containerModal">
               <h1>Register to Nabeelah Boutique</h1>
							 <br><br>
<center>
               <label for="FirstName">FirstName *: </label>
       <input type="text"  name="FirstName" id="FirstName" placeholder="Enter your FirstName"/>

               <label for="LastName">LastName *: </label>
       <input type="text" name="LastName" id="LastName" placeholder="Enter your LastNames"/>

               <label for="DOB">Date of Birth *: </label> 
       <input type="date" name="DOB" id="DOB"/>

               <label for="Email">Email *: </label>
       <input type="text" name="email" placeholder="Enter your Email eg. mymail@mail.com"/>

               <label for="ContactNo">Telephone: </label>
       <input type="text" name="contactno" id="contactno"/>

               <label for="Address">Address *: </label>
       <input type="text" name="address" id="address" />

               <label for="Username">Username *: </label>
       <input type="text" name="username" id="username" placeholder="Enter your username eg. myusername" />
</center>
                <!---password checkbox validation---->

               <label for="password">Password *: </label>
       <input type="password" id="password" name="password_1"
       pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number
       and one uppercase and lowercase letter, and at least 8 or more characters" required  placeholder="Type a password"/>
               <!----PW validation--->
               <label for="password">Confirm Password *: </label>
       <input type="password"  id="password" name="password_2" placeholder="Confirm password" />
               <!----PW chkbox--->
               <input type="checkbox" onclick="myFunction()">Show Password
       <script>
function myFunction() {
   var x = document.getElementById("password");
   if (x.type === "password") {
       x.type = "text";
   } else {
       x.type = "password";
   }
}
</script>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button id="submit" type="submit" name="reg_user"><b>Register</b></button>
                 <p>Already a member ?<a href="/signin"> Go and log in </a></p>
               <p>Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
   </div>
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
 document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
 document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
 // Validate lowercase letters
 var lowerCaseLetters = /[a-z]/g;
 if(myInput.value.match(lowerCaseLetters)) {
   letter.classList.remove("invalid");
   letter.classList.add("valid");
 } else {
   letter.classList.remove("valid");
   letter.classList.add("invalid");
}

 // Validate capital letters
 var upperCaseLetters = /[A-Z]/g;
 if(myInput.value.match(upperCaseLetters)) {
   capital.classList.remove("invalid");
   capital.classList.add("valid");
 } else {
   capital.classList.remove("valid");
   capital.classList.add("invalid");
 }

 // Validate numbers
 var numbers = /[0-9]/g;
 if(myInput.value.match(numbers)) {
   number.classList.remove("invalid");
   number.classList.add("valid");
 } else {
   number.classList.remove("valid");
   number.classList.add("invalid");
 }

 // Validate length
 if(myInput.value.length >= 8) {
   length.classList.remove("invalid");
   length.classList.add("valid");
 } else {
   length.classList.remove("valid");
   length.classList.add("invalid");
 }
}
</script>

     <div id="message">
 <h3>Password must contain the following:</h3>
 <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
 <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
 <p id="number" class="invalid">A <b>number</b></p>
 <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('register');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
   if (event.target == modal) {
       modal.style.display = "none";
   }
};
</script>
</form>
<!--endofRegform/-->
</center>
</body>


  <!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">

		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>

				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Nabeelah Khan Wahedally</p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	@endsection
