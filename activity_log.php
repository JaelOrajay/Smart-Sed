<?php
 session_start();
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#manage">Houses</a>
            </li>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUserModal">
              Add House
            </button>
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


    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addUserModalLabel">Add House</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="add_user.php" method="POST">
              <div class="form-group">
                <label for="houseid">House ID</label>
                <input type="text" class="form-control" id="houseid" name="houseid" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              
              
               <div class="form-group" style="display: none;">
                <label for="houseid">House ID</label>
                <input type="text" class="form-control" id="user_type" name="user_type" value="admin" required>
              </div>
              
              
              <!--<div class="form-group">-->
              <!--  <label for="user_type">User Type</label>-->
              <!--  <select class="form-control" id="user_type" name="user_type" required>-->
              <!--    <option value="">Select user type</option>-->
              <!--    <option value="admin">Admin</option>-->
              <!--    <option value="user">User</option>-->
              <!--  </select>-->
              <!--</div>-->



              <div class="modal-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Edit House</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="edit_user.php" method="POST">
              <input type="hidden" id="editUserId" name="id" value="">
              <div class="form-group">
                <label for="editHouseid">House ID</label>
                <input type="text" class="form-control" id="editHouseid" name="houseid" required>
              </div>
              <div class="form-group">
                <label for="editPassword">Password</label>
                <input type="password" class="form-control" id="editPassword" name="password" required>
              </div>
              <div class="form-group" style="display: none;">
                <label for="editUserType">User Type</label>
                <select class="form-control" id="editUserType" name="user_type" required>
                  <option value="admin">Select user type</option>
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="saveChangesBtn">Save changes</button>
          </div>
        </div>
      </div>
    </div>




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
      <div class=" margin-top-class">
        <table id="example" class="table table-hover table-striped  dt-responsive nowrap" style="width:100%;  ">
          <thead>
            <tr>
              <th style="width:20px;">Name/QRCode</th>
              <th style="width:20px;">Date</th>
              <th style="width:20px;">Time</th>
              <th style="width:20px;">Remarks</th>
              <th style="width:20px;">Actions</th>

            </tr>
          </thead>
          <tbody>
            <?php
            include "conn.php";
            $sql = 'SELECT * FROM logs';
            $result = mysqli_query($conn, $sql);
            $i = 1;
            while ($row = mysqli_fetch_array($result)) {
      if ($_SESSION['alogin'] == 'house1') {
            ?>
              <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['remarks']; ?></td>

                <td>
                  <a href="#" class="delete-icon" data-count="<?php echo $row['count']; ?>" onclick="deleteLogs(<?php echo $row['count']; ?>)"><i class="fas fa-trash"></i></a>



                </td>
              </tr>
            <?php
      }
      $i++;
          
            }
            ?>
          </tbody>
        </table>
      </div>

    </section>




    <!-- invalid keys section -->
    <div class="col-md-12">
      <div class="section-header pb-5">
        <h2>Invalid Key Attempts</h2>
      </div>
    </div>
    <section id="invalid">
      <div class=" margin-top-class">
        <table id="example1" class="table table-hover table-striped  dt-responsive nowrap" style="width:100%;  ">
          <thead>
            <tr>
              <th style="width:80px;">Date</th>
              <th style="width:80px;">Time</th>
              <th style="width:80px;">Image</th>

              <th style="width:80px;">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "conn.php";
            $sql = 'SELECT * FROM invalids';
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
              $id = $row['id'];
               if ($_SESSION['alogin'] == 'house1') {
            ?>
              <tr>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td>
                  <form action="showimg.php" target="_blank" method="POST">
                    Show Intruder # <input type="submit" class="btn btn-info" id="submit" name="id" value="<?php echo $id; ?>"></button>
                  </form>
                </td>

                <td>
                  <a href="#" class="delete-icon" data-id="<?php echo $row['id']; ?>" onclick="deleteInvalid(<?php echo $row['id']; ?>)"><i class="fas fa-trash"></i></a>



                </td>
              </tr>
              </tr>
            <?php
            }
            }
            ?>
          </tbody>
        </table>
      </div>

    </section>


    <div class="col-md-12">
      <div class="section-header pb-5">
        <h2>Available Houses</h2>
      </div>
    </div>

    <section id="manage">
      <div class=" margin-top-class">
        <table id="example" class="table table-hover table-striped  dt-responsive nowrap" style="width:100%;  ">
          <thead>
            <tr>
              <th style="width:20px;">Houseid</th>
            
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
             


                <td>
                  <a href="#" class="delete-icon" data-id="<?php echo $row['id']; ?>" onclick="deleteUser(<?php echo $row['id']; ?>)"><i class="fas fa-trash"></i></a>

                  <a href="#" class="edit-icon" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#editUserModal"><i class="fas fa-edit"></i></a>



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



    <!-- NEW RECORD MODAL -->
    <div class="modal fade" id="new-record-modal" tabindex="-1" role="dialog" aria-labelledby="new-record-modal-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="new-record-modal-label">New Record Added</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="new-record-date"></p>
            <p id="new-record-time"></p>
            <img id="new-record-image" src="">
          </div>
        </div>
      </div>
    </div>

    <script>
      $(document).ready(function() {
        $('#example').DataTable();

        $('#example1').DataTable();
      });


      function deleteUser(id) {
        if (confirm("Are you sure you want to delete this user?")) {
          $.ajax({
            url: "delete_user.php?id=" + id,
            success: function() {
              location.reload();
            }
          });
        }
      }

      function deleteLogs(count) {
        if (confirm("Are you sure you want to delete this Log?")) {
          $.ajax({
            url: "delete_logs.php?count=" + count,
            success: function() {
              location.reload();
            }
          });
        }
      }



      function deleteInvalid(id) {
        if (confirm("Are you sure you want to delete this Invalid Logs?")) {
          $.ajax({
            url: "delete_invalid.php?id=" + id,
            success: function() {
              location.reload();
            }
          });
        }
      }
    </script>

    <script>
      $(document).ready(function() {
        // Get the user ID when the edit icon is clicked
        $('.edit-icon').click(function() {
          var userId = $(this).data('id');

          // Make an AJAX request to fetch the user details
          $.ajax({
            url: 'get_user_details.php',
            type: 'POST',
            data: {
              id: userId
            },
            dataType: 'json',
            success: function(data) {
              // Populate the form fields with the user details
              $('#editUserId').val(data.id);
              $('#editHouseid').val(data.houseid);
              $('#editPassword').val(data.password);
              $('#editUserType').val(data.user_type);

              // Show the edit user modal
              $('#editUserModal').modal('show');
            }
          });
        });

        // Send an AJAX request to update the user's details
        $('#saveChangesBtn').click(function() {
          var userId = $('#editUserId').val();
          var houseid = $('#editHouseid').val();
          var password = $('#editPassword').val();
          var userType = $('#editUserType').val();

          $.ajax({
            url: 'update_user.php',
            type: 'POST',
            data: {
              id: userId,
              houseid: houseid,
              password: password,
              user_type: userType
            },
            success: function(data) {
              // Hide the edit user modal


              $('#editUserModal').modal('hide');

              // Refresh the user list
              fetchUsers();
            }
          });
        });
      });
    </script>

    <script>
      $(document).ready(function() {
        // retrieve previous record ID and timestamp from local storage, or initialize to 0
        var previousRecordID = parseInt(localStorage.getItem("previousRecordID")) || 0;
        var timestamp =localStorage.getItem("timestamp") || 0;

        // function to check for new records
        function checkForNewRecords() {
          // make Ajax request to fetch latest record from invalids table
          $.ajax({
            url: "fetch_latest_record.php",
            type: "GET",
            data: {
              timestamp: timestamp
            }, // pass timestamp as parameter
            dataType: "json",
            success: function(response) {
              console.log(response)
              // check if there's a new record
              if (response.id > previousRecordID) {
                // display modal with details of new record
                $("#new-record-date").text("Date: " + response.date);
                $("#new-record-time").text("Time: " + response.time);
                $("#new-record-image").attr("src", response.image);
                $("#new-record-modal").modal("show");

                // update previous record ID and store in local storage
                previousRecordID = response.id;
                localStorage.setItem("previousRecordID", previousRecordID);
              }

              // update timestamp and store in local storage
              timestamp = response.timestamp;
              localStorage.setItem("timestamp", timestamp);
            }
          });

          // wait for 10 seconds before checking again
          setTimeout(checkForNewRecords, 3000);
        }

        // start checking for new records
        checkForNewRecords();
      });
    </script>

</body>




</html>