<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>

                <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-xl-5 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Production ( 
                                        <?php
                                          $get_id = $_GET['id'];
                                            $select = "SELECT SUM(qty) AS sum FROM `tbl_production` WHERE manager_id='$manger_id' AND production_id='$get_id' ";
                                            $run = mysqli_query($con,$select);
                                            while($res = mysqli_fetch_array($run)){ 
                                                echo $res['sum'];
                                                } ?> pcs  )</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"> Total Supervisor(
                                        <?php
                                            $select = "SELECT * FROM `tbl_supervisor` WHERE production_id='$manger_id'";
                                            $run = mysqli_query($con,$select);
                                            echo $count = mysqli_num_rows($run); ?> 
                                        )</div>
                                       <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"> Supervisor List</h4>
                        <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Supervisor List
                            </div>
                            <div class="card-body">
                                <table id="myTable3" class="table table-responsive table-striped table-hover table-bordered border">
                                    <thead>
                                        <tr>
                                            <th>S.l</th>
                                            <th>Supervisor Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                           $get_id = $_GET['id'];
                                           $count = 1;
                                            $select = "SELECT * FROM `tbl_supervisor` WHERE production_id='$get_id'";
                                            $run = mysqli_query($con,$select);
                                            while( $result = mysqli_fetch_array($run)){ ?>
                                            <tr>
                                                <td><?php echo $count++;?></td>
                                                <td><?php echo $result['supervisor_name'];?></td>
                                                <td><a href="prdctn_worker_page.php?id=<?php echo $result['id'];?>">View Workers</a></td>
                                            </tr>
                                            <?php }  ?> 
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      
                        </div>
                    </div>
                </main>
                  <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>