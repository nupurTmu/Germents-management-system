<?php 
  require_once('header.php');
?>
  <div class="main_content">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
             Assign order list
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 py-2">
                    <table id="myTable3" class="table table-responsive table-striped table-hover table-bordered border" >
                        <thead>
                           <th style="width: 3%;">Sl</th>
                             <th style="width: 20%;">Product Name</th>
                             <th style="width: 15%;">Total quantity</th>
                             <th style="width: 15%;">Assign quantity</th>
                             <th style="width: 15%;">Action</th>
                        </thead>
                        <tbody>
                        <?php
                            $count = 1;
                          $sele = "SELECT * FROM `tbl_assign_production`
                                        INNER JOIN tbl_order ON tbl_assign_production.order_id = tbl_order.order_id
                                        INNER JOIN tbl_product ON tbl_order.product_id = tbl_product.product_id
                                        Where supervisor_id='$supervisor_id'";
                                        $run = mysqli_query($con,$sele);
                                        while($resutl =  mysqli_fetch_array($run)){  ?>
                                        <tr>
                                        
                                            <td><?php echo $count++;?></td>
                                            <td><?php echo  $resutl['product_name'];?></td>
                                            <td><?php echo  $resutl['product_quantity'];?></td>
                                            <td><?php echo  $resutl['ass_quantity'];?></td>
                                            <td><?php if($resutl['ass_quantity']=='0'){
                                                echo"<p class='text-success'>Order complete</p>";

                                            }else{
                                                echo " <p class='text-primary'>Procesing</p>";
                                            }?></td>
                                         
                                    
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
    