<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4">All Production Report </h4>
                        <div class="row ">
                          <div class="card">
                            <div class="card-body">
                               <div class="col-lg-12">
                                 <div class="row">
                                   <div class="col-lg-6">
                                     <form action="search_all_production.php" method="POST">
                                    <div class="row pb-3">
                                    <div class="col-md-5">
                                         <label for="">Terget date</label>
                                        <input type="date" name="teget_date" class="form-control">
                                     </div>
                                     <div class="col-md-5">
                                     <label for="">Current date</label>
                                        <input type="date" name="current_date" class="form-control">
                                     </div>
                                     <div class="col-lg-2 mt-4">
                                        <button class=" btn btn-success" name="search">Search</button>
                                    </div>
                                    </div>
                              
                                    </form>
                                   </div>
                               
                                 </div>
                         
                               </div>
                            
                               <div class="container_print">
                               <h5 class="text-center">Total Production:( 
                                <?php
                                    $selct_production = "select SUM(qty) AS sum from tbl_production";
                                    $run = mysqli_query($con,$selct_production);
                                    if($run){
                                    while($res = mysqli_fetch_array($run)){ 
                                        echo $res['sum'];
                                        } } 
                                    ?>
                                    Pcs )</h5>
                                <table class="table table-striped " id="datatablesSimple">
                                <thead>
                                   <tr>
                                      <th scope="col">Sl.No</th>
                                      <th scope="col">Worker Name</th>
                                      <th scope="col">Product Name</th>
                                      <th scope="col">Quantity</th>
                                      <th scope="col">Date</th>
                                   </tr>
                                </thead>
                              <tbody>
                             
                              <?php 
                                  $selct_production=" SELECT * FROM `tbl_production` 
                                  INNER JOIN tbl_worker on tbl_production.workere_id = tbl_worker.worker_id
                                  INNER JOIN tbl_supervisor ON tbl_production.supervisor_id = tbl_supervisor.id
                                  INNER JOIN tbl_product ON tbl_production.product_id = tbl_product.product_id"; 

                                   $run = mysqli_query($con,$selct_production);
                                   if($run){
                                      $count ="1";
                                   while($res = mysqli_fetch_array($run)){  ?>
                                     <tr>
                                      <th scope="row"><?php echo $count++; ?></th>
                                      <td><?php  echo $res['worker_name'];?></td>
                                      <td><?php  echo $res['product_name'];?></td>
                                      <td><?php  echo $res['qty'];?> Pcs</td>
                                      <td><?php  echo $res['date'];?></td>
                                   </tr>
                                <?php 
                                  } } 
                                ?>
                          </tbody>
                    </table>  
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success" id="print">Print</button>
                    </div>
                 </div>
                                </div>
                            </div>
                  

            </div>
        </div>
    </main>
                  <!--  -------------- Main content End---------------------------------------->

 <script src="js/jquery.min.js"></script>
      <script src="js/printThis.js"></script>
      <script>
      $('#print').click(function(){
        $('.container_print').printThis();
      })
      </script>           
<?php 
  require_once('footer.php');

?>