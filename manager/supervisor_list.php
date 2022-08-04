<?php 
  require_once('header.php');
  require_once('side_bar.php');
?>
  <!--  -------------- Main content Start---------------------------------------->
       <div id="layoutSidenav_content">
             <main>
                <div class="container-fluid px-4">
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"> Supervisor List</h4>
                        <div class="row">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Supervisor List
                            </div>
                            <div class="card-body">
                <?php
              @$supr_id =  $_SESSION['supr'];
                 if(isset($_POST['register'])){
                     $Supervisor_name = $_POST['Supervisor_name'];
                     $suer_phone = $_POST['suer_phone'];
                     $super_pass = $_POST['super_pass'];
                     $super_email = $_POST['super_email'];
                     $manager_id = $_POST['manager_id'];
                     $production_id = $_POST['production_id'];
                     $insert = "UPDATE tbl_supervisor SET supervisor_name='$Supervisor_name',production_id='$production_id',manager_id='$manager_id',suvisor_phone='$suer_phone',email='$super_email',password='$super_pass' WHERE id ='$supr_id'"; 
                      $run = mysqli_query($con,$insert);
                      if($run){
                          echo "<script>alert('Data Updated Success')</script>";
                     
                      }else{
                          echo"data not insert";
                      }


                    }
               ?>
  <?php if(isset($_POST['edit_data'])){
         $super_visor_id = $_POST['supervisor_id'];
         $_SESSION['supr'] = "$super_visor_id";
         $select ="SELECT * FROM tbl_supervisor WHERE id ='$super_visor_id'";
         $run = mysqli_query($con,$select);
         while( $result = mysqli_fetch_assoc($run)){ ?>

     
<section>
      <div class="container">
         <div class="row pb-4">
           <div class="col-lg-1"></div>
           <div class="col-lg-10">
             
               <div class="card"> 
                   <div class="card-header">
                      <h4 class="color text-center py-3">Update Supervisor Information</h4>
                   </div>
                   <div class="card-body">
                            <form action="" method="POST"  class="form">
                                <div class="row">
                                    <div class="col-md-6 py-1">
                                        <label for="">Supervisor Name</label>
                                        <input type="text" name="Supervisor_name" value="<?php echo $result['supervisor_name']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Phone</label>
                                        <input type="text" name="suer_phone" value="<?php echo $result['suvisor_phone']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Password</label>
                                        <input type="text" name="super_pass" value="<?php echo $result['password']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">E-mail</label>
                                        <input type="email" name="super_email" value="<?php echo $result['email']?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Select Manager </label>
                                         <select class="form-select" name="manager_id" aria-label="Default select example">
                                           <option selected>select menu</option>
                                           <?php 
                                                $selet = "SELECT * FROM `tbl_manager`";
                                                $run = mysqli_query($con,$selet);
                                                while($resutl =  mysqli_fetch_array($run)){  ?>
                                                <option value="<?php echo $resutl['id']?>"><?php echo $resutl['manager_name']?></option>
                                            <?php } ?>
                                         </select>
                                    </div>
                                    <div class="col-md-6 py-1">
                                        <label for="">Select production Officer </label>
                                        <select class="form-select" name="production_id"  aria-label="Default select example">
                                           <option selected>select menu</option>
                                           <?php 
                                                $selet = "SELECT * FROM `tbl_prodction_officer`";
                                                $run = mysqli_query($con,$selet);
                                                while($resutl =  mysqli_fetch_array($run)){  ?>
                                                <option value="<?php echo $resutl['id']?>"><?php echo $resutl['name']?></option>
                                            <?php } ?>
                                         </select>
                                    </div>
                                </div>
                                <div class="div pt-3 d-flex justify-content-end">
                                   <input type="submit" name="register" value="UPADATE" class="btn btn-primary">
                                </div>
                            </form>
                      </div>
                  </div>
             </div>
           <div class="col-lg-1">
                   
           </div>
         </div>
      </div>
    </section>
    <?php } }?>

        <table id="myTable3" class="table table-responsive table-striped table-hover table-bordered border">
            <thead>
                <tr>
                    <th>S.l</th>
                    <th>Supervisor Name</th>
                    <th>phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    $count = 1;
                    $select = "SELECT * FROM `tbl_supervisor` WHERE tbl_supervisor.manager_id='$manger_id'";
                    $run = mysqli_query($con,$select);
                    while($result = mysqli_fetch_array($run)){ ?>
                    <tr>
                        <td><?php echo $count++;?></td>
                        
                        <td><?php echo $result['supervisor_name'];?></td>
                        <td><?php echo $result['suvisor_phone'];?></td>
                        <td><?php echo $result['email'];?></td>
                        
                        <td>
                            <form action="" method="POST">
                            <input type="hidden" name="supervisor_id" value="<?php echo $result['id'];?>">
                                <a href="super_visor_produc_dails.php?sup_id=<?php echo $result['id']?>" class=" btn-sm btn btn-primary">Production Details</a>
                            </form>
                            
                        </td>
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