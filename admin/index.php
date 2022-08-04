<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Admin Dashboard</h1>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Production Manager(
                                    <?php
                                     $select = "SELECT * FROM `tbl_manager` ";
                                     $run = mysqli_query($con,$select);
                                       $count = mysqli_num_rows($run);
                                       echo $count;
                                       ?> )
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"> Total Supervisor(
                                        <?php
                                            $select = "SELECT * FROM `tbl_supervisor`";
                                            $run = mysqli_query($con,$select);
                                            echo $count = mysqli_num_rows($run); ?> 
                                        )</div>
                                       <div class="card-footer d-flex align-items-center justify-content-between">
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Total  Worker(  <?php
                                            $select = "SELECT * FROM `tbl_worker`";
                                            $run = mysqli_query($con,$select);
                                            echo $count = mysqli_num_rows($run); ?> 
                                         )</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
                        </div>
                      

                    </div>
                </main>
              <!--  -------------- Main content End---------------------------------------->
<?php 
  require_once('footer.php');

?>

