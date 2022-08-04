<?php
    require_once('header.php');
    ?>

  <?php
  $get_id= $_GET['tabel_er_id'];
  $delete = "DELETE FROM tbl_nupur WHERE id ='get_id'";
  $run = mysqli_query($con,$delete);
  if($run){
    echo header("location:nupur.php");
  } 
  else{
      echo "not delete";
  }
  
  
  ?>  