<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SED</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
	<link rel="stylesheet" href="css/sed.css">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
</head>

<body>
	<section id="home" class="">
		<nav class="navbar navbar-expand-lg bg-light fixed-top">
			<div class="container">
				<div class="navbar-br"><i class="bi bi-house-fill"></i>SED</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#services">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="login.php">My Unit</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#register" data-toggle="modal" data-target="#loginModal">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#login" data-toggle="modal" data-target="#loginAccountModal">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="img/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption">
						<h5>A Destination For The New Millennium</h5>
						<p> Rent an interesting location to stay.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption">
						<h5> A More Rewarding Way To Travel</h5>
						<p>There’s a whole world out there. Do more</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="img/3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption">
						<h5> Don't think. Travel </h5>
						<p>Adventure Awaits, Go Find It.</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>



	<!--ABOUT SECTION-->

	<section id="about" class="about section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img">
						<img src="img/about.jpg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<br>
						<h3>We Provide Best Quality <br> Services Ever</h3>
						<br>
						<p>Include more space, better amenities, kitchens, lower cost, a washer & dryer, and much more.
							A vacation rental—whether a home, apartment, condo, boat, yurt, shared space, or other
							property—represents tremendous value, compared to hotels, for flexible, adventurous travel
							consumers.</p>
						<br>
						<p>Guests often find Airbnb is cheaper, has more character, and is homier than hotels. Airbnb
							makes the bulk of its revenue by charging a service fee for each booking. Cons of using this
							service include not getting what you expected, and, for hosts, renting your place to someone
							you haven't had the chance to meet first.</p>
						<br>
						<p>Aside from being accessible and equipped with top-of-the-line amenities, almost all Airbnb in
							the StamCruz have shops, business centers, and stores offering services like laundry and
							delivery at the ground floor. These haunts not only help make life easier, they also save
							you the trouble of going out just to get a couple of things done.</p>
					</div>
				</div>
			</div>
		</div>

	</section>



	<!--SERVICES SECTION-->


	<section id="services" class="services section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Services</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-12 col-lg-4">
						<div class="card text-white text-center bg-dark pb-2">
							<div class="card-body">
								<i class="bi bi-subtract"></i>
								<h3 class="card-title">Best Quality</h3>
								<br>
								<p class="lead">Recognizes that a healthy, attractive natural environment helps to
									retain talented residents and attract employers and that employment opportunities
									are important to the well-being of residents.</p>
							</div>
						</div>
					</div>



					<div class="col-12 col-md-12 col-lg-4">
						<div class="card text-white text-center bg-dark pb-2">
							<div class="card-body">
								<i class="bi bi-slack"></i>
								<h3 class="card-title">Integrity</h3>
								<br>
								<p class="lead">The quality that a system has when it performs its intended function in
									an unimpaired manner, free from unauthorized manipulation of the system, whether
									intentional or accidental.</p>
							</div>
						</div>
					</div>


					<div class="col-12 col-md-12 col-lg-4">
						<div class="card text-white text-center bg-dark pb-2">
							<div class="card-body">
								<i class="bi bi-key-fill"></i>
								<h3 class="card-title">Security</h3>
								<br>
								<p class="lead">A comprehensive workplace security is very important because it will
									reduce liabilities, insurance, compensation and other social security expenses to be
									paid by the company to the stakeholders. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<!--CONTACT SECTION-->

	<?php require_once 'dbConnection.php';


	if (isset($_POST['send'])) {
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$sql = "INSERT INTO contact (fullname, email , message) VALUES (?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fullname, $email, $message]);

		if ($result) {

			echo "<script> Swal.fire({
		title: 'Thank You!',
		icon: 'success',
		text: 'Your submission is recieved and we will contact you soon.',
		confirmButtonText: 'OK'
	  })</script>";
		}
	}



	echo '
<section id="contact" class="contact section-padding">
	<div class="container">
	  <div class="row">
		<div class="section-header text-center pb-5">
		 <h2>Contact Us</h2>
		</div>
	  </div>
	
  
	<div class="row m-0">
		<div class="col-md-12 p-0 pt-4 pb-4">
		  <form method="post" class="p-4.m-auto" align="center">
		  <div class="row">
			<div class="col-md-12">
			  <div class="mb-3">
				<input type="text"  class="form-control" required placeholder="Full Name" id="fullname" name="fullname"> 
			  </div>
			</div>
			<div class="col-md-12">
			  <div class="mb-3">
				<input type="email" class="form-control" required placeholder="Email" id="email" name="email"> 
			  </div>
			</div>
			<div class="col-md-12">
			  <div class="mb-3">
				<textarea rows="7" class="form-control"  required placeholder="Message Here....." id="message" name="message"></textarea>
			  </div>
			</div>
  
			<div class="text-center">
			  <!-- Button HTML (to Trigger Modal) -->
			  <button href="#myModal" class="trigger-btn" data-toggle="modal" id="send" name="send">Send Now</button>
			</div>
			

          </div>     



			
		  </div>
		  </form>
		</div>
	</div>
	</div>
  </section>';




	?>


	<!--Register-->



	<?php require_once 'dbConnection.php';

	if (isset($_POST['register'])) {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$house = $_POST['house'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$qrcode = $password . $house;

		$sql = "INSERT INTO accounts (fullname, username, password ,house, email , phonenumber,qrcode) VALUES (?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fullname, $username, $password, $house, $email, $phonenumber, $qrcode]);

		if ($result) {
			echo '<script>window.location.href="qr.php?qrcode=' . $qrcode . '";</script>';
		}
	}




	echo '<section>
		<br><br>

		<div class="geeks">
			<div class="regimg">
				<img src="img/scann.jpg" alt="Geeks Image" />
				<div class="reg_button">
					<button type="submit" class="button_reg" data-toggle="modal" data-target="#loginModal">Register
						Now</button>
				</div>
			</div>

			<form method="post">
			<div class="regmodal">
				<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					
					<div class="modal-dialog modal-dialog-centered" role="document">
					
						<div class="modal-content">
						
							<div class="modal-header border-bottom-0">
								<button type="button" class="closes" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							
							<div class="modal-body">

								<div class="modal-left">
									<h1 class="modal-ttl">Welcome!</h1>
									<p class="modal-desc">Register first to generate your qr code.</p>
									<div class="input-block">
										<label for="fullname" class="input-label">Fullname</label>
										<input type="fullname" name="fullname" id="fullname" required placeholder="Fullname">
									</div>
									<div class="input-block">
										<label for="username" class="input-label">Username</label>
										<input type="username" name="username" id="username" required placeholder="Username">
									</div>
									<div class="input-block">
										<label for="password" class="input-label">Password</label>
										<input type="password" name="password" id="password" required placeholder="Password">
									</div>
									<div class="input-block">
										<label for="house" class="input-label">House ID</label>
										<input type="house" name="house" id="house" required placeholder="House">
									</div>
									<div class="input-block">
										<label for="email" class="input-label">Email</label>
										<input type="email" name="email" id="email" required placeholder="Email">
									</div>
									<div class="input-block">
										<label for="phonenumber" class="input-label">Phone Number</label>
										<input type="phonenumber" name="phonenumber" id="phonenumber"
										required placeholder="Phone Number">
									</div>
									<div class="modal-register">
									<button class="input-button" name="register" id="register" >Register</button>
									</div>
								</div>
								</form>

	</section>';


	?>

	<section>
		<br><br>

		<div class="geeks">
			<div class="regimg">
				<img src="img/scann.jpg" alt="Geeks Image" />
				<div class="reg_button">
					<button type="submit" class="button_reg" data-toggle="modal" data-target="#loginModal">Register
						Now</button>
				</div>
			</div>


			<div class="regmodal">
				<div class="modal fade" id="loginAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

					<div class="modal-dialog modal-dialog-centered" role="document">

						<div class="modal-content">

							<div class="modal-header border-bottom-0">
								<button type="button" class="closes" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>

							<div class="modal-body">

								<div class="modal-left">
									<h1 class="modal-ttl">Welcome!</h1>
									<p class="modal-desc">Login to see your qr code.</p>

									<div class="input-block">
										<label for="username" class="input-label">Username</label>
										<input type="username" name="username" id="user_name" required placeholder="Username">
									</div>
									<div class="input-block">
										<label for="password" class="input-label">Password</label>
										<input type="password" name="password" id="pass_word" required placeholder="Password">
									</div>

									<div class="modal-register">
										<button class="input-button" name="login" id="login">Login</button>
									</div>
									
										<div class="modal-register">
										<a href="forgot_password.php"><p class="modal-desc">Forgot Password?</p></a>
									</div>
								</div>


	</section>





	<!--footer-->

	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-sed"><br><br>
				SED<br>
				See. Explore. Discover.
			</p>
			<p class="text-email"><i class="bi bi-envelope"></i>
				: sed@gmail.com<br>
				<i class="bi bi-telephone"></i>: 09451672558
				<br>HOME&emsp;ABOUT&emsp;SERVICES&emsp;CONTACT&emsp;REGISTER
			</p>
			<p class="text-copy">
				Copyright <i class="bi bi-c-circle"></i>2022 SED. Designed by: Divinector
			</p><br><br><br>
		</div>
	</footer>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>


	<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
	<!-- Popper JS -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
	<!-- Bootstrap JS -->
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'>
		$(document).ready(function() {
			$('#loginModal').modal('show');
			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			})
		});
	</script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#login').click(function() {
				var username = $('#user_name').val();
				var password = $('#pass_word').val();

				// Send the login form data to the server using AJAX
				$.ajax({
					type: 'POST',
					url: 'accountLogin.php',
					data: {
						login: 1,
						username: username,
						password: password
					},
					success: function(response) {
						if(response == 'Invalid username or password.'){
							alert('Invalid username or password.');
						}else{
							window.location.href = response;
						}
					},
					error: function() {
						alert('An error occurred while processing your request.');
					}
				});
			});
		});
	</script>

</body>

</html>