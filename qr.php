
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
<style>
.modal {
  display: none; /* hide the modal by default */
  position: fixed; /* position the modal */
  z-index: 1; /* set the z-index to make sure it's on top of other elements */
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.4); /* add a semi-transparent black background */
}

.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 500px; /* limit the width of the modal */
  border-radius: 10px;
}
</style>
<head>
  <?php
  include("include/config.php");
  $qrcode = $_GET['qrcode'];
  session_start();
  $_SESSION['qr'] = $qrcode;
  $count =0;
  $user = selectOne('accounts', ['qrcode' => $qrcode]);
  $transactions = selectAll('logs', ['name' => $user['fullname']], 'count');
  foreach($transactions as $transac){
    $qtr = $transac['count'];
    $hids = $transac['houseid'];
    
    $count=$count+1;
    break;
  }

    if($count==0){

      $url = 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=' . $qrcode;
      $img = './img/' . $qrcode . '.jpg';
      file_put_contents($img, file_get_contents($url));
      echo '<div style = "height: 400px;
        background: #fff;
        border-radius: 7px;
        padding: 20px 25px 0;
        transition: height 0.2s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
          <header>
            <h1>QR Code Generator</h1>
            
            <br>
            <a href="./img/' . $qrcode . '.jpg" download="qrcode"><img type ="image"
             src = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=' . $qrcode . '" 
            alt="qrcode" 
             id = "qrcode"> </a>
          </header>
        </div>';
    }
    else{
      $qrm = $qtr.$hids;
      $url = 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=' . $qrm;
      $img = './img/' . $qrm . '.jpg';
      file_put_contents($img, file_get_contents($url));
      echo '<div style = "height: 400px;
        background: #fff;
        border-radius: 7px;
        padding: 20px 25px 0;
        transition: height 0.2s ease;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
          <header>
            <h1>QR Code Generator</h1>
            
            <br>
            <a href="./img/' . $qrm . '.jpg" download="qrcode"><img type ="image"
             src = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=' . $qrm . '" 
            alt="qrcode" 
             id = "qrcode"> </a>
          </header>
        </div>';
    }
  ?>
  <meta charset="utf-8">
  <title>QR Code Generator </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
      <div class="navbar-br"><i class="bi bi-house-fill"></i>SED</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a><i class="bi bi-qr-code"></i>&nbsp;GENERATE YOUR QR CODE &emsp;&emsp;&nbsp;</a>
          </li>
          <li class="nav-cancel" style="margin: 0 20px;">
            <a href="#" style="text-decoration:none" data-toggle="modal" data-target="#transaction_modal">Transactions</a>
          </li>
          
              <li class="nav-cancel" style="margin: 0 20px;">
            <a href="#" style="text-decoration:none" data-toggle="modal" data-target="#add-modal">Book</a>
          </li>
          <li class="nav-cancel">
            <a href="index.php" style="text-decoration:none">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


   <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="add-modal">Book</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="add_kupal.php" method="POST">
              <div class="form-group">
                <label for="House">House</label>
                <input type="text" class="form-control" id="houseid" name="houseid" required>
              </div>
              <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              
              
               <div class="form-group">
                <label for="Date">Date</label>
                <input type="date" class="form-control" id="date" name="date"  required>
              </div>
              
              
                 <div class="form-group">
                <label for="Time">Time</label>
                <input type="time" class="form-control" id="time" name="date" value="time" required>
              </div>
              
                    <div class="form-group"  style="display: none;">
                <label for="Remarks">Remarks</label>
                <input type="text" class="form-control" id="remarks" name="remarks" value="valid key" required>
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




  <div class="regmodal">
    <div class="modal fade" id="transaction_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">

          <div class="modal-header border-bottom-0">
            <h3>Previous Transactions</h3>
            <button type="button" class="closes" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>

          <div class="modal-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">House ID</th>
                  <th scope="col">House</th>
                  
                  <th scope="col">Date</th>
                  <th scope="col">Time</th>
                  <th scope="col">QR</th>
                  <!-- <th scope="col">Remarks</th> -->
                </tr>
              </thead>
              <tbody>
                <?php foreach($transactions as $transac):?>
                  <tr>
                  <th scope="row"><?php echo $transac['count'] ?></th>
                  <td><?php echo $transac['houseid'] ?></td>
                  
                  <td><?php echo $transac['date'] ?></td>
                  <td><?php echo $transac['time'] ?></td>
                  <td><?php 
                  $qrcodetr = $transac['count'].$transac['houseid'];
                  
                  $url ='https://api.qrserver.com/v1/create-qr-code/?size=50x50&data=' . $qrcodetr;
                  $img = './img/' . $qrcodetr . '.jpg';
                  file_put_contents($img, file_get_contents($url));
                  echo '<div style = "height: 0px;
                  background: #fff;
                  border-radius: 1px;
                  padding: 0px 10px 0;
                  transition: height 0.2s ease;
                  box-shadow: 0 0px 0px rgba(0,0,0,0.1);">
                  <header>
                  <a href="./img/' . $qrcodetr . '.jpg" download="qrcode"><img type ="image"
                  src = "https://api.qrserver.com/v1/create-qr-code/?size=50x50&data=' . $qrcodetr . '" 
                       alt="qrcode" 
                   id = "qrcode"> </a>
               </header>
                </div> <br>';
                
                  ?></td>

                  <!-- <td><?php echo $transac['remarks'] ?></td> -->
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



</body>

</html>