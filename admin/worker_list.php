<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->



 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 ">
            <h1 class="mt-4">Worker List</h1>
            <div class="row ">
           
              <table class="table table-hover border ">
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Worker Name </th>
                    <th>Worker Id </th>
                    <th>Action</th>

                    
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $count = 1;
                        $sele = "SELECT * FROM `tbl_worker`";
                        $run = mysqli_query($con,$sele);
                        while($resutl =  mysqli_fetch_array($run)){  ?>
                        <tr>
                            <form action="" method="post"> 
                                <td><?php echo $count++;?></td>
                                <td><?php echo  $resutl['worker_name'];?></td>
                                <td><?php echo  $resutl['worker_id'];?></td>
                                <input type="hidden" name="worker_id" value="<?php echo  $resutl['worker_id'];?>" > 
                                <td><a href="#" class="btn btn-outline-primary">Edit</a> <a  class="btn btn-outline-danger" href="">Delete</a></td>
                            </form> 
                        </tr>
                        <?php } ?>
                </tbody>
              </table>
         </div>
    </div>
</main>



<?php 
  require_once('footer.php');

?>
    