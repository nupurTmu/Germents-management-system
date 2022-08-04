<?php 
  require_once('header.php');
?>
  <div class="main_content">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
             Worker List
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 py-2">
                        <h5>Total Worker (<?php
                            $sele = "SELECT * FROM `tbl_worker` Where supervisor_id='$supervisor_id'";
                            $run = mysqli_query($con,$sele);
                            echo $chak = mysqli_num_rows($run);
                           ?>)</h5>
                        <hr>
                    <table id="myTable3" class="table table-responsive table-striped table-hover table-bordered border" >
                        <thead>
                           <th style="width: 3%;">Sl</th>
                             <th style="width: 20%;">Worker Name</th>
                             <th style="width: 15%;">Worker ID</th>
                             <th style="width: 15%;">Action</th>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                             $sele = "SELECT * FROM `tbl_worker` Where supervisor_id='$supervisor_id'";
                             $run = mysqli_query($con,$sele);
                             while($resutl =  mysqli_fetch_array($run)){  ?>
                             <tr>
                                    <form action="" method="post"> 
                                    <td><?php echo $count++;?></td>
                                    <td><?php echo  $resutl['worker_name'];?></td>
                                    <td><?php echo  $resutl['id'];?></td>
                                    <input type="hidden" name="worker_id" value="<?php echo  $resutl['id'];?>" > 
                                    <td><a href="Worker_details.php?id=<?php echo  $resutl['id'];?>" class="btn btn-outline-primary">View Details</a></td>
                                    </form> 
                                </tr>
                             <?php } ?>
                          
                        </tbody>
                    </table>
                 </div>
              
                </div>
            </div>
        </div>
           
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 <script>
$(document).ready( function () {
    $('#myTable3').DataTable();
} );
 </script>
<?php 
 require_once('footer.php');
?>
    