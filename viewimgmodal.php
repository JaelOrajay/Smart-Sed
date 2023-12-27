<!-- The Modal -->
<!-- The Modal -->
<div id="myModal<?php echo $row['image'] ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Intruder Image</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <?php

      ?>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="POST">
            <?php 
            $image = $row['image'];
            //echo($image);
            ?>
            <img src="<?php $image ?>" alt="Italian Trulli">
          <br>


        </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- MODAL END -->