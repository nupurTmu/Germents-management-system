<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->

       <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"> Worker List</h4>
                        <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <strong> Total Worker ( <?php    $get_id = $_GET['id'];  $select = "SELECT * FROM `tbl_worker` WHERE supervisor_id='$get_id'";
                                            $run = mysqli_query($con,$select);
                                            echo $cont =  mysqli_num_rows($run);?> )</strong>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>S.l</th>
                                            <th> Worker Name</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="" method="post">
                                         <?php
                                           $get_id = $_GET['id'];
                                           $count = 1;
                                            $select = "SELECT * FROM `tbl_worker` WHERE supervisor_id='$get_id'";
                                            $run = mysqli_query($con,$select);
                                            while( $result = mysqli_fetch_array($run)){ ?>
                                            <tr>
                                                <td><?php echo $count++;?></td>
                                                <td><?php echo $result['worker_name'];?></td>
                                                <!-- <td><button href="?id=<?php echo $result['id'];?>">View Production</button></td> -->
                                            </tr>
                                            <?php }  ?> 
                                            </form>
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