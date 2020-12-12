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
								<a href="/login">Sign</a> In or <a href="/register">Create Account</a>
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
  <div class="containerModal">
                  <h1>Login to Nabeelah Boutique</h1>
<center>
      <div class="containerModal">
        <label><i class="fa fa-user"></i><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label><i class="fa fa-lock"></i><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button id="submit" type="submit" name="login_user"><b>Login</b></button>
        <input type="checkbox" checked="checked"> Remember me
      </div>

        <span class="password">Forgot <a href="#">password?</a></span>
  	<p>Not a member yet ?<a href="/register">Join us</a></p>
    </form>
  </div>
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
