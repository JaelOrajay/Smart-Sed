<?php
require_once 'conn.php';
$EMAIL = '';
if(isset($_GET['email'])){
    $EMAIL = $_GET['email'];
}
if(isset($_POST['reset'])) {

  $email =$_POST['email'];
  $password =$_POST['password'];
    $checking = mysqli_query($conn,"SELECT * FROM accounts WHERE email = '$email' ");
    $row = mysqli_fetch_assoc($checking);
    $ID = $row['id'];

	$update_query = mysqli_query($conn, "UPDATE accounts SET password = '$password' WHERE id = '$ID' ");

		if (!$update_query) {
		     $message = base64_encode(urlencode('Something went wrong.'));
            header('location: reset.php?success=false&message='.$message);
        }else{
            $message = base64_encode(urlencode('A new password has been set '));
            header('location: reset.php?success=true&message='.$message);
        }
}
?>

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
	
	<style>
	    body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}
footer {
  margin-top: auto;
}
	</style>
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
							<a class="nav-link" href="index.php">Home</a>
						</li>
	
					</ul>
				</div>
			</div>
		</nav>
	</section>
	
	<section id="contact" class="contact section-padding">
	<div class="container">
	  <div class="row">
		<div class="section-header text-center pb-5">
		 <h2>Reset Password</h2>
		</div>
	  </div>
	
  
	<div class="row m-0">
		<div class="col-md-12 p-0 pt-4 pb-4">
		  <form method="post" class="p-4.m-auto" align="center" action="reset.php">

		  <div class="row">
		 
		    <?php
                if(isset($_GET['success'])) {
                  $message = urldecode(base64_decode($_GET['message']));
                  
                  if($_GET['success'] == "true") {
                    echo '<div class="alert alert-success mb-3" style="width: 50%; margin: 0 auto;" role="alert">'.$message.'</div>';
                  } else {
                    echo '<div class="alert alert-danger mb-3" style="width: 50%; margin: 0 auto;" role="alert">'.$message.'</div>';
                  }
                }
                ?>
			<div class="col-md-12">
			  <div class="mb-3">
				<input type="email" class="form-control" required placeholder="Email" id="email" name="email" readonly value="<?php echo $EMAIL ?>"> 
			  </div>
			</div>
			<div class="col-md-12">
			  <div class="mb-3">
				<input type="password" class="form-control" required placeholder="Password" id="password" name="password"> 
			  </div>
			</div>
			<div class="col-md-12">
			  <div class="mb-3">
				<input type="password" class="form-control" required placeholder="Confirm Password" id="password_confirmation" name="password_confirmation"> <br>
				 <span id="password_error" style="color: red;"></span>
			  </div>
			</div>

			<div class="text-center">
			  <!-- Button HTML (to Trigger Modal) -->
			  <button class="trigger-btn" name="reset" type="submit">Reset Password</button> <br>
			  	<a href="index.php">Login Now</a>
			</div>
			

          </div>     



			
		  </div>
		  </form>
		</div>
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

<script>
  const form = document.querySelector('form');
  const passwordInput = document.querySelector('#password');
  const confirmPasswordInput = document.querySelector('#password_confirmation');
  const passwordError = document.querySelector('#password_error');

  form.addEventListener('submit', (event) => {
    const passwordValue = passwordInput.value;
    const confirmPasswordValue = confirmPasswordInput.value;

    if (passwordValue !== confirmPasswordValue) {
      passwordError.textContent = 'Passwords do not match';
      event.preventDefault();
    } else {
      passwordError.textContent = '';
    }
  });
</script>



</body>

</html>