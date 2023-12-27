<?php
require_once 'conn.php';
if(isset($_POST['send'])) {

  $email =$_POST['email'];

  $checking = mysqli_query($conn,"SELECT * FROM accounts WHERE email = '$email' ");
  if(mysqli_num_rows($checking) > 0) {
    $row = mysqli_fetch_assoc($checking);
    $security_code = base64_encode($row['security_code']);
    
     $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Responsive HTML Email Template</title>
    
  </head>
  <body bgcolor="#E1E1E1" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
      <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTbl" style="table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;">
        <tr>
          <td valign="top" id="bodyCell">
            <table border="0" cellpadding="0" cellspacing="0" width="500" id="emailBody">
              <tr>
                <td valign="top">
                  <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                      <td valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="500" class="flexibleContainer">
                          <tr>
                            <td valign="top" width="500" class="flexibleContainerCell">
                              <table border="0" cellpadding="30" cellspacing="0" width="100%">
                                <tr>
                                  <td valign="top">

                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-bottom:20px;">
                                      <tr>
                                        
                                      </tr>
                                    </table>

                                    <table border="0" cellpadding="0" cellspacing="0" width="50%" class="emailButton">
                                      <tr>
                                        <td class="buttonContent" style="padding-top:15px;padding-bottom:15px;padding-right:15px;padding-left:15px;">
                                         Please click <a href="http://mycapstone.online/test/reset.php?success=true&email='.$email.'">here</a> to reset your password. <br>
      <br><br>
      Thank you.
                                        </td>
                                      </tr>
                                    </table>

                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
  </body>
</html>';
    $subject = 'Reset Your Password';
    $email   = $_POST['email'];

    
         $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    $mail = mail($email,$subject,$message,$headers);
    if(!$mail) {
        $message = base64_encode(urlencode('Something went wrong.'));
        header('location: forgot_password.php?success=true&message='.$message);
      } else {
        $message = base64_encode(urlencode('A reset password link has been sent to '.$email.' <br> Follow the link to reset you password.'));
        header('location: forgot_password.php?success=true&message='.$message);
    }

  } else {
    $message = base64_encode(urlencode('No record found.'));
    header('location: forgot_password.php?success=false&message='.$message);
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
		 <h2>Forgot Password</h2>
		</div>
	  </div>
	
  
	<div class="row m-0">
		<div class="col-md-12 p-0 pt-4 pb-4">
		  <form method="post" class="p-4.m-auto" align="center" action="forgot_password.php">

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
				<input type="email" class="form-control" required placeholder="Email" id="email" name="email"> 
			  </div>
			</div>

			<div class="text-center">
			  <!-- Button HTML (to Trigger Modal) -->
			  <button class="trigger-btn" name="send" type="submit">Send Password Reset Link</button>
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




</body>

</html>