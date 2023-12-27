

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
	<link rel="stylesheet" href="css/activity_log.css">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 
</head>

<body>
	<section id="home" class="">
		<nav class="navbar navbar-expand-lg bg-light fixed-top">
			<div class="container">
				<div class="navbar-br"><i class="bi bi-house-fill"></i>SED</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
							<a href="manage.php">Add User</a>
						</li>	
          
          <li class="nav-item">
							<a class="nav-link" href="#activity">Activity Logs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#invalid">Invalid Key Attempts</a>
						</li>
            <li class="nav-item">
							<a class="nav-link" href="login.php">Log out</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>


        <div class="datetime">
            <div class="time"></div>
            <div class="date"></div>
          </div>

          <script>

const timeElement = document.querySelector(".time");
const dateElement = document.querySelector(".date");

/**
 * @param {Date} date
 */
function formatTime(date) {
  const hours12 = date.getHours() % 12 || 12;
  const minutes = date.getMinutes();
  const isAm = date.getHours() < 12;

  return `${hours12.toString().padStart(2, "0")}:${minutes
    .toString()
    .padStart(2, "0")} ${isAm ? "AM" : "PM"}`;
}

/**
 * @param {Date} date
 */
function formatDate(date) {
  const DAYS = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];
  const MONTHS = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];

  return `${DAYS[date.getDay()]}, ${
    MONTHS[date.getMonth()]
  } ${date.getDate()} ${date.getFullYear()}`;
}

setInterval(() => {
  const now = new Date();

  timeElement.textContent = formatTime(now);
  dateElement.textContent = formatDate(now);
}, 200);

</script>

<!-- activity logs section -->
<div class="col-md-12">
		<div class="section-header pb-5">
			<h2>Activity Logs</h2>
		</div>
</div>

<section id="activity">
  <div class=" margin-top-class" >
                        <table id="example" class="table table-hover table-striped  dt-responsive nowrap" style="width:100%;  ">
                            <thead>
                                <tr>
                                    <th style="width:20px;">Houseid</th>
                                    <th style="width:20px;">Password</th>
                                    <th style="width:20px;">User Type</th>
                                    <th style="width:20px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "conn.php";
                                $sql = 'SELECT * FROM house';
                                $result = mysqli_query($conn, $sql);
                                $i = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['houseid']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['user_type']; ?></td>
                         

                                        <td>
                    <a href="#" class="delete-icon" data-id="<?php echo $row['id']; ?>"><i class="fas fa-trash"></i></a>
                    <a href="#" class="edit-icon" data-id="<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

</section>



<script>
    $(document).ready(function() {
      $('#example').DataTable();

      $('#example1').DataTable();
    });



   
  </script>

</body>




</html>
